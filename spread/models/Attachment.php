<?php

namespace spread\models;

use common\models\WebsiteModel;
use common\models\Attachment as AttachmentBase;

class Attachment extends AttachmentBase
{
	protected function _fieldInfos()
	{
		$infos = [
			'activity' => [
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
				'map' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 200,
    				'type' => 'image/*',
				],
			],
    				'maxSize' => 100,
    				'type' => 'image/*',
				],				
			],
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
			'product' => [
				'main_photo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 100,
    				'type' => 'image/*',
				],
			],			
			'brand' => [
				'logo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
			],			
			'gift_bag' => [
				'thumb' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
			],			
			'professor' => [
				'photo' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 80,
    				'type' => 'image/*',
				],
			],			
			'business_order' => [
				'import' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 1000,
    				'type' => 'application/*',
				],
			],				
			'orderinfo' => [
				'import' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 1000,
    				'type' => 'application/*',
				],
				'import_business' => [
        			'isSingle' => true,
    				'minSize' => 1, // unit: kb
    				'maxSize' => 1000,
    				'type' => 'application/*',
				],
			],				
		];
	}
}
