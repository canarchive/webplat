<?php

namespace paytrade\shoot\controllers;

use yii\helpers\Url;
use paytrade\components\controllers\ChargeController as ChargeControllerBase;
use paytrade\shoot\models\OrderInfo;

class ChargeController extends ChargeControllerBase
{

	public function getOrderInfoModel()
	{
		return new OrderInfo();
	}
}
