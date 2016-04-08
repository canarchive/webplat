<?php

namespace website\models;

use common\models\WebsiteModel;

class GoodsSku extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_sku}}';
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
            'id' => '商品属性ID',
            'goods_id' => '商品ID',
            'sku_id' => 'SKU-ID',
            'value' => '属性值',
            'price' => '价格',
            'inventory' => '库存',
        ];
    }
}
