<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;

class ShowoffController extends Controller
{
    public $modelClass = 'paytrade\models\Showoff';

    public function actionIndex()
    {
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;
		$searchModel = new \paytrade\models\searchs\Showoff();
		return $this->_index($searchModel);
    }

    public function actionCreate()
    {
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;
		return $this->_create();
    }

    public function actionUpdate($id)
    {
		return $this->_update($id);
    }

    public function actionView($id)
    {
		return $this->_view($id);
    }
}
