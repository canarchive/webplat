<?php

namespace paytrade\controllers;

use paytrade\components\Controller as PaytradeController;
use paytrade\components\Pingxx;

class PingController extends PaytradeController
{
	public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionPay()
	{
        $pingxx = new Pingxx();

	    $return = $pingxx->pay();
		echo $return;
		exit();
	}
}
