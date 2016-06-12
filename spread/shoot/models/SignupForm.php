<?php
namespace spread\shoot\models;

use Yii;
use yii\base\Model;
use common\components\sms\Smser;

use spread\models\CustomService;

/**
 * Signup form
 */
class SignupForm extends Model
{
	public $mobile;
	public $name;
	public $info_id;
	public $message;
	public $position;
	public $position_name;
	public $activityModel;
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
			[['name', 'message', 'info_id', 'position', 'position_name'], 'safe'],
        ];
    }

    /**
     * 客户报名操作.
     *
     * @return mixed
     */
    public function signup()
    {
		$isValidate = $this->isValidate();
		if (!$isValidate) {
			return $isValidate;
		}

		$data = array(
			'mobile' => $this->mobile,
			'name' => $this->name,
			'position' => strip_tags($this->position),
			'from_type' => $this->isMobile ? 'h5' : 'pc',
			'message' => strip_tags($this->message),
			'info_id' => $this->info_id,
			'info_name' => $this->activityModel->name,
			'activityModel' => $this->activityModel,
		);

		$activityUser = ActivityUser::addUser($data);
		if (!$activityUser) {
			$this->addError('mobile', '报名失败，请您重新报名');
			return false;
		}

		$conversionModel = new \spread\models\Conversion();
		$conversionInfo = $conversionModel->successLog($data);
		$this->activityModel->updateCounters(['signup_number' => 1]);

		$activityUser->user->updateCounters(['signup_num' => 1]);
		$serviceModel = isset($activityUser->user->customService) ? $activityUser->user->customService : CustomService::findOne($activityUser->user->service_id);
		if (empty($serviceModel->status)) {
		    $serviceModel = CustomService::getServiceInfo();
		}
		$serviceModel->distributed_at = \Yii::$app->params['currentTime'];
		$serviceModel->update(false);
		$serviceModel->updateCounters(['serviced_times' => 1]);

		$this->sendSms($data, $activityUser->user->userInfo, $serviceModel->mobile);
		$this->sendSmsService($data, $serviceModel);

		$data['service_code'] = $serviceModel->code;

        return $data;
	}

	/**
	 * 验证用户提交的信息是否有效
	 */
	protected function isValidate()
	{
		// 基于rules的基本验证
        if (!$this->validate()) {
			$this->addError('error', '信息有误');
			return false;
		}

		// 验证用户参与的活动的有效性
		if (empty($this->info_id)) {
			$this->addError('error', '必须报名指定的活动');
			return false;
		}

		$this->activityModel = Activity::findOne(['id' => $this->info_id]);
		if (empty($this->activityModel)) {
			$this->addError('error', '活动信息有误');
			return false;
		}

		$noCheckOver = isset(\Yii::$app->params['noCheckOver']) ? \Yii::$app->params['noCheckOver'] : false;
		if (!$noCheckOver && $this->activityModel['end_at'] < time()) {
			$this->addError('error', '对不起，本次活动报名已截止，请关注其他活动。');
			return false;
		}

		$infoExist = ActivityUser::findOne(['info_id' => $this->info_id, 'mobile' => $this->mobile]);
		$noCheckSignined = isset(\Yii::$app->params['noCheckSignined']) ? \Yii::$app->params['noCheckSignined'] : false;
		if (!$noCheckSignined && !empty($infoExist)) {
			$this->addError('error', '这个手机号已经报名了本场活动');
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

		$date = date('Y年m月d日', $this->activityModel['start_at']);
		$message = "恭喜您成功报名， 详询电话：{$serviceMobile}。";
        $content .= " $message";

		$smser = new Smser();
        $smser->send($mobile, $content, 'shoot_signup');
        
        return true;
    }

    protected function sendSmsService($data, $employee)
    {
        $mobile = $employee['mobile'];
        $content = "业主报名：{$data['name']}报名参加{$this->activityModel['name']}，电话：{$data['mobile']}，请立即回访";

		$smser = new Smser();
        $smser->send($mobile, $content, 'shoot_service');
        
        return true;
    }
}
