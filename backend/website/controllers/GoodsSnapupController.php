<?php

namespace backend\website\controllers;

use Yii;
use website\models\GoodsSnapup;
use website\models\searchs\GoodsSnapup as GoodsSnapupSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class GoodsSnapupController extends AdminController
{
	protected $modelClass = 'website\models\GoodsSnapup';

    public function actionListbingo()
    {
        $searchModel = new GoodsSnapupSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionListinfo()
    {
        $searchModel = new GoodsSnapupSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
	}

    /**
     * Creates a new GoodsSnapup model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$method = Yii::$app->request->method;
		if ($method != 'POST') {
			return ['status' => 400, 'message' => 'request method error'];
		}

		$selections = Yii::$app->request->post('selections');
		$selections = array_filter(explode(',', $selections));
		if (empty($selections)) {
			return ['status' => 400, 'message' => 'no selected elem'];
		}

        $model = new GoodsSnapup();
		foreach ($selections as $id) {
			$goods = \website\models\Goods::findOne($id);
			if (empty($goods)) {
				continue ;
			}
			$model->addFromGoods($goods);
		}

		return ['status' => '200', 'message' => 'OK'];
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
