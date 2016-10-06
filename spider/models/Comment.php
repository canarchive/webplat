<?php

namespace spider\models;

use common\models\SpiderModel;
use yii\helpers\ArrayHelper;

class Comment extends SpiderModel
{
    public static function tableName()
    {
        return '{{%merchant_comment}}';
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
