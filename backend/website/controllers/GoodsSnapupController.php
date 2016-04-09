<?php

namespace backend\website\controllers;

use Yii;
use website\models\GoodsSnapup;
use website\models\searchs\GoodsSnapup as GoodsSnapupSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsSnapupController extends AdminController
{

    /**
     * Lists all GoodsSnapup.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new GoodsSnapupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
                'dataProvider' => $dataProvider,
                'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single GoodsSnapup model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new GoodsSnapup model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$method = Yii::$app->request->method;
		if ($method != 'POST') {
			return ['status' => 400, 'message' => 'request method error'];
		}

		$selections = Yii::$app->request->post('selections');
		$selections = array_filter(explode(',', $selections));
		if (empty($selections)) {
			return ['status' => 400, 'message' => 'no selected elem'];
		}

        $model = new GoodsSnapup();
		foreach ($selections as $id) {
			$goods = \website\models\goods::findOne($id);
			if (empty($goods)) {
				continue ;
			}
			$model->addFromGoods($goods);
		}

		return ['status' => '200', 'message' => 'OK'];
    }

    /**
     * Updates an existing GoodsSnapup model.
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

        return $this->render('update', ['model' => $model]);
    }

    /**
     * Deletes an existing GoodsSnapup model.
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
     * Finds the GoodsSnapup model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return GoodsSnapup      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GoodsSnapup::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
