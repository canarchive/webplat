<?php

namespace paytrade\cloud\models;

use paytrade\models\OrderStatus as OrderStatusBase;

class OrderStatus extends OrderStatusBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_status}}';
    }

	public function getStatusInfos()
	{
		$datas = [
			'order' => '下单',
			'paid' => '已支付',
		];

		return $datas;
	}	
}
