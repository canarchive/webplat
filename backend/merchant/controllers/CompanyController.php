<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Company;
use merchant\models\searchs\Company as CompanySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CompanyController extends AdminController
{
	protected $modelClass = 'merchant\models\Company';

    public function actionListinfo()
    {
        $searchModel = new CompanySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Company());
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
