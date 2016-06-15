<?php

namespace spread\decoration\controllers;

use spread\components\Controller as spreadController;
use spread\decoration\models\SignupForm;

class SignupController extends spreadController
{
	//public $enableCsrfValidation = false;

	public function actionIndex()
	{
		return $this->_signup();
	}

	public function actionLottery()
	{
		return $this->_signup('lottery');
	}

	public function actionBonus()
	{
		return $this->_signup('bonus');
	}

	public function actionGiftBag()
	{
		return $this->_signup('gift_bag');
	}

	protected function _signup($submitType = '')
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		//\Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
		//$callback = \Yii::$app->request->get('callback');

        $model = new SignupForm();
		$model->isMobile = $this->clientIsMobile();
	    $model->submitType = $submitType;

		$signupInfo = false;
        //if ($model->load(\Yii::$app->request->get(), '')) {
        if ($model->load(\Yii::$app->request->post(), '')) {
            $signupInfo = $model->signup();
        }

		if (!$signupInfo) {
			$errors = $model->getFirstErrors('error');
			$message = isset($errors['error']) ? $errors['error'] : '报名失败，请您重试！';
			$data = [
				'status' => '400',
				'msg' => $message,
				//'model' => $model,
			];
			return $data;
		    //return ['data' => $data, 'callback' => $callback];

		}
		$signupInfo['msg'] = $signupInfo['message'];
		unset($signupInfo['message']);
		return $signupInfo;
		//return ['data' => $signupInfo, 'callback' => $callback];
	}

	public function actionXunke()
	{
        $string = file_get_contents('php://input');

        $xml = simplexml_load_string($string);
		if (empty($xml)) {
			exit('NO');
		}
		$city = isset($xml->body->cityName) ? $xml->body->cityName : '';
		$mobile = isset($xml->body->mobile) ? $xml->body->mobile : '';
		$name = isset($xml->body->name) ? $xml->body->name : '';
		$fromType = isset($xml->body->Device) ? $xml->body->Device : '';
		if (empty($mobile)) {
			exit('NO');
		}

        $data = [
            'signup_at' => time(),
			'decoration_id' => 1,
            'type' => '677',
            'signup_ip' => '',
            'signup_city' => $city,
			'signup_channel' => 'sembd-xunke',
            'mobile' => $mobile,
            'name' => $name,
			'from_type' => $fromType,
            'message' => '',
            'note' => '百度寻客',
            'user_id' => 0,
        ];

        $model = new \spread\decoration\models\DecorationOwner($data);
        $return = $model->xunkeOperation($data);
        var_dump($return);

	}
}
