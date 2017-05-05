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

	public function getCommentInfos()
	{
		$model = new MerchantComment();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function updateJoined()
	{
	    Designer::updateAll(['is_joined' => $this->is_joined], "merchant_id = {$this->id}");
	    Owner::updateAll(['is_joined' => $this->is_joined], "merchant_id = {$this->id}");
	    Realcase::updateAll(['is_joined' => $this->is_joined], "merchant_id = {$this->id}");
	    Working::updateAll(['is_joined' => $this->is_joined], "merchant_id = {$this->id}");
	    MerchantComment::updateAll(['is_joined' => $this->is_joined], "merchant_id = {$this->id}");
	}

	public function deleteSubInfos()
	{
	    Designer::deleteAll("merchant_id = {$this->id}");
	    Owner::deleteAll("merchant_id = {$this->id}");
	    Realcase::deleteAll("merchant_id = {$this->id}");
	    Working::deleteAll("merchant_id = {$this->id}");
	    MerchantComment::deleteAll("merchant_id = {$this->id}");
	}
}
