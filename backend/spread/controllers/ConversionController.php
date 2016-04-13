<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Conversion;
use spread\models\searchs\Conversion as ConversionSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ConversionController extends AdminController
{
    /**
     * Lists all Conversion.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new ConversionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

		$searchDatas = $searchModel->getSearchDatas();

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
			'searchDatas' => $searchDatas,
        ]);
    }

    /**
     * Displays a single Conversion model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Finds the Conversion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return Conversion      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Conversion::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
