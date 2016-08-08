<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\DecorationOwner;
use spread\decoration\models\searchs\DecorationOwner as DecorationOwnerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DecorationOwnerController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\DecorationOwner';
	public $ownerInfo;

    /**
     * Lists all DecorationOwner.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new DecorationOwnerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single DecorationOwner model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new DecorationOwner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
        $model = new DecorationOwner();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DecorationOwner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param  string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
		if (\Yii::$app->getRequest()->method == 'POST') {
		    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$operation = \Yii::$app->request->post('operation');
			return $operation == 'add' ? $this->_add() : $this->_update();
		}

        $model = $this->findModel($id);
        $modelOwner = \spread\decoration\models\Owner::findOne(['mobile' => $model->mobile]);
		$this->ownerInfo = $modelOwner;

		$ownerHouseInfos = \spread\decoration\models\OwnerHouse::findAll(['mobile' => $model->mobile]);
		$callbackLogInfos = \spread\decoration\models\CallbackLog::findAll(['mobile' => $model->mobile]);

		$data = [
			'model' => $model,
			'modelOwner' => $modelOwner,
			'ownerHouseInfos' => $ownerHouseInfos,
			'callbackLogInfos' => $callbackLogInfos,
		];

        return $this->render('update', $data);
    }

	protected function _add()
	{
		$tables = ['owner_house', 'callback'];
		$table = \Yii::$app->request->post('table');

		if ($table == 'owner_house') {
			$fields = ['mobile', 'decoration_id', 'address', 'house_area', 'house_sort', 'house_type', 'buy_furniture', 'buy_building', 'renovation_at', 'renovation_step', 'renovation_budget', 'renovation_company'];
			$model = new \spread\decoration\models\OwnerHouse();
		} elseif ($table == 'callback') {
			$fields = ['mobile', 'content', 'note'];
			$model = new \spread\decoration\models\CallbackLog();
		} else {
			return ['status' => 400, 'message' => '参数错误'];
		}

		foreach ($fields as $field) {
			$model->$field = \Yii::$app->request->post($field);
		}
		$model->insert(false);
		$content = '';
		if ($table === 'owner_house') {
			$content = $this->renderPartial('_owner_house', ['model' => $model]);
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
		$tables = ['decoration_owner', 'owner', 'owner_house', 'callback'];
		$table = \Yii::$app->request->post('table');
		$infoId = \Yii::$app->request->post('info_id');
		$field = \Yii::$app->request->post('field');
		$value = \Yii::$app->request->post('value');
		if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		switch ($table) {
		case 'decoration_owner':
			$model = $this->findModel($infoId);
			if ($field == 'callback_at') {
			    $value = $model->callback_at > 0 ? $model->callback_at : time();
			}
			break;
		case 'owner':
			$model = \spread\decoration\models\Owner::findOne($infoId);
			break;
		case 'owner_house':
			$model = \spread\decoration\models\OwnerHouse::findOne($infoId);
			break;
		case 'callback':
			$model = \spread\decoration\models\CallbackLog::findOne($infoId);
			break;
		}
		$model->$field = $value;
		$model->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}
}
