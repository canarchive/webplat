<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;
use merchant\models\Company;

class Controller extends CommonController
{
	public $isMobile;
	public $host;

    public function init()
    {
        parent::init();

		$this->host = \Yii::$app->request->hostInfo;

		$hostPc = Yii::getAlias('@gallerycmsurl');
		$hostMobile = Yii::getAlias('@m.gallerycmsurl');
        //$this->isMobile = $this->clientIsMobile();
		$this->isMobile = $this->host == $hostMobile ? true : false;

		$url = Yii::$app->request->url;
		$cityCode = $this->module->currentCityCode;
		$redirect = strpos($url, 'index.php') !== false ? true : false;
		$redirect = empty($redirect) ? $this->isMobile && $this->host != $hostMobile : $redirect;
		$redirect = empty($redirect) ? !$this->isMobile && $this->host == $hostMobile : $redirect;
		$redirect = empty($redirect) ? $this->host == $hostMobile && is_null($cityCode) && $url == '/' : $redirect;
		$redirect = empty($redirect) ? !is_null($cityCode) && $cityCode != Yii::$app->params['currentCompany']['code_short'] : $redirect;
		if ($redirect) {
			$rule = $this->isMobile ? '/house/mobile-site/index' : '/house/site/home';
			$url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
			header("Location:$url");
		    //return Yii::$app->response->redirect($url)->send();
			exit();
		}

		if (isset($this->module->viewPath)) {
			$this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
		}
    }

	protected function getCategoryInfos()
	{
		$model = new \gallerycms\models\ArticleCategory();
		$infos = $model->find()->select('id, parent_id, name, orderlist')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();

		$datas = [];
		foreach ($infos as $key => $info) {
			if ($info['parent_id'] == 0) {
				$datas[$info['id']] = $info;
				unset($infos[$key]);
			}
		}

		foreach ($infos as $key => $info) {
			$parentId = $info['parent_id'];
			if (isset($datas[$parentId])) {
				$datas[$parentId]['subInfos'][] = $info;
			}
		}

		return $datas;
	}

	protected function _isMobile()
	{
		$host = \Yii::$app->request->hostInfo;
		return $host == \Yii::getAlias('@m-gallerycmsurl') ? true : false;
	}

	public function getArticleCategoryInfos($catId = null)
	{
		static $datas = null;

		if (is_null($datas)) {
		    $category = new \gallerycms\models\ArticleCategory();
			$datas = $category->getDatas();
		}

		if (!is_null($catId)) {
			return isset($datas[$catId]) ? $datas[$catId] : [];
		}

		return $datas;
	}	

	public function getArticleCategoryLevelInfos($parentId = null)
	{
		static $datas = null;

		if (is_null($datas)) {
		    $category = new \gallerycms\models\ArticleCategory();
			$datas = $category->getLevelDatas();
		}

		if (!is_null($parentId)) {
			return isset($datas[$parentId]) ? $datas[$parentId] : [];
		}

		return $datas;
	}		

	public function getCompanyInfos()
	{
		static $datas = null;
		if (is_null($datas)) {
		    $company = new Company();
		    $datas = $company->getInfos();
		}

		return $datas;
	}

	public function getCurrentCompany()
	{
		$code = Yii::$app->request->get('company_code');
		$session = Yii::$app->session;
		$currentCompany = isset($session['current_company']) ? $session['current_company'] : [];

		if (!empty($currentCompany)) {
			if (empty($code) || $currentCompany['code'] == $code) {
				return $currentCompany;
			}
		}
		
		$code = empty($code) ? 'beijing' : $code;
		$company = new Company();
	    $info = $company->getInfoByCode($code);
		if (empty($info)) {
			$code = 'beijing';
	        $info = $company->getInfoByCode($code);
		}
		$info = $info->toArray();
		$session['current_company'] = $info;
		return $info;
	}
}
