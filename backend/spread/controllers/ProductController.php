<?php

namespace backend\spread\controllers;

use Yii;
use spread\groupon\models\Product;
use spread\groupon\models\searchs\Product as ProductSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ProductController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new ProductSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Product());
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
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
