<?php

namespace backend\gallerycms\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class TdkInfoController extends AdminController
{
	protected $modelClass = '';//gallerycms\models\HouseTdk';

    public function actionListinfo()
    {
		$tdkInfos = require(Yii::getAlias('@gallerycms') . '/config/params-tdk.php');
		$urlInfos = require(Yii::getAlias('@gallerycms') . '/config/params-url.php');
		$datas = [
			'tdkInfos' => $tdkInfos,
			'urlInfos' => $urlInfos,
			'domain' => Yii::$app->params['baseDomain'],
		];
        return $this->render('listinfo', $datas);
    }
}
