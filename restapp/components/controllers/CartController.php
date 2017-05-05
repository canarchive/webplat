<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;
use paytrade\models\Cart;
use paytrade\models\CheckOrder;

class CartController extends Controller
{
    public $modelClass = 'paytrade\models\Cart';

    public function actionIndex()
    {
		$infos = $this->_operate('list', []);

		$checkOrder = new CheckOrder();
		$datas = $checkOrder->checkInfos($infos);

		return $datas;
    }

    public function actionCreate()
    {
		$params['snapupId'] = Yii::$app->request->post('snapup_id');
		$params['number'] = intval(Yii::$app->request->post('number', 0));

		return $this->_operate('add', $params);
    }

	public function actionUpdate()
	{
		$params['id'] = Yii::$app->request->post('id');
		$params['number'] = intval(Yii::$app->request->post('number', 0));
		$params['type'] = Yii::$app->request->post('type');
		$status = Yii::$app->request->post('status');
		$params['status'] = $status === '0' ? 0 : 1;

		return $this->_operate('update', $params);
	}

    public function actionDelete($id)
    {
		$params['id'] = $id;

		return $this->_operate('delete', $params);
    }

	public function actionClear()
	{
		return $this->_operate('clear', []);
	}

	protected function _operate($action, $params)
	{
		$params['userId'] = 1;//\Yii::$app->user->id;

		$model = new Cart();
		$method = $action . 'Info';
		$return = $model->$method($params);
		return $return;
	}
}
