<?php

namespace spider\models;

use common\models\SpiderModel;
use yii\helpers\ArrayHelper;

class Working extends SpiderModel
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
