<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\InternalChain;
use gallerycms\models\searchs\InternalChain as InternalChainSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class InternalChainController extends AdminController
{
	protected $modelClass = 'gallerycms\models\InternalChain';

    public function actionListinfo()
    {
        $searchModel = new InternalChainSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new InternalChain());
    }

	public function actionAddMul()
	{
		return $this->_addMulInfo(new InternalChain());
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
