<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->params['returnUrl'] = $returnUrl;
$this->params['controllerForJs'] = 'AuthController@login';
$this->params['isLogin'] = true;
?>
<div class='wrapper login'>
    <div class='g'>
        <div class='gi desk-two-thirds login-wrapper login-ad'>
            <a href="javascript: void(0);">
				<img src='<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/login-product-r9.png'>
            </a>
        </div>
        <div class='gi desk-one-third one-whole login-wrapper login-form'>
            <?php $form = ActiveForm::begin(['action' => Url::to(['/api/login-ajax']), 'id' => 'loginForm']); ?>
                <div class='field login-title'>欢迎登录SHOOT帐号</div>
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
                    <input placeholder="手机号" name="username" type="text" value="">
                    <span class='icon icon-tick-green-big register-icon'></span>
                </div>
                <div class='field'>
                    <!--<p class='instructions'>均可登录</p>-->
                </div>
                <div class='field'>
                    <input placeholder="密码" name="password" type="password" value="">
                    <span class='icon icon-tick-green-big register-icon'>
                    </span>
                </div>
                <div class="field">
				    <div class='g register-vcode <?php if (!$showCaptcha) { echo 'g-hide'; } ?>' id="register-vcode">
                        <div class='gi two-fifths'>
                            <input placeholder="验证码" name="captcha" type="text" value="">
                        </div>
                        <div class='gi two-fifths'>
                            <img src="<?= Url::to(['/site/captcha', 'v' => time()]); ?>" id="captcha" onclick='vm.updateCaptcha()'
                            />
                        </div>
                        <div class='gi one-fifth'>
                            <a onclick='vm.updateCaptcha()' class='text-green'>换一张</a>
                        </div>
                        <span class='icon icon-tick-green-big register-icon'></span>
                    </div>
                </div>
                <div class='field'>
				    <input type="hidden" name="is-show-captcha" id="is-show-captcha" value="<?= $showCaptcha; ?>" />
                    <input type="hidden" id="form_type" value="login" />
                    <input type="hidden" name="attack_type" value="1" />
                    <input type="button" class='button login-button' id='loginBtn' value='登录' />
                </div>
            <?php ActiveForm::end(); ?>
            <div class='field g'>
                <div class='gi one-half'>
                    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/findpwd', 'returnUrl' => $returnUrl]); ?>' class='text-green oppo-tj'>
                        忘记密码？
                    </a>
                </div>
                <div class='gi one-half align-right'>
                    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/signup', 'returnUrl' => $returnUrl]); ?>' class='text-green oppo-tj' data-tj="account|link|login|register">
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
                        <span class='icons-plus icons-plus-qq'></span>
                    </a>
                    <a href='http://my.oppo.com/auth/alipaylogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                    class='oppo-tj' data-tj="account|link|login|zfb">
                        <span class='icons-plus icons-plus-zfb'></span>
                    </a>
                    <a href='http://my.oppo.com/auth/sinalogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                    class='oppo-tj' data-tj="account|link|login|weibo">
                        <span class='icons-plus icons-plus-weibo'></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
