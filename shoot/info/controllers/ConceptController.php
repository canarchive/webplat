<?php

namespace shoot\info\controllers;

use shoot\components\Controller as ShootController;

class ConceptController extends ShootController
{
	public $layout = null;

	public function actionIndex()
	{
		
		$this->layout = null;
		$this->module->layout = null;
		return $this->render('index');
	}

	public function actionVision()
	{
		return $this->render('vision');
	}
}
