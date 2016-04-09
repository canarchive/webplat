<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\models\CouponSort;
use paytrade\models\searchs\CouponSort as CouponSortSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CouponSortController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new CouponSortSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new CouponSort());
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

    protected function findModel($id, $throwException = true)
    {
        if (($model = CouponSort::findOne($id)) !== null) {
            return $model;
        }
		if ($throwException) {
            throw new NotFoundHttpException('The requested page does not exist.');		
		}

		return false;
    }
}
