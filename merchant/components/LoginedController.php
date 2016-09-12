<?php
namespace merchant\components;

use Yii;
use merchant\models\Merchant;

class LoginedController extends Controller
{
	public $userInfo;
	public $merchantInfo;

	public $layout = 'main-logined';

	public function init()
	{
		parent::init();
		$this->userInfo = Yii::$app->user->getIdentity();
		$merchant = new Merchant();
		$this->merchantInfo = $merchant->getInfo($this->userInfo['merchant_id']);
	}
}
