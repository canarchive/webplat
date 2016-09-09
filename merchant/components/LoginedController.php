<?php
namespace merchant\components;

use Yii;

class LoginedController extends Controller
{
	protected $userInfo;

	public $layout = 'main-logined';

	public function init()
	{
		parent::init();
		$this->userInfo = Yii::$app->user->getIdentity();
	}
}
