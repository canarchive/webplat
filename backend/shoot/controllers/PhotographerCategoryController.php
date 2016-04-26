<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\PhotographerCategory;
use shoot\models\searchs\PhotographerCategory as PhotographerCategorySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PhotographerCategoryController extends AdminController
{
	protected $modelClass = 'shoot\models\PhotographerCategory';

    public function actionListinfo()
    {
        $searchModel = new PhotographerCategorySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new PhotographerCategory());
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
