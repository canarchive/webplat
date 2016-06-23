<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class OrderStatus extends PaytradeModel
{
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
            'status' => '状态',
            'created_time' => '创建时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'order' => '下单',
			'cancel' => '取消订单',
			'finish' => '完成',
		];

		return $datas;
	}

	public function getStatusPayInfos()
	{
		$datas = [
			'' => '未支付',
			'earnest' => '已付定金',
			'finish' => '支付完成',
		];

		return $datas;
	}

	public function getStatusRefundInfos()
	{
		$datas = [
			'apply' => '申请退款',
			'finish' => '已退款',
		];

		return $datas;
	}

	public static function statusChange($data)
	{
		$self = new SELF($data);
		$self->save();
	}
}
