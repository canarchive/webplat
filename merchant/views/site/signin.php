<?php
use yii\helpers\Url;

$this->params['bodyClass'] = 'auth-back';
?>
<div class="account-container">
    <div class="logo">
        <a href="https://luosimao.com/"></a>
    </div>
    <div class="wrapper">
        <h3 class="wrapper-title">用户登录</h3>
        <div class="row site-width">
            <form action="https://my.luosimao.com/auth/login" method="post" id="loginForm">
                <input type="hidden" name="return_to" value="" />
                <div class="small-12 columns">
                    <label for="username" class="tit">用户名：</label>
                    <input type="text" class="form-text" name="username" placeholder="输入用户名或Email" id="username" autocomplete="off" require value="" /></div>
                <div class="small-12 columns">
                    <label for="username" class="tit">密码：</label>
                    <input type="password" class="form-text" name="password" placeholder="输入密码" id="password" autocomplete="off" require /></div>
                <div class="small-12 columns">
                    <label for="username" class="tit">人机验证：</label>
                    <div class="l-captcha" data-width="100%" data-callback="getResponse" data-site-key="e7b4d20489b69bab25771f9236e2c4be" style="margin-bottom:10px;"></div>
                </div>
                <div class="small-12 columns">
                    <input type="submit" class="button radius success expand" value="立即登录" />
                    <div class="reg-goto">
                        <a href="https://my.luosimao.com/auth/register">立即注册</a>&nbsp;&nbsp;&nbsp;
                        <a href="https://my.luosimao.com/auth/forgot_password">忘了密码？</a></div>
                </div>
            </form>
        </div>
    </div>
    <div class="row site-width">
        <div class="account-footer">luosimao.com &copy; 2016 上海铁壳网络科技有限公司</div></div>
</div>
<div class="reg-back"></div>
