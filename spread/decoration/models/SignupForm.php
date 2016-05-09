<?php
namespace spread\decoration\models;

use Yii;
use yii\base\Model;
use common\components\sms\Smser;
use spread\groupon\models\CustomService;

/**
 * Signup form
 */
class SignupForm extends Model
{
	public $mobile;
	public $name;
	public $info_id;
	public $message;
	public $template_code;
	public $position;
	public $position_name;
	public $product_id;
	public $brand_id;
	public $isMobile;
	public $lottery_id;
	public $bonus_id;
	public $gift_bag_id;
	public $decorationModel;
	public $submitType = '';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'name'], 'filter', 'filter' => 'trim'],
            [['mobile'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
			[['lottery_id', 'bonus_id', 'gift_bag_id', 'message', 'info_id', 'template_code', 'position', 'position_name'], 'safe'],
        ];
    }

    /**
     * Signs owner up.
     *
     * @return DecorationOwner|null the saved model or null if saving fails
     */
    public function signup()
    {
		$isValidate = $this->isValidate();
		if (!$isValidate) {
			return $isValidate;
		}

		$conversionModel = new \spread\models\Conversion();
		$positionInfos = $conversionModel->getPositionInfos();
		$positionStr = isset($positionInfos[$this->position]) ? $positionInfos[$this->position] : $this->position;
		$note = $positionStr . '#' . strip_tags($this->position_name);
		$data = array(
			'mobile' => $this->mobile,
			'name' => $this->name,
			'template_code' => $this->template_code,
			'position' => strip_tags($this->position),
			'product_id' => 0,
			'brand_id' => 0,
			'bonus_id' => $this->bonus_id,
			'gift_bag_id' => $this->gift_bag_id,
			'from_type' => $this->isMobile ? 'h5' : 'pc',
			'note' => $note,
			'message' => strip_tags($this->message),

			'info_id' => $this->info_id,
			'info_name' => $this->decorationModel->name,
			'type' => 677,//$this->decorationModel->type,
			'decorationModel' => $this->decorationModel,

		);

		$infoExist = DecorationOwner::findOne(['decoration_id' => $this->info_id, 'mobile' => $this->mobile]);
		if ($infoExist && (!empty($this->lottery_id) || !empty($this->bonus_id) || !empty($this->gift_bag_id))) {
			return $this->getPresent($data);
		}

		$noCheckDecorationSignined = isset(\Yii::$app->params['noCheckDecorationSignined']) ? \Yii::$app->params['noCheckDecorationSignined'] : false;
		if (!$noCheckDecorationSignined && !empty($infoExist)) {
			$this->addError('error', '这个手机号已经报名了本场家装活动');
			return false;
		}

		$decorationOwner = DecorationOwner::addOwner($data);
		if (!$decorationOwner) {
			$this->addError('mobile', '报名失败，请您重新报名');
			return false;
		}

		$conversionInfo = $conversionModel->successLog($data);
		$this->decorationModel->updateCounters(['signup_number' => 1]);

		$decorationOwner->owner->updateCounters(['signup_num' => 1]);
		$serviceModel = isset($decorationOwner->owner->customService) ? $decorationOwner->owner->customService : CustomService::findOne($decorationOwner->owner->service_id);
		if (empty($serviceModel->status)) {
		    $serviceModel = CustomService::getServiceInfo();
		}
		$serviceModel->distributed_at = \Yii::$app->params['currentTime'];
		$serviceModel->update(false);
		$serviceModel->updateCounters(['serviced_times' => 1]);

		$this->sendSms($data, $decorationOwner->owner->userInfo, $serviceModel->mobile);
		$this->sendSmsService($data, $serviceModel);

		$data['service_code'] = $serviceModel->code;

		if (!empty($this->lottery_id) || !empty($this->bonus_id) || !empty($this->gift_bag_id)) {
			return $this->getPresent($data);
		}

        return $data;
	}

	protected function getPresent($data)
	{
		if (!empty($this->lottery_id)) {
			$model = new Lottery();
			return $model->getPresent($data);
		} elseif (!empty($this->bonus_id)) {
			$model = new Bonus();
			return $model->getPresent($data);
		} else if (!empty($this->gift_bag_id)) {
			$model = new GiftBag();
			return $model->getPresent($data);
		}

		$this->addError('error', '领取奖品失败');
		return false;
		print_r($data);
		print_r($this);
		exit();
	}

	protected function isValidate()
	{
        if (!$this->validate()) {
			$this->addError('error', '信息有误');
			return false;
		}

		if (empty($this->info_id)) {
			$this->addError('error', '必须报名指定的家装活动');
			return false;
		}

		$this->decorationModel = Decoration::findOne(['id' => $this->info_id]);
		if (empty($this->decorationModel)) {
			$this->addError('error', '家装活动信息有误');
			return false;
		}

		$noCheckDecorationOver = isset(\Yii::$app->params['noCheckDecorationOver']) ? \Yii::$app->params['noCheckDecorationOver'] : false;
		if (!$noCheckDecorationOver && $this->decorationModel['end_at'] < time()) {
			$this->addError('error', '对不起，本次活动报名已截止，请关注其他活动。');
			return false;
		}

		return true;
	}

    protected function sendSms($data, $userInfo, $serviceMobile)
    {
        $mobile = $data['mobile'];
        $content = '';
        if (!empty($data['password'])) {
            //$content = "尊敬的业主您好！您已经成功注册为认证业主，您的用户名是：{$mobile},密码：{$data['password']}";
        }

		$date = date('Y年m月d日', $this->decorationModel['start_at']);
		$message = "恭喜您成功报名{$date}举办的{$this->decorationModel['name']}家装活动；地址：{$this->decorationModel['address']}(10号线十里河站B口，有摆渡车接送)；全网底价，售后投诉30分钟响应，100%解决！8:30签到， 详询电话：{$serviceMobile}。";
		//$message = $userInfo['is_new'] ? $this->decorationModel['sms_new'] : $this->decorationModel['sms'];
        $content .= " $message";

		$smser = new Smser();
        $smser->send($mobile, $content, 'decoration_signup');
        
        return true;
    }

    protected function sendSmsService($data, $employee)
    {
        $mobile = $employee['mobile'];
        $content = "业主报名：{$data['name']}报名参加{$this->decorationModel['name']}，电话：{$data['mobile']}，请立即回访";

		$smser = new Smser();
        $smser->send($mobile, $content, 'decoration_service');
        
        return true;
    }
}
