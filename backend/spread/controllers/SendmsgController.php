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

    public function actionSend($code)
    {
		$this->layout = '@backend/views/charisma/document/layout';
        echo $this->render($code);
		exit();
    }
}
