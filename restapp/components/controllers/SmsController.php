<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;

class UserController extends Controller
{
	public function actionGenerateCode()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$mobile = \Yii::$app->getRequest()->get('mobile');

		$smser = new Smser();
		$result = $smser->sendCode($mobile, 'register');

		$status = $result == 'OK' ? 1 : 0;
		return ['status' => $status];
	}

	public function actionCheckCode()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$mobile = \Yii::$app->getRequest()->get('mobile');
		$code = \Yii::$app->getRequest()->get('mobileCode');

		$smser = new Smser();
		$result = $smser->checkCode($mobile, 'register', $code);

		$status = $result == 'OK' ? 1 : 0;
		return ['status' => $status];
	}
}
