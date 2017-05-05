<?php

namespace backend\spread\controllers;

use Yii;
use spread\casher\models\PosMachine;
use spread\casher\models\searchs\PosMachine as PosMachineSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class PosMachineController extends AdminController
{
	protected $modelClass = 'spread\casher\models\PosMachine';

    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('grouponInfos'))) {
			$data = $this->$action();
			return $data;
		}		

        $searchModel = new PosMachineSearch();
		return $this->_listinfoInfo($searchModel);
    }

	protected function grouponInfos()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$companyId = \Yii::$app->request->get('company_id');
		$groupon = new \spread\casher\models\Groupon();
		$datas = $groupon->getInfosByCompanyId($companyId);

		return $datas;
	}

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new PosMachine());
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id);
    }

    public function actionDelete($id)
    {
		return $this->_deleteInfo($id);
    }
}
