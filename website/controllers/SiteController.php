<?php

namespace website\controllers;

use website\components\Controller as WebsiteController;

class SiteController extends WebsiteController
{
    public function actionIndex()
    {
		$indexGoods = new \website\models\IndexGoods();
		$infos = $indexGoods->getInfos();
        return $this->render('index', ['infos' => $infos]);
    }
}
