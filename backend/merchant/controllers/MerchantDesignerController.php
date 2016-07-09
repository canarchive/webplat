<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\MerchantDesigner;
use merchant\models\searchs\MerchantDesigner as MerchantDesignerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantDesignerController extends AdminController
{
	protected $modelClass = 'merchant\models\MerchantDesigner';

    public function actionListinfo()
    {
        $searchModel = new MerchantDesignerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new MerchantDesigner());
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
