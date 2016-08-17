<?php

namespace backend\website\controllers;

use Yii;
use website\models\GoodsSku;
use website\models\searchs\GoodsSku as GoodsSkuSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsSkuController extends AdminController
{
	protected $modelClass = 'website\models\GoodsSku';

    public function actionListinfo()
    {
        $searchModel = new GoodsSkuSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new GoodsSku());
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
