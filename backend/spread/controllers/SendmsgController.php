<?php

namespace backend\spread\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class SendmsgController extends AdminController
{

    public function actionListinfo()
    {
        return $this->render('listinfo');
    }

    public function actionSend()
    {
		return $this->render('send');
    }
}
