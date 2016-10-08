<?php

namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\Comment;
use spider\models\Attachment;
use spider\models\Owner;

trait To8toCommentTrait
{
    public function commentList($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 1, 'type' => 'comment'];
        $infos = $model->find()->where($where)->limit(500)->all();
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }
        
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
			$spiderNum = 0;
            $crawler->filter('.blog_dp_container ul li')->each(function ($node) use ($info, & $spiderNum) {
				$sourceId = 0;
                $sourceUrl = $node->filter('.bdc_left span a');
				$brief = '';
				if (count($sourceUrl) > 0) {
					$sourceUrl = $sourceUrl->attr('href');
					$sourceId = intval(basename($sourceUrl));
					$brief = $sourceUrl->text();
				} else {
					$brief = $node->filter('.bdc_left span span')->text();
				}
				//echo $info['url_source'];
				$createdAt = $node->filter('.cmt_bd .cmt_date')->text();
				$content = $node->filter('.cmt_bd p')->text();
				$name = $node->filter('.bdc_right')->text();
				$area = $node->filter('.bdc_right em')->eq(0);//->text();
				$area = count($area) > 0 ? $area->text() : '';
				$style = $node->filter('.bdc_right em')->eq(0);//->text();
				$style = count($style) > 0 ? $style->text() : '';
				$decorationPrice = $node->filter('.bdc_right em')->eq(0);//->text();
				$decorationPrice = count($decorationPrice) > 0 ? $decorationPrice->text() : '';
				$status = $node->filter('.bdcc_statu')->text();
				$score = $node->filter('.bdcc_pjdetails span')->eq(0)->text();
				$scoreService = $node->filter('.bdcc_pjdetails span')->eq(1)->text();
				//echo $score . '--' . $status . '--' . $style . '--' . $decorationPrice . '--' . $area . '--' . $brief . '--' .$name . '--' . $content . '--' . $createdAt . '--' . $sourceId . '<br />';exit();

				$fields = ['sourceId', 'brief', 'createdAt', 'content', 'name', 'area', 'style', 'decoration_price', 'status', 'score_', 'service_score'];
				$ownerMark = md5($name.$brief.$area.$style.$decorationPrice);
                $exist = Owner::find()->where(['source_site_code' => $info['site_code'], 'mark' => $ownerMark])->one();
                if (!$exist) {
                    $data = [
						'name' => $name,
						'brief' => $brief,
						'area' => $area,
						'style' => $style,
						'decoration_price' => $decorationPrice,
                        'source_site_code' => $info['site_code'],
                        'source_city_code' => $info['source_city_code'],
                        'source_id' => $sourceId,
                        'source_merchant_id' => $info['source_id'],
                        'city_code' => $info['city_code'],
                    ];
					print_r($data);

                    $model = new Owner($data);
                    //$model->insert(false);
                }
				$spiderNum++;
            });
			$info->spider_num = $spiderNum;
            $info->status = 2;
            //$info->update(false);
			exit();
        }
    }

    public function commentShowSpider($siteCode)
    {
        $model = new Comment();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 0];
        $infos = $model->find()->where($where)->limit(10)->all();
		$num = 0;
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
            $url = $info['source_url'];
            $file = $siteCode . '/infosshow/' . $info['source_city_code'] . '/' . $info['source_merchant_id'] . '/comment/' . $info['source_id'] . '.html';
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
			//echo $url . '<br />';
            $content = file_get_contents($url);
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

    public function commentShow($siteCode)
    {
        $model = new Comment();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 1, 'source_status_deal' => 0];
        $infos = $model->find()->where($where)->limit(500)->all();
        foreach ($infos as $info) {
            $file = $siteCode . '/infosshow/' . $info['city_code'] . '/' . $info['source_merchant_id'] . '/comment/' . $info['source_id'] . '.html';
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

                    $exist = Attachment::find()->where(['info_table' => 'comment', 'info_field' => $picField, 'source_url' => $img])->one();
                    if (!$exist) {
                    $aData = [
                        'source_url' => $img,
                        'name' => $desc,
                        'path_prefix' => 'default',
                        'url_prefix' => 'default',
                        'filename' => $desc,
                        'description' => $desc,
                        'info_table' => 'comment',
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
