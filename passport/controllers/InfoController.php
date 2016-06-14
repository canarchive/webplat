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
        return $this->render('setting');
    }

    public function actionAddress()
    {
        return $this->render('address');
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
