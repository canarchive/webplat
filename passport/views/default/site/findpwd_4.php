<?php
use yii\helpers\Url;
?>
<div class="wrapper login forget">
    <div class="brick-bottom">
        <?php echo $this->render('_findpwd_top', ['step' => $step]); ?>
	    <?php if ($data['status'] == 200) { ?>
        <div class="forget-form forget-success">
            <form>
            <div class="field">
                <h2 class="heading align-center">
                    恭喜，新密码设置成功！
                </h2>
            </div>
            <div class="field g">
                <div class="gi desk-one-half one-whole align-center">
                    请牢记您新设置的密码
                </div>
                <div class="gi desk-one-half lap-hide align-center">
				    <a class="text-green" href="<?= Url::to(['site/signin']); ?>">
                        返回登录页
                    </a>
                </div>
            </div>
            </form>
        </div>
        <?php } else { ?>
        <div class="forget-form">
            <div class="alert-danger align-center">
                <strong>操作已过期，请重试</strong>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
