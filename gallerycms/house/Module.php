<?php

namespace gallerycms\house;

use Yii;
use yii\helpers\Url;
use merchant\models\Company;

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $defaultRoute = '';

    public function init()
    {
        parent::init();
		//echo $this->viewPath;exit();
		//$this->viewPath = '@gallerycms/views/house';
		$this->layout = 'main';
	    //$this->layoutPath = Yii::getAlias('@app/info/views');

		Yii::$app->params['companyInfos'] = $this->getCompanyInfos();
		Yii::$app->params['currentCompany'] = $this->getCurrentCompany();
    }

	protected function getCompanyInfos()
	{
		static $datas = null;
		if (is_null($datas)) {
		    $company = new Company();
		    $datas = $company->getInfos();
		}

		return $datas;
	}

	protected function getCurrentCompany()
	{
		$code = Yii::$app->request->get('city_code');

		$session = Yii::$app->session;
		$currentCompany = isset($session['current_company']) ? $session['current_company'] : [];
		$currentCode = isset($currentCompany['code_short']) ? $currentCompany['code_short'] : '';
		if (is_null($code) || $currentCode == $code) {
			return $currentCompany;
		}

		$company = new Company();
		if (is_null($code)) {
			$info = $company->getInfoByIP();
		    $session['current_company'] = $info;
			return $info;
		}

	    $info = $company->getInfoByCodeShort($code);
		if (empty($info)) {
			$info = $company->getInfoByIP();
		    $session['current_company'] = $info;

			$url = Url::to(['/house/site/home', 'city_code' => $info['code_short']]);
		    return Yii::$app->response->redirect($url)->send();
		}
		$session['current_company'] = $info;
		return $info;
	}
}
