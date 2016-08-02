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

		return $this->regionShow($datas);
	}

	public function actionPublish()
	{
		$model = new RegionVillage();
		$infos = $model->publish();
		print_r($infos);
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
