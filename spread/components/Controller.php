<?php
namespace spread\components;

use Yii;
use yii\helpers\Url;
use common\components\Controller as CommonController;

class Controller extends CommonController
{
	public $host;
	public $isMobile;
    public function init()
    {
        parent::init();

		$this->host = \Yii::$app->request->hostInfo;
		$hostPc = Yii::getAlias('@spreadurl');
		$hostMobile = Yii::getAlias('@m.spreadurl');
        //$this->isMobile = $this->clientIsMobile();
		$this->isMobile = in_array($this->host, Yii::$app->params['mHosts']) ? true : false;

		$url = Yii::$app->request->url;
		$cityCode = isset($this->module->currentCityCode) ? $this->module->currentCityCode : null;
		$redirect = strpos($url, 'index.php') !== false ? true : false;
		$redirect = empty($redirect) ? $this->isMobile && $this->host != $hostMobile : $redirect;
		$redirect = empty($redirect) ? !$this->isMobile && $this->host == $hostMobile : $redirect;
		$redirect = empty($redirect) ? $this->host == $hostMobile && is_null($cityCode) && $url == '/' : $redirect;
		if ($redirect) {
			$rule = $this->_redirectRule();
			/*$url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
			header("Location:$url");
		    //return Yii::$app->response->redirect($url)->send();
			exit();*/
		}

		if (isset($this->module->viewPath)) {
			$this->module->viewPath .= $this->isMobile ? '/mobile' : '/pc';
		}
    }

	protected function _redirectRule()
	{
	}

}
