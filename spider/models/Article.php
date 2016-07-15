<?php

namespace spider\models;

use common\models\SpiderModel;

class Article extends SpiderModel
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
            'editor' => '编辑',
            'copyfrom' => '来源',
            'content' => '内容',
            'created_at' => '录入时间',
            'updated_at' => '更新时间',
            'site_code' => '源站代码',
            'site_category' => '站点栏目',
            'site_url' => '原始URL',
            'site_job' => '任务名称',
            'status' => '状态',
        ];
    }
}
