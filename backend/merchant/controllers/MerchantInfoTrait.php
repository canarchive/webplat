<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Company;
use merchant\models\Merchant;
use merchant\house\models\Owner;

trait MerchantInfoTrait
{
	public $companyInfo;
	public $merchantInfo;
	public $ownerInfo;
	public $is_joined;

    protected function _initInfo()
    {
	    $this->layout = 'main';
		$merchantId = Yii::$app->request->get('merchant_id', 0);
    	$merchantModel = new Merchant();
    	$this->merchantInfo = $merchantModel->findOne($merchantId);
    	Yii::$app->params['merchantInfo'] = $this->merchantInfo;

		$cityCode = Yii::$app->request->get('city_code', '');
		if (empty($cityCode)) {
			$cityCode = isset($this->merchantInfo['city_code']) ? $this->merchantInfo['city_code'] : '';
		}
		$companyModel = new Company();
		$this->companyInfo = $companyModel->getInfoByCodeShort($cityCode);
		Yii::$app->params['companyInfo'] = $this->companyInfo;
		if (!empty($this->companyInfo) && !empty($this->merchantInfo) && $this->companyInfo['code_short'] != $this->merchantInfo['city_code']) {
			exit('信息有误！');
		}
		Yii::$app->params['is_joined'] = Yii::$app->request->get('is_joined');
		//$_POST['merchant_id'] = isset($this->merchantInfo['id']) ? $this->merchantInfo['id'] : 0;
		//$_POST['city_code'] = isset($this->companyInfo['code_short']) ? $this->companyInfo['code_short'] : '';
	}

	protected function _ownerInfo()
	{
		$ownerId = Yii::$app->request->post('owner_id', 0);
		if (empty($ownerId)) {
		    $ownerId = Yii::$app->request->get('owner_id', 0);
		}
		var_dump($ownerId);

		$this->ownerInfo = Owner::findOne($ownerId);
	}
}
