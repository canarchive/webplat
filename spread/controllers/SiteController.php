<?php

namespace spread\controllers;

use spread\components\Controller as SpreadController;

class SiteController extends SpreadController
{
    public function actionIndex()
    {
		exit('spread');
		//$this->redirect();
    }

	public function actionSpreadUrl()
	{
		$cities = [
			'beijing' => [
				'name' => '北京',
			],
			'shanghai' => [
				'name' => '上海',
			],
			'shijiazhuang' => [
				'name' => '石家庄',
			],
			'tianjin' => [
				'name' => '天津',
		    ],
		];

		$urlPre = 'http://jzsem.17house.com/';
		$urlPreH5 = 'http://m.jzsem.17house.com/';
		$types = [
			'price' => '免费报价',
			'measure' => '免费量房',
			'design' => '免费设计',
		];
		$str = '';
		foreach ($cities as $key => $city) {
			$urlPc = $urlPre . 'jzhd-677-' . $key . '.html';
			if ($key == 'beijing') {
				$urlPc = $urlPre . 'detail-1.html';
			}
			$str .= "<a href='{$urlPc}' target='_blank'>{$city['name']}-PC-{$urlPc}</a><br />";
			foreach ($types as $type => $tName) {
				$urlSuffix = $key == 'beijing' ? '.html' : '-677-' . $key . '.html';
				$urlH5 = $urlPreH5 . $type . $urlSuffix;
			    $str .= "<a href='{$urlH5}' target='_blank'>{$city['name']}-H5-{$tName}-{$urlH5}</a><br />";
			}
			$str .= "<br />";
		}

		echo $str;
		exit();
	}
}
