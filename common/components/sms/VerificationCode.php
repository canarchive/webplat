<?php

namespace common\components\sms;

use Yii;
use common\components\ResponseCode;

class VerificationCode extends \yii\base\Object
{
	protected $configInfos;
	protected $currentTime;

    public function __construct($config = [])
    {
		$this->configInfos = require(__DIR__ . '/smser/config-verification.php');
		$this->currentTime = time();

        parent::__construct($config);
    }

    public function sendCode($mobile, $sort)
    {
		$oldInfo = $this->_initCode($mobile, $sort, true);
		if (!is_array($oldInfo)) {
			return $oldInfo;
		}

		if (!empty($oldInfo) && date('Ymd', $oldInfo['createdAt']) != date('Ymd', $this->currentTime)) {
			$oldInfo['createdAt'] = $this->currentTime;
			$oldInfo['count'] = 0;
		}

		$info = $this->_generateCode($mobile, $sort, $oldInfo);
		return $info;
    }

	public function checkCode($mobile, $sort, $code)
	{
		$codeInfo = $this->_initCode($mobile, $sort);
		if (!is_array($codeInfo)) {
			return $codeInfo;
		}

		$return = $code == $codeInfo['code'] ? 'OK' : 'SMS_VERIFY_CODE_ERROR';
		return $return ;
	}

	protected function _initCode($mobile, $sort, $generate = false)
	{
		$configInfo = isset($this->configInfos[$sort]) ? $this->configInfos[$sort] : null;
		if (empty($configInfo)) {
			return 'SMS_GETCODE_PARAM_ERROR';
		}

        $codeInfo = $this->_getCode($mobile, $sort);
		$checkResult = $this->_checkInfo($codeInfo, $configInfo, $generate);

		return $checkResult === true ? $codeInfo : $checkResult;
	}

    protected function _getCode($mobile, $sort)
    {
        $cache = Yii::$app->cache;
		$key = "sms_{$mobile}_{$sort}";
		$info = $cache->get($key);
		$info = empty($info) ? [] : $info;
		
        return $info;
    }

	protected function _checkInfo($info, $configInfo, $isSend = true)
	{
		if (empty($info)) {
			$return = $isSend ? true : 'SMS_NO_CODE';
			return $return;
		}

		if ($isSend) {
    		$sendTimes = isset($configInfo['sendTimes']) ? $configInfo['sendTimes'] : 5;
    		if ($isSend && $info['sendTimes'] > $sendTimes) {
    			return 'SMS_SEND_TIMES_OVER';
    		}
    
    		$sleep = isset($configInfo['sleep']) ? $configInfo['sleep'] : 60;
    		if ($isSend && $this->currentTime - $info['updatedAt'] < $sleep) {
    			return 'SMS_SEND_FAST';
    		}
    
    		return true;
		}

		$expire = isset($configInfo['expire']) ? $configInfo['expire'] : 300;
		if ($this->currentTime > $info['createdAt'] + $expire) {
			return 'SMS_SEND_EXPIRE';
		}
		return true;
	}

    protected function _generateCode($mobile, $sort, $oldInfo)
    {
        $cache = Yii::$app->cache;

		$length = isset($configInfo['length']) ? $configInfo['length'] : 4;
		$length = is_array($length) ? mt_rand($length[0], $length[1]) : $length;

		$code = '';
		if (isset($this->configInfos['fixedCode']) && !empty($this->configInfos['fixedCode'])) {
			$code = $this->configInfos['fixedCode'];
		} else {
            for($i = 0; $i < $length; $i++) {
                $code .= mt_rand(0, 9);
    		}
		}
		$info = [
			'code' => $code,
			'createdAt' => isset($oldInfo['createdAt']) ? $oldInfo['createdAt'] : $this->currentTime,
			'updatedAt' => $this->currentTime,
			'sendTimes' => isset($oldInfo['sendTimes']) ? $oldInfo['sendTimes'] + 1 : 1,
			'count' => 0,
		];
		$key = "sms_{$mobile}_{$sort}";
		$cache->set($key, $info, 86400);

        return $info;
    }
}
