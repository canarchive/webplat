<?php
namespace merchant\controllers;

use Yii;
use yii\web\BadRequestHttpException;
use merchant\components\Controller as MerchantController;
use merchant\models\User;

/**
 * Site controller
 */
class ApiController extends MerchantController
{
	public function init()
	{
		parent::init();
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
	}

	public function actionValidation()
	{
		$field = Yii::$app->request->get('field');
		$value = Yii::$app->request->get('value');

		if (empty($field) || empty($value)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		$method = '_validate' . ucfirst($field);
		return $this->$method($value);
	}

	protected function _validateMobile($value)
	{
		$type = Yii::$app->getRequest()->get('type');
		$validator = new \common\validators\MobileValidator();
		$valid =  $validator->validate($value);
		if (empty($valid)) {
			return ['status' => 400, 'message' => '手机号格式有误'];
		}

		$userModel = new User();
		$user = $userModel->getInfo(['mobile' => $value]);
		switch ($type) {
		case 'login':
			if (empty($user)) {
			    return ['status' => 402, 'message' => 'no exist'];
			}
			break;
		case 'register':
			if (!empty($user)) {
			    return ['status' => 402, 'message' => '用户已存在，请直接登录'];
			}
			break;
		}

		return ['status' => 200, 'message' => 'OK'];
	}

	protected function _validateEmail($value)
	{
		$type = Yii::$app->getRequest()->post('type');
		$validator = new \yii\validators\EmailValidator();
		$valid =  $validator->validate($value);
		if (empty($valid)) {
			return ['status' => 400, 'message' => '邮箱格式有误'];
		}

		$userModel = new User();
		$user = $userModel->getInfo(['email' => $value]);
		switch ($type) {
		case 'login':
			if (empty($user)) {
			    return ['status' => 402, 'message' => 'no exist'];
			}
			break;
		case 'register':
			if (!empty($user)) {
			    return ['status' => 402, 'message' => '用户已存在，请直接登录'];
			}
			break;
		}

		return ['status' => 200, 'message' => 'OK'];
	}
}
