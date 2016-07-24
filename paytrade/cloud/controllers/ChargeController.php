<?php

namespace paytrade\controllers;

use paytrade\components\ChargeController as ChargeControllerBase;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\components\ResponseCode;
use paytrade\components\Pingxx;
use paytrade\models\Account;

class ChargeController extends ChargeControllerBase
{
	public $enableCsrfValidation = false;

	public function actionPay()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (\Yii::$app->user->isGuest) {
			//return $this->returnInfo('NEED_LOGIN');
		}

        $pingxx = new Pingxx();
		$params = $pingxx->getParams();
		$accountType = $params['account_type'];
		$accountType = in_array($accountType, Account::getAccountTypes()) ? $accountType : 'toaccount';
		if ($accountType == 'topay') {
			/*$checkSnapup = GoodsSnapup::checkSnapup($params['snapup_id']);
			if ($checkSnapup['status'] != 2000000) {
				return $checkSnapup;
			}*/
		}

	    $return = $pingxx->pay($params);
		if (isset($return['status'])) {
			$returnInfo = $this->returnInfo('PINGXX_CHARGE_ERROR', $return);
			$returnInfo['message'] = $return['message'];
			return $returnInfo;
		}

		$this->_confirmCharge(array_merge($return, $params));
		return $return;
	}
}
