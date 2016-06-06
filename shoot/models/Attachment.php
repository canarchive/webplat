<?php

namespace shoot\models;

use common\models\ShootModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
	protected function _fieldInfos()
	{
		return [
			'position' => [
				'picture' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 2000,
    				'type' => 'image/*',
				],
				'picture_mobile' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 600,
    				'type' => 'image/*',
				],
				'picture_ext' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 2000,
    				'type' => 'image/*',
				],
			],
			'photographer' => [
				'photo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 200,
    				'type' => 'image/*',
				],
			],
			'brand' => [
				'logo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
			'goods' => [
				'main_photo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
				'picture' => [
        			'isSingle' => false,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
			],
		];
	}
}
