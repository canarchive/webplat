<?php

namespace shoot\info\controllers;

use shoot\components\Controller as ShootController;

class HelpController extends ShootController
{
	public function actionIndex()
	{
		return $this->render('index');
	}
}
