<?php

namespace gallerycms\house\controllers;

use gallerycms\components\Controller as GallerycmsController;
use common\models\RegionAll;

class RegionController extends GallerycmsController
{
	public function actionHome()
	{
		$model = new RegionAll();
		$infos = $model->updateSpell();
		exit();
	}

	public function actionDeal()
	{
		$model = new RegionAll();
		$infos = $model->spellDeal();
		exit();
	}
}
