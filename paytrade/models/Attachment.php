<?php

namespace paytrade\models;

<<<<<<< HEAD:paytrade/models/Attachment.php
use common\models\WebsiteModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
=======
use Yii;
use common\models\SpiderModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Attachment extends SpiderModel
>>>>>>> web-house:spider/models/Attachment.php
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
<<<<<<< HEAD:paytrade/models/Attachment.php
        return \Yii::$app->dbPaytrade;
    }	

	public function getFieldInfos($table = null, $field = null)
	{
		$infos = [
			'activity' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
			'coupon_sort' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 100,
    				'type' => 'image/*',
				],
			],			
		];

		if (is_null($table) && is_null($field)) {
			return $infos;
		}

		if (!isset($infos[$table])) {
			return false;
		}
		if (is_null($field)) {
			return $infos[$table];
		}
		if (!isset($infos[$table][$field])) {
			return false;
		}
=======
        return Yii::$app->dbMaster;
    }	

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }
>>>>>>> web-house:spider/models/Attachment.php

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        ];
    }
}
