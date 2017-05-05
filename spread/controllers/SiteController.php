<?php

namespace spread\controllers;

use spread\components\Controller as SpreadController;

class SiteController extends SpreadController
{
    public function actionIndex()
    {
		$url = Yii::getAlias('@gallerycmsurl');
        header("Location:$url");
		exit();
    }

	public function actionTg()
	{
		$session = \Yii::$app->session;
		//$data['spread_csrf'] = 
		$data['time'] = time();
		$session['session_spread_info'] = $data;
	}

	public function actionStat()
	{
		$channel = Yii::$app->getRequest()->get('channel');
		$method = Yii::$app->getRequest()->method;
		$isMobile = $this->clientIsMobile();
		if ($channel && $method == 'GET') {
			$visit = new \spread\models\Visit();
			$visit->writeVisitLog($isMobile);
		}
		echo json_encode([]);//Yii::getAlias('@asseturl') . '/common/images/blank.gif';
		exit();
	}

    public function actionSpreadUrl()
    {
        $cities = [
            'bj' => [
                'name' => '北京',
            ],
            'sh' => [
                'name' => '上海',
            ],
        ];

		$urlPre = Yii::getAlias('@spreadurl');
		$urlPreH5 = Yii::getAlias('@m.spreadurl');
        $types = [
            'baojia' => '免费报价',
            'sheji' => '免费设计',
            'kaopu' => '靠谱装修',
			'shangjia' => '商家列表',
            'liangfang' => '免费量房',
            'bjnew' => '17报价',
            'manyi' => '满意',
        ];
        $str = '';
        foreach ($cities as $key => $city) {
            foreach ($types as $type => $tName) {
				$urlBase = "/bm-{$type}-{$key}.html";
				if (in_array($type, ['baojia', 'sheji', 'kaopu', 'shangjia'])) {
					$urlPc = $urlPre . $urlBase;
                    $str .= "<a href='{$urlPc}' target='_blank'>{$city['name']}-PC-{$tName}-{$urlPc}</a><br />";
				}
				$urlH5 = $urlPreH5 . $urlBase;
                $str .= "<a href='{$urlH5}' target='_blank'>{$city['name']}-H5-{$tName}-{$urlH5}</a><br />";
            }
            $str .= "<br />";
        }

        echo $str;
        exit();
    }

	public function actionHdenter()
	{
		$urlSource = Yii::$app->request->get('url_source', '');
		$url = http_build_query($_GET);
		if (isset($_GET['url_source'])) {
			unset($_GET['url_source']);
		}
		$queryStr = http_build_query($_GET);
		$url = $urlSource . '&' . $queryStr;
		
		header("Location:$url");
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
            'old' => '老房装修',
            'new' => '新房装修',
            'wed' => '婚房装修',			
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
