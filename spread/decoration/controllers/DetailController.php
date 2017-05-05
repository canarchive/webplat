<?php

namespace spread\decoration\controllers;

<<<<<<< HEAD
=======
use Yii;
use yii\helpers\Url;
>>>>>>> web-house
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
<<<<<<< HEAD
        $this->host = \Yii::$app->request->hostInfo;
		$this->mHost = false;
		if (in_array($this->host, \Yii::$app->params['mHosts'])) {
			$this->mHost = true;
		}
		\Yii::$app->params['isMobile'] = $this->isMobile;
	}


	public function actionHome()
	{
		$_GET['id'] = 1;//$this->mHost ? 3 : 1;
		return $this->actionIndex();
	}

	public function actionSpread()
	{
		if ($this->mHost && !$this->isMobile) {
			$url = \Yii::getAlias('@spreadurl') . \Yii::$app->request->getUrl();
			$this->redirect($url)->send();
		}
		$info = $this->getInfo();

        $model = new SignupForm();
        $datas = [
            'host' => $this->host,
            'model' => $model,
			'info' => $info,
        ];

		$view = $this->mHost ? "/jzsem/pc/{$info['type']}_{$info['city']}.php" : "/jzsem/pc/{$info['type']}_{$info['city']}.php";
        return $this->render($view, $datas); 
	}

	public function actionSuccess()
	{
		$view = \Yii::$app->request->get('view');
		$info = $this->getInfo();
		$datas = [
			'view' => $view,
			'info' => $info,
		];
        return $this->render('/house/h5/success', $datas); 
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
            'host' => $this->host,
        ];

		$type = '677';//$info['type'];
		$viewPath = $this->mHost ? "/{$code}_{$type}/h5/" : "/{$code}_{$type}/pc/";
        return $this->render($viewPath . 'index.php', $datas);   
    }

	public function actionInner()
    {
		if (empty($this->mHost) && $this->isMobile) {
			$url = \Yii::getAlias('@m2spreadurl') . \Yii::$app->request->getUrl();
			$this->redirect($url)->send();
		}
        $model = new SignupForm();

		$view = \Yii::$app->request->get('view');
		$views = ['price', 'measure', 'design', 'wed', 'old', 'new'];
		$view = !in_array($view, $views) ? 'price' : $view;

		$info = $this->getInfo();

        $datas = [
			'view' => $view,
            'host' => $this->host,
            'model' => $model,
			'info' => $info,
        ];

		if (in_array($view, ['wed', 'old', 'new'])) {
			$viewPath = $this->mHost ? "/house/h5/" : "/house/h5/";
		} else {
		    $viewPath = $this->mHost ? "/inner/h5/" : "/inner/h5/";
		}
		$view = $viewPath . $view;
        return $this->render($view, $datas);   
    }

	protected function getInfo()
	{
		$productTypes = \Yii::$app->params['productTypes'];
		$type = \Yii::$app->request->get('type');
		$type = !in_array($type, array_keys($productTypes)) ? '677' : $type;

		$typeInfo = $productTypes[$type];
		$city = \Yii::$app->request->get('city');
		$city = !in_array($city, array_keys($typeInfo['cities'])) ? 'beijing' : $city;
		$info = $typeInfo['cities'][$city];
		$info['type'] = $type;
		$info['city'] = $city;

		return $info;
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
=======
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
>>>>>>> web-house

        return $infos;
    }

    protected function setCache($key, $data)
    {
<<<<<<< HEAD
        \Yii::$app->cacheRedis->set($key, $data);
=======
        Yii::$app->cacheRedis->set($key, $data);
>>>>>>> web-house

        return ;
    }
}
