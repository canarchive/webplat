<?php

namespace website\models;

use common\models\WebsiteModel;

/**
 * This is the model class for table "brand".
 */
class CategoryBrand extends WebsiteModel
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category_brand}}';
    }
}
