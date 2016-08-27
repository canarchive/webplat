<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Realcase;
use merchant\models\searchs\Realcase as RealcaseSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class RealcaseController extends AdminController
{
	protected $modelClass = 'merchant\models\Realcase';

    public function actionListinfo()
    {
        $searchModel = new RealcaseSearch();
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
		return $this->_addInfo(new Realcase($data));
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
