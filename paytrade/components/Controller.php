<?php
namespace paytrade\components;

use common\components\Controller as CommonController;

class Controller extends CommonController
{
    protected function _createSingleRandomStr()
    {
        mt_srand((double) microtime() * 1000000);
        return date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
    }	
}
