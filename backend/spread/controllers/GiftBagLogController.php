<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\GiftBagLog;
use spread\decoration\models\searchs\GiftBagLog as GiftBagLogSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GiftBagLogController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\GiftBagLog';

    public function actionListinfo()
    {
        $searchModel = new GiftBagLogSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new GiftBagLog());
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
