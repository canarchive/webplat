<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;
use common\models\Region;
use common\models\searchs\Region as RegionSearch;

class RegionController extends AdminController
{
	public $modelClass = 'common\models\Region';

    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('subInfos'))) {
			$data = $this->$action();
			return $data;
		}		

        $searchModel = new RegionSearch();
		$searchDatas = $searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

	protected function subInfos()
	{
		Yii::$app->response->format = Response::FORMAT_JSON;

		$parentCode = Yii::$app->request->get('parent_code');
		$model = new Region();
		$infos = $model->getSubInfos($parentCode);
		$isDirect = $model->isDirect($parentCode);
		$datas = [];
		if ($isDirect) {
			foreach ($infos as $info) {
				$subDatas = (array) $model->getSubInfos($info['code']);
				$datas = array_merge($datas, $subDatas);
			}
		} else {
			$datas = $infos;
		}
		
		$datas = ArrayHelper::map($datas, 'code', 'name');
		//print_r($datas);
		return $datas;
	}	

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
	    $data = [
			'parent_code' => Yii::$app->request->get('parent_code'),
		];
		return $this->_addInfo(new Region($data));
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
