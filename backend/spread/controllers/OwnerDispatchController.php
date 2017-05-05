<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\OwnerDispatch;
use spread\decoration\models\searchs\OwnerDispatch as OwnerDispatchSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class OwnerDispatchController extends AdminController
{
	public $isAjax;
	protected $modelClass = 'spread\decoration\models\OwnerDispatch';

    public function actionListinfo()
    {
        $searchModel = new OwnerDispatchSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionUpdate($id)
    {
		$data = $this->_userInfos($id, 'activity-user');
		if ($this->isAjax) {
			return $data;
		}
		//print_r($data);exit();

        return $this->render('update', $data);
    }

    protected function _userInfos($id)
    {
		if (Yii::$app->getRequest()->method == 'POST') {
		    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$this->isAjax = true;
			$operation = Yii::$app->request->post('operation');
			return $operation == 'add' ? $this->_add() : $this->_update();
		}

        $model = $this->findModel($id);
		$mobile = $model->mobile;
		$ownerMerchantInfos = \merchant\house\models\OwnerMerchant::find()->where(['mobile' => $mobile])->indexBy('id')->all();
		$noteInfos = \merchant\house\models\MerchantNote::find()->where(['owner_merchant_id' => array_keys($ownerMerchantInfos)])->orderBy('owner_merchant_id DESC, created_at DESC, reply_at DESC')->all();
		$callbackInfos = \spread\decoration\models\DispatchCallback::find()->where(['mobile' => $mobile])->orderBy('created_at DESC')->all();

		$data = [
			'model' => $model,
			'ownerMerchantInfos' => $ownerMerchantInfos,
			'noteInfos' => $noteInfos,
			'callbackInfos' => $callbackInfos,
		];

		return $data;
    }

	protected function _add()
	{
		$tables = ['dispatch_callback', 'merchant_note'];
		$table = Yii::$app->request->post('table');

		if ($table == 'dispatch_callback') {
			$fields = ['mobile', 'service_id', 'content'];
			$model = new \spread\decoration\models\DispatchCallback();
		} elseif ($table == 'merchant_note') {
			$fields = ['owner_merchant_id', 'reply'];
			$model = new \merchant\house\models\MerchantNote();
			$model->reply_at = Yii::$app->params['currentTime'];
		} else {
			return ['status' => 400, 'message' => '参数错误'];
		}

		foreach ($fields as $field) {
			$model->$field = Yii::$app->request->post($field);
		}
		$model->insert(false);

		$return = [
			'status' => 200, 
			'message' => 'OK', 
			'id' => $model->id, 
			'created_at' => date('Y-m-d H:i:s', $model->created_at),
			//'content' => $content,
		];
		if ($table == 'merchant_note') {
			$return['reply_at'] = date('Y-m-d H:i:s', $model->reply_at);
		}

		return $return;
	}

	protected function _update()
	{
		$tables = ['dispatch_callback', 'merchant_note'];
		$table = Yii::$app->request->post('table');
		$infoId = Yii::$app->request->post('info_id');
		$field = Yii::$app->request->post('field');
		$value = Yii::$app->request->post('value');
		if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		switch ($table) {
		case 'dispatch_callback':
			$model = \spread\models\Callback::findOne($infoId);
			break;
		case 'merchant_note':
			$model = \merchant\house\models\MerchantNote::findOne($infoId);
			$model->reply_at = Yii::$app->params['currentTime'];
			break;
		}
		$model->$field = $value;
		$model->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}
}
