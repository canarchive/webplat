<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootTag;
use gallerycms\models\searchs\ShootTag as ShootTagSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShootTagController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ShootTag';

    public function actionListinfo()
    {
        $searchModel = new ShootTagSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootTag());
    }

	public function actionAddMul()
	{
		return $this->_addMulInfo(new ShootTag());
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
