<div class="account-container">
    <div class="logo">
        <a href="https://luosimao.com/"></a>
    </div>
    <div class="wrapper">
        <h3 class="wrapper-title">新用户注册</h3>
        <div class="row site-width">
            <form action="https://my.luosimao.com/auth/register" method="POST" id="form">
                <div class="small-12 columns">
                    <label for="username" class="tit">用户名：</label>
                    <input type="text" name="username" id="username" require data-validate="username" autocomplete="off" value=""></div>
                <div class="small-12 columns">
                    <label for="password" class="tit">密码：</label>
                    <input type="password" name="password" id="password" require onpaste="return false" data-validate="password" data-equal="confirmpassword" autocomplete="off" /></div>
                <div class="small-12 columns">
                    <label for="email" class="tit">电子邮箱：</label>
                    <input type="text" name="email" id="email" require data-validate="email" value="" /></div>
                <div class="small-12 columns">
                    <label for="mobile" class="tit">手机号码：</label>
                    <input type="text" name="mobile" id="mobile" require data-validate="mobile" value="" /></div>
                <div class="small-12 columns">
                    <label for="captcha" class="tit">人机验证：</label>
                    <div class="l-captcha" data-site-key="e7b4d20489b69bab25771f9236e2c4be" data-width="100%" style="margin-bottom:10px;" data-callback="getRegResponse"></div>
                </div>
                <div class="small-12 columns">点击下方的“注册”按钮即代表我同意
                    <a href="https://luosimao.com/docs/guid/18" target="_blank">《Luosimao 服务协议》</a></div>
                <div class="small-12 columns">
                    <input type="submit" class="button radius success expand" value="立即注册" />
                    <div class="reg-goto">已经有账户了？
                        <a href="https://my.luosimao.com/auth/login">点此立即登录</a></div>
                </div>
            </form>
        </div>
    </div>
    <div class="row site-width">
		<div class="account-footer">luosimao.com &copy; 2016 上海铁壳网络科技有限公司</div>
    </div>
</div>
<div class="reg-back"></div>
