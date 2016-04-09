<?php

namespace website\info\controllers;

use website\components\Controller as WebsiteController;

class ContactController extends WebsiteController
{
	public function actionComplain()
	{
		return $this->render('complain');
	}
}
