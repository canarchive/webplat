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
		//$cityCodes = ['tj', 'sjz', 'cs', 'dl'];
		foreach ($infos as $info) {
			if ($info->status < 1) {
			//if (!in_array($info['code_short'], $cityCodes)) {
				continue;
			}
			$code = $info['code_short'];
			$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` SET `status` = 1 WHERE `city_code` = '{$code}' AND `status` = 0 ORDER BY `praise` DESC LIMIT 5;\n";
			$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` SET `status` = 1 WHERE `city_code` = '{$code}' AND `status` = 0 ORDER BY `praise` ASC LIMIT 5;\n";

		}
		$sql .= "\n\n";
		$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_realcase` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
		$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_working` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
		$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_designer` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
		$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_owner` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
		$sql .= "UPDATE `workhouse_merchant`.`wm_merchant` AS `m`, `workhouse_merchant`.`wm_merchant_comment` AS `r` SET `r`.`status` = 1 WHERE `m`.`status` = 1 AND `m`.`id` = `r`.`merchant_id`;\n";
		echo $sql;
	}
}
