<?php

namespace merchant\models;

use common\models\WebsiteModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
	protected function _fieldInfos()
	{
		return [
			'company' => [
				'logo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
			],
			'merchant' => [
				'logo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
				'picture' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 300,
    				'type' => 'image/*',
				],
				'aptitude' => [
        			'isSingle' => false, 
    				'minSize' => 1, // unit: kb
    				'maxSize' => 500,
    				'type' => 'image/*',
				],
			],
		];
	}
}
