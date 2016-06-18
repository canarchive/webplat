<?php

namespace paytrade\shoot\models;

use common\models\PaytradeModel;

class OrderAddress extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_address}}';
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
}
