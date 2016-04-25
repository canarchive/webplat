<?php
use yii\helpers\Url;
?>

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
