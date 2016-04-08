<?php

namespace console\controllers;

use Yii;
use yii\helpers\Console;
use yii\console\Controller;

class ConsoleController extends Controller
{
    public function actionTest()
    {
		echo 'Test the console controller';
    }
}
