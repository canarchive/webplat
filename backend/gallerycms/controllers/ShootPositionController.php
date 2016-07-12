<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootPosition;
use gallerycms\models\searchs\ShootPosition as ShootPositionSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ShootPositionController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ShootPosition';

    public function actionListinfo()
    {
        $searchModel = new ShootPositionSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootPosition());
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
