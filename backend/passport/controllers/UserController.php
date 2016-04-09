<?php

namespace backend\passport\controllers;

use Yii;
use passport\models\User;
use passport\models\searchs\User as UserSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use common\helpers\Tree;

class UserController extends AdminController
{
	public $modelClass = 'passport\models\User';

    public function actionListinfo()
    {
        $searchModel = new UserSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new User());
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
