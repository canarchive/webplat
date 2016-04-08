<?php
namespace common\third\userplat;

use common\third\userplat\AbstractPlat;

class Weibo extends AbstractPlat
{
    public function __construct()
    {
        require_once  dirname(__FILE__) . '/weibo/saetv2.ex.class.php';
        $this->configInfo = require dirname(__FILE__) . '/weibo/config.php';
    }

    public function bind()
    {
        $authV2 = new \SaeTOAuthV2($this->configInfo['account'], $this->configInfo['key']);
        $visitUrl = $authV2->getAuthorizeURL($this->configInfo['redirect_uri']);
		echo $visitUrl;exit();
        //$visitUrl = str_replace('&amp;', '&', $visitUrl);
        header('Content-Type: text/html; charset=UTF-8');
        header("Location: $visitUrl");
    }

    public function backAuth()
    {
		return true;
        $authV2 = new \SaeTOAuthV2($this->configInfo['account'], $this->configInfo['key']);

        if (isset($_REQUEST['code'])) {
            $keys = array();
            $keys['code'] = $_REQUEST['code'];
            $keys['redirect_uri'] = $this->configInfo['redirect_uri'];
            try {
                $token = $authV2->getAccessToken('code', $keys);
            } catch (OAuthException $e) {
                return false;
            }
        }

        if ($token) {
            $_SESSION['token'] = $token;
            setcookie( 'weibojs_'.$authV2->client_id, http_build_query($token));
            return true;
        }

        return false;
    }

    public function getPlatUser()
    {
        //$platUser = new \SaeTClientV2($this->configInfo['account'], $this->configInfo['key'], '2.00kkdKWDY3zyfC2ed2a0c6ef0RpyBk');//$_SESSION['token']['access_token']);

        //$ms = $platUser->home_timeline();
        //$uid_get = $platUser->get_uid();
        $userInfo = ['id' => 1];//$platUser->show_user_by_id($uid_get['uid']);
		$platUser = [];
		if (isset($userInfo['id'])) {
			$platUser = [
				'plat_code' => 'weibo',
				'access_token' => 'token',
				'openid' => time(),//$userInfo['id'],
				'nickname' => 'name',//$userInfo['screen_name'],
				'thumb' => 'thumb',//$userInfo['avatar_large'],
				'data' => '',//serialize($userInfo),
			];
        }
        return $platUser;
    }

    public function listBlog()
    {
        $platUser = new \SaeTClientV2($this->platInfo['account'], $this->platInfo['keyword'], $_SESSION['token']['access_token']);
        $listBlog = $platUser->home_timeline();

        return $listBlog;
    }

    public function postblog($blogContent)
    {
        $platUser = new \SaeTClientV2($this->platInfo['account'], $this->platInfo['keyword'], $_SESSION['token']['access_token']);
        $postBlog = $platUser->update($blogContent);

        return $postBlog;
    }
}
?>
