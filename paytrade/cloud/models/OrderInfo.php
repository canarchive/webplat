<?php

namespace paytrade\cloud\models;

use common\models\PaytradeModel;

class OrderInfo extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_info}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderid' => '订单号',
            'snapup_id' => '商品ID',
            'user_id' => '用户ID',
            'pay_money' => '支付金额',
            'pay_type' => '支付类型：0，余额支付；1，红包支付；',
            'created_time' => '创建时间',
            'paid_at' => '支付时间',
            'status' => '状态',
        ];
    }

	public function createOrder($infos, $baseInfos)
	{
		$cartInfos = $infos['cartInfos'];
		$data = [
			'orderid' => $this->createSingleRandomStr(),
			'user_id' => $baseInfos['userId'],
			'status' => 'order',
			'number' => $cartInfos['numberAll'],
			'pay_money' => $baseInfos['priceAll'],
		];

		$model = new self($data);
		$model->insert(false);
		$baseInfos['orderid'] = $model->orderid;

		$dataStatus = [
			'orderid' => $model->orderid, 
			'status' => 'order', 
			'description' => '您提交了订单，请等待系统确认',
			'created_at' => \Yii::$app->params['currentTime'],
		];
		$modelStatus = new OrderStatus($dataStatus);
		$modelStatus->insert(false);

        //$this->_addAddressInfo($infos['addressInfo'], $baseInfos);
        $this->_addGoods($cartInfos, $baseInfos);

        return ['status' => 200, 'message' => 'OK'];
    }   

    protected function _addAddressInfo($addressInfo, $baseInfos)
    {   
        $baseFields = ['orderid', 'invoice_get', 'invoice_type', 'invoice_title'];
        foreach ($baseFields as $field) {
            $data[$field] = $baseInfos[$field];
        }   

        $fields = ['user_id', 'consignee', 'region_code', 'address', 'zipcode', 'mobile', 'sign_building', 'best_time'];
        foreach ($fields as $field) {
            $data[$field] = $addressInfo->$field;
        }   
        $data['sign_building'] = !empty($baseInfos['sign_building']) ? $baseInfos['sign_building'] : $addressInfo->sign_building;
        $data['best_time'] = !empty($baseInfos['best_time']) ? $baseInfos['best_time'] : $addressInfo->best_time;

        $model = new OrderAddress($data);
        $model->insert(false);

        return true;
    } 

	protected function _addGoods($cartInfos, $baseInfos)
	{
		foreach ($cartInfos['infos'] as $info) {
			$data = [
				'orderid' => $baseInfos['orderid'],
				'price' => $info['number'],
				'number' => $info['number'],
				'snapup_id' => $info['snapup_id'],
				'period' => $info['snapupInfo']['period'],
				'goods_id' => $info['goodsInfo']['id'],
				'goods_name' => $info['goodsInfo']['name'],
				'goods_price' => $info['goodsInfo']['price'],
			];
			$model = new OrderGoods($data);
			$model->insert();
		}

		return true;
	}

	public function pay()
	{
		$modelUserPaytrade = new \paytrade\models\UserPaytrade();
		$userPay = $modelUserPaytrade->updateInfo('pay', ['user_id' => $this->user_id, 'money' => $this->pay_money]);
		if ($userPay !== true) {
			return $userPay;
		}

		$betModel = new Bet();
		$orderGoods = OrderGoods::find()->where(['orderid' => $this->orderid])->all();
		$remainMoney = 0;
		$ip = \Yii::$app->request->getIP();
		$city = \common\components\IP::find($ip);
		$city = is_array($city) ? implode('-', $city) : $city;
		foreach ($orderGoods as $orderGoods) {
			$snapupInfo = \website\models\GoodsSnapup::findOne($orderGoods['snapup_id']);
			if (empty($snapupInfo)) {
				$remainMoney += $orderGoods['price'];
				continue;
			}
			$remainNumber = $snapupInfo['bet_number_total'] - $snapupInfo['bet_number'];
			$number = $remainNumber < $orderGoods['number'] ? $remainNumber : $orderGoods['number'];
			$remainMoney += $orderGoods['number'] - $number;
			$snapupInfo->updateCounters(['bet_number' => $number]);
			$betModel->createSn($this->orderid, $orderGoods['snapup_id'], $this->user_id, $number, $ip, $city);
		}

		$modelUserPaytrade->updateInfo('pay', ['user_id' => $this->user_id, 'money' => -$remainMoney]);

		return true;
	}
}
