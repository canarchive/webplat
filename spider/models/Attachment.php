<?php

namespace spider\models;

use common\models\SpiderModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Attachment extends SpiderModel
{
	public $attrs;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        ];
    }
}
