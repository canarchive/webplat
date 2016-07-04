<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\HouseInternalChain;
use gallerycms\models\searchs\HouseInternalChain as HouseInternalChainSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseInternalChainController extends AdminController
{
	protected $modelClass = 'gallerycms\models\HouseInternalChain';

    public function actionListinfo()
    {
        $searchModel = new HouseInternalChainSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HouseInternalChain());
    }

	public function actionAddMul()
	{
		return $this->_addMulInfo(new HouseInternalChain());
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
