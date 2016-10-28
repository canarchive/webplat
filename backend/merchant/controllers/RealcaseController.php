<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\house\models\Realcase;
use merchant\house\models\searchs\Realcase as RealcaseSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class RealcaseController extends AdminController
{
	protected $modelClass = 'merchant\house\models\Realcase';
    use MerchantInfoTrait;

    public function init()
    {
        parent::init();

		$this->_initInfo();
		$this->_ownerInfo();
    }

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
			'city_code' => isset($this->ownerInfo['city_code']) ? $this->ownerInfo['city_code'] : '',
			'merchant_id' => isset($this->ownerInfo['merchant_id']) ? $this->ownerInfo['merchant_id'] : '',
			'owner_id' => isset($this->ownerInfo['id']) ? $this->ownerInfo['id'] : '',
		];
		print_r($data);
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
