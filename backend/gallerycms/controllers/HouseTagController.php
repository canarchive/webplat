<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\HouseTag;
use gallerycms\models\searchs\HouseTag as HouseTagSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseTagController extends AdminController
{
	protected $modelClass = 'gallerycms\models\HouseTag';

    public function actionListinfo()
    {
        $searchModel = new HouseTagSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HouseTag());
    }

	public function actionAddMul()
	{
		return $this->_addMulInfo(new HouseTag());
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
