<?php

namespace website\models;

use common\models\WebsiteModel;

class GoodsComment extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_comment}}';
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
            'id' => 'id',
            'user_id' => '用户ID',
            'goods_id' => '商品ID',
            'goods_sku_id' => 'SKU-ID',
            'order_id' => '订单ID',
            'star' => '级别',
            'content' => '内容',
            'status' => '状态',
            'created_at' => '评论时间',
        ];
    }
}
