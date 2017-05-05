<?php

namespace backend\spread\controllers;

use Yii;
use spread\groupon\models\Groupon;
use spread\groupon\models\searchs\Groupon as GrouponSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GrouponController extends AdminController
{

    /**
     * Lists all Groupon.
     * @return mixed
     */
    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('infoAjax'))) {
			$data = $this->$action();
			return $data;
			exit();
		}

        $searchModel = new GrouponSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

	protected function infoAjax()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$groupon = new Groupon();
		$companyId = \Yii::$app->request->get('company_id');

		$orderBy = ['id' => SORT_DESC];
		$infos = $groupon->find()->where(['company_id' => $companyId])->orderBy($orderBy)->asArray()->all();
		$data = [];
		foreach ($infos as $info) {
			$data[$info['id']] = $info['name'];
		}

		return $data;
	}

    /**
     * Displays a single Groupon model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new Groupon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
        $model = new Groupon();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Groupon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param  string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing Groupon model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param  string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['listinfo']);		
    }

    /**
     * Finds the Groupon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return Groupon      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Groupon::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
