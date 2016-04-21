<?php

namespace shoot\info\controllers;

use shoot\components\Controller as ShootController;

class ConceptController extends ShootController
{
	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionVision()
	{
		return $this->render('vision');
	}
}
