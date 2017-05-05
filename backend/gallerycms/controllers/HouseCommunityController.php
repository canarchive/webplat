<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\house\models\HouseCommunity;
use gallerycms\house\models\searchs\HouseCommunity as HouseCommunitySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseCommunityController extends AdminController
{
	protected $modelClass = 'gallerycms\house\models\HouseCommunity';

    public function actionListinfo()
    {
        $searchModel = new HouseCommunitySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HouseCommunity());
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
