<div class="wrapper login forget">
    <div class="brick-bottom">
        <?php echo $this->render('_findpwd_top', ['step' => $step]); ?>
        <div class="forget-form">
            <form class="g">
                <div class="field">
                    <div class="gi desk-three-fifths one-whole">
                        <span role="alert" class="alert alert-danger">
                            <strong class="error_msg_note"></strong>
                        </span>
                    </div>
                </div>
                <div class="field">
                    系统已经发送相关的邮件到您的邮箱
                    <a class="text-green" href="http://mail.163.com" target="blank">
                        h********@163.com
                    </a>
                    , 请点击邮件链接重置您的密码：
                </div>
                <div class="field">
                    如果您超过2分钟未收到邮件，您可以
                    <a class="text-green" id="get_validation_code_btn" data-type="email" href="javascript:;">
                        重新发送
                    </a>
                    。
                    <span id="emailResendMessage">
                    </span>
                </div>
                <div class="field">
                    <div class="gi desk-two-fifths one-whole">
                        <a href="http://mail.163.com" class="button btn-next" target="blank">
                            登录邮箱
                        </a>
                    </div>
                </div>
                <div class="field g">
                    如果忘记了账户信息，我们将无法帮您找回密码，建议您
                    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/signup', 'returnUrl' => $returnUrl]); ?>' class='text-green'>
                        注册一个新账户
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
