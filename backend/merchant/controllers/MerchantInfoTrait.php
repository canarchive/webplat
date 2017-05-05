<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Company;
use merchant\models\Merchant;
use merchant\house\models\Owner;

trait MerchantInfoTrait
{
	public $companyInfo;
	public $merchantId;
	public $ownerInfo;
	public $is_joined;
	public $owner_id;
	public $merchant_id;

    protected function _initInfo()
    {
	    $this->layout = 'main';
		$cityCode = Yii::$app->request->get('city_code', '');
		$companyModel = new Company();
		$this->companyInfo = $companyModel->getInfoByCodeShort($cityCode);
		$this->is_joined = Yii::$app->request->get('is_joined');
		$this->owner_id = Yii::$app->request->get('owner_id');
		$this->merchant_id = Yii::$app->request->get('merchant_id');
	}

	protected function _ownerInfo()
	{
		$ownerId = Yii::$app->request->post('owner_id', 0);
		if (empty($ownerId)) {
		    $ownerId = Yii::$app->request->get('owner_id', 0);
		}

		$this->ownerInfo = Owner::findOne($ownerId);
	}
}
