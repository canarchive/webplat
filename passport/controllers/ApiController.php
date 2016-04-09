<?php
namespace passport\controllers;

use Yii;
use yii\web\BadRequestHttpException;
use passport\components\Controller as PassportController;
use common\components\sms\Smser;
use passport\models\User;
use passport\models\SignupForm;
use passport\models\SigninForm;

/**
 * Site controller
 */
class ApiController extends PassportController
{
	public function actionLoginInfo()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;

		$isGuest = Yii::$app->user->isGuest;
		$callback = Yii::$app->request->get('fun');
		$data = [
			'status' => '400',
		];
		if (!$isGuest) {
			$data['status'] = '200';
			$data['data'] = ['username' => \Yii::$app->user->identity->mobile];
		}

		return ['data' => $data, 'callback' => $callback];
	}

	public function actionCheckMobile()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$mobile = \Yii::$app->getRequest()->get('mobile');
		$validator = new \common\validators\MobileValidator();
		$valid =  $validator->validate($mobile);
		if (empty($valid)) {
			return ['status' => 400, 'message' => 'valid'];
		}

		$user = User::findByMobile($mobile);
		if (!empty($user)) {
			return ['status' => 400, 'message' => 'exist'];
		}

		return ['status' => 1, 'message' => 'OK'];
	}

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

	public function actionLoginAjax()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$attributes = ['username', 'password'];
		foreach ($attributes as $attribute) {
			$data[$attribute] = \Yii::$app->getRequest()->post($attribute);
			//$data[$attribute] = \Yii::$app->getRequest()->get($attribute);
		}
        $model = new SigninForm($data);
		$loginResult = $model->signin();

		if ($loginResult) {
			return [
				'status' => 1,
				'message' => 'OK',
			];
		}
		//print_r($model);
		if ($model->hasErrors('password')) {
			return [
				'status' => 2,
				'message' => '密码错误',
			];
		}

		return [
			'status' => 3,
			'message' => '失败',
		];
	}

	public function actionRegisterAjax()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$attributes = ['mobile', 'mobileCode', 'password', 'passwordConfirm'];
		foreach ($attributes as $attribute) {
			$data[$attribute] = \Yii::$app->getRequest()->post($attribute);
			//$data[$attribute] = \Yii::$app->getRequest()->get($attribute);
		}
        $model = new SignupForm($data);
		$user = $model->signup();
		if (!$user) {
			return [
				'status' => '1',
				'msg' => 'error',
			];
		}

		$login = Yii::$app->getUser()->login($user);
		if (!$login) {
			return [
				'status' => 2,
				'msg' => 'nologin',
			];
		}

		return [
			'status' => 3,
			'msg' => 'success',
		];
	}
}
