<?php

namespace backend\spread\controllers;

use Yii;
<<<<<<< HEAD
=======
use spread\models\Statistic;
use spread\models\searchs\Statistic as StatisticSearch;
>>>>>>> web-house
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class StatisticController extends AdminController
{
<<<<<<< HEAD
	public $showSubnav = false;
	public function actionSem()
	{
		return $this->getInfos('sem');
	}

    public function actionKeyword()
    {
		return $this->getInfos('keyword');
	}

    public function actionFromType()
    {
		return $this->getInfos('from_type');
	}

    public function actionPosition()
    {
		return $this->getInfos('position');
	}

	protected function getInfos($field)
	{
        $searchModel = new \spread\models\searchs\Statistic();
		$type = \Yii::$app->request->get('type');
		$types = $searchModel->types;
		$type = in_array($type, array_keys($types)) ? $type : 'total';
		$typeInfo = $types[$type];
		$typeInfo = array_merge($typeInfo, [$field, 'count']);
		$infos = $searchModel->getInfos($field, $type);

		return $this->render('statistic', ['currentType' => $type, 'datas' => $infos, 'fields' => $typeInfo]);
=======
	protected $modelClass = 'spread\models\Statistic';

    public function actionListinfo()
    {
        $searchModel = new StatisticSearch();
		$searchDatas = $searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
>>>>>>> web-house
    }
}
