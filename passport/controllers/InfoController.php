<?php
namespace passport\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use passport\components\Controller as PassportController;

class InfoController extends PassportController
{
	public $layout = '@shoot/views/default/layouts/main';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['logout', 'signup', 'signin', 'index'],
                'rules' => [
                    [
                        //'actions' => ['index', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
		            return Yii::$app->response->redirect(Url::to(['site/signin']))->send();
                },
            ],
        ];
	}

    public function actionSetting()
    {
		$user = \Yii::$app->user->getIdentity();
		if (\Yii::$app->request->isPost) {
			$params = ['nickname', 'gender', 'year', 'month', 'day'];
			$data = [];
			foreach ($params as $param) {
				$data[$param] = \Yii::$app->request->post($param);
			}

			$user->settingInfo($data);
            //return $this->refresh();
        } 		
		
        return $this->render('setting', ['user' => $user]);
    }

	public function actionChangePassword()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new \passport\models\ResetPasswordForm();
		$return = $model->resetPassword();

		if ($return['status'] == 200) {
			\Yii::$app->user->logout();
		}
		return $return;
	}
}
