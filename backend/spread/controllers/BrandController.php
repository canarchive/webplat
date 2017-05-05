<?php

namespace backend\spread\controllers;

use Yii;
use spread\groupon\models\Brand;
use spread\groupon\models\searchs\Brand as BrandSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class BrandController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new BrandSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Brand());
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
        if (($model = Brand::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
