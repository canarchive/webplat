<?php

namespace gallerycms\controllers;

use common\components\UploadController;
use gallerycms\models\Attachment;
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
