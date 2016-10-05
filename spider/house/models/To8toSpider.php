<?php
namespace spider\house\models;

use Yii;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use spider\models\Merchant;

class To8toSpider extends SpiderAbstract
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

	public function getInfosList($siteCode)
	{
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 1];
        $infos = $model->find()->where($where)->limit(500)->all();
		$infoUrls = $this->configInfo['infoUrls'];
		foreach ($infos as $info) {
            $sql = "INSERT INTO `ws_house_infolist` (`site_code`, `source_id`, `type`, `url_source`, `city_code`, `page`) VALUES";
			foreach ($infoUrls as $type => $url) {
                $urlSource = str_replace(['{{CITYCODE}}', '{{INFOID}}', '{{PAGE}}'], [$info['city_code'], $info['source_id'], 1], $url);
                $sql .= "('{$info['source_site_code']}', '{$info['source_id']}', '{$type}', '{$urlSource}', '{$info['city_code']}', '1'),\n";
			}
			$sql = rtrim($sql, ",\n");
			$this->db->createCommand($sql)->execute();
			$info->source_status_spider = 2;
			$info->update();
		}
	}

    public function infosList($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 0];
        $infos = $model->find()->where($where)->limit(500)->all();
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            $info->status = 1;
            $info->updated_at = Yii::$app->params['currentTime'];
            //print_r($info);exit();
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
            $content = file_get_contents($info['url_source']);
            $this->writeFile($file, $content);
            $info->update();
        }
    }
}
