<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\house\models\MerchantNote;
use merchant\house\models\searchs\MerchantNote as MerchantNoteSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantNoteController extends AdminController
{
	protected $modelClass = 'merchant\house\models\MerchantNote';

    public function actionListinfo()
    {
        $searchModel = new MerchantNoteSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id);
    }
}
