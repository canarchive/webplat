<?php

namespace backend\website\controllers;

use Yii;
use website\models\IndexGoods;
use website\models\searchs\IndexGoods as IndexGoodsSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class IndexGoodsController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new IndexGoodsSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new IndexGoods());
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
        if (($model = IndexGoods::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
