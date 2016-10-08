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

    public function getRemoteContent($url)
    {
        //$url = 'http://spider.91zuiai.com/site/test.html';
        /*echo $url;
        $ip = rand(1,255).'.'.rand(1,255).'.'.rand(1,255).'.'.rand(1,255);
        $headerArr[] = 'X-FORWARDED-FOR' .':' . $ip;
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);//"http://ip138.com");
        curl_setopt ($ch, CURLOPT_HTTPHEADER , $headerArr );
        $re=curl_exec($ch);
        var_dump($re);
        return ;*/
        
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
        curl_setopt($ch, CURLOPT_PROXY, "42.96.194.225"); //代理服务器地址
        curl_setopt($ch, CURLOPT_PROXYPORT, 80); //代理服务器端口
        //curl_setopt($ch, CURLOPT_PROXYUSERPWD, ":"); //http代理认证帐号，username:password的格式
        curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //使用http代理模式
        $file_contents = curl_exec($ch);
        var_dump($file_contents);
        curl_close($ch);
        echo $file_contents;exit();
        return ;


        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL, $url);
        //curl_setopt($curl, CURLOPT_HTTPHEADER, 0);//$header); //设置header 
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);
  
        curl_close($curl);
        var_dump($data);
    }
}
