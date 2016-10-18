<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use merchant\models\Realcase;

class RealcaseController extends HouseController
{
	public function actionIndex()
	{
		$model = new Realcase();
		$where = ['city_code' => Yii::$app->params['currentCompany']['code_short']];//, 'status' => 1];
		$infos = $model->getInfos($where, 30);
		$datas = [
			'infos' => $infos,
		];

		$this->getTdkInfos('realcase-index');
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Realcase();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

		$tdkInfos = [
            'title' => "{$info['name']}-{$info['merchantInfo']['name']}-{{CITYNAME}}-{{SITENAME}}",
            'keyword' => "{$info['name']}-{$info['merchantInfo']['name']}",
            'description' => "{$info['name']} 由{$info['merchantInfo']['name']}负责设计施工，每一处的装修细节都是经过{$info['merchantInfo']['name']}细心设计和施工的。装修选择{$info['merchantInfo']['name']}，就是选择放心!",
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;
		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{MERCHANTNAME}}' => $info['merchantInfo']['name']];
		$this->getTdkInfos('realcase-show', $dataTdk);
		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
