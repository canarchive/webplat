<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\house\models\HouseSample;
use gallerycms\house\models\searchs\HouseSample as HouseSampleSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseSampleController extends AdminController
{
	protected $modelClass = 'gallerycms\house\models\HouseSample';

    public function actionListinfo()
    {
        $searchModel = new HouseSampleSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HouseSample());
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
