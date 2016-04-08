<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ArticleFavorite;
use gallerycms\models\searchs\ArticleFavorite as ArticleFavoriteSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ArticleFavoriteController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ArticleFavorite';

    public function actionListinfo()
    {
        $searchModel = new ArticleFavoriteSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ArticleFavorite());
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
