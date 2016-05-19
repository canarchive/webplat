<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;
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
        return \Yii::$app->dbGallerycms;
    }	

	public function getFieldInfos($table = null, $field = null)
	{
		$infos = [
			'article' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
			],			
			'article_category' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
			'picture_category' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
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

		return $infos[$table][$field];
	}
}
