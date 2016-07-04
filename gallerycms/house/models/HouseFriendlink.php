<?php

namespace gallerycms\models;

class HouseFriendlink extends FriendlinkAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_friendlink}}';
    }
}
