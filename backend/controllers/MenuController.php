<?php

namespace backend\controllers;

use Yii;
use backend\models\Menu;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use common\helpers\Tree;

/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends AdminController
{
	protected $modelClass = 'backend\models\Menu';

    public function behaviors()
    {
        return [];
    }

    public function actionListinfo()
    {
		return $this->_listinfoTree(new Menu());
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Menu());
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
