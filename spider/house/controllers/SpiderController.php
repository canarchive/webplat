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
		$siteId = Yii::$app->request->get('id');
		if (empty($siteId)) {
			exit('param error');
		}

		$siteInfo = Site::findOne($siteId);
		if (empty($siteInfo)) {
			exit('info empty');
		}


		$siteInfo->companylist();
	}
}
