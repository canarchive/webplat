<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\GoodsStatistic;
use shoot\models\searchs\GoodsStatistic as GoodsStatisticSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsStatisticController extends AdminController
{
	protected $modelClass = 'shoot\models\GoodsStatistic';

    public function actionListinfo()
    {
        $searchModel = new GoodsStatisticSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new GoodsStatistic());
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
