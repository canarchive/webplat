<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class Bet extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bet}}';
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
            'id' => '抢购ID',
            'orderid' => '订单号',
            'user_id' => '用户ID',
            'sn' => '幸运号码',
            'created_at' => '创建时间',
            'created_at_ext' => '毫秒数',
            'ip' => 'IP地址',
            'status' => '状态，0：未中奖；1：中奖；',
        ];
    }

	public function createSn($orderid, $snapupId, $userId, $number)
	{
		for ($i = 1; $i <= $number; $i++) {
    		$data = [
    			'orderid' => $orderid,
    			'snapup_id' => $snapupId,
    			'user_id' => $userId,
    			'sn' => '111',
    		];
    		$model = new self($data);
    		$model->insert(false);
		}
		return true;
	}
}
