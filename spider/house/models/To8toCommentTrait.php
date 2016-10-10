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
        $infos = $model->find()->where($where)->limit(300)->all();
		$num = $numAll = 0;
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
            $spiderNum = 0;
            $crawler->filter('.blog_dp_container ul li')->each(function ($node) use ($info, & $spiderNum) {
                $source_id = 0;
                $sourceUrl = $node->filter('.bdc_left span a');
                $brief = '';
                if (count($sourceUrl) > 0) {
                    $url = $sourceUrl->attr('href');
                    $source_id = intval(basename($url));
                    $brief = $sourceUrl->text();
                } else {
                    $brief = $node->filter('.bdc_left span span')->text();
                }
                //echo $info['url_source'];
                $name = $node->filter('.bdc_right')->text();
                $area = $node->filter('.bdc_left em')->eq(0);//->text();
                $area = count($area) > 0 ? $area->text() : '';
                $decoration_price = $node->filter('.bdc_left em')->eq(1);//->text();
                $decoration_price = count($decoration_price) > 0 ? $decoration_price->text() : '';
                $style = $node->filter('.bdc_left em')->eq(2);//->text();
                $style = count($style) > 0 ? $style->text() : '';
                $status = $node->filter('.bdcc_statu')->text();
                $star = $node->filter('.bdcc_pjdetails span')->eq(0)->text();
                $service_star = $node->filter('.bdcc_pjdetails span')->eq(1)->text();
                $content = $node->filter('.cmt_bd p')->text();
                $created_at = $node->filter('.cmt_bd .cmt_date')->text();
                //echo $star . '--' . $status . '--' . $style . '--' . $decorationPrice . '--' . $area . '--' . $brief . '--' .$name . '--' . $content . '--' . $createdAt . '--' . $sourceId . '<br />';exit();

                $fields = ['source_id', 'brief', 'created_at', 'content', 'name', 'area', 'style', 'decoration_price', 'status', 'star', 'service_star'];
				foreach ($fields as $field) {
					$$field = trim($$field);
				}
                $data = [
                    'source_site_code' => $info['site_code'],
                    'source_city_code' => $info['source_city_code'],
                    'source_id' => $source_id,
                    'source_merchant_id' => $info['source_id'],
                    'city_code' => $info['city_code'],
                ];
                $ownerMark = md5($name.$brief.$area.$style.$decoration_price);
                $exist = Owner::find()->select('id')->where(['source_site_code' => $info['site_code'], 'mark' => $ownerMark])->one();
                //$exist = Owner::find()->where(['source_site_code' => $info['site_code'], 'mark' => $ownerMark])->one();
				//print_r($exist);
                if (!$exist) {
                    $ownerFields = ['name', 'brief', 'area', 'style', 'decoration_price'];
					$ownerData = $data;
					foreach ($ownerFields as $ownerField) {
						$ownerData[$ownerField] = $$ownerField;
					}
					$ownerData['name'] = str_replace('🌻', '', $ownerData['name']);
					$ownerData['mark'] = $ownerMark;
					//print_r($ownerData);

                    $model = new Owner($ownerData);
                    $model->insert(false);
                }

                $commentMark = md5($name.$brief.$area.$style.$decoration_price.$status.$content.$created_at);
                $existComment = Comment::find()->select('id')->where(['source_site_code' => $info['site_code'], 'mark' => $commentMark])->one();
                if (!$existComment) {
					$commentData = $data;
					$commentData['source_owner_mark'] = $ownerMark;
					$commentData['content'] = $content;
					$commentData['created_at'] = strtotime($created_at);
					$commentData['mark'] = $commentMark;
					$commentData['status'] = $status;
					$commentData['design_star'] = strpos($star, '设计') !== false ? str_replace(['设计：', '分'], ['', ''], $star) : '';
					$commentData['execution_star'] = strpos($star, '施工') !== false ? str_replace(['施工：', '分'], ['', ''], $star) : '';
					$commentData['service_star'] = str_replace(['服务：', '分'], ['', ''], $service_star);
					//print_r($commentData);

                    $modelComment = new Comment($commentData);
                    $modelComment->insert(false);
                }
                $spiderNum++;
            });
            $info->spider_num = $spiderNum;
            $info->status = 2;
            $info->update(false);
            //exit();
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
