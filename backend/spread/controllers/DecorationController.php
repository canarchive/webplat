<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\Decoration;
use spread\decoration\models\searchs\Decoration as DecorationSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DecorationController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\Decoration';

    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('infoAjax'))) {
			$data = $this->$action();
			return $data;
			exit();
		}

        $searchModel = new DecorationSearch();
		return $this->_listinfoInfo($searchModel);
    }

	protected function infoAjax()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$groupon = new Groupon();
		$companyId = \Yii::$app->request->get('company_id');

		$orderBy = ['id' => SORT_DESC];
		$infos = $groupon->find()->where(['company_id' => $companyId])->orderBy($orderBy)->asArray()->all();
		$data = [];
		foreach ($infos as $info) {
			$data[$info['id']] = $info['name'];
		}

		return $data;
	}

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Decoration());
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
