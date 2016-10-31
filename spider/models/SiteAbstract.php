<?php

namespace spider\models;

use Yii;
use yii\helpers\FileHelper;
use common\models\SpiderModel;

class SiteAbstract extends SpiderModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['status'], 'default', 'value' => 0],
			[['url_mobile', 'description'], 'safe'],
        ];
    }

    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'url' => '站点URL',
            'url_mobile' => '手机端URL',
            'description' => '描述',
			'status' => '状态',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停',
			'1' => '正常',
		];
		return $datas;
	}

	public function spider($action)
	{
		$object = $this->getSpiderObject();
		$method = $action;
		return $object->$method($this->code);
	}

	public function deal($action)
	{
		$object = $this->getSpiderObject();
		$method = $action;
		return $object->$method($this->code);
	}

	public function fileDown()
	{
        $model = new Attachment();
        //$where = ['source_status' => [-1, -2]];
        $where = ['source_status' => 0];
        $infos = $model->find()->where($where)->limit(200)->all();
		//$pathBase = Yii::$app->params['pathParams']['default'] . '/';
		$pathBase = '/data/htmlwww/filesys/newdown/';
		$localBase = 'http://60.205.145.0/common/upload/';
        foreach ($infos as $info) {
			$pathInfo = pathinfo($info['source_url']);
			$extName = isset($pathInfo['extension']) ? $pathInfo['extension'] : '';
			$extName = $pos = strpos($extName, '?') ? substr($extName, 0, strpos($extName, '?')) : $extName;

            $key = md5($info['info_table'] . $info['info_field'] . $info['source_id'] . $info['source_url']);
			$code = substr($info['source_site_code'], 0, 1) . '2_';
			$base = "{$code}{$info['info_table']}/{$info['info_field']}";
            for ($i = 0; $i < 1; ++$i) {
                if (($prefix = substr($key, $i + $i, 2)) !== false) {
                    $base .= "/{$prefix}";
                }
            }
			$file = $pathBase . $base . "/{$key}.{$extName}";
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
			$info->update(false);
			//$filepath = $info['filepath'];
			//$file = $pathBase . $filepath;
			//echo "<a href='{$localBase}{$filepath}' target='_blank'>{$file}</a>--<a href='{$info['source_url']}' target='_blank'>源文件</a><br />";
			//print_r($info);exit();
		}
	}

	protected function getSpiderObject()
	{
		$code = $this->code;
		$class = 'spider\house\models\\' . ucfirst($code);
		$object = new $class();

		return $object;
	}
       public function fileCheck($siteCode)
       {
        $model = new Attachment();
        $where = ['source_status_ext' => 0];
        $infos = $model->find()->where($where)->limit(10000)->all();
               //$pathBase = Yii::$app->params['pathParams']['default'] . '/';
               $localBase = 'http://sj.shedaojia.com/';
               $pathBase = '/data/htmlwww/upload/';
               $exists = $noexists = [];
        foreach ($infos as $info) {
                       $filepath = $info['filepath'];
                       $file = $pathBase . $filepath;
                       //echo "<a href='{$localBase}{$filepath}' target='_blank'>{$file}</a>--<a href='{$info['source_url']}' target='_blank'>源文件</a><br />";
               
                       if (file_exists($file)) {
                               $exists[] = $info->id;
                       } else {
                               $noexists[] = $info->id;
                       }
               }
               $existStr = implode($exists, ',');
               $noexistStr = implode($noexists, ',');
               $sql = $sqlNo = '';
               if ($existStr) {
                       $sql = "UPDATE `ws_attachment` SET `source_status_ext` = 1 WHERE `id` IN ({$existStr})";
            $this->db->createCommand($sql)->execute();
               }
               if ($noexistStr) {
                       $sqlNo = "UPDATE `ws_attachment` SET `source_status_ext` = -1 WHERE `id` IN ({$noexistStr})";
            $this->db->createCommand($sqlNo)->execute();
               }
               echo $sql . '<br />';
               echo $sqlNo . '<br />';

               echo count($exists) . '-no-' . count($noexists);
       }
}
