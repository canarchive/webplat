<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\Picture;
use gallerycms\models\searchs\Picture as PictureSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PictureController extends AdminController
{
	protected $modelClass = 'gallerycms\models\Picture';

    public function actionListinfo()
    {
        $searchModel = new PictureSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Picture());
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
