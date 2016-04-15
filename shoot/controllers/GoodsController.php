<?php

namespace shoot\controllers;

use shoot\components\Controller as ShootController;

class GoodsController extends ShootController
{
    public function actionList()
    {
        return $this->render('list');
    }

    public function actionShow()
    {
        return $this->render('show');
    }
}
