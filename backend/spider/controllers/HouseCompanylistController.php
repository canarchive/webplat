<?php

namespace backend\spider\controllers;

use Yii;
use spider\house\models\HouseCompanylist;
use spider\house\models\searchs\HouseCompanylist as HouseCompanylistSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseCompanylistController extends AdminController
{
	protected $modelClass = 'spider\house\models\HouseCompanylist';

    public function actionListinfo()
    {
        $searchModel = new HouseCompanylistSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HouseCompanylist());
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
