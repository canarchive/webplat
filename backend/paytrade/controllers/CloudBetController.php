<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\cloud\models\Bet;
use paytrade\cloud\models\searchs\Bet as BetSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CloudBetController extends AdminController
{
	protected $modelClass = 'paytrade\cloud\models\Bet';

    public function actionListinfo()
    {
        $searchModel = new BetSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Bet());
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
