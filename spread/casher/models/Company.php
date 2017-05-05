<?php

namespace spread\casher\models;

use common\models\GroupbuyModel;

/**
 * This is the model class for table "template".
 */
class Company extends GroupbuyModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sop_data_company';
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
