<?php

namespace spider\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Working extends MerchantModel
{
    public static function tableName()
    {
        return '{{%working}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }
}
