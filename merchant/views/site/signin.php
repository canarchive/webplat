<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->params['bodyClass'] = 'auth-back';
?>
<div class="account-container">
    <div class="logo">
	    <a href="<?= Yii::getAlias('@merchanturl'); ?>"></a>
    </div>
    <div class="wrapper">
        <h3 class="wrapper-title">用户登录</h3>
        <div class="row site-width">
            <?php $form = ActiveForm::begin(['options' => ['id' => 'loginForm']]); ?>
                <div class="small-12 columns">
                    <label for="username" class="tit">手机号：</label>
                    <input type="text" class="form-text" name="username" placeholder="输入手机号" id="username" autocomplete="off" require value="" /></div>
                <div class="small-12 columns">
                    <label for="username" class="tit">密码：</label>
                    <input type="password" class="form-text" name="password" placeholder="输入密码" id="password" autocomplete="off" require />
					<?php if (!empty($message)) { ?><span class="error">用户名或密码错误</span><?php } ?>
                </div>
                <div class="small-12 columns">
                    <label for="username" class="tit">人机验证：</label>
					<div class="l-captcha" data-site-key="<?= Yii::$app->params['luosimaoCaptcha']['siteKey']; ?>" data-width="100%" style="margin-bottom:10px;" data-callback="getRegResponse"></div>
                </div>
                <div class="small-12 columns">
                    <input type="submit" class="button radius success expand" value="立即登录" />
                    <div class="reg-goto">
                        <a href='<?= Url::to(['site/signup']); ?>'>立即注册</a>&nbsp;&nbsp;&nbsp;
						<!--<a href="/forgot_password">忘了密码？</a>-->
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row site-width">
	    <div class="account-footer"><?= Yii::$app->params['siteCopyRightInfo']. ' ' . Yii::$app->params['siteIcpInfo']; ?></div>
    </div>
</div>
<div class="reg-back"></div>
