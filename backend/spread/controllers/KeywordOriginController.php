<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\KeywordOrigin;
use spread\models\searchs\KeywordOrigin as KeywordOriginSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class KeywordOriginController extends AdminController
{

    /**
     * Lists all KeywordOrigin.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new KeywordOriginSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
		$searchDatas = [];//$searchModel->getSearchDatas();

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
			'searchDatas' => $searchDatas,
        ]);
    }
}
