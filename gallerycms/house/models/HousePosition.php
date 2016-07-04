<?php

namespace gallerycms\models;

class HousePosition extends PositionAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_position}}';
    }
}
