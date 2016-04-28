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
		$callback = Yii::$app->request->get('callback');
		$data = [
			'status' => '400',
		];
		if (!$isGuest) {
			$data['status'] = '200';
			$data['data'] = [
				'username' => \Yii::$app->user->identity->mobile,
				'message_number' => 1,
				'cart_number' => 1,
			];
		}

		return ['data' => $data, 'callback' => $callback];
	}

	public function actionCheckMobile()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$mobile = \Yii::$app->getRequest()->post('mobile');
		$formType = \Yii::$app->getRequest()->post('form_type');
		$validator = new \common\validators\MobileValidator();
		$valid =  $validator->validate($mobile);
		if (empty($valid)) {
			return ['status' => 400, 'message' => 'valid'];
		}

		$user = User::findByMobile($mobile);
		switch ($formType) {
		case 'login':
			if (empty($user)) {
			    return ['status' => 402, 'message' => 'no exist'];
			}
			break;
		case 'register':
			if (!empty($user)) {
			    return ['status' => 402, 'message' => 'exist'];
			}
			break;
		}

		return ['status' => 200, 'message' => 'OK'];
	}

	public function actionGenerateCode()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$model = new \passport\models\SignupGenerateCode();
        if ($model->load(Yii::$app->request->post(), '') && $model->validate()) {
    		$smser = new Smser();
    		$result = $smser->sendCode($model->mobile, 'register');
			$result = 'OK';
    
    		$status = $result == 'OK' ? 200 : 400;
    		return ['status' => $status, 'message' => $result];
		} 
        
		$error = $model->getFirstErrors();
		$field = key($error);
		$message = $error[$field];
		$status = $field == 'captcha' ? 401 : 400;
		$message = !empty($message) ? $message : '未知错误，请您刷新页面重新操作';

		return ['status' => $status, 'message' => $message];

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

		$attributes = ['username', 'password', 'captcha'];
		foreach ($attributes as $attribute) {
			$data[$attribute] = \Yii::$app->getRequest()->post($attribute);
			//$data[$attribute] = \Yii::$app->getRequest()->get($attribute);
		}
        $model = new SigninForm($data);
		$loginResult = $model->signin();

		return $loginResult;
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

	public function actionFindpwdAjax()
	{
		$model = new \passport\models\PasswordResetRequestForm();
		$model->username = Yii::$app->getRequest()->get('username');
		$model->captcha = Yii::$app->getRequest()->get('captcha');

		$return = $model->findpwd();
		var_dump($return);
		exit();
		return $return ;
	}
}
