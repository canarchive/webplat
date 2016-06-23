<?php

namespace paytrade\shoot\models;

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
			'cancel' => '取消订单',
			'service' => '服务中',
			'servicebreak' => '服务中止',
			'finish' => '完成',
		];

		return $datas;
	}	
}
