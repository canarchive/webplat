<?php

namespace backend\website\controllers;

use Yii;
use website\models\Brand;
use website\models\searchs\Brand as BrandSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class BrandController extends AdminController
{
	protected $modelClass = 'website\models\Brand';

    public function actionListinfo()
    {
        $searchModel = new BrandSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Brand());
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
