<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Conversion;
use spread\models\searchs\Conversion as ConversionSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ConversionController extends AdminController
{
	protected $modelClass = 'spread\models\Conversion';

    public function actionListinfo()
    {
        $searchModel = new ConversionSearch();
		$searchDatas = $searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }
}
