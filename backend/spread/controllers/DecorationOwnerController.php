<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\DecorationOwner;
use spread\decoration\models\searchs\DecorationOwner as DecorationOwnerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DecorationOwnerController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\DecorationOwner';

    public function actionListinfo()
    {
        $searchModel = new DecorationOwnerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new DecorationOwner());
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
