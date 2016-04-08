<?php
namespace console\spider\controllers;

use yii\console\Controller;
use yii\web\NotFoundHttpException;

class ArticleController extends Controller{
    /**
     * cd /path/to/yiiproject 进入项目目录
     * ps aux|grep yii 查看是否在后台运行 php yii queue/run
     * 如果没有后台运行
     * QUEUE=* php yii spider/queue/run &
     *
     * 采集文章的时候
     * php yii spider/article/run php100
     */
	public function actionRun($name)
	{
        $className = '\spider\models\\' . ucfirst(strtolower($name)) . 'Spider';
        if(!class_exists($className)){
            throw new NotFoundHttpException($className.' Class not found');
        }

        $spider = new $className();
        $spider->process();
    }
}
