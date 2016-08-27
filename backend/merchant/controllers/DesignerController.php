<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Designer;
use merchant\models\searchs\Designer as DesignerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DesignerController extends AdminController
{
	protected $modelClass = 'merchant\models\Designer';

    public function actionListinfo()
    {
        $searchModel = new DesignerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		$data = [
			'merchant_id' => Yii::$app->request->get('merchant_id', 0),
		];
		return $this->_addInfo(new Designer($data));
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
