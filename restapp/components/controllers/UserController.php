<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use passport\models\User;
use passport\models\SigninForm;
use passport\models\SignupForm;
use restapp\components\Controller;

class UserController extends Controller
{
    public $modelClass = 'passport\models\User';
	public $authExcept = ['signin', 'signup'];

    public function actionIndex()
    {
		return $this->_index();
    }

    public function actionUpdate($id)
    {
		return $this->_update($id);
    }

    public function actionView($id)
    {
		return $this->_view($id);
    }

	public function actionCheckMobile()
	{
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

		return ['status' => 200, 'message' => 'OK'];
	}

    public function actionSignin()
    {
        $model = new SigninForm();

		if (!($model->load(\Yii::$app->getRequest()->getBodyParams(), ''))) {
            return ['status' => 400, 'message' => '参数错误'];
		}
		
		$result = $model->signin();
		if ($result['status'] != 200) {
            return ['status' => 422, 'message' => $result['message']];
		}

		$accessToken = \Yii::$app->user->identity->getAuthKey();
		return ['status' => 200, 'message' => 'OK', 'access_token' => $accessToken];
    }	

	public function actionSignup()
	{
		$attributes = ['mobile', 'mobileCode', 'password', 'passwordConfirm'];
		foreach ($attributes as $attribute) {
			$value = \Yii::$app->getRequest()->post($attribute);
			if (empty($value)) {
				return ['status' => 400, 'message' => $attribute . ' 参数错误'];
			}
			$data[$attribute] = \Yii::$app->getRequest()->post($attribute);
		}
        $model = new SignupForm($data);

        if ($user = $model->signup()) {
            if (Yii::$app->getUser()->login($user)) {
                $accessToken = \Yii::$app->user->identity->getAuthKey();
		        return ['status' => 200, 'message' => 'OK', 'access_token' => $accessToken];
            }
        }

        $message = array_values($model->getFirstErrors())[0];
		return ['status' => 422, 'message' => $message];
	}
}
