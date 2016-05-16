<?php

namespace backend\spread\controllers;

use Yii;
use spread\casher\models\BusinessExport;
use spread\casher\models\searchs\BusinessExport as BusinessExportSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class BusinessExportController extends AdminController
{
	protected $modelClass = 'spread\casher\models\BusinessExport';

    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('grouponInfos'))) {
			$data = $this->$action();
			return $data;
		}		

        $searchModel = new BusinessExportSearch();
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

    public function actionCreate()
    {
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('add', [
            'model' => $model,
		]);
    }

	public function actionExport()
	{
	}
}
