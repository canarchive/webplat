<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\Controller as GallerycmsController;
use common\models\RegionCounty;
use common\models\RegionTown;
use common\models\RegionVillage;
use merchant\models\Merchant;

/**
 * 基于县级、乡镇、社区村委等地区关键字，组织页面
 */
class RegionController extends GallerycmsController
{
	/**
	 * 地区关键字页面入口，获取县级地区代码，获取县级地区信息;
	 * 如果县级地区后面带有乡镇或社区等地区参数，则会继续获取乡镇或社区的相关信息
	 */
	public function actionRegion()
	{
		$county = Yii::$app->request->get('county');
		if (empty($county)) {
            throw new NotFoundHttpException('参数有误');
		}

		$cityInfo = Yii::$app->params['currentCompany'];
		$regionCounty = new RegionCounty();
		$countyInfo = $regionCounty->getInfo(['spell_one' => $county, 'parent_id' => $cityInfo['region_code']]);
		if (empty($countyInfo)) {
            throw new NotFoundHttpException('信息有误');
		}

		// 没有乡镇和社区信息，则直接渲染相关的列表页
		$vtown = Yii::$app->request->get('vtown');
		if (empty($vtown)) {
			return $this->regionList($countyInfo);
		}

		// 乡镇地区是t_开头的代码，社区是v_开头的代码
		$prefix = substr($vtown, 0, 2);
		$code = substr($vtown, 2);
		$prefixValids = ['t_', 'v_'];
		if (!in_array($prefix, $prefixValids) || empty($code)) {
            throw new NotFoundHttpException('参数有误!');
		}

		$datas = [
			'countyInfo' => $countyInfo,
			'villageInfo' => [],
			'townInfo' => [],
			'isVillage' => false,
		];
		if ($prefix == 'v_') {
			$regionVillage = new RegionVillage();
		    $villageInfo = $regionVillage->getInfo(['spell_one' => $code]);
			if (empty($villageInfo)) {
                throw new NotFoundHttpException('信息有误!');
			}
			$datas['villageInfo'] = $villageInfo;
			$datas['isVillage'] = true;
		}
		$regionTown = new RegionTown();
		$where = $datas['isVillage'] ? ['region_id' => $villageInfo['parent_id']] : ['spell_one' => $code];
		$townInfo = $regionTown->getInfo($where);
		if (empty($townInfo) || $townInfo['parent_id'] != $countyInfo['region_id']) {
            throw new NotFoundHttpException('信息有误!');
		}
		$datas['townInfo'] = $townInfo;

		return $this->regionList($datas);
	}

	public function actionPublish()
	{
		$model = new RegionVillage();
		$infos = $model->publish();
		print_r($infos);
		exit();
	}

	protected function regionList($datas)
	{
		$regionInfo = isset($datas['isVillage']) ? ($datas['isVillage'] ? $datas['villageInfo'] : $datas['townInfo']) : $datas;
		$model = new Merchant();
		$infos = $model->getInfos();
		$datas = [
			'infos' => $infos,
		];

		$dataTdk = ['{{INFONAME}}' => $regionInfo['name_short']];
		$this->getTdkInfos('region-region', $dataTdk);
		return $this->render('list', $datas);
	}

	protected function regionShow($datas)
	{
		$info = $datas['isVillage'] ? $datas['villageInfo'] : $datas['townInfo'];
		$tdkInfos = $this->_tdkInfos('show', $info);
		Yii::$app->params['tdkInfos'] = $tdkInfos;
		return $this->render('show', $datas);
	}

	protected function _tdkInfos($type, $info)
	{
        $datas = [
			'list' => [
			    'title' => "{{CITYNAME}}-{$info['name_short']}装修公司哪家最好-{{CITYNAME}}-{$info['name_short']}装修公司十大排名-{{CITYNAME}}-{$info['name_short']}装修网站大全-【{{CITYNAME}}{{SITENAME}}】",
			    'keyword' => "装修公司哪家好，装修网站，装修公司排名，装修公司十大排名，装修网站大全，装修公司大全",
			    'description' => "【{{SITENAME}}】{{CITYNAME}}装修网罗列出{{CITYNAME}}-{$info['name_short']}装修公司网站大全，帮业主快速了解{{CITYNAME}}-{$info['name']}装修公司哪家好？{{CITYNAME}}-{$info['name_short']}装修公司十大排名，从而解决您的装修问题。",
			],
			'show' => [
				'title' => "{{CITYNAME}}{$info['name_short']}家装公司排名_{{CITYNAME}}{$info['name_short']}装饰装潢设计-【{{CITYNAME}}{{SITENAME}}】",
				'keyword' => "{CITYNAME}}{$info['name_short']}家装公司排名，{{CITYNAME}}{$info['name_short']}装潢设计，{{CITYNAME}}{$info['name_short']}装修网，{{CITYNAME}}{$info['name_short']}装饰公司",
				'description' => "【{{CITYNAME}}{{SITENAME}}】为您提供{{CITYNAME}}{$info['name_short']}家装公司排名大全，并免费提供{{CITYNAME}}{$info['name_short']}装修上门量房设计等服务，以及装饰装潢报价与设计方案。进行多对一装修设计量房报价服务,让装修业主找到真正属于自己喜欢的装修设计公司。",
			],
		];

		return $datas[$type];
	}
}
