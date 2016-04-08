<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\Spage;
use gallerycms\models\searchs\Spage as SpageSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class SpageController extends AdminController
{
	protected $modelClass = 'gallerycms\models\Spage';

    public function actionListinfo()
    {
        $searchModel = new SpageSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Spage());
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
