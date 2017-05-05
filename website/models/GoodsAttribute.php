<?php

namespace website\models;

use common\models\WebsiteModel;

class GoodsAttribute extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_attribute}}';
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
            'attribute_id' => '属性ID',
            'value' => '属性值',
        ];
    }
}
