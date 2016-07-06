<?php

namespace gallerycms\house;

use Yii;
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
