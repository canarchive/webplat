<?php
use yii\helpers\Url;

$cssFiles = ['styles_member'];
$jsFiles = ['modernizr.custom'];
?>
<?php echo $this->render('@shoot/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

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
                <a href='<?= Url::to(['site/signin', 'returnUrl' => $returnUrl]); ?>' class=' oppo-tj'>
                    <span class='icons-plus icons-plus-user'></span>
                    <span>登录</span>
                </a>
            </div>
            <div class='logo'>
			    <a href='<?= Yii::getAlias('@shooturl'); ?>'>
				    <img alt='' src='<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/oppo_logo.png' />
                </a>
            </div>
            <div class='login-breadcrumb'>
                注册OPPO帐号
            </div>
        </div>
    </div>
    </div>
</header>
<main class="main-content slab-light">
    <div class='wrapper login register'>
        <div class='brick-bottom'>
            <div class='register-form'>
                <form class='g' method='post' action='http://my.oppo.com/auth/register' onsubmit='return vm.registerValidate()'>
                    <div class='gi desk-one-quarter lap-hide'>
                        &nbsp;
                    </div>
                    <div class='gi desk-two-quarters one-whole'>
                        <div class='login-wrapper'>
                            <div class='field'>
                                <p>
                                    如已有帐号，请
                                    <a href='<?= Url::to(['site/signin', 'returnUrl' => $returnUrl]); ?>'>
                                        点此登录
                                    </a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" role="alert">
                                        <ul class="list-unstyled">
                                            <strong class='error_msg_note'>
                                            </strong>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class='field'>
                                <input placeholder="邮箱/手机号" name="username" type="text" value="">
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                                <span class='username_error_note'>
                                </span>
                            </div>
                            <div class='field'>
                                <input placeholder="密码 (密码长度6~16位，数字、字母、字符至少包含两种)" name="password" type="password"
                                value="">
                                <div class="g g-wrapper-s register-pass-strong">
                                    <div class="gi one-third center-text">
                                        <span>
                                            弱
                                        </span>
                                    </div>
                                    <div class="gi one-third center-text">
                                        <span>
                                            中
                                        </span>
                                    </div>
                                    <div class="gi one-third center-text">
                                        <span>
                                            强
                                        </span>
                                    </div>
                                </div>
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field'>
                                <input placeholder="确认密码(密码长度6~16位，数字、字母、字符至少包含两种)" name="r_password"
                                type="password" value="">
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field g register-vcode'>
                                <div class='gi two-fifths'>
                                    <input placeholder='验证码' name='captcha' type='text'>
                                </div>
                                <div class='gi two-fifths'>
                                    <img src="http://my.oppo.com/captcha?930041" id="captcha" onclick='vm.updateCaptcha()'
                                    class='oppo-tj' data-tj="account|img|register|changecaptcha" />
                                </div>
                                <div class='gi one-fifth'>
                                    <a onclick="vm.updateCaptcha()" class='text-green oppo-tj' data-tj="account|link|register|changecaptcha">
                                        换一张
                                    </a>
                                </div>
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field activation_section register-mobile'>
                                <div class='g'>
                                    <div class='gi lap-three-fifths'>
                                        <input placeholder='手机验证码' type='text' name='activation_code' class='activation_code'>
                                    </div>
                                    <div class='gi lap-two-fifths'>
                                        <button type='button' href='javascript:;' class='button btn_get_activation_code oppo-tj'
                                        data-tj="account|link|register|getcode">
                                            获取验证码
                                        </button>
                                    </div>
                                </div>
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field check-item'>
                                <input id='check1' name='allowed' type='checkbox' checked='checked'>
                                <label for='allowed'>
                                    我已阅读并同意
                                    <a href='http://my.oppo.com/agreement.html' target='_blank' class='text-green'>
                                        《OPPO服务协议》
                                    </a>
                                </label>
                            </div>
                            <div class='field'>
                                <button class='button login-button oppo-tj' data-tj="account|link|register|nextbtn"
                                type='submit'>
                                    下一步
                                </button>
                            </div>
                            <div class='field g'>
                                <div class='gi desk-one-quarter one-whole login-ways'>
                                    其他方式登录
                                </div>
                                <div class='gi desk-three-quarters one-whole login-ways'>
                                    <a href='http://my.oppo.com/auth/sinalogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                                    class='oppo-tj' data-tj="account|link|register|weibo">
                                        <span class='icons-plus icons-plus-weibo'>
                                        </span>
                                    </a>
                                    <a href='http://my.oppo.com/auth/qqlogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                                    class='oppo-tj' data-tj="account|link|register|qq">
                                        <span class='icons-plus icons-plus-qq'>
                                        </span>
                                    </a>
                                    <a href='http://my.oppo.com/auth/alipaylogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                                    class='oppo-tj' data-tj="account|link|register|zfb">
                                        <span class='icons-plus icons-plus-zfb'>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='gi desk-one-quarter lap-hide'>
                        &nbsp;
                    </div>
                </form>
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
