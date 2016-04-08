<?php

namespace restapp\components\controllers;

use Yii;
use restapp\components\Controller;

class RegionController extends Controller
{
    public $modelClass = 'passport\models\Region';
	public $authExcept = ['index', 'view'];

    public function actionIndex()
    {
		$searchModel = new \passport\models\searchs\Region();
		return $this->_index($searchModel);
    }

    public function actionView($id)
    {
        return $this->findModel($id);
    }
}
