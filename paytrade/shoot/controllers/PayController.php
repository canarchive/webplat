<?php

namespace paytrade\shoot\controllers;

use paytrade\components\Controller as PaytradeController;

class PayController extends PaytradeController
{
	public $layout = '@shoot/views/default/layouts/main';
	
    public function actionPay()
    {
		$orderid = \Yii::$app->request->get('orderid');
		$orderInfo = new \paytrade\shoot\models\OrderInfo();
		$info = $orderInfo->getInfo($orderid);
		if ($info['status'] != 200) {
			return $this->redirect(Url::to(['myinfo/order']))->send();
		}
		$data = $info['data']->formatInfo();
		//print_r($data);exit();

		return $this->render('pay', $data);
	}
}
