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
        $infos = $model->find()->where($where)->limit(800)->all();
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
                $nameNode = $node->filter('.bdc_right');//->text();
				$name = count($nameNode) > 0 ? $nameNode->text() : '';
				if (count($nameNode) < 1) {
					print_r($node);
					echo count($nameNode);
					echo $info['url_source'];
					echo $brief;
					exit();
				}
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
                $exist = false;//Owner::find()->select('id')->where(['source_site_code' => $info['site_code'], 'mark' => $ownerMark])->one();
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
                $existComment = false;//Comment::find()->select('id')->where(['source_site_code' => $info['site_code'], 'mark' => $commentMark])->one();
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
}
