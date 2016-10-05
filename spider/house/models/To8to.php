<?php
namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use spider\models\Merchant;

class To8to extends SpiderAbstract
{
    use To8toRealcaseTrait;
    use To8toMerchantTrait;

    private $configInfo;

    public static function tableName()
    {
        return '{{%detail}}';
    }

    /**
     * 构造方法，初始化采集网站属性
     */
    public function __construct()
    {
        $this->configInfo = require Yii::getAlias('@spider') . '/config/to8to.php';
    }
}
