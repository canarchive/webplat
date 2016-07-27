<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;
use common\models\RegionAll;
use merchant\models\Merchant;

class RegionController extends GallerycmsController
{
	public function actionRegion()
	{
		$regionCode = Yii::$app->request->get('region_code');
		if (empty($regionCode)) {
			exit('404s');
		}

		$regionAll = new RegionAll();
		$regionInfo = $regionAll->getInfo($regionCode, ['county', 'town', 'village']);
		if (empty($regionInfo) || $regionInfo['status'] == 400) {
			exit('404');
		}

		$level = $regionInfo['level'];
		if ($level == 'county') {
			return $this->regionList($regionInfo);
		}
		return $this->regionShow($regionInfo);
	}

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

	protected function regionList($regionInfo)
	{
		$model = new Merchant();
		$infos = $model->getInfos();
		$datas = [
			'infos' => $infos,
		];

		$tdkInfos = $this->_tdkInfos('list', $regionInfo);
		Yii::$app->params['tdkInfos'] = $tdkInfos;

		return $this->render('list', $datas);
	}

	protected function regionShow($info)
	{
		$datas = [
			'info' => $info,
		];
		$tdkInfos = $this->_tdkInfos('show', $info);
		Yii::$app->params['tdkInfos'] = $tdkInfos;
		return $this->render('show', $datas);
	}

	protected function _tdkInfos($type, $info)
	{
        $datas = [
			'list' => [
			    'title' => '{{CITYNAME}}装修公司_{{CITYNAME}}装修公司大全|排名 - {{CITYNAME}}{{SITENAME}}装修网',
                'keyword' => '{{CITYNAME}}装修公司,{{CITYNAME}}装修公司大全,{{CITYNAME}}装修公司排名',
			    'description' => '{{SITENAME}}{{CITYNAME}}装修网是一家致力于为广大{{CITYNAME}}业主提供家装、家居、建材等装修服务的家装平台,专业正规{{CITYNAME}}装修公司推荐,帮助{{CITYNAME}}业主轻松搞定装修!',
			],
			'show' => [
                'title' => '【免费验房】验房注意事项_验房公司_验房流程-{{SITENAME}}免费验房',
                'keyword' => '免费验房,验房注意事项,验房公司,验房流程',
                'description' => '{{SITENAME}}免费验房服务,给您提供验房注意事项,最优质的验房公司,以及详细的验房流程,全方面检测房屋质量,让您装修有保障！',
			],
		];

		return $datas[$type];
	}
}
