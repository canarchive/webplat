<?php
namespace spider\house\models;

use Yii;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;

class To8toSpider extends SpiderAbstract
{
    private $configInfo;

    /**
     * 构造方法，初始化采集网站属性
     */
	public function __construct()
	{
		$this->configInfo = require Yii::getAlias('@spider') . '/config/to8to.php';
    }

	public function getCompanyList($siteCode)
	{
		$listUrl = $this->configInfo['companylist'];
		$cityInfos = $this->configInfo['cityInfos'];
		$sql = "INSERT INTO `ws_house_companylist` (`site_code`, `url_source`, `url_base`, `city_code`, `page`) VALUES";
		foreach ($cityInfos as $code => $info) {
			$maxPage = $info['listpage'];
			for ($i = 1; $i <= $maxPage; $i++) {
			    $url = str_replace(['{{CITYCODE}}', '{{PAGE}}'], [$code, $i], $listUrl);
				$urlInfo = pathinfo($url);
				$urlBase = isset($urlInfo['dirname']) ? $urlInfo['dirname'] : '';
				$sql .= "('{$siteCode}', '{$url}', '{$urlBase}', '{$code}', '{$i}'),\n";
			}
		}
		echo rtrim($sql, ",\n");exit();
	}

   public function companyList($siteCode)
   {
           $model = new HouseCompanylist();
           $where = ['site_code' => $siteCode, 'status' => 0];
           $infos = $model->find()->where($where)->limit(100)->all();
           foreach ($infos as $info) {
               $file = $info['site_code'] . '/list/' . $info['city_code'] . '-' . $info['page'] . '.html';
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
