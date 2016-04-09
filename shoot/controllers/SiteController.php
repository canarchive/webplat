<?php

namespace shoot\controllers;

use shoot\components\Controller as ShootController;

class SiteController extends ShootController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
