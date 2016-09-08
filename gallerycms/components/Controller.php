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
    public $pcMappingUrl;
    public $mobileMappingUrl;

    public function init()
    {
        parent::init();

		$this->host = \Yii::$app->request->hostInfo;
		$hostPc = Yii::getAlias('@gallerycmsurl');
		$hostMobile = Yii::getAlias('@m.gallerycmsurl');
        $this->isMobile = $this->clientIsMobile();
		//$this->isMobile = $this->host == $hostMobile ? true : false;
		$this->pcMappingUrl = $hostPc;
		$this->mobileMappingUrl = $hostMobile;

		$url = Yii::$app->request->url;
		$cityCode = isset($this->module->currentCityCode) ? $this->module->currentCityCode : null;
		$redirect = strpos($url, 'index.php') !== false ? true : false;
		//$redirect = empty($redirect) ? $this->isMobile && $this->host != $hostMobile : $redirect;
		//$redirect = empty($redirect) ? !$this->isMobile && $this->host == $hostMobile : $redirect;
		$redirect = empty($redirect) ? $this->host == $hostMobile && is_null($cityCode) && $url == '/' : $redirect;
		$redirect = empty($redirect) ? $this->host == $hostPc && is_null($cityCode) && $url == '/' : $redirect;
		$redirect = empty($redirect) ? !is_null($cityCode) && $cityCode != Yii::$app->params['currentCompany']['code_short'] : $redirect;
		if ($redirect) {
			$this->_redirectRule();
		}

		if (isset($this->module->viewPath)) {
			$this->module->viewPath .= $this->host == $hostMobile ? '/mobile' : '/pc';
		}
    }

	public function getTdkInfos($index, $datas = [])
	{
		$default = [
			'title' => Yii::$app->params['seoTitle'],
			'keyword' => Yii::$app->params['seoKeyword'],
			'description' => Yii::$app->params['seoDescription'],
		];
		$infos = require(Yii::getAlias('@gallerycms') . '/config/params-tdk.php');
		$info = isset($infos[$index]) ? $infos[$index] : $default;

		$placeholder = array_merge(
			[
				'{{CITYNAME}}', 
				'{{SITENAME}}',
				'{{BASETITLE}}',
				'{{BASEKEYWORD}}',
				'{{BASEDESCRIPTION}}',
			], array_keys($datas)
		);
		$replace = array_merge(
			[
				Yii::$app->params['currentCompany']['name'], 
				Yii::$app->params['siteName'],
				$default['title'],
				$default['keyword'],
				$default['description'],
			], array_values($datas)
		);
        foreach ($info as $key => $value) {
            $info[$key] = str_replace($placeholder, $replace, $value);
        }

		Yii::$app->params['tdkInfos'] = $info;
		return ;
	}

	protected function _redirectRule()
	{
		return ;
	}
}
