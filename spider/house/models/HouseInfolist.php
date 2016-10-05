<?php

namespace spider\house\models;

use common\models\SpiderModel;
use spider\models\CompanylistAbstract;

class HouseInfolist extends SpiderModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_infolist}}';
    }
}
