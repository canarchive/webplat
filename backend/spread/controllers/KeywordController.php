<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Keyword;
use spread\models\searchs\Keyword as KeywordSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class KeywordController extends AdminController
{

    /**
     * Lists all Keyword.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new KeywordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
		$searchDatas = [];//$searchModel->getSearchDatas();

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
			'searchDatas' => $searchDatas,
        ]);
    }
}
