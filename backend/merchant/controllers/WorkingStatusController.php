<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\WorkingStatus;
use merchant\models\searchs\WorkingStatus as WorkingStatusSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class WorkingStatusController extends AdminController
{
	protected $modelClass = 'merchant\models\WorkingStatus';

    public function actionListinfo()
    {
        $searchModel = new WorkingStatusSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new WorkingStatus());
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
