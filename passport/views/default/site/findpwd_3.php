<div class="wrapper login forget">
    <div class="brick-bottom">
        <?php echo $this->render('_findpwd_top', ['step' => $step]); ?>
        <div class="forget-form">
            <form method="post" action="http://my.oppo.com/user/gotoreset">
                <div class="field g">
                    <div class="gi desk-one-fifth lap-hide">
                        <label>
                            设置新密码：
                        </label>
                    </div>
                    <div class="gi desk-four-fifths one-whole">
                        <input type="password" name="password" placeholder="密码 (密码长度6~16位，数字、字母、字符至少包含两种)">
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
                    </div>
                    <span class="icon icon-tick-green-big register-icon">
                    </span>
                </div>
                <div class="field g">
                    <div class="gi desk-one-fifth lap-hide">
                        <label>
                            确认新密码：
                        </label>
                    </div>
                    <div class="gi desk-four-fifths one-whole">
                        <input type="password" name="r_password" placeholder="密码 (密码长度6~16位，数字、字母、字符至少包含两种)">
                    </div>
                    <span class="icon icon-tick-green-big register-icon">
                    </span>
                </div>
                <div class="field lap-hide">
                    &nbsp;
                </div>
                <div class="field g">
                    <div class="gi desk-one-third lap-hide">
                        &nbsp;
                    </div>
                    <div class="gi desk-one-third one-whole">
                        <button class="button login-button" type="submit">
                            提交
                        </button>
                    </div>
                    <div class="gi desk-one-third lap-hide">
                        &nbsp;
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
