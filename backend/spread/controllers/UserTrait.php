<?php

namespace backend\spread\controllers;

use Yii;

trait UserTrait
{
	public $isAjax;

    protected function _userInfos($id, $type)
    {
		if (Yii::$app->getRequest()->method == 'POST') {
		    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$this->isAjax = true;
			$operation = Yii::$app->request->post('operation');
			return $operation == 'add' ? $this->_add() : $this->_update();
		}

        $model = $this->findModel($id);
		$mobile = $model->mobile;
		$callbackInfos = \spread\models\Callback::findAll(['mobile' => $mobile]);
		$ownerHouseInfos = \spread\decoration\models\OwnerHouse::findAll(['mobile' => $model->mobile]);
		$ownerMerchantModel = new \merchant\house\models\OwnerMerchant();
		$ownerMerchantInfos = $ownerMerchantModel->getInfos(['mobile' => $model->mobile]);

		$data = [
			'type' => $type,
			'model' => $model,
			'callbackInfos' => $callbackInfos,
			'ownerHouseInfos' => $ownerHouseInfos,
			'ownerMerchantInfos' => $ownerMerchantInfos,
		];

		return $data;
    }

	protected function _add()
	{
		//$tables = ['user_house', 'callback'];
		$tables = ['callback'];
		$table = Yii::$app->request->post('table');

		if ($table == 'owner_house') {
			$fields = ['mobile', 'service_id', 'address', 'house_area', 'house_sort', 'house_type', 'renovation_budget'];
			$model = new \spread\decoration\models\OwnerHouse();
		} else if ($table == 'callback') {
			//$fields = ['mobile', 'content', 'note'];
			$fields = ['mobile', 'service_id', 'content'];
			$model = new \spread\models\Callback();
		} else if ($table == 'owner_merchant') {
			$fields = ['mobile', 'house_id', 'service_id', 'merchant_id', 'city_code'];
			$model = new \merchant\house\models\OwnerMerchant();
		} else {
			return ['status' => 400, 'message' => '参数错误'];
		}

		foreach ($fields as $field) {
			$model->$field = Yii::$app->request->post($field);
		}
		$model->insert(false);
		$content = '';
		if ($table === 'owner_house') {
			$content = $this->renderPartial('_user_house', ['model' => $model]);
		} else if ($table == 'owner_merchant') {
			$noteData = [
				'owner_merchant_id' => $model->id,
				'reply' => Yii::$app->request->post('note'),
				'reply_at' => Yii::$app->params['currentTime'],
			];
			$noteModel = new \merchant\house\models\MerchantNote($noteData);
			$noteModel->insert(false);
			$model->note = $noteData['reply'];
			$content = $this->renderPartial('_user_merchant', ['model' => $model]);
		}

		$return = [
			'status' => 200, 
			'message' => 'OK', 
			'id' => $model->id, 
			'created_at' => date('Y-m-m H:i:s', $model->created_at),
			'content' => $content,
		];

		return $return;
	}

	protected function _update()
	{
		$tables = ['activity_user', 'user', 'owner_house', 'callback'];
		$table = Yii::$app->request->post('table');
		$infoId = Yii::$app->request->post('info_id');
		$field = Yii::$app->request->post('field');
		$value = Yii::$app->request->post('value');
		if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		switch ($table) {
		case 'activity_user':
			$model = $this->findModel($infoId);
			if ($field == 'callback_again') {
			    $value = !empty($value) ? strtotime($value) : $model->callback_again;
			}
			break;
		case 'owner_house':
			$model = \spread\decoration\models\OwnerHouse::findOne($infoId);
			break;
		case 'callback':
			$model = \spread\models\Callback::findOne($infoId);
			break;
		}
		$model->$field = $value;
		$r =$model->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}
}
