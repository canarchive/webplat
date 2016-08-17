<?php

namespace backend\website\controllers;

use Yii;
use website\models\Attribute;
use website\models\searchs\Attribute as AttributeSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class AttributeController extends AdminController
{
	protected $modelClass = 'website\models\Attribute';

    public function actionListinfo()
    {
        $searchModel = new AttributeSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Attribute());
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
