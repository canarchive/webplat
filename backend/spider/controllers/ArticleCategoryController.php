<?php

namespace backend\spider\controllers;

use Yii;
use spider\models\ArticleCategory;
use spider\models\searchs\ArticleCategory as ArticleCategorySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ArticleCategoryController extends AdminController
{
	protected $modelClass = 'spider\models\ArticleCategory';

    public function actionListinfo()
    {
        $searchModel = new ArticleCategorySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ArticleCategorySort());
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
