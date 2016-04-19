<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\DecorationGiftBag;
use spread\decoration\models\searchs\DecorationGiftBag as DecorationGiftBagSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DecorationGiftBagController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\DecorationGiftBag';

    public function actionListinfo()
    {
        $searchModel = new DecorationGiftBagSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new DecorationGiftBag());
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
