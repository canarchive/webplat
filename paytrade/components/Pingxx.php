<?php
namespace paytrade\components;

use yii\base\Component;
use yii\helpers\Url;
use Pingpp\Pingpp;

class Pingxx extends Component
{
	protected $channels;

	public function pay($params)
	{
		$channel = 'alipay_wap';//isset($params['channel']) ? strtolower($params['channel']) : '';
		$channelParams = $this->getChannelParams($channel);
		if (empty($channelParams)) {
			return false;
		}

		$amount = 10;//isset($params['amount']) ? $params['amount'] : 0;
		if ($amount <= 0) {
			return false;
		}

        //\Pingpp\Pingpp::setApiKey('sk_test_ibbTe5jLGCi5rzfH4OqPW9KC');
        \Pingpp\Pingpp::setApiKey('sk_test_4uHOa5H0m9OO4C88GOCS8un1');
        try {
            $ch = \Pingpp\Charge::create(
                array(
                    'subject'   => 'Your Subject',
                    'body'      => 'Your Body',
                    'amount'    => $amount,
                    'currency'  => 'cny',
                    'extra'     => $channelParams,
					'order_no' => date('YmdHis'),
                    'channel'   => $channel,
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

	public function getParams($getRaw = false)
	{
        /*$inputParams = file_get_contents('php://input');
		if (!$getRaw) {
            $inputParams = json_decode($inputParams, true);
		}*/
		//var_export($inputParams);exit();
		$inputParams = array (
  'channel' => 'alipay_wap',
  'order_no' => 'no1234567890',
  'amount' => 10,
  'account_type' => 'toaccount',
  'snapup_id' => 2,
);
		return $inputParams;
	}

	protected function getChannelParams($channel = null)
	{
		static $channels = null;
		if (is_null($channels)) {
		    $channels = require \Yii::getAlias('@app') . '/config/payment-local.php';
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
				$url = \Yii::getAlias('@paytradeurl') . Url::to(['/account/callback', 'result' => $result, 'code' => $channel]);
				$params[$key] = $url;
			}
		}

		return $params;
	}

	public function verifySignature()
	{
		//$params = $pingxx->getParams(true);
        $params = file_get_contents('php://input');
		$params = '{"id":"evt_M65fcPS6ubz6X9FW1yPTOTO1","created":1457342545,"livemode":false,"type":"charge.succeeded","data":{"object":{"id":"ch_CuTmr5a5084Gbz5e9OXXjPe9","object":"charge","created":1457342542,"livemode":false,"paid":true,"refunded":false,"app":"app_TKSeD0nHOK48jDuT","channel":"alipay_wap","order_no":"20160307172222","client_ip":"42.96.194.225","amount":10,"amount_settle":10,"currency":"cny","subject":"Your Subject","body":"Your Body","extra":{"success_url":"http://yii2.pay.alyee.com/callback/success/alipay_wap.html","cancel_url":"http://yii2.pay.alyee.com/callback/cancel/alipay_wap.html","buyer_account":"alipay_account"},"time_paid":1457342545,"time_expire":1457428942,"time_settle":null,"transaction_no":"2016030719969531","refunds":{"object":"list","url":"/v1/charges/ch_CuTmr5a5084Gbz5e9OXXjPe9/refunds","has_more":false,"data":[]},"amount_refunded":0,"failure_code":null,"failure_msg":null,"metadata":{},"credential":{},"description":null}},"object":"event","pending_webhooks":1,"request":"iar_fvTuDSnXfPS8000G4CzjrDWD"}';
        $headers = \Pingpp\Util\Util::getRequestHeaders();
        $signature = isset($headers['X-Pingplusplus-Signature']) ? $headers['X-Pingplusplus-Signature'] : NULL;

        $pubKeyPath = \Yii::getAlias('@app') . '/config/pingpp_rsa_public_key.pem';
        $pubKey = file_get_contents($pubKeyPath);
        $return = true;//openssl_verify($params, base64_decode($signature), $pubKey, 'sha256');

		return $return ? json_decode($params) : $return;
	}
}
