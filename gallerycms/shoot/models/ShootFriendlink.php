<?php

namespace gallerycms\models;

class ShootFriendlink extends FriendlinkAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot_friendlink}}';
    }
}
