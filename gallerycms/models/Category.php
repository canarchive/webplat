<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class Category extends GallerycmsModel
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
            'id' => '栏目ID',
            'name' => '名称',
            'catdir' => '目录',
            'thumb' => '缩略图',
            'parent_id' => '父栏目ID',
            'orderlist' => '排序',
            'description' => '描述',
            'template' => '模板',
            'meta_title' => 'SEO名称',
            'meta_keywords' => 'SEO关键字',
            'meta_description' => 'SEO描述',
        ];
    }
}
