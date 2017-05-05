<?php

namespace spread\decoration\controllers;

use spread\components\Controller as spreadController;
use spread\decoration\models\SignupForm;

class AcceptController extends spreadController
{
	public $enableCsrfValidation = false;

	public function actionXunke()
	{
        $this->enableCsrfValidation = false;
        $string = file_get_contents('php://input');

        $xml = simplexml_load_string($string);
		if (empty($xml)) {
			exit('NO');
		}
		$city = isset($xml->body->cityName) ? $xml->body->cityName : '';
		$mobile = isset($xml->body->mobile) ? $xml->body->mobile : '';
		$name = isset($xml->body->name) ? $xml->body->name : '';
		$keyword = isset($xml->body->Query) ? $xml->body->Query : '';
		$fromType = isset($xml->body->Device) ? $xml->body->Device : '';
		if (empty($mobile)) {
			exit('NO');
		}

        $data = [
            'signup_at' => time(),
			'decoration_id' => 1,
            'type' => '677',
            'signup_ip' => '',
            'signup_city' => $city,
			'signup_channel' => 'sembd-xunke',
            'mobile' => $mobile,
            'name' => $name,
			'keyword' => $keyword,
			'from_type' => $fromType,
            'message' => '',
            'note' => '百度寻客',
            'user_id' => 0,
        ];

        $model = new \spread\decoration\models\DecorationOwner($data);
        $return = $model->xunkeOperation($data);
		return 'OK';
	}
}
