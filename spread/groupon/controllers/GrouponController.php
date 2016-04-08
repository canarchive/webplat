<?php

namespace spread\groupon\controllers;

use spread\components\Controller as spreadController;
use spread\groupon\models\SignupForm;

class GrouponController extends spreadController
{
	//public $enableCsrfValidation = false;

	public function actionSignup()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new SignupForm();
		$model->isMobile = $this->clientIsMobile();

		$signupInfo = false;
        //if ($model->load(\Yii::$app->request->get())) {
        if ($model->load(\Yii::$app->request->post())) {
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

			return $data;
		}
		//print_r($model);

		$data = [
			'status' => '200',
			'signupNumber' => $model->grouponModel['signup_base'] + $model->grouponModel['signup_number'],
		];		

		return $data;
	}
}
