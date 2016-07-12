<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Merchant;
use merchant\models\searchs\Merchant as MerchantSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantController extends AdminController
{
	protected $modelClass = 'merchant\models\Merchant';

    public function actionListinfo()
    {
        $searchModel = new MerchantSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Merchant());
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
