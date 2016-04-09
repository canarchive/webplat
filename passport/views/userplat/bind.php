<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \passport\models\SignupForm */

$this->title = 'Bind';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'action' => '/userplat/binduser']); ?>
                <?= $form->field($modelSignup, 'mobile') ?>
                <?= $form->field($modelSignup, 'password')->passwordInput() ?>
                <?= $form->field($modelSignup, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <input type="hidden" name="bind_type" value="signup" />
                <input type="hidden" name="plat_id" value="<?= $platId; ?>" />
                <input type="hidden" name="sign" value="<?= $sign; ?>" />
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <div class="row">
    <p>Please fill out the following fields to signin:</p>
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'signin-form', 'action' => '/userplat/binduser']); ?>
                <?= $form->field($modelSignin, 'username') ?>
                <?= $form->field($modelSignin, 'password')->passwordInput() ?>
                <?= $form->field($modelSignin, 'rememberMe')->checkbox() ?>
                <input type="hidden" name="bind_type" value="signin" />
                <input type="hidden" name="plat_id" value="<?= $platId; ?>" />
                <input type="hidden" name="sign" value="<?= $sign; ?>" />
                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
