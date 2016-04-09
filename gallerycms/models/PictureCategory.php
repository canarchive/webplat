<?php

namespace gallerycms\models;

class PictureCategory extends CategoryAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%picture_category}}';
    }
}
