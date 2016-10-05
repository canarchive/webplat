<?php

namespace spider\models;

use common\models\SpiderModel;
use yii\helpers\ArrayHelper;

class Realcase extends SpiderModel
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
