<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootFavorite;
use gallerycms\models\searchs\ShootFavorite as ShootFavoriteSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShootFavoriteController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ShootFavorite';

    public function actionListinfo()
    {
        $searchModel = new ShootFavoriteSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootFavorite());
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
