<?php

namespace backend\spider\controllers;

use Yii;
use spider\models\ArticleTag;
use spider\models\searchs\ArticleTag as ArticleTagSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ArticleTagController extends AdminController
{
	protected $modelClass = 'spider\models\ArticleTag';

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
		return $this->_addInfo(new ArticleTagSort());
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
