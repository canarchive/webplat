<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use passport\models\SigninForm;
use restapp\components\Controller;

class CartController extends Controller
{
    public $modelClass = 'paytrade\models\Cart';

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
}
