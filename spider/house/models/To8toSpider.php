<?php
namespace spider\house\models;

use Yii;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;

class To8toSpider extends SpiderAbstract
{
    private $configInfo;
    protected $category = [];//网站文章分类
    protected $baseUrl = '';//网站域名
    protected $name = '';//网站名称

    /**
     * 构造方法，初始化采集网站属性
     */
	public function __construct()
	{
		$this->configInfo = require Yii::getAlias('@spider') . '/config/to8to.php';
    }

	public function companylist($siteCode)
	{
		$listUrl = $this->configInfo['companylist'];
		$cityInfos = $this->configInfo['cityInfos'];
		$sql = "INSERT INTO `ws_house_companylist` (`site_id`, `url_source`, `url_base`, `city_code`, `page`) VALUES";
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

	public function spiderList($siteCode)
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

	public function dealList($siteCode)
	{
		$model = new HouseCompanylist();
		$where = ['site_code' => $siteCode, 'status' => 1];
		$infos = $model->find()->where($where)->limit(100)->all();
		foreach ($infos as $info) {
			$file = $info['site_code'] . '/list/' . $info['city_code'] . '-' . $info['page'] . '.html';
			$info->status = 2;
			$info->updated_at = Yii::$app->params['currentTime'];
			if (!$this->fileExist($file)) {
				$info->status = 0;
			    $info->update();
				continue;
			}
		
			$crawler = new Crawler();
			$crawler->addContent($this->getContent($file));
            $crawler->filter('.zgs_company_list ul li')->each(function ($node) use ($info) {
				$source_logo = $node->filter('.zgscl_logo img')->attr('src');
				$attrs = $node->filter('h3 a');
				$source_url = $attrs->attr('href');
				$source_id = str_replace('/', '', substr($source_url, strpos($source_url, 'zs/') + 3));
				$name = $attrs->text();
				$address = $node->filter('.zd_three');
				$address = $address->text();

				$score = $node->filter('.koubei_number')->eq(0);
				$score = $score->text();
				$praise = $node->filter('.haoping-text');
				$praise = $praise->text();
				$num_owner = $node->filter('.special_service p em')->text();
				$attr2s = $node->filter('.zd_two em');
				foreach ($attr2s as $attr2) {
					$value = $attr2->nodeValue;
					if (strpos($value, '次') !== false) {
						$num_comment = str_replace('次', '', $value);
				    } elseif (strpos($value, '套') !== false) {
						$num_realcase = str_replace('套', '', $value);
				    } elseif (strpos($value, '个') !== false) {
						$num_working = str_replace('个', '', $value);
				    } elseif (strpos($value, '元') !== false) {
						$num_deposit = str_replace('元', '', $value);
					}
				}
				$data['city_code'] = $info['city_code'];
				$fields = ['source_logo', 'source_id', 'source_url', 'name', 'address', 'score', 'praise', 'num_working', 'num_realcase', 'num_owner', 'num_deposit', 'num_comment'];
				foreach ($fields as $field) {
					$data[$field] = trim($$field);
				}
				print_r($data);exit();
			});
		}
	}
}
