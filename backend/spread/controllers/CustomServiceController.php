<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\CustomService;
use spread\models\searchs\CustomService as CustomServiceSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CustomServiceController extends AdminController
{
	protected $modelClass = 'spread\models\CustomService';

    public function actionListinfo()
    {
        $searchModel = new CustomServiceSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new CustomService());
    }

	public function actionAddMul()
	{
		return $this->_addMulInfo(new CustomService());
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
