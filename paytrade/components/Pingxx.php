<?php
namespace paytrade\components;

use Yii;
use yii\base\Component;
use yii\helpers\Url;
use yii\helpers\FileHelper;
use Pingpp\Pingpp;

class Pingxx extends Component
{
	protected $channels;

	public function pay($params)
	{
        \Pingpp\Pingpp::setApiKey('sk_test_4uHOa5H0m9OO4C88GOCS8un1');
        try {
            $ch = \Pingpp\Charge::create(
                array(
                    'subject'   => 'Your Subject',
                    'body'      => 'Your Body',
                    'amount'    => $params['money'],
                    'currency'  => 'cny',
                    'extra'     => $params['channelParams'],
					'order_no' => $params['orderid'],
                    'channel'   => $params['channel'],
                    'client_ip' => '42.96.194.225',//$_SERVER['REMOTE_ADDR'],
                    'app'       => array('id' => 'app_TKSeD0nHOK48jDuT')
                )
            );
			return json_decode($ch, true);
        } catch (\Pingpp\Error\Base $e) {
            header('Status: ' . $e->getHttpStatus());
			$data = json_decode($e->getHttpBody(), true);
			$data = $data['error'];
			$data['status'] = $e->getHttpStatus();
			return $data;
        }				
	}

	public function getParams()
	{
        $params = file_get_contents('php://input');
        $params = json_decode($params, true);
		//var_export($params);exit();

		$money = isset($params['money']) ? $params['money'] : 0;
		if ($money <= 0) {
			return ['status' => 400, 'message' => '充值金额有误'];
		}

		$channel = isset($params['channel']) ? strtolower($params['channel']) : '';
		$channelParams = $this->getChannelParams($channel);
		if (empty($channelParams)) {
			return ['status' => 400, 'message' => '充值渠道有误'];
		}

		$params['channelParams'] = $channelParams;
		return $params;
	}

	protected function getChannelParams($channel = null)
	{
		static $channels = null;
		if (is_null($channels)) {
		    $channels = require Yii::getAlias('@paytrade') . '/config/payment-local.php';
		}

		if (is_null($channel)) {
			return $channels;
		}

		$params = isset($channels[$channel]) ? $channels[$channel] : false;
		if (empty($params)) {
			return $params;
		}

		$urlParams = ['success_url', 'cancel_url', 'result_url', 'fail_url'];
		foreach ($params as $key => $param) {
			if (in_array($key, $urlParams)) {
				$result = str_replace('_url', '', $key);
				$url = Yii::getAlias('@paytradeurl') . '/callback/' . $result . '.html';
				$params[$key] = $url;
			}
		}

		return $params;
	}

	public function verifySignature()
	{
        $params = file_get_contents('php://input');
		$params = Yii::$app->params['pingxxCallback'];
        $headers = \Pingpp\Util\Util::getRequestHeaders();
        $signature = isset($headers['X-Pingplusplus-Signature']) ? $headers['X-Pingplusplus-Signature'] : NULL;

        $pubKeyPath = Yii::getAlias('@paytrade') . '/config/pingpp_rsa_public_key.pem';
        $pubKey = file_get_contents($pubKeyPath);
        $verify = true;//openssl_verify($params, base64_decode($signature), $pubKey, 'sha256');

		if (!$verify && !empty($params)) {
			$this->_writeLog($params);
			return false;
		}
		$params = @ json_decode($params, true);
		return $params;
	}

	protected function _writeLog($params)
	{
		$logFile = Yii::getAlias('@runtime') . '/logs/pingxx/' . date('Y-m-d') . '/no_verify.log';
		$path = dirname($logFile);
		if (!is_dir($path)) {
		    FileHelper::createDirectory($path);
		}
		$content = date('H:i:s' . $params . "\n");
		file_put_contents($logFile, $content, FILE_APPEND);

		return true;
	}
}
