<?php

namespace gallerycms\models;

class ShootPosition extends PositionAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot_position}}';
    }
}
