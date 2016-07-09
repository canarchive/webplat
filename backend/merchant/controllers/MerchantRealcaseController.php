<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\MerchantRealcase;
use merchant\models\searchs\MerchantRealcase as MerchantRealcaseSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantRealcaseController extends AdminController
{
	protected $modelClass = 'merchant\models\MerchantRealcase';

    public function actionListinfo()
    {
        $searchModel = new MerchantRealcaseSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new MerchantRealcase());
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
