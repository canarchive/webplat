<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Spread;
use spread\models\searchs\Spread as SpreadSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class SpreadController extends AdminController
{

    /**
     * Lists all Spread.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new SpreadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Finds the Spread model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return Spread      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Spread::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
