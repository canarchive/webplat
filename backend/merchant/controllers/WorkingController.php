<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Working;
use merchant\models\searchs\Working as WorkingSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class WorkingController extends AdminController
{
	protected $modelClass = 'merchant\models\Working';
    use MerchantInfoTrait;

    public function init()
    {
        parent::init();

		$this->_initInfo();
    }


    public function actionListinfo()
    {
        $searchModel = new WorkingSearch();
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
		return $this->_addInfo(new Working($data));
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
