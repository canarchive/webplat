<?php

namespace backend\website\controllers;

use Yii;
use website\models\Type;
use website\models\searchs\Type as TypeSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class TypeController extends AdminController
{
	protected $modelClass = 'website\models\Type';

    public function actionListinfo()
    {
        $searchModel = new TypeSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Type());
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
