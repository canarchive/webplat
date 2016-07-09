<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\MerchantWorking;
use merchant\models\searchs\MerchantWorking as MerchantWorkingSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantWorkingController extends AdminController
{
	protected $modelClass = 'merchant\models\MerchantWorking';

    public function actionListinfo()
    {
        $searchModel = new MerchantWorkingSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new MerchantWorking());
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
