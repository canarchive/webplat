<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class OrderStatus extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_status}}';
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
            'status' => '状态',
            'created_time' => '创建时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'order' => '下单',
			'pay' => '支付',
			'sending' => '发货',
			'recieve' => '签收',
			'finish' => '完成',
			'cancel_before_recieve' => '签收前取消',
			'cancel_after_recieve' => '签收后取消',
		];

		return $datas;
	}
}
