<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;

class GoodsCommentController extends Controller
{
    public $modelClass = 'website\models\GoodsComment';

    public function actionIndex()
    {
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;
		$searchModel = new \website\models\searchs\GoodsComment();
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

    public function actionDelete($id)
    {
		return $this->_delete($id);
    }

    public function actionView($id)
    {
		return $this->_view($id);
    }
}
