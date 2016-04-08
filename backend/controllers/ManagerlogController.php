<?php

namespace backend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use backend\models\Managerlog;
use backend\models\searchs\Managerlog as ManagerlogSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ManagerlogController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new ManagerlogSearch();
		$searchDatas = $this->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

    public function actionListinfom()
    {
		$managerId = \Yii::$app->params['managerInfo']['id'];
        $_GET['Managerlog']['manager_id'] = $managerId;
		$searchDatas = $this->getSearchDatas();
		$searchDatas['currentManager'] = true;
        $searchModel = new ManagerlogSearch();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    protected function findModel($id)
    {
        if (($model = Managerlog::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
	
	protected function getSearchDatas()
	{
		$managerInfos = ArrayHelper::map(\backend\models\Manager::find()->all(), 'id', 'username');

		$datas = [
			'managerInfos' => $managerInfos,
		];

		return $datas;
	}	
}
