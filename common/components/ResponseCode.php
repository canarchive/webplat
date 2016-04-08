<?php
namespace common\components;

class ResponseCode
{
	public static function getCode($code)
	{
		$codes = self::codes();
		if (isset($codes[$code])) {
			$codeInfo = $codes[$code];
			$codeInfo['code'] = $code;
			return $codeInfo;
		}

		return ['status' => '500999', 'message' => '未知异常', 'code' => 'UNKONWN'];
	}

	protected static function codes()
	{
		return [
			'OK' => ['status' => '200000', 'message' => 'OK'],
			'SMS_GETCODE_PARAM_ERROR' => ['status' => '400001', 'message' => '获取短信验证码参数错误'],
    		'NEED_LOGIN' => ['status' => '400100', 'message' => '请您先登录'],
		];
	}
}
