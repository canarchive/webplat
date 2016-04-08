<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\models\Shipping;
use paytrade\models\searchs\Shipping as ShippingSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShippingController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new ShippingSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Shipping());
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
        if (($model = Shipping::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
