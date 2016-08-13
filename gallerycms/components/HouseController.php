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
}
