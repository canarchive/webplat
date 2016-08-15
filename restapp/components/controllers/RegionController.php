<?php

namespace restapp\components\controllers;

use Yii;
use restapp\components\Controller;
use common\models\searchs\Region;

class RegionController extends Controller
{
    public $modelClass = 'common\models\Region';
	public $authExcept = ['index', 'view'];

    public function actionIndex()
    {
		$searchModel = new Region();
		return $this->_index($searchModel);
    }

    public function actionView($id)
    {
        return $this->findModel($id, false);
    }
}
