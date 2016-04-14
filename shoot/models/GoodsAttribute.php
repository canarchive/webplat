<?php

namespace shoot\models;

use common\models\ShootModel;

class GoodsAttribute extends ShootModel
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
