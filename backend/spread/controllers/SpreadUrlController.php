<?php

namespace backend\spread\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;
use merchant\models\Company;
use spread\models\Visit;

class SpreadUrlController extends AdminController
{
	protected $modelClass = '';//gallerycms\models\HouseTdk';

    public function actionListinfo()
    {
		$company = new Company();
		$companyInfos = $company->getInfos(['status' => 2], 'code_short');
		$cInfos = ArrayHelper::map($companyInfos, 'code_short', 'name');
		$cityCode = Yii::$app->request->get('city_code');
		$cityCode = empty($cityCode) ? 'bj' : $cityCode;
		$domainKey = Yii::$app->request->get('domain_key', '');
		$showFull = Yii::$app->request->get('show_full', 0);

		$model = new Visit();
		$channelBigInfos = $model->channelBigInfos;
		$channelBig = Yii::$app->request->get('channel_big');
		$channelBig = in_array($channelBig, array_keys($channelBigInfos)) ? $channelBig : 'bd';
		$params = require Yii::getAlias('@spread') . '/config/params.php';
		$urlTypes = $params['spreadUrlTypes'];
		$hostKeys = $params['hostKeys'];
		$datas = [
			'showFull' => $showFull,
			'model' => $model,
			'cInfos' => $cInfos,
			'cityCode' => $cityCode,
			'cityName' => $cInfos[$cityCode],
			'channelBigInfos' => $channelBigInfos,
			'channelBig' => $channelBig,
			'hostKeys' => $hostKeys,
			'urlTypes' => $urlTypes,
			'pcDomain' => Yii::getAlias("@{$domainKey}spreadurl"),
			'mobileDomain' => Yii::getAlias("@m.{$domainKey}spreadurl"),
		];

        return $this->render('listinfo', $datas);
    }
}
