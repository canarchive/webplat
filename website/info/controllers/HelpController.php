<?php

namespace website\info\controllers;

use website\components\Controller as WebsiteController;

class HelpController extends WebsiteController
{
	public function actionIndex()
	{
		return $this->render('index');
	}
}
