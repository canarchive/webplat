<?php

namespace gallerycms\models;

class ShootTag extends TagAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot_tag}}';
    }
}
