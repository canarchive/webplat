<?php

namespace spread\decoration\controllers;

use Yii;
use yii\helpers\Url;
use spread\components\Controller;
use spread\decoration\models\SignupForm;

class TestController extends Controller
{
	public function actionTest()
	{
		$sql = '';
		$infos = Yii::$app->params['companyInfos'];
		foreach ($infos as $info) {
			$code = $info['code_short'];
			$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` SET `status` = 1 WHERE `status` = 0 LIMIT 10;\n";

		}
		echo $sql;
	}
}
