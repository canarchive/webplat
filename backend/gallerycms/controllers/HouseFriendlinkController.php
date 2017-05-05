<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\HouseFriendlink;
use gallerycms\models\searchs\HouseFriendlink as HouseFriendlinkSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseFriendlinkController extends AdminController
{
	protected $modelClass = 'gallerycms\models\HouseFriendlink';

    public function actionListinfo()
    {
        $searchModel = new HouseFriendlinkSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HouseFriendlink());
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
