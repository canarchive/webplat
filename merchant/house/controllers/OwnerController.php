<?php
namespace merchant\house\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use merchant\components\LoginedController;
use merchant\house\models\OwnerMerchant;

class OwnerController extends LoginedController
{
	public function actionIndex()
	{
		$merchantId = isset($this->merchantInfo['id']) ? $this->merchantInfo['id'] : 0;

		$infos = [];
		if ($merchantId > 0) {
		    $ownerMerchant = new OwnerMerchant();
			$infos = $ownerMerchant->getInfos(['merchant_id' => $merchantId]);
			foreach ($infos as $key => & $info) {
				if (!$info['view_at']) {
					$info['mobile'] = substr_replace($info['mobile'], '******', 3, 6);
				}
			}
		}
		$datas = [
			'infos' => $infos,
		];
        return $this->render('index', $datas);
	}

	public function actionViewAjax()
	{
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$ids = Yii::$app->request->post('ids');
		$ownerMerchant = new OwnerMerchant();
		$datas = $ownerMerchant->viewInfo($this->merchantInfo['id'], $ids);

		return $datas;
		//print_r($_POST);
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
