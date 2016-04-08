<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Visit;
use spread\models\searchs\Visit as VisitSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class VisitController extends AdminController
{

    /**
     * Lists all Visit.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new VisitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
		$searchDatas = $searchModel->getSearchDatas();

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
			'searchDatas' => $searchDatas,
        ]);
    }

    /**
     * Displays a single Visit model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Finds the Visit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return Visit      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Visit::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
