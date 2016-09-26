<?php
namespace spider\house\models;

use Yii;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\SpiderAbstract;
use spider\models\Merchant;

class To8toDeal extends SpiderAbstract
{
    private $configInfo;

    /**
     * 构造方法，初始化采集网站属性
     */
	public function __construct()
	{
		$this->configInfo = require Yii::getAlias('@spider') . '/config/to8to.php';
    }

	public function companyList($siteCode)
	{
		$model = new HouseCompanylist();
		$where = ['site_code' => $siteCode, 'status' => 1, 'page' => [1, 2, 3, 4, 5]];
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
			if ($info->page > 5) {
				continue;
			}
		
			$crawler = new Crawler();
			$crawler->addContent($this->getContent($file));
            $crawler->filter('.zgs_company_list ul li')->each(function ($node) use ($info) {
				$source_logo = $node->filter('.zgscl_logo img')->attr('src');
				$attrs = $node->filter('h3 a');
				$source_url = $attrs->attr('href');
				$exist = Merchant::find()->where(['source_url' => $source_url])->one();
				if (!$exist) {
				$source_id = str_replace('/', '', substr($source_url, strpos($source_url, 'zs/') + 3));
				$name = $attrs->text();
				$address = $node->filter('.zd_three');
				$address = $address->text();

				$score = $node->filter('.koubei_number')->eq(0);
				$score = $score->text();
				$praise = $node->filter('.haoping-text');
				$praise = !$praise ? $praise->text() : 0;
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
				$data = [
					'city_code' => $info['city_code'],
					'is_spider' => 1,
				];
				$fields = ['source_logo', 'source_id', 'source_url', 'name', 'address', 'score', 'praise', 'num_working', 'num_realcase', 'num_owner', 'num_deposit', 'num_comment'];
				foreach ($fields as $field) {
					$data[$field] = trim($$field);
				}
				$model = new Merchant($data);
				$model->insert(false);
				//print_r($data);exit();
				}
			});
			$info->status = 2;
			$info->update(false);
		}
	}
}
