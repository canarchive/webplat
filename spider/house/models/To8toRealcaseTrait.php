<?php

namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use yii\helpers\StringHelper;
use spider\models\Realcase;
use spider\models\Attachment;
use spider\models\Owner;

trait To8toRealcaseTrait
{
    public function realcaseList($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 1, 'type' => 'realcase'];
        $infos = $model->find()->where($where)->limit(200)->all();
		print_r($infos);
		$numAll = $noNum = $num = 0;
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['source_city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
				echo $file . '<br />';
				$noNum++;
                $info->status = -2;
                $info->update();
                continue;
            }
        
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
			$spiderNum = 0;
            $crawler->filter('.zgs_innerpage_right ul li')->each(function ($node) use ($info, & $spiderNum) {
                $source_url = $node->filter('li a')->attr('href');
                $source_url = strpos($source_url, 'http:') === false ? "http://{$info['city_code']}.to8to.com{$source_url}" : $source_url;
                $sourceId = intval(basename($source_url));

                $thumbObj = $node->filter('a div img');
                $thumb = $thumbObj->attr('src');
                $thumbTitle = $thumbObj->attr('alt');

                //$exist = Attachment::find()->select('id')->where(['info_table' => 'realcase', 'info_field' => 'thumb', 'source_url' => $thumb])->one();
                //if (!$exist) {
                $aData = [
                    'source_url' => $thumb,
                    'name' => $thumbTitle,
                    'path_prefix' => 'default',
                    'url_prefix' => 'default',
                    'filename' => $thumbTitle,
                    'description' => $thumbTitle,
                    'info_table' => 'realcase',
                    'info_field' => 'thumb',
                    'created_at' => Yii::$app->params['currentTime'],
                    'source_site_code' => $info['site_code'],
                    'source_id' => $sourceId,
                    'source_status' => 0,
                ];
                $aModel = new Attachment($aData);
                $aModel->insert(false);
                //}

                //$existInfo = Realcase::find()->select('id')->where(['source_url' => $source_url])->one();
                //if (!$existInfo) {
                    $data = [
                        'source_site_code' => $info['site_code'],
                        'source_city_code' => $info['source_city_code'],
                        'source_id' => $sourceId,
                        'source_merchant_id' => $info['source_id'],
                        'source_url' => $source_url,
                        'city_code' => $info['city_code'],
                    ];

                    $model = new Realcase($data);
                    $model->insert(false);
                //}
				$spiderNum++;
            });
			$info->spider_num = $spiderNum;
			$numAll += $spiderNum;
            $info->status = 2;
			$num++;
            $info->update(false);
        }
		echo $numAll . '--' . $noNum . '--' . $num;
    }

    public function realcaseShowSpider($siteCode)
    {
        $model = new Realcase();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 0];
        $infos = $model->find()->where($where)->limit(200)->all();
		$num = 0;
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
            $url = trim($info['source_url']);
            $file = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/realcase/' . $info['source_id'] . '.html';
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
            $fileExt = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/working/' . $info['source_id'] . '.html';
            if ($this->fileExist($fileExt)) {
                $info->update();
                continue;
            }
			//echo $url . '<br />';
            $content = @ file_get_contents($url);
            //$content = $this->getRemoteContent($url);
			//echo strlen($content);
            if ($content) {
				$num++;
                $this->writeFile($file, $content);
            } else {
				$header = get_headers($url);
				$info->source_url_header = isset($header[0]) ? $header[0] : '';
                $info->source_status_spider = -1;
            }
            $info->update();
        }
		echo $num;
    }

    public function realcaseShow($siteCode)
    {
        $model = new Realcase();
        //$where = ['source_site_code' => $siteCode, 'source_status_spider' => 1, 'source_status_deal' => 0];
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => -1];//, 'source_status_deal' => 0];
        $infos = $model->find()->where($where)->limit(500)->all();
		//echo count($infos);exit();
        foreach ($infos as $info) {
            $file = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/realcase/' . $info['source_id'] . '.html';
			$file = !$this->fileExist($file) ? $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/working/' . $info['source_id'] . '.html' : $file;
            if (!$this->fileExist($file)) {
				echo $file . '<br />';
                $info->source_status_spider = 0;
                $info->update(false);
				continue;
            }
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
			$this->_dealOwner($crawler, $info);

            $info->design_concept = trim($crawler->filter('.design_ins_text div')->text());

            $crawler->filter('.design_nav_sheji .design_detail .detail_item')->each(function ($node) use ($info) {
                $picField = 'picture';
                $title = $node->filter('span')->text();
                $picField = $title == '原始结构图' ? 'design_origin' : ($title == '平面结构图' ? 'design_picture' : $picField);

                $node->filter('.item_bd')->each(function ($subNode) use ($info, $picField) {
                    $img = $subNode->filter('img')->attr('src');
                    if (!in_array($img, ['', 'http://pic.to8to.com/case/'])) {
                    $desc = trim(trim($subNode->filter('.item_des')->text()), '.');
					$desc = StringHelper::truncate($desc, 300, '...');

                    //$exist = Attachment::find()->where(['info_table' => 'realcase', 'info_field' => $picField, 'source_url' => $img])->one();
                    //if (!$exist) {
                    $aData = [
                        'source_url' => $img,
                        'name' => $desc,
                        'path_prefix' => 'default',
                        'url_prefix' => 'default',
                        'filename' => $desc,
                        'description' => $desc,
                        'info_table' => 'realcase',
                        'info_field' => $picField,
                        'created_at' => Yii::$app->params['currentTime'],
                        'source_site_code' => $info['source_site_code'],
                        'source_id' => $info['source_id'],
                        'source_status' => 0,
                    ];
					//print_r($aData);return;
                    $aModel = new Attachment($aData);
                    $aModel->insert(false);
                    }
                    //}
                    //echo $img . '-' . $desc;exit();
                });
            });

            $info->source_status_deal = 1;
			//print_r($info); exit();
            $info->update(false);
        }
    }
}
