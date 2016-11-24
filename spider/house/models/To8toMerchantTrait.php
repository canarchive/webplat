<?php

namespace spider\house\models;

use Yii;
use Symfony\Component\DomCrawler\Crawler;
use spider\models\Merchant;
use spider\models\Attachment;
use spider\models\Detail;
use spider\models\Integrity;

trait To8toMerchantTrait
{
    public function merchantListUrl($siteCode)
    {
        $listUrl = $this->configInfo['companylist'];
        $cityInfos = $this->configInfo['cityInfos'];
        $sql = "INSERT INTO `ws_house_companylist` (`site_code`, `url_source`, `city_code`, `page`) VALUES";
        foreach ($cityInfos as $code => $info) {
            $url = str_replace(['{{CITYCODE}}', '{{PAGE}}'], [$code, 1], $listUrl);
            $sql .= "('{$siteCode}', '{$url}', '{$code}', '1'),\n";
        }
        $sql = rtrim($sql, ",\n");
        $this->db->createCommand($sql)->execute();
        echo $sql;
    }
    
    public function merchantListUrlPage($siteCode)
    {
        $listUrl = $this->configInfo['companylist'];
        $sql = "INSERT INTO `ws_house_companylist` (`site_code`, `url_source`, `city_code`, `page`) VALUES";
        $model = new HouseCompanylist();
        $where = ['site_code' => $siteCode, 'status' => 1, 'is_allpage' => 0, 'page' => 1];
        $infos = $model->find()->where($where)->limit(100)->all();
        $update = false;
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/list/' . $info['city_code'] . '-' . $info['page'] . '.html';
            $info->is_allpage = date('Ymd', Yii::$app->params['currentTime']);
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }
        
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            $pageNode = $crawler->filter('.pages a');//->text();
            $count = count($pageNode);
            if ($count != 0) {
                $lastPage = intval($pageNode->eq($count-2)->text());
                for ($i = 2; $i <= $lastPage; $i++) {
                    $update = true;
                    $url = str_replace(['{{CITYCODE}}', '{{PAGE}}'], [$info['city_code'], $i], $listUrl);
                    $urlInfo = pathinfo($url);
                    $sql .= "('{$siteCode}', '{$url}', '{$info['city_code']}', '{$i}'),\n";
                }

            }
            //echo count($pageNode);
            //echo '--' . $lastPage;
            //echo "<a href='{$info['url_source']}' target='_blank'>{$info['url_source']}</a><br />";
            $info->update();
        }
        if ($update) {
            $sql = rtrim($sql, ",\n");
            $this->db->createCommand($sql)->execute();
        }
        echo $sql;
    }

    public function merchantListSpider($siteCode)
    {
        $model = new HouseCompanylist();
        $where = ['site_code' => $siteCode, 'status' => 0];
        $infos = $model->find()->where($where)->limit(2000)->all();
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/list/' . $info['city_code'] . '-' . $info['page'] . '.html';
            $info->status = 1;
            $info->updated_at = Yii::$app->params['currentTime'];
            if ($this->fileExist($file)) {
                $info->update();
                continue;
            }
            $content = file_get_contents($info['url_source']);
            $this->writeFile($file, $content);
            $info->update();
        }
    }

    public function merchantShowCheck($siteCode)
    {
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_show_num' => 0];
        $infos = $model->find()->where($where)->limit(3000)->all();
        $showUrls = $this->configInfo['showUrls'];
		$numAll = 0;
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
			$num = 0;
            foreach ($showUrls as $key => $value) {
                $file = $info['source_site_code'] . '/show/' . $info['source_city_code'] . '/' . $info['source_id'] . '-' . $key . '.html';
                if ($this->fileExist($file)) {
					$num++;
					$numAll++;
				}
            }
			$info->source_show_num = $num;

            $info->update();
        }
		echo $numAll;
    }

    public function merchantShowSpiderbak($siteCode)
    {
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 0];
        $infos = $model->find()->where($where)->limit(2000)->all();
        $showUrls = $this->configInfo['showUrls'];
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
            foreach ($showUrls as $key => $value) {
                $url = str_replace(['{{CITYCODE}}', '{{INFOID}}'], [$info['city_code'], $info['source_id']], $value);
                $file = $info['source_site_code'] . '/show/' . $info['city_code'] . '/' . $info['source_id'] . '-' . $key . '.html';
                $fileSource = $info['source_site_code'] . '/show/' . $info['source_city_code'] . '/' . $info['source_id'] . '-' . $key . '.html';
				$this->changeFiles($file, $fileSource);
            }

            $info->update();
        }
    }

    public function merchantShowSpider($siteCode)
    {
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_spider' => 0, 'source_show_num' => 3];
        $infos = $model->find()->where($where)->limit(100)->all();
        $showUrls = $this->configInfo['showUrls'];
		$numExist = $num = 0;
        foreach ($infos as $info) {
            $info->source_status_spider = 1;
            foreach ($showUrls as $key => $value) {
                $url = str_replace(['{{CITYCODE}}', '{{INFOID}}'], [$info['city_code'], $info['source_id']], $value);
                $file = $info['source_site_code'] . '/show/' . $info['source_city_code'] . '/' . $info['source_id'] . '-' . $key . '.html';
                if ($this->fileExist($file)) {
					$numExist++;
                    continue;
                }
                //$content = file_get_contents($url);
				//$content = $this->getRemoteContent($url);

				//!$content || $this->writeFile($file, $content);
				echo $file . '<br />';
				$num++;
                //$r = $this->writeFile($file, $content);
            }

            $r1 = $info->update(false);
        }
		echo $numExist . '--' . $num;
    }

    public function merchantList($siteCode)
    {
        $model = new HouseCompanylist();
        $where = ['site_code' => $siteCode, 'status' => 1];//, 'page' => [1]];
        $infos = $model->find()->where($where)->orderBy('id DESC')->limit(100)->all();
		//print_r($infos);exit();
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/list/' . $info['city_code'] . '-' . $info['page'] . '.html';
            $info->status = 2;
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }
        
			$spiderNum = 0;
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            $crawler->filter('.zgs_company_list ul li')->each(function ($node) use ($info, &$spiderNum) {
                $source_logo = $node->filter('.zgscl_logo img')->attr('src');
                $attrs = $node->filter('h3 a');
                $source_url = $attrs->attr('href');
                $name = $attrs->text();
                $source_id = str_replace('/', '', substr($source_url, strpos($source_url, 'zs/') + 3));

                $existLogo = Attachment::find()->where(['info_table' => 'merchant', 'info_field' => 'logo', 'source_url' => $source_logo])->one();
                if (!$existLogo) {
                $aData = [
                    'source_url' => $source_logo,
                    'name' => $name,
                    'path_prefix' => 'default',
                    'url_prefix' => 'default',
                    'filename' => $name,
                    'description' => $name,
                    'info_table' => 'merchant',
                    'info_field' => 'logo',
                    'created_at' => Yii::$app->params['currentTime'],
                    'source_site_code' => $info['site_code'],
                    'source_id' => $source_id,
                    'source_status' => 0,
                ];
                $aModel = new Attachment($aData);
                $aModel->insert(false);
                }

                $exist = Merchant::find()->where(['source_url' => $source_url])->one();
                if (!$exist) {
                $address = $node->filter('.zd_three');
                $address = $address->text();

                $praise = $node->filter('.koubei_number');
                $praise = count($praise) > 0 ? $praise->text() : 0;
                $score = $node->filter('.haoping-text');
                $score = count($score) > 0 ? $score->text() : 0;
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
					'source_site_code' => $info['site_code'],
                    'city_code' => $info['city_code'],
                    'is_spider' => 1,
                ];
                $fields = ['source_id', 'source_url', 'name', 'address', 'score', 'praise', 'num_working', 'num_realcase', 'num_owner', 'num_deposit', 'num_comment'];
                foreach ($fields as $field) {
                    $data[$field] = trim($$field);
                }
                $model = new Merchant($data);
                $model->insert(false);
                }
				$spiderNum++;
            });
			$info->spider_num = $spiderNum;
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
        $infos = $model->find()->where($where)->limit(300)->all();
        $infoUrls = $this->configInfo['infoUrls'];
		$addNum = 0;
        foreach ($infos as $info) {
            foreach ($infoUrls as $type => $url) {
                $urlSource = str_replace(['{{CITYCODE}}', '{{INFOID}}', '{{PAGE}}'], [$info['city_code'], $info['source_id'], 1], $url);
                $exist = HouseInfolist::find()->where(['site_code' => $info['source_site_code'], 'url_source' => $urlSource])->one();
                if (!$exist) {
				$addNum++;
                $data = [
					'site_code' => $info['source_site_code'],
					'source_id' => $info['source_id'],
					'type' => $type,
                    'url_source' => $urlSource,
					'city_code' => $info['city_code'],
					'source_city_code' => $info['source_city_code'],
					'page' => 1,
                ];
                $aModel = new HouseInfolist($data);
                $aModel->insert(false);
                }
            }
            //$sql = rtrim($sql, ",\n");
            //$this->db->createCommand($sql)->execute();
            $info->source_status_spider = 2;
            $info->update();
        }
		echo $addNum;
    }

    public function infosListSpiderPage($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'is_allpage' => 0, 'page' => 1];
        $infos = $model->find()->where($where)->limit(500)->all();
        $infoUrls = $this->configInfo['infoUrls'];
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['source_city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-1.html';
            $info->is_allpage = date('Ymd', Yii::$app->params['currentTime']);
            $info->updated_at = Yii::$app->params['currentTime'];
            if (!$this->fileExist($file)) {
                $info->status = 0;
                $info->update();
                continue;
            }
        
            $crawler = new Crawler();
            $crawler->addContent($this->getContent($file));
            $pageNode = $crawler->filter('.pages a');//->text();
			$update = false;
            $count = count($pageNode);
			$sql = "INSERT INTO `ws_house_infolist` (`site_code`, `source_id`, `type`, `url_source`, `city_code`, `source_city_code`, `page`) VALUES";
            if ($count != 0) {
                $lastPage = intval($pageNode->eq($count-2)->text());
                for ($i = 2; $i <= $lastPage; $i++) {
                    $update = true;
                    $urlSource = str_replace(['{{CITYCODE}}', '{{INFOID}}', '{{PAGE}}'], [$info['city_code'], $info['source_id'], $i], $infoUrls[$info['type']]);
					$sql .= "('{$info['site_code']}', '{$info['source_id']}', '{$info['type']}', '{$urlSource}', '{$info['city_code']}', '{$info['source_city_code']}', $i),\n";
                }

            }
            if ($update) {
                $sql = rtrim($sql, ",\n");
                $this->db->createCommand($sql)->execute();
            }
			//echo $sql;exit();
            $info->update();
        }
	}

    public function infosListSpider($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 0];
        $infos = $model->find()->where($where)->limit(300)->all();
		echo count($infos) . '<br />';
		$num = 0;
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['source_city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            $info->status = 1;
            $info->updated_at = Yii::$app->params['currentTime'];
            if ($this->fileExist($file)) {
			echo $file . '<br />';
                $info->update();
                continue;
            }
            $content = @ file_get_contents($info['url_source']);
			if ($content) {
			    $this->writeFile($file, $content);
			} else {
				$info->status = -1;
			}
            //$this->writeFile($file, $content);
            $info->update();
			$num++;
        }
		echo $num;
    }

    public function infosListSpiderbak($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status' => 0];
        $infos = $model->find()->where($where)->limit(5000)->all();
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            $fileSource = $info['site_code'] . '/infoslist/' . $info['source_city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
		    $this->changeFiles($file, $fileSource);
            $info->status = 1;
            $info->update();
        }
    }

    public function infosListSpiderCheck($siteCode)
    {
        $model = new HouseInfolist();
        $where = ['site_code' => $siteCode, 'status_ext' => 0];
        $infos = $model->find()->where($where)->limit(100)->all();
		$exists = $noexists = [];
        foreach ($infos as $info) {
            $file = $info['site_code'] . '/infoslist/' . $info['source_city_code'] . '/' . $info['source_id'] . '/' . $info['type'] . '-' . $info['page'] . '.html';
            if ($this->fileExist($file)) {
				$exists[] = $info->id;
			} else {
				$noexists[] = $info->id;
			}
		}
		$existStr = implode($exists, ',');
		$noexistStr = implode($noexists, ',');
		if ($existStr) {
			$sql = "UPDATE `ws_house_infolist` SET `status_ext` = 1 WHERE `id` IN ({$existStr})";
            //$this->db->createCommand($sql)->execute();
		}
		if ($noexistStr) {
			$sqlNo = "UPDATE `ws_house_infolist` SET `status_ext` = -1 WHERE `id` IN ({$existStr})";
            //$this->db->createCommand($sqlNo)->execute();
		}
		echo count($exists) . '-no-' . count($noexists);
        /*$where = ['site_code' => $siteCode, 'status' => -1];
        $infos = $model->find()->where($where)->limit(5000)->all();
        foreach ($infos as $info) {
			$url = $info['url_source'];
			echo "<a href='{$url}' target='_blank'>{$url}</a><br />";
		}*/
    }

    public function merchantShowCheckName($siteCode)
    {
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_deal' => 0];
        $infos = $model->find()->where($where)->limit(3000)->all();
        $cityInfos = $this->configInfo['cityInfos'];
		//print_r($cityInfos);exit();
		//echo count($infos);
        foreach ($infos as $info) {
			$name = $info['name_full'];
			$cityName = $cityInfos[$info['source_city_code']]['name'];
			if (strpos($name, $cityName) === 0) {
				$len = strlen($cityName);
			    $shortName = substr($name, $len);
				if (substr($shortName, 0, 3) == '市') {
					$shortName = substr($shortName, 3);
				}
			} else {
				$shortName = $name;
			}
			$strs = [
				'装饰集团绍兴有限公司上...',
				'装饰工程有限责任公...',
				'装饰工程有限公司西安第...',
				'建筑装饰工程服务有限公...',
				'建筑装饰工程有限公...',
				'建筑装饰设计工程有限公司',
				'建筑装饰工程有限责任公司',
				'装饰设计建筑工程有限公司',
				'建筑设计工程有限公司',
				'建筑装饰工程有限公司',
				'装饰设计工程有限公司',
				'装饰工程设计有限公司',
				'装饰工程有限责任公司',
				'装饰装修工程有限公司',
				'装饰材料有限公司',
				'建筑工程有限公司',
				'装潢设计有限公司',
				'装饰装潢有限公司',
				'装饰装修有限公司', 
				'装饰工程有限公司', 
				'装饰设计有限公司', 
				'装饰有限责任公司',
				'装饰有限公司',
				'股份有限公司',
				'有限公司', 
			];
			$strsRep = ['','', '', '', '','','','','','','','', '', '','','','','','',''];
			$shortName = str_replace($strs, $strsRep, $shortName);

			echo $cityName . '==' . $shortName . ' ----- ' . $name . '<br />';
			$info->source_status_deal = 1;
			$info->name = $shortName;
			$info->update(false);
        }
    }

    public function merchantShowExt($siteCode)
    {
        $model = new Merchant();
        $where = ['source_site_code' => $siteCode, 'source_status_deal' => 1];
        $infos = $model->find()->where($where)->limit(1000)->all();
		echo count($infos);
        $showUrls = $this->configInfo['showUrls'];
        foreach ($infos as $info) {
            $info->source_status_deal = 0;
			if (!empty($info->description)) {
                $info->update(false);
				continue;
			}
            $description = '';
                $file = $info['source_site_code'] . '/show/' . $info['city_code'] . '/' . $info['source_id'] . '-index.html';
			echo $file . '<br />';
                if (!$this->fileExist($file)) {
                    $info->source_status_spider = 0;
                $info->update(false);
                    continue;
                }
                $crawler = new Crawler();
                $crawler->addContent($this->getContent($file));
                $descriptionObj = $crawler->filter('.intro_text1');//->text();
                $description = count($descriptionObj) ? $descriptionObj->text() : '';
            $info->description = $description;
            $info->update(false);
        }
    }

}
