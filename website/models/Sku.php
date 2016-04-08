<?php

namespace website\models;

use common\models\WebsiteModel;

/**
 * This is the model class for table "sku".
 */
class Sku extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sku}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['orderlist', 'category_id'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function skuLabels()
    {
        return [
            'id' => '属性ID',
            'category_id' => '分类',
            'name' => '属性名称',
            'value' => '可选值',
            'orderlist' => '排序',
        ];
    }
}
