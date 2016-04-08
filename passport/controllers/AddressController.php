<?php
namespace passport\controllers;

use passport\components\Controller as PassportController;

class AddressController extends PassportController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
