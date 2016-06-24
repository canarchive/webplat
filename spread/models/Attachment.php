<?php

namespace spread\models;

use common\models\WebsiteModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    public static function getDb()
    {
        return \Yii::$app->dbSpread;
    }	

	protected function _fieldInfos()
	{
		$infos = [
			'decoration' => [
				'picture' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
				'picture_small' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 200,
    				'type' => 'image/*',
				],
				'picture_lottery' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],				
				'map' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],				
			],
		];
	}
}
