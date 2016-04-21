<?php

namespace shoot\info\controllers;

use shoot\components\Controller as ShootController;

class EnterController extends ShootController
{
	public function actionPhotographer()
	{
		return $this->render('photographer');
	}

	public function actionMerchant()
	{
		return $this->render('merchant');
	}
}
