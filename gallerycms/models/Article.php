<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class Article extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
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
            'id' => '文章ID',
            'category_id' => '栏目ID',
            'name' => '标题',
            'thumb' => '缩略图',
            'keywords' => '关键字',
            'description' => '描述',
            'url' => '访问地址',
            'orderlist' => '排序',
            'editor' => '编辑',
            'copyfrom' => '来源',
            'content' => '内容',
            'template' => '使用模板',
            'created_at' => '录入时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }
}
