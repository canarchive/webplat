<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\PosMachine;
use spread\decoration\models\searchs\PosMachine as PosMachineSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PosMachineController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\PosMachine';

    public function actionListinfo()
    {
        $searchModel = new PosMachineSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new PosMachine());
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
