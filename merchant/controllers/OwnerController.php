<?php
namespace merchant\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use merchant\components\LoginedController;
use merchant\models\OwnerMerchant;

class OwnerController extends LoginedController
{
	public function actionIndex()
	{
		$merchantId = 3;//isset($this->merchantInfo['id']) ? $this->merchantInfo['id'] : 0;

		$infos = [];
		if ($merchantId > 0) {
		    $ownerMerchant = new OwnerMerchant();
			$infos = $ownerMerchant->getInfos(['merchant_id' => $merchantId]);
		}
		$datas = [
			'infos' => $infos,
		];
        return $this->render('index', $datas);
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
        $model = new \merchant\models\ResetPasswordForm();
		$return = $model->resetPassword();

		if ($return['status'] == 200) {
			\Yii::$app->user->logout();
		}
		return $return;
	}
}
