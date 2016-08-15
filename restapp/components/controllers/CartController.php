<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use passport\models\SigninForm;
use restapp\components\Controller;
use paytrade\cloud\models\Cart;
use paytrade\cloud\models\CheckOrder;

class CartController extends Controller
{
    public $modelClass = 'paytrade\cloud\models\Cart';

    public function actionIndex()
    {
		return $this->_index();
    }

    public function actionCreate()
    {
		return $this->_create();
    }

    public function actionUpdate($id)
    {
		return $this->_update($id);
    }

    public function actionDelete($id)
    {
		return $this->_delete($id);
    }

    public function actionView($id)
    {
		return $this->_view($id);
    }
	public function actionClear()
	{
		return $this->_operate('clear', []);
	}

	protected function _operate($action, $params)
	{
		$params['userId'] = Yii::$app->user->id;

		$model = new Cart();
		$method = $action . 'Info';
		$return = $model->$method($params);
		return $return;
	}
}
