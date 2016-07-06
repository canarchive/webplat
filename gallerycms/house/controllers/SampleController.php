<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;

class SampleController extends HouseController
{
	public function actionIndex()
	{
		$datas = [];
		return $this->render('index', $datas);
	}
}
