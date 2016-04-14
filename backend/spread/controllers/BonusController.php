<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\Bonus;
use spread\decoration\models\searchs\Bonus as BonusSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class BonusController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\Bonus';

    public function actionListinfo()
    {
        $searchModel = new BonusSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Bonus());
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
