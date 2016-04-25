<div class='wrapper login forget'>
    <div class='brick-bottom'>
        <ul class='steps'>
            <li class='one active'>
                <div class='step-content palm-right-text'>
                    <h5 class='step-heading'>填写账户</h5>
                    <div class='step-gradient'></div>
                </div>
            </li><li class='two'>
                <div class='step-content palm-right-text'>
                    <h5 class='step-heading'>验证身份</h5>
                    <div class='step-gradient'></div>
                </div>
            </li><li class='three'>
                <div class='step-content palm-right-text'>
                    <h5 class='step-heading'>重置密码</h5>
                    <div class='step-gradient'></div>
                </div>
            </li><li class='four'>
                <div class='step-content'>
                    <h5 class='step-heading'>完成</h5>
                    <div class='step-gradient'></div>
                </div>
            </li>
        </ul>
        <div class='forget-form'>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <ul class="list-unstyled">
                            <strong class='error_msg_note'>
                            </strong>
                        </ul>
                    </div>
                </div>
            </div>
            <form class='g' method='post' action='http://my.oppo.com/user/send' id='findmeForm'>
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
                            <img src="http://my.oppo.com/captcha?704955" id="captcha" onclick='vm.updateCaptcha()'
                            />
                        </div>
                        <div class='gi one-fifth'>
                            <a href='javascript:vm.updateCaptcha();' class='text-green'>
                                换一张
                            </a>
                        </div>
                        <span class='icon icon-tick-green-big register-icon'>
                        </span>
                    </div>
                </div>
                <div class='field'>
                    <button class='button login-button' type='submit'>
                        下一步
                    </button>
                </div>
            </form>
        </div>
        <div class='forget-help'>
            如果忘记了账户信息，我们将无法帮您找回密码，建议您
            <a href='http://my.oppo.com/auth/register?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
            class='text-green'>
                注册一个新账户
            </a>
        </div>
    </div>
</div>
