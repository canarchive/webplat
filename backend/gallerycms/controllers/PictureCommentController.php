<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\PictureComment;
use gallerycms\models\searchs\PictureComment as PictureCommentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PictureCommentController extends AdminController
{
	protected $modelClass = 'gallerycms\models\PictureComment';

    public function actionListinfo()
    {
        $searchModel = new PictureCommentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new PictureComment());
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
