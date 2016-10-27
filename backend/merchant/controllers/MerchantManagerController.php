<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\Company;
use merchant\models\searchs\Company as CompanySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantManagerController extends AdminController
{
	protected $modelClass = 'merchant\models\Company';

    public function actionListinfo()
    {
        $searchModel = new CompanySearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionListself()
    {
        $searchModel = new CompanySearch();
		$searchDatas = [];
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
        return $this->render('listself', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
			'searchDatas' => $searchDatas,
        ]);
    }
}
