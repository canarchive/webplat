<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\Category;
use shoot\models\searchs\Category as CategorySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CategoryController extends AdminController
{
	protected $modelClass = 'shoot\models\Category';

    public function actionListinfo()
    {
        $searchModel = new CategorySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Category());
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
