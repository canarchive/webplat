<?php

namespace paytrade\shoot\controllers;

use paytrade\components\Controller as PaytradeController;

class MyinfoController extends PaytradeController
{
	public $layout = '@shoot/views/default/layouts/main';
	
    public function actionOrder()
    {
		$orderInfo = new \paytrade\shoot\models\OrderInfo();
		$infos = $orderInfo->getInfosByUserId(\Yii::$app->user->id);
        return $this->render('order', ['infos' => $infos]);
    }

	public function actionOrderShow()
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

		return $this->render('order-show', $data);
	}
}
