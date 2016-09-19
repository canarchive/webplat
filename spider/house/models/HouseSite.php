<?php

namespace spider\house\models;

use spider\models\SiteAbstract;

class HouseSite extends SiteAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_site}}';
    }
}
