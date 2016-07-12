<?php

namespace gallerycms\models;

class ShootCategory extends CategoryAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot_category}}';
    }
}
