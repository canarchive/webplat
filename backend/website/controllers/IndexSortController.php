<?php

namespace backend\website\controllers;

use Yii;
use website\models\IndexSort;
use website\models\searchs\IndexSort as IndexSortSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class IndexSortController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new IndexSortSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new IndexSort());
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id);
    }

    public function actionDelete($id)
    {
		return $this->_deleteInfo($id);
    }

    protected function findModel($id)
    {
        if (($model = IndexSort::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
