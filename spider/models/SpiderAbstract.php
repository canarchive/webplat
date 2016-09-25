<?php
namespace spider\models;

use Yii;
use yii\helpers\FileHelper;

class SpiderAbstract
{
	
	public function fileExist($file)
	{
		$file = Yii::getAlias('@runtime') . '/source/' . $file;
		return file_exists($file);
	}

	public function getContent($file)
	{
		$file = Yii::getAlias('@runtime') . '/source/' . $file;
		$content = file_get_contents($file);
		return $content;
	}

	public function writeFile($file, $content)
	{
		$logFile = Yii::getAlias('@runtime') . '/source/' . $file;
		$path = dirname($logFile);
		if (!is_dir($path)) {
		    FileHelper::createDirectory($path);
		}
		file_put_contents($logFile, $content);
	}
}
