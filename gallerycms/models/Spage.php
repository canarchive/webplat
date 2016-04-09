<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class Spage extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%spage}}';
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
            'id' => '单网页ID',
            'category_id' => '栏目ID',
            'name' => '标题',
            'content' => '内容',
            'editor' => '录入者',
            'template' => '使用模板',
            'created_at' => '录入时间',
            'updated_at' => '更新时间',
        ];
    }
}
