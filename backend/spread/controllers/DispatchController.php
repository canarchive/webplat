<?php

namespace backend\spread\controllers;

use Yii;
use merchant\house\models\OwnerMerchant;
use merchant\house\models\searchs\OwnerMerchant as OwnerMerchantSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DispatchController extends AdminController
{
	protected $modelClass = 'merchant\house\models\OwnerMerchant';

    public function actionListinfo()
    {
        $searchModel = new OwnerMerchantSearch();
		return $this->_listinfoInfo($searchModel);
    }
}
