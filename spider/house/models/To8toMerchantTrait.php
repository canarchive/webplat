<?php

namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\Merchant;

trait To8toMerchantTrait
{
    public function merchantListUrl($siteCode)
    {
        $listUrl = $this->configInfo['companylist'];
        $cityInfos = $this->configInfo['cityInfos'];
        $sql = "INSERT INTO `ws_house_companylist` (`site_code`, `url_source`, `url_base`, `city_code`, `page`) VALUES";
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

    public function merchantListSpider($siteCode)
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

    public function merchantShowSpider($siteCode)
    {
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 0];
        $infos = $model->find()->where($where)->limit(100)->all();
        $showUrls = $this->configInfo['showUrls'];
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
            foreach ($showUrls as $key => $value) {
                $url = str_replace(['{{CITYCODE}}', '{{INFOID}}'], [$info['city_code'], $info['source_id']], $value);
                $file = $info['source_site_code'] . '/show/' . $info['city_code'] . '/' . $info['source_id'] . '-' . $key . '.html';
                if ($this->fileExist($file)) {
                    continue;
                }
                $content = file_get_contents($url);
                $this->writeFile($file, $content);
            }

            $info->update();
        }
    }

    public function merchantList($siteCode)
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

    public function merchantShow($siteCode)
    {
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 1, 'source_status_deal' => 0];
        $infos = $model->find()->where($where)->limit(300)->all();
        $showUrls = $this->configInfo['showUrls'];
        foreach ($infos as $info) {
            $info->source_status_deal = 1;
			$description = '';
            foreach ($showUrls as $key => $value) {
                $file = $info['source_site_code'] . '/show/' . $info['city_code'] . '/' . $info['source_id'] . '-' . $key . '.html';
                if (!$this->fileExist($file)) {
					$info->source_status_spider = 0;
                    break;
                }
                $crawler = new Crawler();
                $crawler->addContent($this->getContent($file));
				switch ($key) {
				case 'integrity':
                    $exist = Integrity::find()->where(['source_id' => $info['source_id']])->one();
					if (!$exist) {
                    $integrityFields = [
                    '公司名称' => 'name', 
                    '企业类型' => 'sort',
                    '注册地址' => 'address',
                    '注册资金' => 'registered_fund',
                    '营业期限' => 'business_limit',
                    '成立日期' => 'build_at',
                    '登记机关' => 'regoffice',
                    '经营范围' => 'business_scope',
                    '年检时间' => 'annual_examine',
                    '注册号' => 'regno', 
                    '法定代表人' => 'legal_person',
                    ];
					$integrityModel = new Integrity();
					$crawler->filter('tbody tr')->each(function ($node) use ($integrityModel, $integrityFields) {
						$integrityModel->haveInfo = true;
						$key = trim($node->filter('.zgsgc_title')->text());
						$value = trim($node->filter('.zgsgc_details')->text());
						$fieldKey = $integrityFields[$key];
						$integrityModel->$fieldKey = $value;
						//echo $key . '--' . $value . '<br />';
					});
					if ($integrityModel->haveInfo) {
					$integrityModel->source_id = $info['source_id'];
					$integrityModel->source_site_code = $info['source_site_code'];
					$integrityModel->insert(false);
					}
					}
					break;
				case 'certificate':
					$crawler->filter('.intro_row ul li')->each(function ($node) use ($info) {
						//$title = $node->getNode(0)->parentNode->parentNode;//->firstChild;
                        $exist = Attachment::find()->where(['info_field' => 'aptitude', 'source_url' => $info['source_url']])->one();
					    if (!$exist) {
						$pic = trim($node->filter('img')->attr('src'));
						$title = trim($node->filter('span')->text());
						$title = empty($title) ? '资质和荣誉' : $title;
						$aData = [
							'source_url' => $pic,
							'name' => $title,
							'path_prefix' => 'default',
							'url_prefix' => 'default',
							'filename' => $title,
							'description' => $title,
							'info_table' => 'merchant',
							'info_field' => 'aptitude',
							'created_at' => Yii::$app->params['currentTime'],
							'source_site_code' => $info['source_site_code'],
							'source_id' => $info['source_id'],
							'source_status' => 0,
						];
						$aModel = new Attachment($aData);
						$aModel->insert(false);
						}
					});
					break;
				case 'intro':
                    $exist = Detail::find()->where(['source_id' => $info['source_id']])->one();
					if (!$exist) {
                    $detailFields = [
                    '公司规模' => 'scale',
                    '装后服务' => 'service_response',
                    '初期设计/量房' => 'design_first',
                    '初期预算/洽谈方式' => 'budget_first',
                    '深化设计' => 'design_second',
                    '深化预算' => 'budget_second',
                    '材料质量' => 'quality',
                    '合同规范性' => 'contract',
                    '特色服务' => 'service',
                    '服务区域' => 'district',
                    '服务专长' => 'speciality_home',
                    '公装' => 'speciality_office',
                    '承接价位' => 'price',
                    '专长风格' => 'style',
                    ];
					$detailModel = new Detail();
					$crawler->filter('tbody tr')->each(function ($node) use ($detailModel, $detailFields) {
						$value = trim($node->filter('.content')->text());
						$keyObj = $node->filter('.thead');
						$key = count($keyObj) ? $keyObj->text() : '公装';
						$fieldKey = $detailFields[$key];
						$detailModel->$fieldKey = $value;
						//echo $key . '--' . $value . '<br />';
					});
					$detailModel->source_id = $info['source_id'];
					$detailModel->source_site_code = $info['source_site_code'];
					$detailModel->insert(false);
					}

					$descriptionObj = $crawler->filter('.describe p');//->text();
					$description = count($descriptionObj) ? $descriptionObj->text() : '';
					break;
				}
            }
			$info->description = $description;
			$info->update(false);
        }
    }

	public function infosListUrl($siteCode)
	{
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 1];
        $infos = $model->find()->where($where)->limit(500)->all();
		$infoUrls = $this->configInfo['infoUrls'];
		foreach ($infos as $info) {
            $sql = "INSERT INTO `ws_house_infolist` (`site_code`, `source_id`, `type`, `url_source`, `city_code`, `page`) VALUES";
			foreach ($infoUrls as $type => $url) {
                $urlSource = str_replace(['{{CITYCODE}}', '{{INFOID}}', '{{PAGE}}'], [$info['city_code'], $info['source_id'], 1], $url);
                $sql .= "('{$info['source_site_code']}', '{$info['source_id']}', '{$type}', '{$urlSource}', '{$info['city_code']}', '1'),\n";
			}
			$sql = rtrim($sql, ",\n");
			$this->db->createCommand($sql)->execute();
			$info->source_status_spider = 2;
			$info->update();
		}
	}

    public function infosListSpider($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 0];
        $infos = $model->find()->where($where)->limit(500)->all();
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
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
}
