<?php

namespace common\components\sms;

use Yii;
use yii\helpers\FileHelper;

class Smser extends \yii\base\Component
{
    protected $returnInfo;
	protected $smser;
    
    public function __construct($plat = null, $config = [])
    {
		$platInfos = require(__DIR__ . '/smser/config.php');
		$plat = is_null($plat) || in_array($plat, array_keys($platInfos)) ? 'luosimao' : $plat;

		$smser = 'common\components\sms\smser\\' . ucfirst($plat);
		$this->smser = new $smser($platInfos[$plat]);

        parent::__construct($config);
    }
    
    /**
     * 发送短信
     *
     * @param string $mobile  对方手机号码
     * @param string $content 短信内容
     * @return boolean        短信是否发送成功
     */
    public function send($mobile, $content, $sort = '')
    {
		$startTime = microtime(true);
		$return = $this->smser->send($mobile, $content, $sort);
		
		return $return;
    }

	public function sendCode($mobile, $sort)
	{
		$verificationCode = new VerificationCode();
		$info = $verificationCode->sendCode($mobile, $sort);
		if (!is_array($info)) {
			return $info;
		}

		$return = $this->smser->send($mobile, $info['code'], $sort);
		return $return;
	}

	public function checkCode($mobile, $sort, $code)
	{
		$verificationCode = new VerificationCode();
		$resultCode = $verificationCode->checkCode($mobile, $sort, $code);

		return $resultCode;
	}
}
