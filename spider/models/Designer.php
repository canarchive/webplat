<?php

namespace spider\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Designer extends MerchantModel
{
    public static function tableName()
    {
        return '{{%designer}}';
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
