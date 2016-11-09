<?php
namespace merchant\house\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use merchant\components\LoginedController;
use merchant\house\models\OwnerMerchant;
use merchant\house\models\MerchantNote;
use spread\decoration\models\DecorationOwner;
use spread\decoration\models\OwnerHouse;

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

	public function actionMessage()
	{
		$listUrl = Url::to(['/house/owner/index']);
		$data = $this->checkInfo();
		if (Yii::$app->request->isPost) {
			$dataNew['content'] = strip_tags(Yii::$app->request->post('content'));
			$dataNew['owner_merchant_id'] = $data['id'];
			$dataNew['created_at'] = Yii::$app->params['currentTime'];
			$model = new MerchantNote($dataNew);
			$r = $model->insert(false);
		    return Yii::$app->response->redirect($listUrl)->send();
        } 		

        return $this->render('message', $data);
	}

	public function actionNotelist()
	{
		$datas = $this->checkInfo();
		$merchantNote = new MerchantNote();
		$datas['infos'] = $merchantNote->find()->where(['owner_merchant_id' => $datas['id']])->orderBy('reply_at DESC')->all();
		//print_R($datas);exit();
        return $this->render('notelist', $datas);
	}

	public function actionViewAjax()
	{
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$type = Yii::$app->request->get('type');
		if ($type == 'notelist') {
			$result = $checkInfo();
			if ($result) {
				return ['status' => 400, 'message' => 'error'];
			}
			$noteModel = new MerchantNote();
			$currentTime = Yii::$app->params['currentTime'];
			$sql = "UPDATE `view_at` = {$currentTime} WHERE `owner_merchant_id` = {$id} AND `view_at` = 0";
			//$noteModel->
			return ['status' => 200, 'message' => 'OK'];
		}
		$ids = Yii::$app->request->post('ids');
		$ownerMerchant = new OwnerMerchant();
		$datas = $ownerMerchant->viewInfo($this->merchantInfo['id'], $ids);

		return $datas;
		//print_r($_POST);
	}

	protected function checkInfo()
	{
		$listUrl = Url::to(['/house/owner/index']);
		$user = Yii::$app->user->getIdentity();
		$id = Yii::$app->request->get('id');
		$id = empty($id) ? Yii::$app->request->post('id') : $id;
		if (empty($id)) {
		    return Yii::$app->response->redirect($listUrl)->send();
		}

		$info = OwnerMerchant::findOne($id);
		if (empty($info) || $info['merchant_id'] != $user->merchant_id) {
		    return Yii::$app->response->redirect($listUrl)->send();
		}
		$ownerInfo = DecorationOwner::find()->where(['mobile' => $info['mobile']])->orderBy(['id' => SORT_DESC])->one();
		$houseInfo = OwnerHouse::findOne($info['house_id']);
		$data = [
			'user' => $user,
			'id' => $id,
			'ownerInfo' => $ownerInfo,
		    'ownerName' => !empty($ownerInfo) ? $ownerInfo->name : '',
		    'houseAddress' => !empty($houseInfo) ? $houseInfo->address : '',
		];

		return $data;
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
