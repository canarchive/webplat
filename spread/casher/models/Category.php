<?php

namespace groupbuy\models;

use common\models\GroupbuyModel;

class Category extends GroupbuyModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sop_data_business_category';
    }
}
