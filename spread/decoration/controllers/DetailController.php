<?php

namespace spread\decoration\controllers;

use Yii;
use yii\helpers\Url;
use spread\components\Controller;
use spread\decoration\models\SignupForm;

class DetailController extends Controller
{
	public $isMobile;
	public $mHost;
	public $host;
	public function init()
	{
		parent::init();

		$this->isMobile = $this->clientIsMobile();
        $this->host = Yii::$app->request->hostInfo;
		$this->mHost = false;
		if (in_array($this->host, Yii::$app->params['mHosts'])) {
			$this->mHost = true;
		}
		Yii::$app->params['isMobile'] = $this->isMobile;
	}

	public function actionFeature()
    {
        $signupForm = new SignupForm();
        $datas = [
            'model' => $signupForm,
            'host' => $this->host,
        ];

		$view = Yii::$app->request->get('view');
		$urlTypes = Yii::$app->params['spreadUrlTypes'];
		if (!in_array($view, array_keys($urlTypes))) {
            return $this->redirect('/')->send();
		}
		$viewInfo = $urlTypes[$view];
		$datas['view'] = $view;
		if (in_array($view, ['kaopu', 'shangjia'])) {
		    $owner = new \merchant\house\models\Owner();
			$datas['ownerInfos'] = $owner->getInfos([], 20);
			if ($view == 'shangjia') {
		        $where = ['city_code' => Yii::$app->params['currentCompany']['code_short'], 'status' => 1];
		        $model = new \merchant\models\Merchant();
		        $datas['infos'] = $model->getInfos($where);
			}
		}
		$this->layout = $viewInfo['main'];

        return $this->render($view, $datas);   
    }

    protected function getCache($key)
    {
        $infos = Yii::$app->cacheRedis->get($key);

        return $infos;
    }

    protected function setCache($key, $data)
    {
        Yii::$app->cacheRedis->set($key, $data);

        return ;
    }
}
