<?php

namespace website\info\controllers;

use website\components\Controller as WebsiteController;

class AppController extends WebsiteController
{
    public function actionMobile()
    {
        return $this->render('mobile');
    }
}
