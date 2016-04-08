<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class ArticleTag extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_tag}}';
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
            'id' => '文章标签ID',
            'article_id' => '文章ID',
            'tag_id' => '标签ID',
        ];
    }
}
