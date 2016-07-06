<?php

namespace gallerycms\house\controllers;

use gallerycms\components\Controller as GallerycmsController;

class SiteController extends GallerycmsController
{
	public function actionHome()
	{
		return $this->actionIndex();
	}

	public function actionIndex()
	{
		return $this->render('index');
	}
}
