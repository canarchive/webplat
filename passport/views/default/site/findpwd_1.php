<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->params['returnUrl'] = $returnUrl;
$this->params['controllerForJs'] = 'PasswordsController@findme';
?>
<div class='wrapper login forget'>
    <div class='brick-bottom'>
        <?php echo $this->render('_findpwd_top', ['step' => $step]); ?>
        <div class='forget-form'>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <ul class="list-unstyled">
						    <strong class='error_msg_note'><?= $message; ?></strong>
                        </ul>
                    </div>
                </div>
            </div>
            <?php $form = ActiveForm::begin(['action' => Url::to(['/api/findpwd-ajax']), 'id' => 'findmeForm', 'options' => ['class' => 'g']]); ?>
                <div class='field'>
                    <input placeholder='邮箱/手机号' name='username' type='text'>
                    <span class='icon icon-tick-green-big register-icon'>
                    </span>
                </div>
                <div class='field'>
                    <div class='g register-vcode'>
                        <div class='gi two-fifths'>
                            <input placeholder='验证码' type='text' name='captcha'>
                        </div>
                        <div class='gi two-fifths'>
                            <img src="<?= Url::to(['/site/captcha', 'v' => time()]); ?>" id="captcha" onclick='vm.updateCaptcha()'
                            />
                        </div>
                        <div class='gi one-fifth'>
                            <a href='javascript:vm.updateCaptcha();' class='text-green'>
                                换一张
                            </a>
                        </div>
                        <span class='icon icon-tick-green-big register-icon'></span>
                    </div>
                </div>
                <div class='field'>
                    <button class='button login-button' type='submit'>下一步</button>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class='forget-help'>
            如果忘记了账户信息，我们将无法帮您找回密码，建议您
            <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/signup', 'returnUrl' => $returnUrl]); ?>' class='text-green'>
                注册一个新账户
            </a>
        </div>
    </div>
</div>
