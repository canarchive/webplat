<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Activity;
use spread\models\searchs\Activity as ActivitySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ActivityController extends AdminController
{
	protected $modelClass = 'spread\models\Activity';

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
}
