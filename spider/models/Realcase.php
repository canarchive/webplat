<?php

namespace spider\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class Realcase extends MerchantModel
{
    public static function tableName()
    {
        return '{{%realcase}}';
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
