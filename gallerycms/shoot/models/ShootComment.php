<?php

namespace gallerycms\models;

class ShootComment extends CommentAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot_comment}}';
    }
}
