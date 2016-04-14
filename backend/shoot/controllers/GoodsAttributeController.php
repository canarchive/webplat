<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\GoodsAttribute;
use shoot\models\searchs\GoodsAttribute as GoodsAttributeSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsAttributeController extends AdminController
{
	protected $modelClass = 'shoot\models\GoodsAttribute';

    public function actionListinfo()
    {
        $searchModel = new GoodsAttributeSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new GoodsAttribute());
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
