<?php

namespace console\controllers;

use Yii;
use yii\base\Application;
use yii\console\Controller;
use yii\console\Exception;
use yii\helpers\Console;
use yii\helpers\Inflector;
use common\models\RegionAll;

class RegionController extends Controller
{
    public function actionUpdateSpell()
    {   
		$model = new RegionAll();
		$infos = $model->updateSpell();
		exit();
    }   

	public function actionDeal()
	{
		$model = new RegionAll();
		$infos = $model->spellDeal();
		exit();
	}
}
