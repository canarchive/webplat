<?php

namespace backend\spread\controllers;

use Yii;
use spread\shoot\models\ActivityUser;
use spread\shoot\models\searchs\ActivityUser as ActivityUserSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ActivityUserController extends AdminController
{
	public $ownerInfo;

    /**
     * Lists all ActivityUser.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new ActivityUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single ActivityUser model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new ActivityUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
        $model = new ActivityUser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ActivityUser model.
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
        $modelOwner = \spread\groupon\models\Owner::findOne(['mobile' => $model->mobile]);
		$this->ownerInfo = $modelOwner;

		$ownerHouseInfos = \spread\groupon\models\OwnerHouse::findAll(['mobile' => $model->mobile]);
		$callbackLogInfos = \spread\groupon\models\CallbackLog::findAll(['mobile' => $model->mobile]);

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
			$fields = ['mobile', 'shoot_id', 'address', 'house_area', 'house_sort', 'house_type', 'buy_furniture', 'buy_building', 'renovation_at', 'renovation_step', 'renovation_budget', 'renovation_company'];
			$model = new \spread\groupon\models\OwnerHouse();
		} elseif ($table == 'callback') {
			$fields = ['mobile', 'content', 'note'];
			$model = new \spread\groupon\models\CallbackLog();
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
		$tables = ['shoot_owner', 'owner', 'owner_house', 'callback'];
		$table = \Yii::$app->request->post('table');
		$infoId = \Yii::$app->request->post('info_id');
		$field = \Yii::$app->request->post('field');
		$value = \Yii::$app->request->post('value');
		if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		switch ($table) {
		case 'shoot_owner':
			$model = $this->findModel($infoId);
			if ($field == 'callback_at') {
			    $value = $model->callback_at > 0 ? $model->callback_at : time();
			}
			break;
		case 'owner':
			$model = \spread\groupon\models\Owner::findOne($infoId);
			break;
		case 'owner_house':
			$model = \spread\groupon\models\OwnerHouse::findOne($infoId);
			break;
		case 'callback':
			$model = \spread\groupon\models\CallbackLog::findOne($infoId);
			break;
		}
		$model->$field = $value;
		$model->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}

    /**
     * Finds the ActivityUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return ActivityUser      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ActivityUser::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
