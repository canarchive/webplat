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

	public function getFieldInfos($table = null, $field = null)
	{
		$infos = [
			'sample' => [
				'picture' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
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
