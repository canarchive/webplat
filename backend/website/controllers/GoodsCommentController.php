<?php

namespace backend\website\controllers;

use Yii;
use website\models\GoodsComment;
use website\models\searchs\GoodsComment as GoodsCommentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsCommentController extends AdminController
{
	protected $modelClass = 'website\models\GoodsComment';

    public function actionListinfo()
    {
        $searchModel = new GoodsCommentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new GoodsComment());
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
