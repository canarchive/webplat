<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class Shipment extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shipment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coupon'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '优惠券ID',
            'coupon' => '优惠码',
            'sort_id' => '优惠券类型',
            'user_id' => '用户ID',
            'money' => '金额',
            'goods_id' => '商品ID',
            'created_at' => '创建时间',
            'started_at' => '发放时间',
            'ended_at' => '终止时间',
            'used_time' => '使用时间',
            'status' => '状态',
        ];
    }
}
