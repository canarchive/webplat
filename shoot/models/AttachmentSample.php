<?php

namespace shoot\models;

class AttachmentSample extends Attachment
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sample}}';
    }

    public static function getDb()
    {
        return \Yii::$app->dbShoot;
    }

	protected function _fieldInfos()
	{
		return [
			'sample' => [
				'picture' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
			],
		];
		return $infos[$table][$field];
	}
}
