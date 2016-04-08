<?php

namespace backend\passport\controllers;

use Yii;
use passport\models\UserAddress;
use passport\models\searchs\UserAddress as UserAddressSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class UserAddressController extends AdminController
{
	public $modelClass = '\passport\models\UserAddress';

    public function actionListinfo()
    {
        $searchModel = new UserAddressSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new UserAddress());
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
