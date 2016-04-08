<?php
namespace common\third;

use Yii;
use yii\base\InvalidParamException;

class Userplat
{
	protected $platObject;

	public function __construct($platCode, $params = [])
	{
		$validCodes = ['qq', 'weibo', 'wechat', 'tqq', 'douban'];
		if (!in_array($platCode, $validCodes)) {
			throw new InvalidParamException('error third user plat code: "' . $platCode . '"');
		}

		$platClass = 'common\third\userplat\\' . ucfirst($platCode);
		$this->platObject = new $platClass($params);
		$this->params = $params;
	}

	public function bind($platCode)
	{
		$this->platObject->bind();
	}

	public function backAuth()
	{
		//$mkey = Yii::$app->request->get('mkey'); 
		return $this->platObject->backAuth();
	}

	public function getPlatUser()
	{
		return $this->platObject->getPlatUser();
	}
}
