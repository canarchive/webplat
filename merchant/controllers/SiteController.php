<?php

namespace merchant\controllers;

use merchant\components\Controller as MerchantController;

class SiteController extends MerchantController
{
    public function actionIndex()
    {
		$this->redirect('http://www.17house.com/');
    }
}
