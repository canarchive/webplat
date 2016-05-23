<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\Sample;
use shoot\models\searchs\Sample as SampleSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class SampleController extends AdminController
{
	protected $modelClass = 'shoot\models\Sample';

    public function actionListinfo()
    {
        $searchModel = new SampleSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Sample());
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
