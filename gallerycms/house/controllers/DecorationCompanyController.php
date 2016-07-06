<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;

class DecorationCompanyController extends HouseController
{
	public function actionIndex()
	{
		$datas = [];
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
		$datas = [];
		return $this->render('show', $datas);
	}
}
