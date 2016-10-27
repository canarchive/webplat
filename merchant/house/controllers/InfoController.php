<?php
namespace merchant\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use merchant\components\LoginedController;

class InfoController extends LoginedController
{
	public function actionIndex()
	{
		$datas = [
			'userInfo' => $this->userInfo,
		];
        return $this->render('index', $datas);
	}

    public function actionSetting()
    {
		$user = Yii::$app->user->getIdentity();
        $user->setScenario('edit');
		$info = [];
		if (!$user->load(Yii::$app->request->post(), '')) {
            return $this->render('setting', ['model' => $user, 'info' => $info]);
		}
		$result = $this->validate($user);
		if ($result === true) {
			$result = ['status' => 400, 'message' => '信息修改失败'];
            if ($user->save()) {
				if ($user->mobile != '' || $user->password_new != '') {
			        Yii::$app->user->logout();
                    return $this->redirect(['/site/signin'])->send();
				}
				$result = ['status' => 200, 'message' => 'OK'];
            }
		}
        return $this->render('setting', ['model' => $user, 'info' => $result]);
    }

	protected function validate($user)
	{
		//$user->password_old = 'aaaaaa';
		if (empty($user->password_old)) {
			return ['status' => 400, 'message' => '旧密码不能为空', 'field' => 'password_old'];
		}
		$checkPasswordOld = $user->checkPasswordOld();
		if (!$checkPasswordOld) {
			return ['status' => 400, 'message' => '旧密码错误'];
		}

		if ($user->password_new != '') {
			if ($user->password_new != $user->password_new_repeat) {
				return ['status' => 400, 'message' => '两次新密码不一致', 'field' => 'password_new'];
			}
		}

		if (!empty($user->mobile)) {
		    $validator = new \common\validators\MobileValidator();
		    $valid =  $validator->validate($user->mobile);
		    if (empty($valid)) {
			    return ['status' => 400, 'message' => '手机号格式有误', 'field' => 'mobile'];
		    }
			$exist = $user->getInfo(['mobile' => $user->mobile]);
			if ($exist) {
				return ['status' => 400, 'message' => '手机号已存在', 'field' => 'mobile'];
			}
		} else {
			$user->mobile = $user->getOldAttribute('mobile');
		}

		if (!empty($user->email)) {
		    $validator = new \yii\validators\EmailValidator();
		    $valid =  $validator->validate($user->email);
		    if (empty($valid)) {
			    return ['status' => 400, 'message' => '邮箱格式有误'];
		    }
			$exist = $user->getInfo(['email' => $user->email]);
			if ($exist) {
				return ['status' => 400, 'message' => '邮箱已存在', 'field' => 'email'];
			}
		} else {
			$user->email = $user->getOldAttribute('email');
		}
		$user->truename = empty($user->truename) ? $user->getOldAttribute('truename') : $user->truename;

		return true;
	}

	public function actionChangePassword()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new \merchant\models\ResetPasswordForm();
		$return = $model->resetPassword();

		if ($return['status'] == 200) {
			\Yii::$app->user->logout();
		}
		return $return;
	}
}
