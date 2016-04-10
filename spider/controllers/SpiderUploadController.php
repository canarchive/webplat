<?php

namespace spider\controllers;

use common\components\UploadController;
use spider\models\Attachment;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

class GallerycmsUploadController extends UploadController
{
	public $enableCsrfValidation = false;

	protected function getAttachment($params = [])
	{
		return new Attachment($params);
	}
}
