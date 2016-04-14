<?php

namespace shoot\models;

use common\models\ShootModel;

class Category extends ShootModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
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
            'name' => '名称',
            'code' => '代码',
            'description' => '描述',
            'parent_id' => '父级分类ID',
            'orderlist' => '排序',
            'status' => '状态',
        ];
    }
}
