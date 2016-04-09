<?php

namespace website\controllers;

use common\components\UploadController;
use website\models\Attachment;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

class WebsiteUploadController extends UploadController
{
	public $enableCsrfValidation = false;

	protected function getAttachment($params = [])
	{
		return new Attachment($params);
	}
}
