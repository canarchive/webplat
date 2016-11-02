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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mobile', 'name'], 'filter', 'filter' => 'trim'],
            [['mobile'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
			//[['city_input', 'area_input'], 'default', 'value' => ''],
			[['city_input', 'area_input', 'form_type', 'message', 'position', 'position_name'], 'safe'],
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
		}

		$decorationOwner = DecorationOwner::addOwner($data);
		if (!$decorationOwner) {
			$this->addError('mobile', '报名失败，请您重新报名');
			return false;
		}

		$conversionInfo = $conversionModel->successLog($data);
		if ($this->area_input > 20 && $this->area_input < 500) {
			$this->quoteInfo = $this->_getQuoteInfo($this->area_input);
		}

		$serviceModel = $decorationOwner->dealService($data);
		$decorationOwner->updateAfterInsert($conversionInfo);
		//$this->sendSmsService($data, $serviceModel);
		$data['service_code'] = $serviceModel->code;

		$this->sendSms($data, $serviceModel->mobile);
		return ['status' => 200, 'message' => 'OK', 'quoteInfo' => $this->quoteInfo];
	}

	protected function isValidate()
	{
        if (!$this->validate()) {
			$this->addError('error', '信息有误');
			return false;
		}

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

	public function _getQuoteInfo($area)
	{
		$quote = new Quote(); 
		$info = $quote->getResult($area);
		return $info;
	}
}
