<?php

namespace spider\models;

use common\models\SpiderModel;
use yii\helpers\ArrayHelper;

class Designer extends SpiderModel
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
