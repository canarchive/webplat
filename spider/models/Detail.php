<?php

namespace spider\models;

use common\models\SpiderModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Detail extends SpiderModel
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
