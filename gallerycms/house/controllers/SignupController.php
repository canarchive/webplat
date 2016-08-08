<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;

class SignupController extends GallerycmsController
{
	public function actionResult()
	{
		$datas = [];
		return $this->render('result', $datas);
	}
}
