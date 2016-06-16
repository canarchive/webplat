<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class PingxxWebhook extends PaytradeModel
{
	public function webhook($data)
	{
		$types = $this->webhookTypes();
		$type = $data['type'];

		if (in_array($type, $types)) {
			return ;
		}

		$method = $types[$type];
		return $this->$method($data);
	}

	protected function charge($data)
	{
		$modelAccount = new \paytrade\models\AccountPingxx::findOne(['orderid' => 'order_no']);

		$model->status = 1;
		$model->orderid_plat = $data['plat'];
		$model->money_valid = $data['acount'];
		$model->accounted_valid_at = \Yii::$app->params['currentTime'];
		$model->update(false);
	
		$accountModel->_updateUserMoney(true);

		return true;
	}

    public function webhookTypes()
    {
        return [
			'charge.successded' => 'charge',
			'refund.succeeded' => '',
			'summary.daily.available' => '',
			'summary.weekly.available' => '',
			'summary.monthly.available' => '',
			'transfer.succeeded' => '',
			'red_envelope.sent' => '',
			'red_envelope.received' => '',
		];
    }
}
