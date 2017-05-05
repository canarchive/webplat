<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\house\models\Merchant;
use merchant\house\models\searchs\Merchant as MerchantSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantController extends AdminController
{
    use MerchantInfoTrait;
	protected $modelClass = 'merchant\house\models\Merchant';

    public function init()
    {
        parent::init();

		$this->_initInfo();
    }

    public function actionListinfo()
    {
        $searchModel = new MerchantSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		$data = [
			'city_code' => isset($this->companyInfo['code_short']) ? $this->companyInfo['code_short'] : '',
			'is_joined' => $this->is_joined,
		];
		return $this->_addInfo(new Merchant($data));
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
