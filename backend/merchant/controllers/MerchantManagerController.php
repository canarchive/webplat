<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Company;
use merchant\models\searchs\Company as CompanySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantManagerController extends AdminController
{
	protected $modelClass = 'merchant\models\Company';

    public function actionListinfo()
    {
        $searchModel = new CompanySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionListself()
    {
        $searchModel = new CompanySearch();
		return $this->_listinfoInfo($searchModel);
    }
}
