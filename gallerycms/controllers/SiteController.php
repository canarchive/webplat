<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;

class SiteController extends GallerycmsController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionList()
	{
        return $this->render('list');
	}

	public function actionShow()
	{
        return $this->render('show');
	}
}
