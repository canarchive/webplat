<?php

namespace spread\decoration\controllers;

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

    public function actionIndex()
    {
		if (empty($this->mHost) && $this->isMobile) {
			$url = \Yii::getAlias('@m2spreadurl') . \Yii::$app->request->getUrl();
			$this->redirect($url)->send();
		}
        $model = new SignupForm();

        $info = $this->getDecorationInfo();
        if (empty($info)) {
            return $this->redirect('/')->send();
        }

        $urlFull = \Yii::$app->request->hostInfo . \Yii::$app->request->getUrl();
        $datas = [
            'model' => $model,
            'info' => $info,
            'host' => $this->host,
        ];
		$type = $info['type'];

		$view = "{$info['type']}_{$info['city']}.php";
		$view = $this->mHost ? "/jzsem/h5/{$view}" : "/jzsem/pc/{$view}";
        return $this->render($view, $datas);   
    }

	public function actionInner()
    {
        $model = new SignupForm();

		$view = \Yii::$app->request->get('view');
		$view = !in_array($view, ['price', 'measure', 'design']) ? 'price' : $view;

		$info = $this->getInfo();

        $datas = [
			'view' => $view,
            'host' => $this->host,
            'model' => $model,
			'info' => $info,
        ];

		$viewPath = $this->mHost ? "/inner/h5/" : "/inner/h5/";
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
