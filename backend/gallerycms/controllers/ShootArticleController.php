<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootArticle;
use gallerycms\models\searchs\ShootArticle as ShootArticleSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;


header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With'); //设置允许的跨域header
date_default_timezone_set("Asia/Chongqing");
class ShootArticleController extends AdminController
{
	protected $modelClass = 'gallerycms\models\ShootArticle';

public function actions()
{
    return [

        'upload' => [
            'class' => 'common\ueditor\UEditorAction',
        ],
    ];
}	

    public function actionListinfo()
    {
        $searchModel = new ShootArticleSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootArticle());
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
