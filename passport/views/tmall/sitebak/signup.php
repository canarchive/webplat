<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$cssFiles = ['style', 'tugao'];
$jsFiles = [
    'jquery-1.7.2.min', 'login_register',
];
?>
<script>
window.checkExistUrl = "<?= Url::to(['api/check-exist']); ?>";
window.generateCodeUrl = "<?= Url::to(['api/generate-code']); ?>";
</script>
<?php echo $this->render('@website/views/tmall/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>
<body style="background:none">
<div class="headerInfo">
    <div class="logo" id="logo">
        <a href="<?= Yii::getAlias('@websiteurl'); ?>">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/website/tmall/images/logo.jpg" border="0" />
            <img src="<?= Yii::getAlias('@asseturl'); ?>/website/tmall/images/logo_mh.jpg" border="0" />
        </a>
    </div>
</div>
<div class="user_contain">
    <div class="login_left">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/website/tmall/images/login_pic.jpg" border="0" />
    </div>
    <div class="login_right">
        <?php $form = ActiveForm::begin(['id' => 'zhuceForm', 'options' => ['name' => 'zhuceForm']]); ?>
            <div class="tck" id="zhuce">
                <div class="tc_login">
                    <div class="tc_center_zc">
                        <div class="tc_login_title">注册</div>
                        <div class="tc_input">
                            <div class="li_people">
                                <input value="请输入手机号" class="a3" name="mobile" onFocus="{this.value='';}" onBlur="mobileBlur(this);"/>
                                <div class="tck_error3"></div>
                            </div>
                            <div class="li_pwd">
                                <input type="text" value="请输入密码" id="text2" style="color:#c2c2c2;" />
                                <input type="password" class="a4" name="firstmm" id="password2" style="display:none;" />
                                <div class="tck_error4"></div>
                            </div>
                            <div class="li_pwd">
                                <input type="text" value="请确认密码" id="text3" />
                                <input type="password" class="a5" name="secondmm" id="password3" style="display:none;" />
                                <div class="tck_error5"></div>
                            </div>
                        </div>
                        <div class="yzm">
                            <div class="yzm_shuru">
                                <input type="text" class="a6" size="8" name="mobileCode"  onFocus="{this.value='';}" onBlur="mobileCodeBlur(this);" value="请输入短信验证码" class="inputBg" />
                                <div class="tck_error6">短信验证码不为空</div>
                            </div>
                            <div class="yzm_img">
                                <input class="setCodeBtn" type="button" style="vertical-align: middle;cursor: pointer;" onClick="getMobileCode();" value="获取验证码">
                            </div>
                        </div>
                        <input type="submit" value="立即注册" class="tc_button1" />
                    </div>
                    <div class="tc_mfzc_yz">
		     			<a href="<?= Url::to(['site/signin']); ?>">我已经注册，立即登陆></a>
                    </div>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php echo $this->render('@website/views/tmall/common/_footer'); ?>
</body>
<div class="blank"></div>
</html>
