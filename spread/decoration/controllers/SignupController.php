<?php

namespace spread\decoration\controllers;

use spread\components\Controller as spreadController;
use spread\decoration\models\SignupForm;

class SignupController extends spreadController
{
	public $enableCsrfValidation = false;

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
		//\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
		$callback = \Yii::$app->request->get('callback');

        $model = new SignupForm();
		$model->isMobile = $this->clientIsMobile();
	    $model->submitType = $submitType;

		$signupInfo = false;
        //if ($model->load(\Yii::$app->request->get())) {
        if ($model->load(\Yii::$app->request->get(), '')) {
            $signupInfo = $model->signup();
        }

		if (!$signupInfo) {
			$errors = $model->getFirstErrors('error');
			$message = isset($errors['error']) ? $errors['error'] : '报名失败，请您重试！';
			$data = [
				'status' => '400',
				'msg' => $message,
				'model' => $model,
			];

		}
		$signupInfo['msg'] = $signupInfo['message'];
		unset($signupInfo['message']);
		return ['data' => $signupInfo, 'callback' => $callback];
	}
}
