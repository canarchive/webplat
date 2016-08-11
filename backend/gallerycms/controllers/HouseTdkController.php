<?php

namespace backend\gallerycms\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseTdkController extends AdminController
{
	protected $modelClass = '';//gallerycms\models\HouseTdk';

    public function actionListinfo()
    {
		$datas = [
		];
        return $this->render('listinfo', $datas);
    }
}
