<?php

namespace gallerycms\models;

class HouseTag extends TagAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_tag}}';
    }
}
