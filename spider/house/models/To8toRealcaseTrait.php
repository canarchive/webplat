<?php

namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\Realcase;
use spider\models\Attachment;

trait To8toRealcaseTrait
{
    public function realcaseList($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 1, 'type' => 'realcase'];
        $infos = $model->find()->where($where)->limit(100)->all();
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
            $crawler->filter('.zgs_innerpage_right ul li')->each(function ($node) use ($info) {
                $source_url = $node->filter('li a')->attr('href');
                $source_url = strpos($source_url, 'http:') === false ? "http://{$info['city_code']}.to8to.com{$source_url}" : $source_url;
                $exist = Realcase::find()->where(['source_url' => $source_url])->one();
                if (!$exist) {
                    $data = [
                        'source_site_code' => $info['site_code'],
                        'source_id' => intval(basename($source_url)),
                        'source_merchant_id' => $info['source_id'],
                        'source_url' => $source_url,
                        'city_code' => $info['city_code'],
                    ];
					$thumbObj = $node->filter('a div img');
					$thumb = $thumbObj->attr('src');
					$thumbTitle = $thumbObj->attr('alt');

                    $exist = Attachment::find()->where(['info_table' => 'realcase', 'info_field' => 'thumb', 'source_url' => $thumb])->one();
				    if (!$exist) {
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
                        'source_id' => $data['source_id'],
                        'source_status' => 0,
                    ];
                    $aModel = new Attachment($aData);
                    $aModel->insert(false);
					}

                    $model = new Realcase($data);
                    $model->insert(false);
                }
            });
            $info->status = 2;
            $info->update(false);
        }
    }
}
