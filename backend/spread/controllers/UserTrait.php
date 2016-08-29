<?php

namespace backend\spread\controllers;

trait UserTrait
{
	public $isAjax;

    protected function _userInfos($id, $type)
    {
		if (\Yii::$app->getRequest()->method == 'POST') {
		    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$this->isAjax = true;
			$operation = \Yii::$app->request->post('operation');
			return $operation == 'add' ? $this->_add() : $this->_update();
		}

		if ($type == 'activity-user') {
            $model = $this->findModel($id);
            $modelUser = \spread\models\User::findOne(['mobile' => $model->mobile]);
			$mobile = $model->mobile;
		} else if ($type == 'user') {
            $modelUser = $this->findModel($id);
			$model = '';
			$mobile = $modelUser->mobile;
		}
		$callbackInfos = \spread\models\Callback::findAll(['mobile' => $mobile]);
		$ownerHouseInfos = \spread\decoration\models\OwnerHouse::findAll(['mobile' => $model->mobile]);

		$data = [
			'type' => $type,
			'model' => $model,
			'modelUser' => $modelUser,
			'callbackInfos' => $callbackInfos,
			'ownerHouseInfos' => $ownerHouseInfos,
		];

		return $data;
    }

	protected function _add()
	{
		//$tables = ['user_house', 'callback'];
		$tables = ['callback'];
		$table = \Yii::$app->request->post('table');

		if ($table == 'owner_house') {
			$fields = ['mobile', 'decoration_id', 'address', 'house_area', 'house_sort', 'house_type', 'buy_furniture', 'buy_building', 'renovation_at', 'renovation_step', 'renovation_budget', 'renovation_company'];
			$model = new \spread\decoration\models\OwnerHouse();
		} else if ($table == 'callback') {
			$fields = ['mobile', 'content', 'note'];
			$model = new \spread\models\Callback();
		} else {
			return ['status' => 400, 'message' => '参数错误'];
		}

		foreach ($fields as $field) {
			$model->$field = \Yii::$app->request->post($field);
		}
		$model->insert(false);
		$content = '';
		if ($table === 'owner_house') {
			$content = $this->renderPartial('_user_house', ['model' => $model]);
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
		$tables = ['activity_user', 'user', 'user_house', 'callback'];
		$table = \Yii::$app->request->post('table');
		$infoId = \Yii::$app->request->post('info_id');
		$field = \Yii::$app->request->post('field');
		$value = \Yii::$app->request->post('value');
		if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		switch ($table) {
		case 'activity_user':
			$model = $this->findModel($infoId);
			if ($field == 'callback_at') {
			    $value = $model->callback_at > 0 ? $model->callback_at : time();
			}
			break;
		case 'user':
			$model = \spread\models\User::findOne($infoId);
			break;
		/*case 'user_house':
			$model = \spread\models\UserHouse::findOne($infoId);
			break;*/
		case 'callback':
			$model = \spread\models\Callback::findOne($infoId);
			break;
		}
		$model->$field = $value;
		$model->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}
}
