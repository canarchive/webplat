<?php

namespace shoot\controllers;

use shoot\components\Controller as ShootController;

class SiteController extends ShootController
{
    public function actionIndex()
    {
		$datas = ['index_slice' => [], 'index_goods' => [], 'index_sample' => []];
		$positionInfos = $this->_getPositionInfos(array_keys($datas));
		foreach ($positionInfos as $info) {
			$datas[$info['type']][] = $info;
		}

        return $this->render('index', ['datas' => $datas]);
    }
}
