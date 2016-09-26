<?php

namespace spider\controllers;

use Yii;
use spider\components\Controller as SpiderController;

class SiteController extends SpiderController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionSpiderUrl()
	{
		$urlBase = Yii::getAlias('@spiderurl');
		$content = '<h3>采集操作</h3>';
		$spiderActions = Yii::$app->params['spiderActions'];
		foreach ($spiderActions as $action => $info) {
			$url = $urlBase . '/house/spider/spider.html?id=1&action=' . $action;
			$content .= "<a href='{$url}' target='_blank'>{$info['name']}</a><br />";
		}
		$downUrl = $urlBase . '/house/spider/file-down.html?id=1';
		$content .= "<a href='{$downUrl}' target='_blank'>下载文件</a><br />";
		$content .= '<br /><h3>信息处理</h3>';
		$dealActions = Yii::$app->params['dealActions'];
		foreach ($dealActions as $action => $info) {
			$url = $urlBase . '/house/spider/deal.html?id=1&action=' . $action;
			$content .= "<a href='{$url}' target='_blank'>{$info['name']}</a><br />";
		}

		echo $content;exit();
	}
}
