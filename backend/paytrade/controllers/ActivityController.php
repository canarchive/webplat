<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\models\Activity;
use paytrade\models\searchs\Activity as ActivitySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ActivityController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new ActivitySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Activity());
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

    protected function findModel($id)
    {
        if (($model = Activity::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
