<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\Lottery;
use spread\decoration\models\searchs\Lottery as LotterySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class LotteryController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\Lottery';

    public function actionListinfo()
    {
        $searchModel = new LotterySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Lottery());
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
