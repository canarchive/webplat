<?php

namespace merchant\controllers;

use common\components\UploadController;
use merchant\models\Attachment;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

class MerchantUploadController extends UploadController
{
	public $enableCsrfValidation = false;

	protected function getAttachment($params = [])
	{
		return new Attachment($params);
	}
}
