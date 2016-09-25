<?php

namespace spider\house\controllers;

use Yii;
use spider\components\Controller as GallerycmsController;
use spider\house\models\HouseSite as Site;

class SpiderController extends GallerycmsController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionCompanylist()
	{
		$siteInfo = $this->siteInfo();
		$siteInfo->companylist();
	}

	public function actionSpiderList()
	{
		$siteInfo = $this->siteInfo();
		$siteInfo->spiderList();
	}

	public function actionDealList()
	{
		$siteInfo = $this->siteInfo();
		$siteInfo->dealList();
	}

	protected function siteInfo()
	{
		$siteId = Yii::$app->request->get('id');
		if (empty($siteId)) {
			exit('param error');
		}

		$siteInfo = Site::findOne($siteId);
		if (empty($siteInfo)) {
			exit('info empty');
		}

		return $siteInfo;
	}
}
