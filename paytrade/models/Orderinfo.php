<?php

namespace paytrade\models;

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
			'orderid' => $this->_createSingleRandomStr(),
			'user_id' => $baseInfos['userId'],
			'status' => 0,
			'sold_number' => $cartInfos['numberAll'],
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

		$this->_addAddressInfo($infos['addressInfo'], $baseInfos);
		$this->_addGoods($cartInfos, $baseInfos);

		return ['status' => 200, 'message' => 'OK'];
	}

	protected function _addAddressInfo($addressInfo, $baseInfos)
	{
		$baseFields = ['orderid', 'invoice_get', 'invoice_type', 'invoice_title'];
		foreach ($baseFields as $field) {
			$data[$field] = $baseInfos[$field];
		}

		$fields = ['user_id', 'consignee', 'region_id', 'address', 'zipcode', 'mobile', 'sign_building', 'best_time'];
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
		foreach ($cartInfos['goodsInfos'] as $goodsInfo) {
			$info = $goodsInfo['info'];
			$data = [
				'orderid' => $baseInfos['orderid'],
				'price' => $goodsInfo['price'],
				'goods_sku' => !empty($goodsInfo['goods_sku']) ? $goodsInfo['goodsSku']->sku : '',
				'sold_number' => $goodsInfo['number'],
				'activity_id' => empty($goodsInfo['activity']) ? 0 : $goodsInfo['activity']->id,
				'activity_fee' => empty($goodsInfo['activity']) ? 0 : $goodsInfo['activity']->price,
				'goods_id' => $info['id'],
				'goods_name' => $info['name'],
				'goods_price' => $info['price'],
			];
			$model = new OrderGoods($data);
			$model->insert();
		}

		return true;
	}
}
