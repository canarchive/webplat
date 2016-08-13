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

		$this->getTdkInfos('decoration-company-index');
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $datas = $this->getShowDatas();
        if (empty($datas)) {
            return $this->redirect('/')->send();
        }
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name']];
		$this->getTdkInfos('decoration-company-show', $dataTdk);
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

		$datas = [
			'info' => $info,
		];

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{MERCHANTNAME}}' => $info['merchantInfo']['name']];
		$this->getTdkInfos('decoration-company-show-working', $dataTdk);
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
