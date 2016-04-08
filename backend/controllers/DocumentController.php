<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DocumentController extends AdminController
{

    /**
     * Lists all Document models.
     * @return mixed
     */
    public function actionListinfo()
    {
        return $this->render('listinfo');
    }

    public function actionView($code)
    {
		$this->layout = '@backend/views/charisma/document/layout';
        echo $this->render($code);
		exit();
    }
}
