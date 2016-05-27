<?php

namespace console\controllers;

use Yii;
use yii\base\Application;
use yii\console\Controller;
use yii\console\Exception;
use yii\helpers\Console;
use yii\helpers\Inflector;

class SynappController extends Controller
{
    public function actionOwner()
    {
		$decorationOwner = new \spread\decoration\models\DecorationOwner();
		return $decorationOwner->synapp();

		//echo 'ssssssss';exit();
    }
}
