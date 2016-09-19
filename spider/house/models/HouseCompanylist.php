<?php

namespace spider\house\models;

use spider\models\CompanylistAbstract;

class HouseCompanylist extends CompanylistAbstract
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_companylist}}';
    }
}
