<?php

namespace spread\decoration\controllers;

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
        $this->host = \Yii::$app->request->hostInfo;
		$this->mHost = false;
		if (in_array($this->host, \Yii::$app->params['mHosts'])) {
			$this->mHost = true;
		}
		\Yii::$app->params['isMobile'] = $this->isMobile;
	}


	public function actionHome()
	{
		$_GET['id'] = $this->mHost ? 3 : 1;
		return $this->actionIndex();
	}

	public function actionSpread()
	{
		$productTypes = \Yii::$app->params['productTypes'];
		$type = \Yii::$app->request->get('type');
		if (!in_array($type, array_keys($productTypes))) {
			$this->redirect($this->host);
		}
		$typeInfo = $productTypes[$type];
		$city = \Yii::$app->request->get('city');
		if (!in_array($city, array_keys($typeInfo['cities']))) {
			$this->redirect($this->host);
		}

        $model = new SignupForm();
		$info = ['id' => $typeInfo['cities'][$city]['id']];
        $datas = [
            'host' => $this->host,
            'model' => $model,
			'info' => $info,
        ];

		$view = $this->mHost ? "/jzsem/h5/{$type}_{$city}.php" : "/jzsem/pc/{$type}_{$city}.php";
        return $this->render($view, $datas); 
	}

	public function actionThird()
	{
		$client = \Yii::$app->request->get('client');
		$this->mHost = $client == 'wap' ? false : true;
        $model = new SignupForm();

		$info = ['id' => 1];
        $datas = [
            'host' => $this->host,
            'model' => $model,
			'info' => $info,
        ];

		$view = $this->mHost ? "/hd_third/pc/index.php" : "/hd_third/h5/index.php";
        return $this->render($view, $datas);  
	}

    public function actionIndex()
    {
        $model = new SignupForm();

        //$code = 'default';
        $code = 'hd';
        $info = $this->getDecorationInfo();
        if (empty($info)) {
			exit('info empty');
            //$this->redirect('http://www.17house.com/');
        }

        $urlFull = \Yii::$app->request->hostInfo . \Yii::$app->request->getUrl();
        $datas = [
            'model' => $model,
            'info' => $info,
            'lotteryInfos' => $this->getLotteryInfos($info['id']),
            'bonusInfos' => $this->getBonusInfos($info['id']),
            'giftBagInfos' => $this->getGiftBagInfos($info['id']),
            'brandInfos' => $this->getBrandInfos($info['id']),
            'professorInfos' => $this->getProfessorInfos($info['company_id']),
            'faqInfos' => $this->getFaqInfos($info['company_id']),
        ];

		$type = '677';//$info['type'];
		$viewPath = $this->mHost ? "/{$code}_{$type}/h5/" : "/{$code}_{$type}/pc/";
        return $this->render($viewPath . 'index.php', $datas);   
    }

	public function actionInner()
    {
		if (empty($this->mHost) && $this->isMobile) {
			$url = \Yii::getAlias('@m1spreadurl') . \Yii::$app->request->getUrl();
			$this->redirect($url)->send();
		}
        $model = new SignupForm();

        //$code = 'default';
        $code = 'inner';
		$view = \Yii::$app->request->get('view');
		$view = !in_array($view, ['price', 'measure', 'design']) ? 'price' : $view;
		$info = ['id' => 1];
        $datas = [
            'host' => $this->host,
            'model' => $model,
			'info' => $info,
        ];

		$type = '677';//$info['type'];
		$viewPath = $this->mHost ? "/{$code}/h5/" : "/{$code}/h5/";
		$view = $viewPath . $view;
        return $this->render($view, $datas);   
    }

    protected function getDecorationInfo()
    {
        $id = \Yii::$app->getRequest()->get('id');
		
        $model = new \spread\decoration\models\Decoration();
     	$where = ['id' => $id];

		$info = $model->getInfo($where);
		
        return $info;
    }

	protected function getLotteryInfos($id)
	{
		$model = new \spread\decoration\models\Lottery();
		$infos = $model->getInfos($id);

		return $infos;
	}

	protected function getBonusInfos($id)
	{
		$model = new \spread\decoration\models\Bonus();
		$infos = $model->getInfos($id);

		return $infos;
	}

	protected function getGiftBagInfos($id)
	{
		$model = new \spread\decoration\models\GiftBag();
		$infos = $model->getInfos($id);

		return $infos;
	}

	protected function getBrandInfos()
	{
		$model = new \spread\groupon\models\Brand();
		$infos = $model->getInfos();

		return $infos;
	}

	protected function getFaqInfos($companyId)
	{
		$model = new \spread\decoration\models\Faq();
		$infos = $model->getInfos($companyId);

		return $infos;
	}

	protected function getProfessorInfos($companyId)
	{
		$model = new \spread\decoration\models\Professor();
		$infos = $model->getInfos($companyId);

		return $infos;
	}

    protected function getCache($key)
    {
        $infos = \Yii::$app->cacheRedis->get($key);

        return $infos;
    }

    protected function setCache($key, $data)
    {
        \Yii::$app->cacheRedis->set($key, $data);

        return ;
    }
}
