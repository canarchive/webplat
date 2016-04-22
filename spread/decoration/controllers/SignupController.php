<?php

namespace spread\decoration\controllers;

use spread\components\Controller as spreadController;
use spread\decoration\models\SignupForm;

class SignupController extends spreadController
{
	//public $enableCsrfValidation = false;

	public function actionIndex()
	{
		//\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new SignupForm();
		$model->isMobile = $this->clientIsMobile();

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
				'message' => $message,
				'model' => $model,
			];

print_r($data);exit();
			return $data;
		}
		print_r($signupInfo);exit();

		return $data;
	}
}
