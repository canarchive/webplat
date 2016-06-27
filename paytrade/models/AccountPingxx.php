<?php

namespace paytrade\models;

use Yii;

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
			'account_at' => Yii::$app->params['currentTime'],
			'account_at_day' => date('Ymd', Yii::$app->params['currentTime']),
			'status' => 0,
		);

		$accountModel = new Account($data);
		$return = $accountModel->save();
		$userPaytrade = new UserPaytrade();
		$payResult = $userPaytrade->updateInfo('want', ['user_id' => $params['user_id'], 'money' => $params['money']]);

		return $return;
	}

	public function callback($data, $orderInfoModel)
	{
		$checkUnusual = $this->checkUnusual($data);
		if ($checkUnusual['status'] == 400) {
			return $checkUnusual;
		}

		$model = $checkUnusual['data'];
		$model->status = 1;
		$model->update(false);

		$userPaytrade = new UserPaytrade();
		$payResult = $userPaytrade->updateInfo('valid', ['user_id' => $model->user_id, 'money' => $data['amount']]);

		if ($model->orderid_info && $model->account_type == 'topay') {
			$return = $orderInfoModel->pay($model);
			return $return;
		}
		return ['status' => 200, 'message' => 'OK'];
	}

	protected function checkUnusual($data)
	{
		$model = self::findOne(['orderid' => $data['order_no']]);
		if (empty($model)) {
			$info = [
                'orderid' => $data['order_no'],
				'payment_code' => $data['channel'],
				'money_valid' => $data['amount'],
				'account_at_valid' => Yii::$app->params['currentTime'],
				'account_data' => serialize($data),
				'status' => 99,
			];
		    $unusualModel = new AccountUnusual($info);
		    $return = $unusualModel->save();
			return ['status' => 400, 'message' => '订单不存在'];
		}

		$model->money_valid = $data['amount'];
		$model->account_at_valid = Yii::$app->params['currentTime'];
		$model->account_data = serialize($data);
		if ($model->money != $data['amount']) {
		    $unusualModel = new AccountUnusual($model->toArray());
			$unusualModel->status = 98;
		    $return = $unusualModel->save();
			return ['status' => 400, 'message' => '订单金额有误'];
		}

		if (false) {//$model->status == 1) {
		    $unusualModel = new AccountUnusual($model->toArray());
			$unusualModel->status = 97;
		    $return = $unusualModel->save();
			return ['status' => 400, 'message' => '订单重复回调'];
		}

		return ['status' => 200, 'message' => 'OK', 'data' => $model];
	}
}
