<?php

namespace spread\decoration\controllers;

use spread\components\Controller;
use spread\decoration\models\SignupForm;

class DetailController extends Controller
{
    public function actionIndex()
    {
        $model = new SignupForm();
        $isMobile = $this->clientIsMobile();

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
		$viewPath = $isMobile ? "/{$code}_{$type}/h5/" : "/{$code}_{$type}/h5/";
        return $this->render($viewPath . 'index.php', $datas);   
    }

	public function actionInner()
    {
        $model = new SignupForm();
        $isMobile = $this->clientIsMobile();

        //$code = 'default';
        $code = 'inner';
		$view = \Yii::$app->request->get('view');
		$view = !in_array($view, ['price', 'measure', 'design']) ? 'price' : $view;
		$info = ['id' => 1];
        $host = \Yii::$app->request->hostInfo;
        $datas = [
            'host' => $host,
            'model' => $model,
			'info' => $info,
        ];

		$type = '677';//$info['type'];
		$viewPath = $isMobile ? "/{$code}/h5/" : "/{$code}/h5/";
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
