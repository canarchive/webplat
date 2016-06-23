<?php

namespace paytrade\components\controllers;

use Yii;
use paytrade\components\Controller as PaytradeController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\components\ResponseCode;
use paytrade\components\Pingxx;
use paytrade\models\Account;
use paytrade\models\AccountPingxx;

class ChargeController extends PaytradeController
{
	public $enableCsrfValidation = false;

	public function actionPay()
	{
		Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (Yii::$app->user->isGuest) {
			//return $this->returnInfo('NEED_LOGIN');
		}

        $pingxx = new Pingxx();
		$params = $pingxx->getParams();
		if (isset($params['status']) && $params['status'] == 400) {
			return $params;
		}

		$account = new Account();
		$orderInfo = $this->getOrderInfoModel();
		$checkParams = $account->checkParams($params, $orderInfo);
		if ($checkParams['status'] != 200) {
			return $checkParams;
		}

		$params['orderid'] = $account->createSingleRandomStr();
	    $return = $pingxx->pay($params);
		if (isset($return['status'])) {
			return ['status' => 400, 'message' => $return['message']];
		}

		$params['user_id'] = isset(Yii::$app->user->id) ? Yii::$app->user_id : 0;
		$modelAccount = new AccountPingxx();
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
			$modelAccount = AccountPingxx();
			$modelAccount->callback($data);
			break;
		case 'refund.succeeded':
		case '':
		default:
		}
        http_response_code(200); // PHP 5.4 or greater
	}

	protected function checkParams($params)
	{
	}
}
