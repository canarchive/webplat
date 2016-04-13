<?php

namespace spread\controllers;

use spread\components\Controller as SpreadController;

class TestController extends SpreadController
{
    public function actionIndex()
    {
		$spreadInfos = $this->createUrl();

        return $this->render("/sem/url", ['spreadInfos' => $spreadInfos]);
    }

	protected function createUrl()
	{
		$spreadInfos = array();
		$grouponInfos = $this->getGrouponInfos();
		$templateInfos = [['code' => 'tuig', 'name' => '默认']];//$this->getTemplateInfos();

		$i = 0;
		foreach ($grouponInfos as $grouponInfo) {
			$grouponId = $grouponInfo['groupon_id'];
			foreach ($templateInfos as $templateInfo) {
				$j = 0;
				for ($j = 0; $j < 10; $j++) {
				$templateCode = $templateInfo['code'];

				$semParams = $this->getSemParams();
				$queryStr = http_build_query($semParams);
				$url = \Yii::getAlias('@spreadurl') . "/detail/{$templateCode}.html?id={$grouponId}&{$queryStr}";
				$spreadInfos[$i]['groupon_name'] = $grouponInfo['groupon_name'];
				$spreadInfos[$i]['template_name'] = $templateInfo['name'];
			    $spreadInfos[$i]['url'] = $url;
				$i++;
				}
			}
		}

		return $spreadInfos;
	}

	protected function getGrouponInfos()
	{
		$ids = array('2384', '2376');
		$id = $ids[array_rand($ids)];
		$model = new \spread\models\Groupon();
		$info = $model->find()->where(['groupon_id' => $ids])->asArray()->all();

		return $info;
	}

	protected function getTemplateInfos()
	{
		$model = new \spread\models\Template();
		$info = $model->find()->asArray()->all();

		return $info;
	}

	protected function getSemParams()
	{
		$sem = array('bd', 'sg', '360');
		$sem = $sem[array_rand($sem)];
		$matchtype = rand(1, 3);
		$placement = array('', '17house.com');
		$placement = $placement[array_rand($placement)];
		$adposition = array('cl', 'clg', 'cr', 'mt', 'mb');
		$adposition = $adposition[array_rand($adposition)] . rand(0, 10);
		$dongtai = rand(0, 1);
		$keywords = array('', '橱柜', '卫浴', '其他', '地对地导弹', '违法阿道夫', '22f搜索', '大都督府');
		$kw = $keywords[array_rand($keywords)];

		$params = array(
			'sem' => $sem,
			'kid' => rand(2000, 4000),
			'a_creative' => rand(1000, 2000),
			'a_matchtype' => $matchtype,
			'url' => $placement,
			'a_adposition' => $adposition,
			'a_dongtai' => $dongtai,
			'a_pagenum' => rand(1, 10),
			'kw' => $kw,
			'utm_network' => '',
		);

		return $params;
	}
}
