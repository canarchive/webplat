<?php

namespace spider\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Comment extends MerchantModel
{
    public static function tableName()
    {
        return '{{%merchant_comment}}';
    }

}
