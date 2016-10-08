<?php

namespace console\spider\controllers;

use Yii;
use yii\console\Controller;
use spider\house\models\HouseSite as Site;

class SpiderController extends Controller
{
	public function actionCompanylist()
	{
		$siteInfo = $this->siteInfo();
		$siteInfo->companylist();
	}

    public function actionSpider($siteId, $action)
    {
		$siteInfo = $this->siteInfo($siteId);
		$siteInfo->spider($action);
    }

    public function actionDeal($siteId, $action)
    {
		$siteInfo = $this->siteInfo($siteId);
		$siteInfo->deal($action);
    }

	public function actionFileDown($siteId)
	{
		$siteInfo = $this->siteInfo($siteId);
		$siteInfo->fileDown();
	}

	protected function siteInfo($siteId)
	{
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
