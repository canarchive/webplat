<?php

namespace spider\models;

use Yii;
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

    public static function getDb()
    {
        return Yii::$app->db;
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
