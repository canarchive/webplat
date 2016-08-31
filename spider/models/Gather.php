<?php

namespace spider\models;

use common\models\SpiderModel;

class Gather extends SpiderModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gather}}';
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
            'id' => '栏目ID',
            'name' => '名称',
            'parent_id' => '父栏目ID',
            'orderlist' => '排序',
            'description' => '描述',
            'meta_title' => 'SEO名称',
            'meta_keywords' => 'SEO关键字',
            'meta_description' => 'SEO描述',
        ];
    }
}
