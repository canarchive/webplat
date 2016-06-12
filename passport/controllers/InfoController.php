<?php
namespace passport\controllers;

use passport\components\Controller as PassportController;

class InfoController extends PassportController
{
    public function actionSetting()
    {
        return $this->render('setting');
    }

    public function actionAddress()
    {
        return $this->render('address');
    }

}
