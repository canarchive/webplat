<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;
use common\components\sms\Smser;

class SmsController extends Controller
{
	public $authExcept = ['generate-code', 'check-code'];

	public function actionGenerateCode()
	{
		$mobile = \Yii::$app->getRequest()->post('mobile');
		$sort = \Yii::$app->getRequest()->post('sort');
		if (empty($mobile) || empty($sort)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		$validator = new \common\validators\MobileValidator();
		$valid =  $validator->validate($mobile);
		if (empty($valid)) {
			return ['status' => 400, 'message' => '手机号码有误'];
		}

		$smser = new Smser();
		$result = $smser->sendCode($mobile, $sort);

		$status = $result == 'OK' ? 200 : 400;
		return ['status' => $status, 'message' => $result];
	}

	public function actionCheckCode()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$mobile = \Yii::$app->getRequest()->post('mobile');
		$code = \Yii::$app->getRequest()->post('mobileCode');
		$sort = \Yii::$app->getRequest()->post('sort');
		if (empty($mobile) || empty($code) || empty($sort)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		$validator = new \common\validators\MobileValidator();
		$valid =  $validator->validate($mobile);
		if (empty($valid)) {
			return ['status' => 400, 'message' => '手机号码有误'];
		}

		$smser = new Smser();
		$result = $smser->checkCode($mobile, 'register', $code);

		$status = $result == 'OK' ? 200 : 400;
		return ['status' => $status, 'message' => $result];
	}
}
