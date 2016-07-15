<?php

namespace spider\controllers;

use spider\components\Controller as GallerycmsController;

class SiteController extends GallerycmsController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
