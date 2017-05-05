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
		$cityCode = Yii::$app->params['currentCompany']['code_short'];
		$where = ['city_code' => $cityCode];
		$owner = new \merchant\house\models\Owner();
		$infos = $owner->getInfos($where, 20);

		return $infos;
	}
}
