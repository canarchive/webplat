<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\Position;
use shoot\models\searchs\Position as PositionSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PositionController extends AdminController
{
	protected $modelClass = 'shoot\models\Position';

    public function actionListinfo()
    {
        $searchModel = new PositionSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Position());
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
