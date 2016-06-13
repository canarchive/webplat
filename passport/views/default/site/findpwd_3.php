<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['controllerForJs'] = 'PasswordsController@resetpwd';
?>
<div class="wrapper login forget">
    <div class="brick-bottom">
        <?php echo $this->render('_findpwd_top', ['step' => $step]); ?>
        <div class="forget-form">
			<form method="post" action="<?= Url::to(['site/findpwd', 'step' => 4]); ?>">
                <div class="field g">
                    <div class="gi desk-one-fifth lap-hide">
                        <label>设置新密码：</label>
                    </div>
                    <div class="gi desk-four-fifths one-whole">
                        <input type="password" name="password" placeholder="密码 (密码长度6~16位，数字、字母、字符)">
                        <div class="g g-wrapper-s register-pass-strong">
                            <div class="gi one-third center-text">
                                <span>弱</span>
                            </div>
                            <div class="gi one-third center-text">
                                <span>中</span>
                            </div>
                            <div class="gi one-third center-text">
                                <span>强</span>
                            </div>
                        </div>
                    </div>
                    <span class="icon icon-tick-green-big register-icon"></span>
                </div>
                <div class="field g">
                    <div class="gi desk-one-fifth lap-hide">
                        <label>确认新密码：</label>
                    </div>
                    <div class="gi desk-four-fifths one-whole">
                        <input type="password" name="r_password" placeholder="确认密码">
                    </div>
                    <span class="icon icon-tick-green-big register-icon"></span>
                </div>
                <div class="field lap-hide">&nbsp;</div>
                <div class="field g">
                    <div class="gi desk-one-third lap-hide">&nbsp;</div>
                    <div class="gi desk-one-third one-whole">
                        <button class="button login-button" type="submit">提交</button>
                    </div>
                    <div class="gi desk-one-third lap-hide">&nbsp;</div>
                </div>
                <input type="hidden" name="type" value="<?= $data['type']; ?>" />
                <input type="hidden" name="code" value="<?= $data['code']; ?>" />
                <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
            </form>
        </div>
    </div>
</div>
