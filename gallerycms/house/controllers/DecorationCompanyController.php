<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use merchant\models\Merchant;
use merchant\models\Working;

class DecorationCompanyController extends HouseController
{
	public function actionIndex()
	{
		$model = new Merchant();
		$infos = $model->getInfos();
		$datas = [
			'infos' => $infos,
		];

		$tdkInfos = [
			//'title' => '{{CITYNAME}}装修公司_{{CITYNAME}}装修公司大全|排名 - {{CITYNAME}}{{SITENAME}}装修网',
            //'keyword' => '{{CITYNAME}}装修公司,{{CITYNAME}}装修公司大全,{{CITYNAME}}装修公司排名',
			//'description' => '{{SITENAME}}{{CITYNAME}}装修网是一家致力于为广大{{CITYNAME}}业主提供家装、家居、建材等装修服务的家装平台,专业正规{{CITYNAME}}装修公司推荐,帮助{{CITYNAME}}业主轻松搞定装修!',
			'title' => '{{CITYNAME}}装修公司哪家最好-{{CITYNAME}}装修公司十大排名-{{CITYNAME}}装修网站大全-【{{CITYNAME}}{{SITENAME}}】',
			'keyword' => '装修公司哪家好，装修网站，装修公司排名，装修公司十大排名，装修网站大全，装修公司大全',
			'description' => '【{{SITENAME}}】{{CITYNAME}}装修网罗列出{{CITYNAME}}装修公司网站大全，帮业主快速了解{{CITYNAME}}装修公司哪家好？{{CITYNAME}}装修公司十大排名，从而解决您的装修问题。',
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;

		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $datas = $this->getShowDatas();
        if (empty($datas)) {
            return $this->redirect('/')->send();
        }
		$tdkInfos = [
			'title' => "{$datas['info']['name']}|{{CITYNAME}}{$datas['info']['name']}公司-{{CITYNAME}}{{SITENAME}}官网",
            'keyword' => "{$datas['info']['name']},{$datas['info']['name']}公司,{{CITYNAME}}{{SITENAME}}官网",
            'description' => "{$datas['info']['name']}是{{CITYNAME}}{{SITENAME}}官网提供的装修设计公司。{$datas['info']['name']}免费为广大{{CITYNAME}}业主提供专业的验房、设计、监理服务。了解{$datas['info']['name']}怎么样？速上{{CITYNAME}}{{SITENAME}}官网！",
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;

		return $this->render('show', $datas);
	}

	public function actionShowWorking()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Working();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

		$tdkInfos = [
            'title' => "{{CITYNAME}}{$info['name']}-{$info['merchantInfo']['name']}-{{CITYNAME}}-{{SITENAME}}",
            'keyword' => "{{CITYNAME}}{$info['name']},{$info['merchantInfo']['name']}",
            'description' => "【南鸿】浙江南鸿装饰股份有限公司提供{{CITYNAME}}{$info['name']}装修施工的每个细节，{{CITYNAME}}业主可以清楚知道装修的每个环节。装修施工选择{$info['merchantInfo']['name']}，就是选择放心! ",
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;

		$datas = [
			'info' => $info,
		];
		return $this->render('show-working', $datas);
	}

    protected function getShowDatas()
    {
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Merchant();
		$info = $model->getInfo($id);
		if (empty($info)) {
			return false;
		}

        $datas = [
            'info' => $info,
            'realcaseInfos' => $info->getRealcaseInfos(),
            'workingInfos' => $info->getWorkingInfos(),
            'designerInfos' => $info->getDesignerInfos(),
        ];
		//print_r($datas);exit();

		return $datas;
	}
}
