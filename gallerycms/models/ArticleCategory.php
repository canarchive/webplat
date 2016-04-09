<?php

namespace gallerycms\models;

class ArticleCategory extends CategoryAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_category}}';
    }
}
