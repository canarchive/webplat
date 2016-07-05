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
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
			'merchant' => [
				'logo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 30,
    				'type' => 'image/*',
				],
			],
		];
	}
}
