<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\Article;
use gallerycms\models\searchs\Article as ArticleSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ArticleController extends AdminController
{
	protected $modelClass = 'gallerycms\models\Article';

    public function actionListinfo()
    {
        $searchModel = new ArticleSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Article());
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
