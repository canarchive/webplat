<?php

namespace paytrade\controllers;

use paytrade\components\Controller as PaytradeController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\components\ResponseCode;
use paytrade\components\Pingxx;
use paytrade\models\Account;

class AccountController extends PaytradeController
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

		$modelAccount = new \paytrade\models\AccountPingxx();
		$modelAccount->recordAccount(array_merge($return, $params));

		return $return;
	}

	public function actionPingback()
	{
        $pingxx = new \paytrade\components\Pingxx();
		$result = $pingxx->verifySignature();

        if (empty($result)) {
            http_response_code(400);
            echo 'verification failed';
            exit;
		}

		$data = $result['data'];
		$eventType = $data['type'];
		switch ($eventType) {
		case 'charge.succeeded':
			$modelAccount = new \paytrade\models\AccountPingxx();
			$modelAccount->callback($data);
			break;
		case 'refund.succeeded':
		case '':
		default:
		}
        http_response_code(200); // PHP 5.4 or greater
	}
}
