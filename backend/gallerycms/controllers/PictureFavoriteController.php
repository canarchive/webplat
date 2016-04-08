<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\PictureFavorite;
use gallerycms\models\searchs\PictureFavorite as PictureFavoriteSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PictureFavoriteController extends AdminController
{
	protected $modelClass = 'gallerycms\models\PictureFavorite';

    public function actionListinfo()
    {
        $searchModel = new PictureFavoriteSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new PictureFavorite());
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
