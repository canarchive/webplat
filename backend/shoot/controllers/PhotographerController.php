<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\Photographer;
use shoot\models\searchs\Photographer as PhotographerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PhotographerController extends AdminController
{
	protected $modelClass = 'shoot\models\Photographer';

    public function actionListinfo()
    {
        $searchModel = new PhotographerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Photographer());
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
