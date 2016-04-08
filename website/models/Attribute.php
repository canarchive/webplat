<?php

namespace website\models;

use common\models\WebsiteModel;

/**
 * This is the model class for table "attribute".
 */
class Attribute extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
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
    public function attributeLabels()
    {
        return [
            'id' => '属性ID',
            'type_id' => '类型ID',
            'name' => '属性名称',
            'values' => '可选值',
            'orderlist' => '排序',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }
}
