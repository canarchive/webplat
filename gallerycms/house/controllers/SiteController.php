<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;
use merchant\models\Realcase;
use merchant\models\Working;
use gallerycms\house\models\HouseSample;
use common\models\RegionCounty;

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
		$tdkInfos = [
			'title' => '{{CITYNAME}}室内装修-{{CITYNAME}}房屋装修{{CITYNAME}}房子装修-{{CITYNAME}}室内设计--{{CITYNAME}}{{SITENAME}}装修网',
			'keyword' => '室内装修,房屋装修，房子装修，室内设计，',
			'description' => '【{{SITENAME}}】中国家装首选平台，免费提供{{CITYNAME}}多家装修公司进行多对一服务，让装修业主找到真正属于自己喜欢的装修公司。提供：室内装修,房屋装修，房子装修，室内设计，等装修设计一站式服务。',
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;

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

	public function actionMap()
	{
		$datas = $this->getMapInfos();
		return $this->render('sitemap', $datas);
	}

	public function actionMapMore()
	{
		$datas = $this->getMapMoreInfos();
		//print_r($datas);exit();
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
}
