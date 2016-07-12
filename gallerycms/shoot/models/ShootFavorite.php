<?php

namespace gallerycms\models;

class ShootFavorite extends FavoriteAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shoot_favorite}}';
    }
}
