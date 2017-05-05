<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\BonusLog;
use spread\decoration\models\searchs\BonusLog as BonusLogSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class BonusLogController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\BonusLog';

    public function actionListinfo()
    {
        $searchModel = new BonusLogSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new BonusLog());
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
