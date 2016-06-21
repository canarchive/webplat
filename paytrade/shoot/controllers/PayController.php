<?php

namespace paytrade\shoot\controllers;

use paytrade\components\Controller as PaytradeController;

class PayController extends PaytradeController
{
	public $layout = '@shoot/views/default/layouts/main';
	
    public function actionPay()
    {
		$orderid = \Yii::$app->request->get('orderid');
		if (empty($orderid)) {
			return $this->actionOrder();
		}
		$orderInfo = new \paytrade\shoot\models\OrderInfo();
		$data = $orderInfo->getInfo($orderid);
		if (empty($data)) {
			return $this->actionOrder();
		}

		return $this->render('pay', $data);
	}
}
