<?php

namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\Designer;
use spider\models\Attachment;

trait To8toDesignerTrait
{
    public function designerList($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 1, 'type' => 'designer'];
        $infos = $model->find()->where($where)->limit(200)->all();
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['source_city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }
        
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            $crawler->filter('.member .one_member')->each(function ($node) use ($info) {
                $source_url = $node->filter('p a')->attr('href');
                $source_url = strpos($source_url, 'http:') === false ? "http://{$info['city_code']}.to8to.com{$source_url}" : $source_url;
                $exist = Designer::find()->where(['source_url' => $source_url])->one();
                if (!$exist) {
                    $name = trim($node->filter('p a')->text());
			        $source_id = str_replace(['team-display-t', '.html'], ['', ''], basename($source_url));
					$title = trim($node->filter('.member_name')->eq(1)->text());
					$sampleNum = trim($node->filter('.detail p a span')->text());
                    $data = [
						'name' => $name,
						'title' => $title,
						'sample_num' => $sampleNum,
                        'source_site_code' => $info['site_code'],
                        'source_id' => $source_id,
                        'source_merchant_id' => $info['source_id'],
                        'source_url' => $source_url,
                        'city_code' => $info['city_code'],
                        'source_city_code' => $info['source_city_code'],
                    ];
                    $photo = $node->filter('img')->attr('src');

                    $exist = Attachment::find()->where(['info_table' => 'designer', 'info_field' => 'photo', 'source_url' => $photo])->one();
                    if (!$exist) {
                    $aData = [
                        'source_url' => $photo,
                        'name' => $name,
                        'path_prefix' => 'default',
                        'url_prefix' => 'default',
                        'filename' => $name,
                        'description' => $name,
                        'info_table' => 'designer',
                        'info_field' => 'photo',
                        'created_at' => Yii::$app->params['currentTime'],
                        'source_site_code' => $info['site_code'],
                        'source_id' => $data['source_id'],
                        'source_status' => 0,
                    ];
                    $aModel = new Attachment($aData);
                    $aModel->insert(false);
                    }

                    $model = new Designer($data);
                    $model->insert(false);
                }
            });
            $info->status = 2;
            $info->update(false);
        }
    }

    public function designerShowSpider($siteCode)
    {
        $model = new Designer();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 0];
        $infos = $model->find()->where($where)->limit(100)->all();
		$num = 0;
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
            $url = $info['source_url'];
            $file = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/designer/' . $info['source_id'] . '.html';
			//echo $file . '<br />';
            if ($this->fileExist($file)) {
                $info->update();
				$num++;
                continue;
            }
            $content = @ file_get_contents($url);
			if ($content) {
                $this->writeFile($file, $content);
			} else {
				$header = get_headers($url);
				$info->source_url_header = isset($header[0]) ? $header[0] : '';
				echo "{$info->source_url_header}--<a href='{$url}' target='_blank'>{$url}</a><br />";
				$info->source_status_spider = -1;
			}
            $info->update();
        }
		echo $num;
    }

    public function designerShow($siteCode)
    {
        $model = new Designer();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 1, 'source_status_deal' => 0];
        $infos = $model->find()->where($where)->limit(800)->all();
        foreach ($infos as $info) {
            $file = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/designer/' . $info['source_id'] . '.html';
            if (!$this->fileExist($file)) {
                $info->source_status_spider = 0;
                $info->update(false);
				continue;
            }
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
			$attrs = $crawler->filter('.zgs_prama span b');
			foreach ($attrs as $key => $attr) {
				$value = trim($attr->nodeValue);
				switch ($key) {
				case 0:
					$info->score_praise = $value;
					break;
				case 1:
					$info->score_active = $value;
					break;
				}
			}

			$attrs2 = $crawler->filter('.zgs_id_right dl dd p');
			foreach ($attrs2 as $key => $attr) {
				$value = trim($attr->nodeValue);
				switch ($key) {
				case 0:
					$info->design_concept = $value;
					break;
				case 1:
					$info->description = $value;
					break;
				}
			}

            $info->source_status_deal = 1;
			//print_r($info);exit();
            $info->update(false);
        }
    }
}
