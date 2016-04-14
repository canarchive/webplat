<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\LotteryLog;
use spread\decoration\models\searchs\LotteryLog as LotteryLogSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class LotteryLogController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\LotteryLog';

    public function actionListinfo()
    {
        $searchModel = new LotteryLogSearch();
		return $this->_listinfoInfo($searchModel);
    }

	public function actionDayinfo()
	{
		echo 'sss';
	}

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new LotteryLog());
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
