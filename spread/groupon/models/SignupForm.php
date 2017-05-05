<?php
namespace spread\groupon\models;

use Yii;
use yii\base\Model;
use common\components\sms\Smser;

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
	public $grouponModel;
	public $isMobile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'name'], 'filter', 'filter' => 'trim'],
            [['mobile'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
			[['name', 'message', 'info_id', 'template_code', 'position', 'position_name', 'product_id', 'brand_id'], 'safe'],
        ];
    }

    /**
     * Signs owner up.
     *
     * @return GrouponOwner|null the saved model or null if saving fails
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
			'product_id' => strpos($this->position, 'product') !== false ? intval($this->product_id) : 0,
			'brand_id' => $this->position == 'brand' ? intval($this->brand_id) : 0,
			'from_type' => $this->isMobile ? 'h5' : 'pc',
			'note' => $note,
			'message' => strip_tags($this->message),
			'info_id' => $this->info_id,
			'info_name' => $this->grouponModel->name,
			'grouponModel' => $this->grouponModel,
		);

		$grouponOwner = GrouponOwner::addOwner($data);
		if (!$grouponOwner) {
			$this->addError('mobile', '报名失败，请您重新报名');
			return false;
		}

		$conversionInfo = $conversionModel->successLog($data);
		$this->grouponModel->updateCounters(['signup_number' => 1]);

		$grouponOwner->owner->updateCounters(['signup_num' => 1]);
		$serviceModel = isset($grouponOwner->owner->customService) ? $grouponOwner->owner->customService : CustomService::findOne($grouponOwner->owner->service_id);
		if (empty($serviceModel->status)) {
		    $serviceModel = CustomService::getServiceInfo();
		}
		$serviceModel->distributed_at = \Yii::$app->params['currentTime'];
		$serviceModel->update(false);
		$serviceModel->updateCounters(['serviced_times' => 1]);

		$this->sendSms($data, $grouponOwner->owner->userInfo, $serviceModel->mobile);
		$this->sendSmsService($data, $serviceModel);

		$data['service_code'] = $serviceModel->code;

        return $data;
	}

	protected function isValidate()
	{
        if (!$this->validate()) {
			$this->addError('error', '信息有误');
			return false;
		}

		if (empty($this->info_id)) {
			$this->addError('error', '必须报名指定的团购会');
			return false;
		}

		$this->grouponModel = Groupon::findOne(['id' => $this->info_id]);
		if (empty($this->grouponModel)) {
			$this->addError('error', '团购会信息有误');
			return false;
		}

		$noCheckGrouponOver = isset(\Yii::$app->params['noCheckGrouponOver']) ? \Yii::$app->params['noCheckGrouponOver'] : false;
		if (!$noCheckGrouponOver && $this->grouponModel['end_at'] < time()) {
			$this->addError('error', '对不起，本次活动报名已截止，请关注其他活动。');
			return false;
		}

		$infoExist = GrouponOwner::findOne(['groupon_id' => $this->info_id, 'mobile' => $this->mobile]);
		$noCheckGrouponSignined = isset(\Yii::$app->params['noCheckGrouponSignined']) ? \Yii::$app->params['noCheckGrouponSignined'] : false;
		if (!$noCheckGrouponSignined && !empty($infoExist)) {
			$this->addError('error', '这个手机号已经报名了本场团购会');
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

		$date = date('Y年m月d日', $this->grouponModel['start_at']);
		$message = "恭喜您成功报名{$date}举办的{$this->grouponModel['name']}团购会；地址：{$this->grouponModel['address']}(10号线十里河站B口，有摆渡车接送)；全网底价，售后投诉30分钟响应，100%解决！8:30签到， 详询电话：{$serviceMobile}。";
		//$message = $userInfo['is_new'] ? $this->grouponModel['sms_new'] : $this->grouponModel['sms'];
        $content .= " $message";

		$smser = new Smser();
        $smser->send($mobile, $content, 'groupon_signup');
        
        return true;
    }

    protected function sendSmsService($data, $employee)
    {
        $mobile = $employee['mobile'];
        $content = "业主报名：{$data['name']}报名参加{$this->grouponModel['name']}，电话：{$data['mobile']}，请立即回访";

		$smser = new Smser();
        $smser->send($mobile, $content, 'groupon_service');
        
        return true;
    }
}
