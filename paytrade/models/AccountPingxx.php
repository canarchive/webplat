<?php

namespace paytrade\models;

class AccountPingxx extends Account
{
	public function recordAccount($params)
	{
		$data = array(
			'user_id' => $params['user_id'],
			'orderid' => $params['orderid'],
			'orderid_info' => isset($params['orderid_info']) ? $params['orderid_info'] : 0,
			'payment_code' => $params['channel'],
			'money' => $params['money'],
			'account_type' => $params['account_type'],
			'account_at' => \Yii::$app->params['currentTime'],
			'status' => 0,
		);

		$accountModel = new \paytrade\models\Account($data);
		$return = $accountModel->save();
		$accountModel->_updateUserMoney();

		return $return;
	}

	public function callback($params)
	{
		$data = $params['data'];
		$model = self::findOne(['orderid' => $data['order_no']]);
		if (empty($model)) {
			$info = [
                'orderid' => $data['order_no'],
				'payment_code' => $data['channel'],
				'money_valid' => $data['amount'],
				'account_at_valid' => \Yii::$app->params['currentTime'],
				'account_data' => serialize($params),
				'status' => 99,
			];
		    $unusualModel = new \paytrade\models\AccountUnusual($info);
		    $return = $unusualModel->save();
			return ['status' => 400, 'message' => '订单不存在'];
		}

		$model->money_valid = $data['amount'];
		$model->account_at_valid = \Yii::$app->params['currentTime'];
		$model->account_data = serialize($params);
		if ($model->money != $data['amount']) {
		    $unusualModel = new \paytrade\models\AccountUnusual($model->toArray());
			$unusualModel->status = 98;
		    $return = $unusualModel->save();
			return ['status' => 400, 'message' => '订单金额有误'];
		}

		if (false) {//$model->status == 1) {
		    $unusualModel = new \paytrade\models\AccountUnusual($model->toArray());
			$unusualModel->status = 97;
		    $return = $unusualModel->save();
			return ['status' => 400, 'message' => '订单重复回调'];
		}

		$model->status = 1;
		$model->update(false);

		//$model->_updateUserMoney(true);

		$orderInfo = null;
		if ($model->orderid_info && $model->account_type == 'topay') {
			$orderInfo = OrderInfo::findOne(['orderid' => $model->orderid_info]);
		}
		$noPay = empty($orderInfo) || $orderInfo->status != 'order' || $orderInfo->user_id != $model->user_id || $orderInfo->pay_money != $model->money_valid;
		if ($noPay) {
			return ['status' => 400, 'message' => '支付订单不存在，或支付订单有误'];
		}

		$return = $orderInfo->pay();
		if ($return !== true) {
			return $return;
		}
		return ['status' => 200, 'message' => 'OK'];
	}
}
