<?php

namespace backend\merchant\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use merchant\models\User; 
use merchant\models\searchs\User as UserSearch;
use backend\components\AdminController;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends AdminController
{
	protected $modelClass = 'merchant\models\User';

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
		return $this->_addInfo(new User(['scenario' => 'create']));
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id, 'update');
    }
}
