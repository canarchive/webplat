<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\models\Shipment;
use paytrade\models\searchs\Shipment as ShipmentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShipmentController extends AdminController
{
	protected $modelClass = 'paytrade\models\Shipment';

    public function actionListinfo()
    {
        $searchModel = new ShipmentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Shipment());
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
}
