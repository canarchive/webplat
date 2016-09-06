<?php
namespace merchant\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use merchant\components\LoginedController;

class InfoController extends LoginedController
{
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
        $model = new \merchant\models\ResetPasswordForm();
		$return = $model->resetPassword();

		if ($return['status'] == 200) {
			\Yii::$app->user->logout();
		}
		return $return;
	}
}
