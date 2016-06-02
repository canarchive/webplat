<?php

namespace shoot\controllers;

use shoot\components\Controller as ShootController;

class GoodsController extends ShootController
{
    public function actionList()
    {
		$positionDatas = [
			'list_left' => [], 
			'list_right' => []
		];
		$positionInfos = $this->_getPositionInfos(array_keys($positionDatas));
		foreach ($positionInfos as $info) {
			$positionDatas[$info['type']][] = $info->toArray();
		}		

		$goods = new \shoot\models\Goods();
		$infos = $goods->find()->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->all();
		$categoryInfos = $goods->categoryInfos;

		$datas = [];
		foreach ($infos as $id => $info) {
			$info['main_photo'] = $info->getAttachmentUrl($info['main_photo']);
			$catId = $info['category_id'];
			$datas[$catId][$id] = $info->toArray();
		}
		foreach ($categoryInfos as $catId => & $info) {
			if (!in_array($catId, array_keys($datas))) {
				unset($categoryInfos[$catId]);
			} else {
				$info['datas'] = $datas[$catId];
			}
		}
		$datas = [
			'infos' => $categoryInfos, 
			'positionDatas' => $positionDatas,
		];

        return $this->render('list', $datas);
    }

    public function actionShow()
    {
        return $this->render('show');
    }
}
