<?php

namespace paytrade\controllers;

use paytrade\components\Controller as PaytradeController;

class MyController extends PaytradeController
{
    public function actionOrder()
    {
        return $this->render('order');
    }
}
