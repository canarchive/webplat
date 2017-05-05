<?php

namespace groupbuy\models;

use common\models\GroupbuyModel;

/**
 * This is the model class for table "template".
 */
class Business extends GroupbuyModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sop_data_business';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        ];
    }
}
