<?php

namespace spread\controllers;

use spread\components\Controller as SpreadController;
use spread\models\Attachment;

class TestController extends SpreadController
{
    public function actionIndex()
    {
		$spreadInfos = $this->createUrl();

    }

    public function actionFileDown()
    {   
		return ;
		session_start();
		print_r($_SESSION);
		exit();

        $model = new Attachment();
		$newInfosSource = $model->db->createCommand('SELECT * FROM `workhouse_cms`.`wp_attachment` WHERE `source_status` = 0')->queryAll();
		$newInfos = [];
		foreach ($newInfosSource as $newInfoSource) {
			$newInfos[$newInfoSource['id']] = $newInfoSource;
		}
		echo count($newInfos) . '<br />';
        //$where = ['source_status' => [-1, -2]];
        $where = ['source_status' => -1, 'source_site_code' => '']; 
        $infos = $model->find()->where($where)->limit(500)->all();
		echo count($infos) . '<br />';
		$datas = [];
		foreach ($infos as $key => $info) {
			$name = $info->name;
			foreach ($newInfos as $key1 => $info1) {
				if ($info1['name'] == $name && $info1['info_table'] = $info['info_table'] && $info1['info_field'] = $info['info_field']) {
					$datas[$key][] = $key1;
				}
			}
		}
		$newIds = [];
		//print_r($datas);exit();
		$num = 0;
		foreach ($datas as $a1 => $data) {
			if (true) {//count($data) == 1) {
				//continue;
				$newId = $data[0];
				if (in_array($newId, $newIds)) {
					continue;
				}
				$num++;

				$info = $infos[$a1];
				$newInfo = $newInfos[$newId];
				$newIds[] = $newId;
				$info->noFile = 1;
				$info->extname = $newInfo['extname'];
				$info->filepath = $newInfo['filepath'];
				$info->size = $newInfo['size'];
				$info->type = $newInfo['type'];
				$info->created_at = $newInfo['created_at'];
				$info->source_status = 1;
				$r = $info->update(false);
				//print_r($info);
				//print_r($info->db);
				//var_dump($r);exit();
				//print_r($info);
			}
		}
		echo $num;
		echo implode($newIds,',');
		exit();


print_r($infos);exit();
        //$pathBase = Yii::$app->params['pathParams']['default'] . '/';
        $pathBase = '/data/htmlwww/filesys/';
        $localBase = 'http://60.205.145.0/common/upload/';
        foreach ($infos as $info) {
            $extName = $pos = strpos($info->name, '.') ? substr($info->name, strpos($info->name, '.') + 1) : '';



			echo $info->created_at . '--' . $info->name;
                $key = md5($info->created_at . $info->name);
                $base = "{$info->info_table}/{$info->info_field}";
                    for ($i = 0; $i < 1; ++$i) {
                        if (($prefix = substr($key, $i + $i, 2)) !== false) {
                            $base .= "/{$prefix}";
                        }   
                    }   
                //return $base . "/{$key}.{$extName}";

            $file = $pathBase . $base . "/{$key}.{$extName}";
			if (file_exists($file)) {
				$file = 'hhh--' . $file;
			}
			echo $file . '<br />';
			continue;
            $info->source_status = 1;
            if (!file_exists($file)) {
            FileHelper::createDirectory(dirname($file));
            $content =  @ file_get_contents(trim($info['source_url']));
            if ($content) {
            file_put_contents($file, $content);
            } else {
                echo "<a href='{$info['source_url']}' target='_blank'>{$info['source_url']}</a><br />";
                $info->source_status = -1; 
            }   
            }   

            $info->extname = $extName;
            $info->filepath = str_replace($pathBase, '', $file);
            $info->size = @ filesize($file);
            $info->type = !is_null(FileHelper::getMimeType($file)) ? FileHelper::getMimeType($file) : ''; 
            $info->created_at = Yii::$app->params['currentTime'];
            //$info->update(false);
            //$filepath = $info['filepath'];
            //$file = $pathBase . $filepath;
            //echo "<a href='{$localBase}{$filepath}' target='_blank'>{$file}</a>--<a href='{$info['source_url']}' target='_blank'>源文件</a><br />";
            //print_r($info);exit();
        }       
    }       

	protected function createUrl()
	{
		$spreadInfos = array();
		$grouponInfos = $this->getGrouponInfos();
		$templateInfos = [['code' => 'tuig', 'name' => '默认']];//$this->getTemplateInfos();

		$i = 0;
		foreach ($grouponInfos as $grouponInfo) {
			$grouponId = $grouponInfo['groupon_id'];
			foreach ($templateInfos as $templateInfo) {
				$j = 0;
				for ($j = 0; $j < 10; $j++) {
				$templateCode = $templateInfo['code'];

				$semParams = $this->getSemParams();
				$queryStr = http_build_query($semParams);
				$url = \Yii::getAlias('@spreadurl') . "/detail/{$templateCode}.html?id={$grouponId}&{$queryStr}";
				$spreadInfos[$i]['groupon_name'] = $grouponInfo['groupon_name'];
				$spreadInfos[$i]['template_name'] = $templateInfo['name'];
			    $spreadInfos[$i]['url'] = $url;
				$i++;
				}
			}
		}

		return $spreadInfos;
	}

	protected function getGrouponInfos()
	{
		$ids = array('2384', '2376');
		$id = $ids[array_rand($ids)];
		$model = new \spread\models\Groupon();
		$info = $model->find()->where(['groupon_id' => $ids])->asArray()->all();

		return $info;
	}

	protected function getTemplateInfos()
	{
		$model = new \spread\models\Template();
		$info = $model->find()->asArray()->all();

		return $info;
	}

	protected function getSemParams()
	{
		$sem = array('bd', 'sg', '360');
		$sem = $sem[array_rand($sem)];
		$matchtype = rand(1, 3);
		$placement = array('', '17house.com');
		$placement = $placement[array_rand($placement)];
		$adposition = array('cl', 'clg', 'cr', 'mt', 'mb');
		$adposition = $adposition[array_rand($adposition)] . rand(0, 10);
		$dongtai = rand(0, 1);
		$keywords = array('', '橱柜', '卫浴', '其他', '地对地导弹', '违法阿道夫', '22f搜索', '大都督府');
		$kw = $keywords[array_rand($keywords)];

		$params = array(
			'sem' => $sem,
			'kid' => rand(2000, 4000),
			'a_creative' => rand(1000, 2000),
			'a_matchtype' => $matchtype,
			'url' => $placement,
			'a_adposition' => $adposition,
			'a_dongtai' => $dongtai,
			'a_pagenum' => rand(1, 10),
			'kw' => $kw,
			'utm_network' => '',
		);

		return $params;
	}
}
