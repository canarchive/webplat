<?php
namespace spider\models;

use Yii;
use common\models\SpiderModel;
use yii\helpers\FileHelper;

class SpiderAbstract extends SpiderModel
{
	
	public function fileExist($file)
	{
		$file = Yii::getAlias('@spider/runtime') . '/source/' . $file;
		return file_exists($file);
	}

	public function getContent($file)
	{
		$file = Yii::getAlias('@spider/runtime') . '/source/' . $file;
		$content = file_get_contents($file);
		return $content;
	}

	public function writeFile($file, $content)
	{
		$logFile = Yii::getAlias('@spider/runtime') . '/source/' . $file;
		$path = dirname($logFile);
		if (!is_dir($path)) {
		    FileHelper::createDirectory($path);
		}
		return file_put_contents($logFile, $content);
	}

	public function changeFiles($file, $fileSource)
	{
		static $dNum = 0;
		static $vNum = 0;
		$fileTarget = Yii::getAlias('@spider/runtime') . '/source/' . $fileSource;
		if (file_exists($fileTarget)) {
			return ;
		}
		$path = dirname($fileTarget);
		if (!is_dir($path)) {
		    FileHelper::createDirectory($path, 0777);
		}

		$f1 = Yii::getAlias('@console/runtime') . '/sourcebak/' . $fileSource;
		$f2 = Yii::getAlias('@console/runtime') . '/sourcebak/' . $file;
		$f3 = Yii::getAlias('@spider/runtime') . '/sourcebak/' . $fileSource;
		$f4 = Yii::getAlias('@spider/runtime') . '/sourcebak/' . $file;
		$mv = false;
		foreach ([$f4, $f3, $f2, $f1] as $fileSource) {
			//echo $fileSource . "<br />";
			if (!file_exists($fileSource)) {
				continue;
			}
			if ($mv) {
				$dNum++;
				unlink($fileSource);
			} else {
			    $mv = rename($fileSource, $fileTarget);
				$vNum++;
		    }
		}
		echo $dNum . '--' . $vNum . '<br />';
	}
}
