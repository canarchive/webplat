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
        $id = \Yii::$app->getRequest()->get('id');
        $info = $this->getGrouponInfo($id, $isMobile);
        if (empty($info)) {
			exit('info empty');
            //$this->redirect('http://www.17house.com/');
        }
        $grouponNext = false;
        if (false) {//!empty($info['next_groupon_id'])) {
            $grouponNext = $this->getGrouponInfo($info['next_groupon_id'], $isMobile);
            if (!empty($grouponNext)) {
                $grouponNext['visit_url'] = str_replace($id, $grouponNext['groupon_id'], \Yii::$app->getRequest()->getUrl());
            }
        }

        //$categoryInfos = $this->getCategories();
        $urlFull = \Yii::$app->request->hostInfo . \Yii::$app->request->getUrl();
        $datas = [
            'cateId' => \Yii::$app->getRequest()->get('cate_id', 0),
            'model' => $model,
            'info' => $info,
            'grouponNext' => $grouponNext,
            //'productInfos' => $this->getProducts($id, $categoryInfos),
            //'businessInfos' => $isMobile ? [] : $this->getBusinesses($id, $categoryInfos),
            //'praiseInfos' => $isMobile ? [] : $this->getPraises($id, $info['company_id']),
            'urlFull' => $urlFull,
			'asseturl' => \Yii::getAlias('@asseturl') . '/spread/groupon/',
        ];
        //print_r($datas['voucherInfos']);exit();
		$viewPath = $isMobile ? "/{$code}/h5/" : "/{$code}/pc/";
		$viewPath .= \Yii::$app->getRequest()->get('is_dev') ? 'dev/' : '';
        return $this->render($viewPath . 'index.php', $datas);        
    }

    protected function getGrouponInfo($id, $isMobile)
    {
        $model = new \spread\groupon\models\Groupon();
        $info = $model->getInfo($id, $isMobile);

        return $info;
    }

    protected function getTemplateInfo($code)
    {
        $model = new \spread\models\Template();
        $info = $model->findOne(['code' => $code])->toArray();

        return $info;
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
