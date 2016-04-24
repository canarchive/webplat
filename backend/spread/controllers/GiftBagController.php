<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\GiftBag;
use spread\decoration\models\searchs\GiftBag as GiftBagSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GiftBagController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\GiftBag';

    public function actionListinfo()
    {
        $searchModel = new GiftBagSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new GiftBag());
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
