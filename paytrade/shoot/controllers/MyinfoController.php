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
        return $this->render('order');
    }

	public function actionOrderShow()
	{

		return $this->render('order-show');
	}
}
