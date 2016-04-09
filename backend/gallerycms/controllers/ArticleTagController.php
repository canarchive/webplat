<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ArticleTag;
use gallerycms\models\searchs\ArticleTag as ArticleTagSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ArticleTagController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ArticleTag';

    public function actionListinfo()
    {
        $searchModel = new ArticleTagSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ArticleTag());
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
