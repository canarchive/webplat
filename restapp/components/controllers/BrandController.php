<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;

class BrandController extends Controller
{
    public $modelClass = 'website\models\Brand';
	public $authExcept = ['index', 'view'];

    public function actionIndex()
    {
		$searchModel = new \website\models\searchs\Brand();
		return $this->_index($searchModel);
    }

    public function actionView($id)
    {
		return $this->_view($id, false);
    }
}
