<?php

namespace paytrade\models;

class AccountPingxx extends Account
{
	public function recordAccount($params)
	{
		$data = array(
			'user_id' => 1,//,
			'orderid' => $this->_createSingleRandomStr(),
			'payment_code' => $params['channel'],
			'money' => $params['amount'],
			'account_type' => $params['account_type'],
			//'period' => $params['snapup_id'],
			'account_at' => \Yii::$app->params['currentTime'],
			'status' => 0,
		);
		//print_r($data);exit();

		$accountModel = new \paytrade\models\Account($data);
		$return = $accountModel->save();
		$accountModel->_updateUserMoney();

		return $return;
	}
}
