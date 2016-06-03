<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\Goods;
use shoot\models\searchs\Goods as GoodsSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsController extends AdminController
{
	protected $modelClass = 'shoot\models\Goods';

    public function actions()
    {
        return [
    
            'upload' => [
                'class' => 'common\ueditor\UEditorAction',
            ],
        ];
    }	

    public function actionListinfo()
    {
        $searchModel = new GoodsSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Goods());
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
