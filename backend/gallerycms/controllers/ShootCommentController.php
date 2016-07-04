<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootComment;
use gallerycms\models\searchs\ShootComment as ShootCommentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShootCommentController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ShootComment';

    public function actionListinfo()
    {
        $searchModel = new ShootCommentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootComment());
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
