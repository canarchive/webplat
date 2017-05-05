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
<<<<<<< HEAD
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
=======
	public $message;
	public $position;
	public $position_name;
	public $city_input;
	public $area_input;
	public $form_type;
	public $isMobile;
	public $decorationOwnerModel;
	public $quoteInfo = [];
	public $existOwner;
>>>>>>> web-house

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'name'], 'filter', 'filter' => 'trim'],
            [['mobile'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
<<<<<<< HEAD
			[['lottery_id', 'bonus_id', 'gift_bag_id', 'message', 'info_id', 'template_code', 'position', 'position_name'], 'safe'],
=======
			//[['city_input', 'area_input'], 'default', 'value' => ''],
			[['city_input', 'area_input', 'form_type', 'message', 'position', 'position_name'], 'safe'],
>>>>>>> web-house
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
<<<<<<< HEAD
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
		//$infoExist = DecorationOwner::findOne(['mobile' => $this->mobile]);
		if ($infoExist && (!empty($this->lottery_id) || !empty($this->bonus_id) || !empty($this->gift_bag_id))) {
			return $this->getPresent($data);
		}

		$noCheckDecorationSignined = isset(\Yii::$app->params['noCheckDecorationSignined']) ? \Yii::$app->params['noCheckDecorationSignined'] : false;
		if (!$noCheckDecorationSignined && !empty($infoExist)) {
			$this->addError('error', '这个手机号已经报名了本场家装活动');
			return false;
=======
		//$positionInfos = $conversionModel->getPositionInfos();
		//$positionStr = isset($positionInfos[$this->position]) ? $positionInfos[$this->position] : $this->position;
		//$note = $positionStr . '#' . strip_tags($this->position_name);
		$note = strip_tags($this->position_name);
		$data = [
			'mobile' => $this->mobile,
			'name' => $this->name,
			'from_type' => $this->isMobile ? 'h5' : 'pc',
			'city_input' => empty(strip_tags($this->city_input)) ? '' : strip_tags($this->city_input),
			'form_type' => empty(strip_tags($this->form_type)) ? '' : strip_tags($this->form_type),
			'area_input' => empty(strip_tags($this->area_input)) ? 0 : strip_tags($this->area_input),
			'position' => strip_tags($this->position),
			'note' => $note,
			'message' => strip_tags($this->message),
		];

		$infoExist = DecorationOwner::findOne(['mobile' => $this->mobile]);
		if ($infoExist) {
			$infoExist->signup_at = Yii::$app->params['currentTime'];
			$infoExist->signup_num = $infoExist->signup_num + 1;
			$infoExist->update(false);
		    $this->addError('error', '您的手机号已报名成功');
		    $this->existOwner = true;
		    return false;
>>>>>>> web-house
		}

		$decorationOwner = DecorationOwner::addOwner($data);
		if (!$decorationOwner) {
			$this->addError('mobile', '报名失败，请您重新报名');
			return false;
		}

		$conversionInfo = $conversionModel->successLog($data);
<<<<<<< HEAD
		$this->decorationModel->updateCounters(['signup_number' => 1]);
		if (!empty($conversionInfo['channel']) || !empty($conversionInfo['keyword'])) {
			$decorationOwner->signup_channel = $conversionInfo['channel'];
			$decorationOwner->keyword = $conversionInfo['keyword'];
			$decorationOwner->update(false);
		}

		$decorationOwner->owner->updateCounters(['signup_num' => 1]);
		$serviceModel = isset($decorationOwner->owner->customService) ? $decorationOwner->owner->customService : CustomService::findOne($decorationOwner->owner->service_id);
		if (empty($serviceModel->status)) {
		    $serviceModel = CustomService::getServiceInfo();
		}
		$serviceModel->distributed_at = \Yii::$app->params['currentTime'];
		$serviceModel->update(false);
		$serviceModel->updateCounters(['serviced_times' => 1]);

		$this->sendSmsService($data, $serviceModel);

		$data['service_code'] = $serviceModel->code;

		if (!empty($this->lottery_id) || !empty($this->bonus_id) || !empty($this->gift_bag_id)) {
			return $this->getPresent($data);
		}
		$this->sendSms($data, $decorationOwner->owner->userInfo, $serviceModel->mobile);

		return ['status' => 200, 'message' => 'OK'];

        //return $data;
	}

	/**
	 * 获取礼品，包括抽奖、红包、装修礼包
	 * 
	 */
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
=======
		if ($this->area_input > 20 && $this->area_input < 500) {
			$this->quoteInfo = $this->_getQuoteInfo($this->area_input);
		}

		$serviceModel = $decorationOwner->dealService($data);
		$decorationOwner->updateAfterInsert($conversionInfo);
		//$this->sendSmsService($data, $serviceModel);
		$data['service_code'] = $serviceModel->code;

		$this->sendSms($data, $serviceModel->mobile);
		return ['status' => 200, 'message' => 'OK', 'quoteInfo' => $this->quoteInfo];
>>>>>>> web-house
	}

	protected function isValidate()
	{
        if (!$this->validate()) {
			$this->addError('error', '信息有误');
			return false;
		}

<<<<<<< HEAD
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

		//$date = date('Y年m月d日', $this->decorationModel['start_at']);
		//$message = $userInfo['is_new'] ? $this->decorationModel['sms_new'] : $this->decorationModel['sms'];
		$message = '您已预约成功，我们的装修顾问会在15分钟内联系您！【一起装修网】';
        $content .= " $message";

		$smser = new Smser('company');
        $smser->send($mobile, $content, 'decoration_signup');
=======
		return true;
	}

    protected function sendSms($data)
    {
        $mobile = $data['mobile'];

		$siteName = Yii::$app->params['siteNameBase'];
		$hotline = Yii::$app->params['siteHotline'];
		$message = "您已成功预约，装修顾问会在15分钟内回访了解您的具体装修需求，请保持您的电话畅通，详情咨询{$hotline}【{$siteName}】";

		$smser = new Smser('company');
        $smser->send($mobile, $message, 'decoration_signup');
>>>>>>> web-house
        
        return true;
    }

    protected function sendSmsService($data, $employee)
    {
        $mobile = $employee['mobile'];
        $content = "业主家装报名：{$data['name']}报名参加{$this->decorationModel['name']}，电话：{$data['mobile']}，请立即回访";

		$smser = new Smser('company');
        $smser->send($mobile, $content, 'decoration_service');
        
        return true;
    }
<<<<<<< HEAD
=======

	public function _getQuoteInfo($area)
	{
		$quote = new Quote(); 
		$info = $quote->getResult($area);
		return $info;
	}
>>>>>>> web-house
}
