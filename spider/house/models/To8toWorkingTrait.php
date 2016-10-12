<?php

namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\Working;
use spider\models\Attachment;

trait To8toWorkingTrait
{
    public function workingList($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 1, 'type' => 'working'];
        $infos = $model->find()->where($where)->limit(200)->all();
		$numAll = $noNum = $num = 0;
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['source_city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = -2;
				echo $file . '<br />';
				$noNum++;
                $info->update();
                continue;
            }
        
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
			$spiderNum = 0;
            $crawler->filter('.zgs_company_cases .cases_li')->each(function ($node) use ($info, & $spiderNum) {
                $source_url = $node->filter('.case_pics a')->attr('href');
                $source_url = strpos($source_url, 'http:') === false ? "http://{$info['city_code']}.to8to.com{$source_url}" : $source_url;
                $sourceId = intval(basename($source_url));

                $thumbObj = $node->filter('.case_pics a img');
                $thumb = $thumbObj->attr('src');
                $thumbTitle = $thumbObj->attr('alt');

                //$exist = Attachment::find()->select('id')->where(['info_table' => 'working', 'info_field' => 'thumb', 'source_url' => $thumb])->one();
                //if (!$exist) {
                $aData = [
                    'source_url' => $thumb,
                    'name' => $thumbTitle,
                    'path_prefix' => 'default',
                    'url_prefix' => 'default',
                    'filename' => $thumbTitle,
                    'description' => $thumbTitle,
                    'info_table' => 'working',
                    'info_field' => 'thumb',
                    'created_at' => Yii::$app->params['currentTime'],
                    'source_site_code' => $info['site_code'],
                    'source_id' => $sourceId,
                    'source_status' => 0,
                ];
                $aModel = new Attachment($aData);
                $aModel->insert(false);
                //}

                //$existInfo = Working::find()->select('id')->where(['source_url' => $source_url])->one();
                //if (!$existInfo) {
                    $data = [
                        'source_site_code' => $info['site_code'],
                        'source_city_code' => $info['source_city_code'],
                        'source_id' => $sourceId,
                        'source_merchant_id' => $info['source_id'],
                        'source_url' => $source_url,
                        'city_code' => $info['city_code'],
                    ];

                    $model = new Working($data);
                    $model->insert(false);
                //}
				$spiderNum++;
            });
			$info->spider_num = $spiderNum;
			$num++;
			$numAll += $spiderNum;
            $info->status = 2;
            $info->update(false);
        }
		echo $numAll . '--' . $noNum . '--' . $num;
    }

    public function workingShowSpider($siteCode)
    {
        $model = new Working();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 0];
        $infos = $model->find()->where($where)->limit(200)->all();
		$num = 0;
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
            $url = $info['source_url'];
            $file = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/realcase/' . $info['source_id'] . '.html';
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
            $fileExt = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/working/' . $info['source_id'] . '.html';
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
			//echo $url . '<br />';
            $content =  file_get_contents($url);
            //$content = $this->getRemoteContent($url);
			//echo strlen($content);
            if ($content) {
				$num++;
                $this->writeFile($file, $content);
            } else {
                $info->source_status_spider = -1;
            }
            $info->update();
        }
		echo $num;
    }

    public function workingShow($siteCode)
    {
        $model = new Working();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 1, 'source_status_deal' => 0];
        $infos = $model->find()->where($where)->limit(500)->all();
        foreach ($infos as $info) {
            $file = $siteCode . '/infosshow/' . $info['city_code'] . '/' . $info['source_merchant_id'] . '/working/' . $info['source_id'] . '.html';
            if (!$this->fileExist($file)) {
                $info->source_status_spider = 0;
                break;
            }
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            $name = trim($crawler->filter('.case_name')->text());
            $attrs = $crawler->filter('.case_tag span');
            foreach ($attrs as $key => $attr) {
                $value = trim($attr->nodeValue);
                switch ($key) {
                case 1:
                    $info->community_name = $value;
                    break;
                case 2:
                    $info->decoration_price = $value;
                    break;
                case 3:
                    $info->decoration_type = $value;
                    break;
                case 4:
                    $info->area = $value;
                    break;
                case 5:
                    if (strpos($value, '工期') !== false) {
                        $info->duration = str_replace('工期：', '', $value);

                    } else {
                        $info->style = $value;
                    }
                    break;
                }
            }
            $designerId = basename($crawler->filter('.design_ins a')->attr('href'));
            $info->source_designer_id = str_replace(['team-display-t', '.html'], ['', ''], $designerId);
            $info->design_concept = trim($crawler->filter('.design_ins_text div')->text());

            $crawler->filter('.design_nav_sheji .design_detail .detail_item')->each(function ($node) use ($info) {
                $picField = 'picture';
                $title = $node->filter('span')->text();
                $picField = $title == '原始结构图' ? 'design_origin' : ($title == '平面结构图' ? 'design_picture' : $picField);

                $node->filter('.item_bd')->each(function ($subNode) use ($info, $picField) {
                    $img = $subNode->filter('img')->attr('src');
                    if (!in_array($img, ['', 'http://pic.to8to.com/case/'])) {
                    $desc = $subNode->filter('.item_des')->text();

                    $exist = Attachment::find()->where(['info_table' => 'working', 'info_field' => $picField, 'source_url' => $img])->one();
                    if (!$exist) {
                    $aData = [
                        'source_url' => $img,
                        'name' => $desc,
                        'path_prefix' => 'default',
                        'url_prefix' => 'default',
                        'filename' => $desc,
                        'description' => $desc,
                        'info_table' => 'working',
                        'info_field' => $picField,
                        'created_at' => Yii::$app->params['currentTime'],
                        'source_site_code' => $info['source_site_code'],
                        'source_id' => $info['source_id'],
                        'source_status' => 0,
                    ];
                    //print_r($aData);
                    $aModel = new Attachment($aData);
                    $aModel->insert(false);
                    }
                    }
                    //echo $img . '-' . $desc;exit();
                });
            });

            $info->source_status_deal = 1;
            $info->update(false);
        }
    }
}
