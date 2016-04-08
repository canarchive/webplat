<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ArticleComment;
use gallerycms\models\searchs\ArticleComment as ArticleCommentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ArticleCommentController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ArticleComment';

    public function actionListinfo()
    {
        $searchModel = new ArticleCommentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ArticleComment());
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
