<?php

namespace shoot\models;

use common\models\ShootModel;

class GoodsStatistic extends ShootModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_statistic}}';
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
            'goods_id' => '商品ID',
            'click_number' => '点击数',
            'favour_number' => '加购物车数',
            'comment_number' => '评论数',
            'cart_number' => '加购物车数',
            'order_number' => '订单数',
            'sold_number' => '订单数',
            'total_number' => '操作总数',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
