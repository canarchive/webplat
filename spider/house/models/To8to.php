<?php
namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use merchant\models\Company;
use spider\models\SpiderAbstract;
use spider\models\Merchant;
use Overtrue\Pinyin\Pinyin;

class To8to extends SpiderAbstract
{
    use To8toMerchantTrait;
    use To8toRealcaseTrait;
    use To8toDesignerTrait;
    use To8toWorkingTrait;

    private $configInfo;

    public static function tableName()
    {
        return '{{%house_site}}';
    }

    /**
     * 构造方法，初始化采集网站属性
     */
    public function __construct()
    {
        $this->configInfo = require Yii::getAlias('@spider') . '/config/to8to.php';
    }

    public function cityList($siteCode)
    {
		$cityInfos = [];
		$file = "{$siteCode}/city.html";
        $crawler = new Crawler();
        $crawler->addContent($this->getContent($file));
		$crawler->filter('#city_box a')->each(function ($node) use (& $cityInfos) {
			$name = $node->text();
			$code = Pinyin::trans($name, ['delimiter' => '', 'accent' => false]);
			$codeShort = Pinyin::letter($name, ['delimiter' => '', 'accent' => false]);
			$info = Company::find()->where(['name' => $name])->one();

			if (empty($info)) {
				$info = [
					'name' => $name,
					'code' => $code,
					'code_short' => $codeShort,
					'code_initial' => substr($code, 0, 1),
					'hotline' => Yii::$app->params['siteHotline'],
					'address' => $name . '市',
					'status' => 0,
				];
				$addModel = new Company($info);
				$addModel->insert();
			}

			$url = $node->attr('href');
			$domain = str_replace(['http://', '.to8to.com/'], ['', ''], $url);
			$cityInfos[$domain] = [
				'name' => $name,
				'url' => $url,
				'code' => $info['code'],
				'code_short' => $info['code_short'],
			];
		});
		var_export($cityInfos);
    }

	public function changeCityCode()
	{
        $cityInfos = $this->configInfo['cityInfos'];
		print_r($cityInfos);
		foreach ($cityInfos as $key => $info) {
            $sql = "UPDATE `ws_house_companylist` SET `city_code` = '{$info['code_short']}' WHERE `source_city_code` = '{$key}'";
            $this->db->createCommand($sql)->execute();
		}
	}
}
