<main class="main-content slab-light">
    <div class="wrapper login forget">
        <div class="brick-bottom">
            <ul class="steps">
                <li class="one active step-completed">
                    <div class="step-content palm-right-text">
                        <h5 class="step-heading">
                            填写账户
                        </h5>
                        <div class="step-gradient">
                        </div>
                    </div>
                </li>
                <li class="two active">
                    <div class="step-content palm-right-text">
                        <h5 class="step-heading">
                            验证身份
                        </h5>
                        <div class="step-gradient">
                        </div>
                    </div>
                </li>
                <li class="three">
                    <div class="step-content palm-right-text">
                        <h5 class="step-heading">
                            重置密码
                        </h5>
                        <div class="step-gradient">
                        </div>
                    </div>
                </li>
                <li class="four">
                    <div class="step-content">
                        <h5 class="step-heading">
                            完成
                        </h5>
                        <div class="step-gradient">
                        </div>
                    </div>
                </li>
            </ul>
            <div class="forget-form">
                <div class="row">
                    <div class="col-md-12">
                        <div role="alert" class="alert alert-danger">
                            <ul class="list-unstyled">
                                <strong class="error_msg_note">
                                </strong>
                            </ul>
                        </div>
                    </div>
                </div>
                <form action="http://my.oppo.com/user/resetting" method="post" id="passwordSendNextForm"
                class="g">
                    <div class="field lap-hide">
                        系统已经将相关的短信验证码发送到您的手机
                        <font class="text-green">
                            138********06
                        </font>
                        ，请输入短信验证码：
                    </div>
                    <div class="field desk-hide lap-show">
                        已将短信验证码发送到您的手机号
                    </div>
                    <div class="field forget-mobile">
                        <div class="g ">
                            <div class="gi desk-one-fifth lap-hide">
                                验证码：
                            </div>
                            <div class="gi desk-two-fifths one-half">
                                <input type="text" name="validation_code" placeholder="短信验证码">
                            </div>
                            <div class="gi desk-two-fifths one-half">
                                <button data-type="mobile" id="get_validation_code_btn" class="button btn-resend">
                                    重新发送
                                </button>
                            </div>
                        </div>
                        <span class="icon icon-tick-green-big register-icon">
                        </span>
                    </div>
                    <div class="field">
                        <div class="g">
                            <div class="gi desk-one-fifth lap-hide">
                                &nbsp;
                            </div>
                            <div class="gi desk-two-fifths one-whole">
                                <input type="button" id="sendNextBtn" class="button btn-next" value="下一步"
                                name="some_name">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="forget-help">
                如果忘记了账户信息，我们将无法帮您找回密码，建议您
                <a class="text-green" href="http://my.oppo.com/auth/register">
                    注册一个新账户
                </a>
            </div>
        </div>
    </div>
</main>
