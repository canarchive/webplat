<?php

namespace spread\groupon\controllers;

use spread\components\Controller;
use spread\groupon\models\SignupForm;

class DetailController extends Controller
{
    public function actionIndex()
    {
        $model = new SignupForm();
        $isMobile = $this->clientIsMobile();

        $code = \Yii::$app->getRequest()->get('code');
        $codes = ['default', 'tuig'];
        $code = !in_array($code, $codes) ? 'default' : $code;
        $info = $this->getGrouponInfo();
        if (empty($info)) {
			exit('info empty');
            //$this->redirect('http://www.17house.com/');
        }

        $urlFull = \Yii::$app->request->hostInfo . \Yii::$app->request->getUrl();
        $categoryInfos = $this->getCategoryInfos();
        $datas = [
            'cateId' => \Yii::$app->getRequest()->get('cate_id', 0),
            'model' => $model,
            'info' => $info,
			'categoryInfos' => $categoryInfos,
            'productInfos' => $this->getProductInfos($info['id']),
            'brandInfos' => $this->getBrandInfos($info['id']),
			'asseturl' => \Yii::getAlias('@asseturl') . '/spread/groupon/',
        ];

		$viewPath = $isMobile ? "/{$code}/h5/" : "/{$code}/pc/";
		$viewPath .= \Yii::$app->getRequest()->get('is_dev') ? 'dev/' : '';
        return $this->render($viewPath . 'index.php', $datas);        
    }

    protected function getGrouponInfo()
    {
		$city = \Yii::$app->getRequest()->get('city');
        $id = \Yii::$app->getRequest()->get('id');
		$forceId = \Yii::$app->getRequest()->get('force_id');
		
        $model = new \spread\groupon\models\Groupon();
		if ($id && $forceId) {
			$where = ['id' => $id];
		} else {
		    $company = new \merchant\models\Company();
		    $companyInfo = $company->findOne(['code' => $city]);
			if (empty($companyInfo)) {
				return [];
			}
			$currentTime = time();
			$where = ['and', "company_id = {$companyInfo['id']}", "start_at > $currentTime"];
		}

		$info = $model->getInfo($where);
		
        return $info;
    }

	protected function getCategoryInfos()
	{
		$model = new \merchant\models\Category();
		$infos = $model->getInfos();

		return $infos;
	}

	protected function getProductInfos($id)
	{
		$model = new \spread\groupon\models\GrouponProduct();
		$infos = $model->getInfos($id);

		return $infos;
	}

	protected function getBrandInfos($id)
	{
		$model = new \spread\groupon\models\GrouponBrand();
		$infos = $model->getInfos($id);

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
