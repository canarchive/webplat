<?php

namespace paytrade\controllers;

use paytrade\components\Controller as PaytradeController;

class SiteController extends PaytradeController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRecharge()
    {
        return $this->render('recharge');
    }	
}
