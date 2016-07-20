<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\house\models\HousePosition;
use gallerycms\house\models\searchs\HousePosition as HousePositionSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HousePositionController extends AdminController
{
	protected $modelClass = 'gallerycms\house\models\HousePosition';

    public function actionListinfo()
    {
        $searchModel = new HousePositionSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HousePosition());
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
