<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\cloud\models\OrderInfo;
use paytrade\cloud\models\searchs\OrderInfo as OrderInfoSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CloudOrderInfoController extends AdminController
{
	protected $modelClass = 'paytrade\cloud\models\OrderInfo';

    public function actionListinfo()
    {
        $searchModel = new OrderInfoSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new OrderInfo());
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
