<?php

namespace spider\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Detail extends MerchantModel
{
    
    public static function tableName()
    {
        return '{{%detail}}';
    }

    public function rules()
    {
        return [
        ];
    }

    public function attributeLabels()
    {
	}	
}
