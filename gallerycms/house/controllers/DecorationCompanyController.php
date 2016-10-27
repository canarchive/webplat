<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\Url;
use gallerycms\components\HouseController;
use merchant\models\Merchant;
use merchant\models\Working;

class DecorationCompanyController extends HouseController
{
	public function actionIndex()
	{
		$model = new Merchant();
		$where = ['city_code' => Yii::$app->params['currentCompany']['code_short'], 'status' => 1];
		$infos = $model->getInfos($where);
		$datas = [
			'infos' => $infos,
		];

		$this->getTdkInfos('decoration-company-index');
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
		$action = Yii::$app->request->get('action');
		$actions = ['sjjj' => 'info', 'sjsj' => 'realcase', 'sjgd' => 'working', 'sj' => 'showindex', 'sjdp' => 'comment', 'sjsjs' => 'designer'];
		if (!in_array($action, array_keys($actions))) {
			$action = 'sj';
            //throw new NotFoundHttpException('信息有误');
		}
		$currentAction = $actions[$action];
        $datas = $this->getShowDatas();

		$info = $datas['info'];
        if ($info['city_code'] != Yii::$app->params['currentCompany']['code_short']) {
            $url = Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'city_code' => $info['city_code'], 'action' => $action]);
            return $this->redirect($url, 301)->send();
        }

		$datas['action'] = $currentAction;
        if (empty($datas)) {
            return $this->redirect('/')->send();
        }
		$dataTdk = ['{{INFONAME}}' => $datas['info']['name']];
		$this->getTdkInfos('decoration-company-' . $currentAction, $dataTdk);
		return $this->render($currentAction, $datas);
	}

	public function actionShowWorking()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Working();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

        if ($info['city_code'] != Yii::$app->params['currentCompany']['code_short']) {
            $url = Url::to(['/house/decoration-company/show-working', 'id' => $info['id'], 'city_code' => $info['city_code']]);
            return $this->redirect($url, 301)->send();
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
            'commentInfos' => [],//$info->getDesignerInfos(),
			'ownerInfos' => $this->_getOwnerInfos(),
        ];
		//print_r($datas);exit();

		return $datas;
	}
}
