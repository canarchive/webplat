<?php

namespace merchant\house\models;

use merchant\models\Merchant as MerchantBase;

class Merchant extends MerchantBase
{
	public function getRealcaseInfos()
	{
		$model = new Realcase();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function getWorkingInfos()
	{
		$model = new Working();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function getDesignerInfos()
	{
		$model = new Designer();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

}
