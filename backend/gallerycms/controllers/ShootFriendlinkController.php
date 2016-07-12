<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootFriendlink;
use gallerycms\models\searchs\ShootFriendlink as ShootFriendlinkSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShootFriendlinkController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ShootFriendlink';

    public function actionListinfo()
    {
        $searchModel = new ShootFriendlinkSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootFriendlink());
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
