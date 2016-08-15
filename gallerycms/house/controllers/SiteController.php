<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use merchant\models\Realcase;
use merchant\models\Working;
use gallerycms\house\models\HouseSample;
use common\models\RegionCounty;

class SiteController extends HouseController
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
		$this->getTdkInfos('site-index');

		return $this->render('index', $datas);
	}

	public function actionSelectCity()
	{
		$this->getTdkInfos('site-select-city');
		return $this->render('select-city');
	}

	public function actionMap()
	{
		$datas = $this->getMapInfos();
		$this->getTdkInfos('site-map');
		return $this->render('sitemap', $datas);
	}

	public function actionMapMore()
	{
		$datas = $this->getMapMoreInfos();
		$this->getTdkInfos('site-map-more');
		return $this->render('sitemap-more', $datas);
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

	protected function getMapInfos()
	{
		$modelSample = new HouseSample();
		$modelRegion = new RegionCounty();
		$datas = [
			'houseSortInfos' => $modelSample->houseSortInfos,
			'regionInfos' => $modelRegion->getMapInfos(),
			'modelSample' => $modelSample,
		];

		return $datas;
	}

	protected function getMapMoreInfos()
	{
		$companyInfo = Yii::$app->params['currentCompany'];
		$parentId = $companyInfo['region_code'];
		$modelRegion = new RegionCounty();
		$datas = [
			'infos' => $modelRegion->getMapMoreInfos($parentId),
			'companyInfo' => $companyInfo,
		];

		return $datas;
	}

	public function actionTest()
	{
		echo $this->id;
		echo $this->action->id;
		$tdkInfo = $this->getTdkInfos('site-index');
		print_r($tdkInfo);
	}
}
