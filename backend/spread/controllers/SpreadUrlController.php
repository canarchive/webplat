<?php

namespace backend\spread\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use merchant\models\Company;

class SpreadUrlController extends AdminController
{
	protected $modelClass = '';//gallerycms\models\HouseTdk';

    public function actionListinfo()
    {
		$company = new Company();
		$companyInfos = $company->getInfos();
		$cInfos = [];
		foreach ($companyInfos as $cInfo) {
			$cInfos[$cInfo['code_short']] = $cInfo['name'];
		}

		$urlPre = Yii::getAlias('@spreadurl');
		$urlPreH5 = Yii::getAlias('@m.spreadurl');
		$params = require Yii::getAlias('@spread') . '/config/params.php';
		$urlTypes = $params['spreadUrlTypes'];
		$datas = [
			'cInfos' => $cInfos,
			'urlTypes' => $urlTypes,
			'pcDomain' => Yii::getAlias('@spreadurl'),
			'mobileDomain' => Yii::getAlias('@m.spreadurl'),
		];

        return $this->render('listinfo', $datas);
    }
}
