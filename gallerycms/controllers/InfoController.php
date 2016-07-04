<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;

class InfoController extends GallerycmsController
{
	public function actionAbout()
	{
		//$categoryInfos = $this->getCategoryInfos();
		$view = $this->_isMobile() ? '//h5/about' : '//pc/about';
        return $this->render($view);
	}

	public function actionShow()
	{
        return $this->render('show');
	}
}
