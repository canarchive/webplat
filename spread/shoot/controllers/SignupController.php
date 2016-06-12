<?php

namespace spread\shoot\controllers;

use spread\components\Controller as spreadController;
use spread\shoot\models\SignupForm;

class SignupController extends spreadController
{
	//public $enableCsrfValidation = false;

	public function actionIndex()
	{
		$goodsId = intval(\Yii::$app->request->get('goods_id'));
		$goods = new \shoot\models\Goods();
		$goodsInfos = $goods->goodsInfos;
		$this->layout = '@shoot/views/default/layouts/main';
		$viewPath = "/signup";
		$datas = [
			'goodsId' => $goodsId,
			'goodsInfos' => $goodsInfos,
		];
        return $this->render($viewPath, $datas);        
	}

	public function actionSubmit()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $model = new SignupForm();
		$model->isMobile = $this->clientIsMobile();

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
				'message' => $message,
				//'model' => $model,
			];

			return $data;
		}
		//print_r($model);

		$data = [
			'status' => '200',
		];		

		return $data;
	}
}
