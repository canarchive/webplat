<?php
use yii\helpers\Url;

$cssFiles = ['styles_member'];
$jsFiles = ['modernizr.custom'];
?>
<?php echo $this->render('@shoot/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?><!DOCTYPE html>

<header class='main-header login-header'>
    <div class='upper-area'>
        <div class='wrapper g'></div>
    </div>
    <div class='bottom-area'>
        <div class='wrapper'>
            <div class='login-home'>
			    <a href='<?= Yii::getAlias('@shooturl'); ?>' class='oppo-tj'>
                    <span class='icons-plus icons-plus-home'></span>
                    <span>回到首页</span>
                </a>
                <a href='<?= Url::to(['site/signup', 'returnUrl' => $returnUrl]); ?>' class=' oppo-tj'>
                    <span class='icons-plus icons-plus-user'></span>
                    <span>注册</span>
                </a>
            </div>
            <div class='logo'>
			    <a href='<?= Yii::getAlias('@shooturl'); ?>'>
				    <img alt='' src='<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/oppo_logo.png' />
                </a>
            </div>
            <div class='login-breadcrumb'>
                登录OPPO帐号
            </div>
        </div>
    </div>
    </div>
</header>

<main class="main-content slab-light">
    <div class='wrapper login'>
        <div class='g'>
            <div class='gi desk-two-thirds login-wrapper login-ad'>
                <a href="javascript: void(0);" target="_blank">
				    <img src='<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/login-product-r9.png'>
                </a>
            </div>
            <div class='gi desk-one-third one-whole login-wrapper login-form'>
                <form action='http://my.oppo.com/auth/login' method='post' id='loginForm'>
                    <div class='field login-title'>欢迎登录OPPO帐号</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                                <ul class="list-unstyled">
                                    <strong class='error_msg_note'></strong>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='field'>
                        <input placeholder="会员名/邮箱/手机号" name="username" type="text" value="">
                        <span class='icon icon-tick-green-big register-icon'>
                        </span>
                    </div>
                    <div class='field'>
                        <p class='instructions'>
                            OPPO帐号（OPPO社区帐号、OPPO乐园帐号）均可登录
                        </p>
                    </div>
                    <div class='field'>
                        <input placeholder="密码" name="password" type="password" value="">
                        <span class='icon icon-tick-green-big register-icon'>
                        </span>
                    </div>
                    <div class="field">
                        <div class='g register-vcode  g-hide ' id="register-vcode">
                            <div class='gi two-fifths'>
                                <input placeholder="验证码" name="captcha" type="text" value="">
                            </div>
                            <div class='gi two-fifths'>
                                <img src="http://my.oppo.com/captcha?121861" id="captcha" onclick='vm.updateCaptcha()'
                                />
                            </div>
                            <div class='gi one-fifth'>
                                <a onclick='vm.updateCaptcha()' class='text-green'>
                                    换一张
                                </a>
                            </div>
                            <span class='icon icon-tick-green-big register-icon'>
                            </span>
                        </div>
                    </div>
                    <div class='field'>
                        <input type="hidden" name="is-show-captcha" id="is-show-captcha" value="0"
                        />
                        <input type="hidden" name="attack_type" value="1" />
                        <input type="button" class='button login-button' id='loginBtn' value='登录'
                        />
                    </div>
                </form>
                <div class='field g'>
                    <div class='gi one-half'>
                        <a href='http://my.oppo.com/user/findme?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F' class='text-green oppo-tj'>
                            忘记密码？
                        </a>
                    </div>
                    <div class='gi one-half align-right'>
                        <a href='http://my.oppo.com/auth/register?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                        class='text-green oppo-tj' data-tj="account|link|login|register">
                            注册新帐号
                        </a>
                    </div>
                </div>
                <div class='field g'>
                    <div class='gi desk-one-third one-whole login-ways'>
                        其他方式登录
                    </div>
                    <div class='gi desk-two-thirds one-whole login-ways'>
                        <a href='http://my.oppo.com/auth/qqlogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                        class='oppo-tj' data-tj="account|link|login|qq">
                            <span class='icons-plus icons-plus-qq'>
                            </span>
                        </a>
                        <a href='http://my.oppo.com/auth/alipaylogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                        class='oppo-tj' data-tj="account|link|login|zfb">
                            <span class='icons-plus icons-plus-zfb'>
                            </span>
                        </a>
                        <a href='http://my.oppo.com/auth/sinalogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                        class='oppo-tj' data-tj="account|link|login|weibo">
                            <span class='icons-plus icons-plus-weibo'>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php echo $this->render('@shoot/views/default/common/_footer'); ?>
<?php echo $this->render('@shoot/views/default/common/_nav_right'); ?>

<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/jquery-1.9.1.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/custom_form.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/responsive.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/scripts.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/account.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/login.js"></script>
<script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "http://my.oppo.com";
    OPPO.conf.STORE_URL = 'http://www.opposhop.cn';
    OPPO.conf.WWW_URL = 'http://www.oppo.com/cn/';
    OPPO.conf.domains = [];
    OPPO.conf.jsonpDone = false;
    OPPO.conf.domains.push('http://www.opposhop.cn');
    OPPO.conf.domains.push('http://bbs.oppo.cn');
    OPPO.conf.domains.push('http://bbs.coloros.com');

    OPPO.conf.wxdomains = [];
    OPPO.conf.wxdomains.push('http://www.opposhop.cn');

    (function() {
        var controllerNameWithAction = "AuthController@register".split('@');
        var controllerName = controllerNameWithAction[0];
        var actionName = controllerNameWithAction[1];
        var controller = OPPO.controller[controllerName];
        if (controller) {
            action = controller()[actionName];
            if (action) {
                $(function() {
                    vm = action();
                });
            }
        }
        // else console.log(controllerNameWithAction);
    })();
</script>
<?php echo $this->render('@shoot/views/default/common/_footer_base'); ?>
