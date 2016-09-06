<?php
namespace gallerycms\components;

use Yii;
use yii\helpers\Url;

class HouseController extends Controller
{
    public function init()
    {
        parent::init();

    }

	protected function _redirectRule()
	{
        $rule = $this->isMobile ? '/house/mobile-site/index' : '/house/site/home';
        $url = Url::to([$rule, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
        header("Location:$url");
        //return Yii::$app->response->redirect($url)->send();
        exit();
	}

	protected function _getOwnerInfos()
	{
		$companyId = Yii::$app->params['currentCompany']['id'];
		$where = ['company_id' => $companyId];
		$owner = new \merchant\models\Owner();
		$infos = $owner->getInfos($where, 20);

		return $infos;
	}
}
