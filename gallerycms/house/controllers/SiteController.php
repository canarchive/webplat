<?php

namespace gallerycms\house\controllers;

use gallerycms\components\Controller as GallerycmsController;
use merchant\models\Realcase;
use merchant\models\Working;
use gallerycms\house\models\HouseSample;

class SiteController extends GallerycmsController
{
	public function actionHome()
	{
		return $this->actionIndex();
	}

	public function actionIndex()
	{
		$datas = [
			'realcaseInfos' => $this->getRealcaseInfos(),
			'workingInfos' => $this->getWorkingInfos(),
			'sampleInfos' => $this->getSampleInfos(),
		];
		return $this->render('index', $datas);
	}

	public function actionSelectCity()
	{
		return $this->render('select-city');
	}

	public function actionWechat()
	{
		return $this->render('wechat');
	}

	protected function getSampleInfos()
	{
		$model = new HouseSample();
		$infos = $model->getInfos([]);
		return $infos;
	}

	protected function getWorkingInfos()
	{
		$model = new Working();
		$infos = $model->getInfos([]);
		return $infos;
	}

	protected function getRealcaseInfos()
	{
		$model = new Realcase();
		$infos = $model->getInfos([]);
		return $infos;
	}
}
