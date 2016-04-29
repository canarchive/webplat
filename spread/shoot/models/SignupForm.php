<?php
namespace spread\shoot\models;

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
	public $shootModel;
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
     * @return shootOwner|null the saved model or null if saving fails
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
			'info_name' => $this->shootModel->name,
			'shootModel' => $this->shootModel,
		);

		$shootOwner = shootOwner::addOwner($data);
		if (!$shootOwner) {
			$this->addError('mobile', '报名失败，请您重新报名');
			return false;
		}

		$conversionInfo = $conversionModel->successLog($data);
		$this->shootModel->updateCounters(['signup_number' => 1]);

		$shootOwner->owner->updateCounters(['signup_num' => 1]);
		$serviceModel = isset($shootOwner->owner->customService) ? $shootOwner->owner->customService : CustomService::findOne($shootOwner->owner->service_id);
		if (empty($serviceModel->status)) {
		    $serviceModel = CustomService::getServiceInfo();
		}
		$serviceModel->distributed_at = \Yii::$app->params['currentTime'];
		$serviceModel->update(false);
		$serviceModel->updateCounters(['serviced_times' => 1]);

		$this->sendSms($data, $shootOwner->owner->userInfo, $serviceModel->mobile);
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

		$this->shootModel = shoot::findOne(['id' => $this->info_id]);
		if (empty($this->shootModel)) {
			$this->addError('error', '团购会信息有误');
			return false;
		}

		$noCheckshootOver = isset(\Yii::$app->params['noCheckshootOver']) ? \Yii::$app->params['noCheckshootOver'] : false;
		if (!$noCheckshootOver && $this->shootModel['end_at'] < time()) {
			$this->addError('error', '对不起，本次活动报名已截止，请关注其他活动。');
			return false;
		}

		$infoExist = shootOwner::findOne(['shoot_id' => $this->info_id, 'mobile' => $this->mobile]);
		$noCheckshootSignined = isset(\Yii::$app->params['noCheckshootSignined']) ? \Yii::$app->params['noCheckshootSignined'] : false;
		if (!$noCheckshootSignined && !empty($infoExist)) {
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

		$date = date('Y年m月d日', $this->shootModel['start_at']);
		$message = "恭喜您成功报名{$date}举办的{$this->shootModel['name']}团购会；地址：{$this->shootModel['address']}(10号线十里河站B口，有摆渡车接送)；全网底价，售后投诉30分钟响应，100%解决！8:30签到， 详询电话：{$serviceMobile}。";
		//$message = $userInfo['is_new'] ? $this->shootModel['sms_new'] : $this->shootModel['sms'];
        $content .= " $message";

		$smser = new Smser();
        $smser->send($mobile, $content, 'shoot_signup');
        
        return true;
    }

    protected function sendSmsService($data, $employee)
    {
        $mobile = $employee['mobile'];
        $content = "业主报名：{$data['name']}报名参加{$this->shootModel['name']}，电话：{$data['mobile']}，请立即回访";

		$smser = new Smser();
        $smser->send($mobile, $content, 'shoot_service');
        
        return true;
    }
}
