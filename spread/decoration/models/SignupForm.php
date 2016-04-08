<?php
namespace spread\decoration\models;

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
	public $isMobile;
	public $type;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'name', 'type'], 'filter', 'filter' => 'trim'],
            [['mobile', 'name'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
			[['message', 'info_id', 'template_code', 'position', 'position_name'], 'safe'],
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
			'product_id' => 0,
			'brand_id' => 0,
			'from_type' => $this->isMobile ? 'h5' : 'pc',
			'note' => $note,
			'message' => strip_tags($this->message),
			'info_id' => 0,
			'info_name' => '',
			'type' => $this->type,
		);

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

        return $data;
	}

	protected function isValidate()
	{
        if (!$this->validate()) {
			$this->addError('error', '信息有误');
			return false;
		}

		if (empty($this->type) || !in_array($this->type, ['377', '677'])) {
			$this->addError('error', '必须报名有效的家装活动');
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
		$message = "恭喜您成功报名{$date}举办的{$this->decorationModel['name']}团购会；地址：{$this->decorationModel['address']}(10号线十里河站B口，有摆渡车接送)；全网底价，售后投诉30分钟响应，100%解决！8:30签到， 详询电话：{$serviceMobile}。";
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
