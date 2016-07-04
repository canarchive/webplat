<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootInternalChain;
use gallerycms\models\searchs\ShootInternalChain as ShootInternalChainSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShootInternalChainController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ShootInternalChain';

    public function actionListinfo()
    {
        $searchModel = new ShootInternalChainSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootInternalChain());
    }

	public function actionAddMul()
	{
		return $this->_addMulInfo(new ShootInternalChain());
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
