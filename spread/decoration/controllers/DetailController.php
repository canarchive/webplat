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


	public function actionHome()
	{
		$_GET['id'] = 1;//$this->mHost ? 3 : 1;
		return $this->actionIndex();
	}

    public function actionIndex()
    {
		if (empty($this->mHost) && $this->isMobile) {
			$url = Yii::getAlias('@m2spreadurl') . Yii::$app->request->getUrl();
			$this->redirect($url)->send();
		}

        $datas = $this->getDatas();
        if (empty($datas)) {
            return $this->redirect('/')->send();
        }

		$info = $datas['info'];
		$view = "{$info['type']}_{$info['city']}.php";
		$view = $this->mHost ? "/jzsem/h5/{$view}" : "/jzsem/pc/{$view}";
        return $this->render($view, $datas);   
    }

	public function actionFeature()
    {
		if (empty($this->mHost) && $this->isMobile) {
			//$url = Yii::getAlias('@m2spreadurl') . Yii::$app->request->getUrl();
			//$this->redirect($url)->send();
		}

        $datas = $this->getDatas();
        if (empty($datas)) {
            return $this->redirect('/')->send();
        }

		$view = Yii::$app->request->get('view');
		$views = ['shangjia', 'baojia', 'sheji', 'kaopu', 'liangfang', 'bjnew', 'manyi', 'znbj', 'sjlf'];
		$view = !in_array($view, $views) ? 'index' : $view;
		$datas['view'] = $view;
		if (in_array($view, ['kaopu', 'shangjia'])) {
		    $owner = new \merchant\models\Owner();
			$datas['ownerInfos'] = $owner->getInfos([], 20);
			if ($view == 'shangjia') {
		        $model = new \merchant\models\Merchant();
		        $datas['infos'] = $model->getInfos();
			}
		}
		if (in_array($view, ['liangfang', 'bjnew', 'manyi', 'znbj', 'sjlf'])) {
		    $this->layout = 'main-base';
			//$this->layout = false;
		}

        return $this->render($view, $datas);   
    }

    protected function getDatas()
    {
        /*$id = Yii::$app->getRequest()->get('id');
        $model = new \spread\decoration\models\Decoration();
     	$where = ['id' => $id];
		$info = $model->getInfo($where);
		if (empty($info)) {
			return false;
		}*/
		
        $urlFull = Yii::$app->request->hostInfo . Yii::$app->request->getUrl();
        $signupForm = new SignupForm();
        $datas = [
            'model' => $signupForm,
            //'info' => $info,
            'host' => $this->host,
        ];

        return $datas;
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
