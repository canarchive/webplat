<?php
namespace gallerycms\components;

use Yii;

class HouseController extends Controller
{
    public function init()
    {
        parent::init();

    }

	protected function _redirectRule()
	{
		return $this->isMobile ? '/house/mobile-site/index' : '/house/site/home';
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
