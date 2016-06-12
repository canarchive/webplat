<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['styles_member'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'UserProfileController@index';
?>
<main class='main-content user'>
<div class='wrapper'>
    <?php echo $this->render('../_user_nav', ['currentAction' => 'setting']); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <ul class="list-unstyled">
                    <strong class='error_msg_note'></strong>
                </ul>
            </div>
        </div>
    </div>
    <div class='g'>
        <div class='gi lap-two-fifths desk-one-quarter user-aside'>
            <div class='user-data-info'>
                <div class='field'>
                    <label>当前密码</label>
                    <input type='password' name='default_password' value="*************" disabled></div>
                <button class='button button-primary full-width' id='update_password'>修改</button></div>
            <div class='user-data-info' style="display: none;">
                <h2 class='message-box-title'>修改密码：</h2>
                <div class='field'>
                    <label>当前密码</label>
                    <input type='password' name='old_password'></div>
                <div class='field'>
                    <label>新密码</label>
                    <input type='password' name='password'>
                    <p class='instructions gi one-whole'>密码(密码长度6~16位，数字、字母、字符至少包含两种)</p></div>
                <div class='field'>
                    <label>新密码确认</label>
                    <input type='password' name='r_password'></div>
                <button class='button button-primary full-width' id='save_password'>保存</button></div>
            <div class="user-data-info msg_password"></div>
        </div>
        <div class='gi lap-three-fifths desk-three-quarters my-oppo-content slab-white-border'>
            <section class='brick-shadow'>
                <div class='user-data-info'>
                    <div id='update-mobile-step1' class='hidden'>
                        <strong>绑定手机号码，及时接收OPPO活动消息</strong>
                        <div class='field input-button-item'>
                            <label>手机号码：</label>
                            <p>
                                <a href='http://uc.oppomobile.com/usercenter/getUserSettingsInfo.do' target='_blank'>去绑定</a></p>
                        </div>
                    </div>
                    <div id='update-mobile-step2' class='hidden'>
                        <h2 class='hidden'>已将验证码发送到你的手机</h2>
                        <div class='field'>请您输入验证码完成验证</div>
                        <div class='field'>
                            <label>手机号码：</label>
                            <div id='new-mobile' class='font-size-one-and-half'></div>
                        </div>
                        <div class='field'>
                            <label>验证码：</label>
                            <div class="gi one-whole desk-one-third pull-left">
                                <input type='text' name='code' class='activation_code'>
                                <input type="hidden" name="phone" value=""></div>
                            <div class="gi one-whole desk-two-thirds pull-left">
                                <button class='button code-btn' onclick='vm.sendValidationSMS()'>获取验证码</button>
                                <span id='sms-resend-count-down' class='hidden send-msg' style="">验证码已发送(
                                    <span id='time-left'></span>秒后重发)</span></div>
                        </div>
                        <a class='button' onclick='vm.confirmMobileUpdate()'>确认</a></div>
                    <div id='update-mobile-step3'>
                        <div class='field input-button-item'>
                            <label>手机号码：</label>
                            <p>138******06
                                <a class="margin-left-30" href='http://uc.oppomobile.com/usercenter/getUserSettingsInfo.do' target='_blank'>修改</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class='brick-shadow'>
                <div class='user-data-info' js-state>
                    <div id='update-email-step1'>
                        <strong>绑定您的邮箱，及时接收OPPO活动资讯</strong>
                        <div class='field input-button-item'>
                            <label>联系邮箱：</label>
                            <p>
                                <a href='http://uc.oppomobile.com/usercenter/getUserSettingsInfo.do' target='_blank'>去绑定</a></p>
                        </div>
                    </div>
                    <div id='update-email-step2' class='hidden'>
                        <div class='field'>
                            <p>已将验证邮件发送到你的邮箱。</p>
                            <p>请按照邮件中的操作指导在24小时内并完成验证。</p>
                        </div>
                        <div class='field'>
                            <p id='new-email'></p>
                        </div>
                        <div class='field'>
                            <p>
                                <a onclick='vm.changeUpdateEmailStep("step1")'>返回上一步</a></p>
                        </div>
                    </div>
                    <div id='update-email-success' class='hidden'>
                        <div class='field'>
                            <p>联系邮箱：</p>
                        </div>
                        <div class='field'>
                            <p>
                                <a class="margin-left-30" href='http://uc.oppomobile.com/usercenter/getUserSettingsInfo.do' target='_blank'>修改</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class='brick-shadow'>
                <form method="POST" action="http://my.oppo.com/user/profile/140634132" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="PUT">
                    <input name="_token" type="hidden" value="P4rTKhLFPnbpTewoHdGkRNdZvdVJSX7r4DI7iX1u">
                    <div class='g g-wrapper-s'>
                        <div class='gi two-thirds'>
                            <label>*用户名：
                                <span class='my-oppo-content-text'>U56160741</span></label>
                            <div class='my-oppo-content-edit'>
                                <input id="user_profile_form" name="username" type="text" value="U56160741">
                                <div>
                                    <div class='edit-message'>亲，会员名只允许修改一次，请选择方便记忆的名称并牢记它。</div></div>
                            </div>
                        </div>
                        <div class='gi one-third'>
                            <label>性别：
                                <span class='my-oppo-content-text'>未填写</span></label>
                            <div class='my-oppo-content-edit basic-input'>
                                <span class='icon icon-grey-arrow-down'></span>
                                <select id='select' name='gender'>
                                    <option value='2' selected>请选择</option>
                                    <option value='1'>男</option>
                                    <option value='0'>女</option></select>
                            </div>
                        </div>
                    </div>
                    <div class='g g-wrapper-s'>
                        <div class='gi field desk-two-thirds lap-one-whole' id="birthSelectors">
                            <label>生日：
                                <span class='my-oppo-content-text'>未填写</span></label>
                            <div class="my-oppo-content-edit">
                                <div class='basic-input three-quarters desk-one-quarter inline-block'>
                                    <span class='icon icon-grey-arrow-down'></span>
                                    <select id="select" name='year' data-default=""></select>
                                </div>
                                <span class='input-suffix'>年</span>
                                <div class='basic-input three-quarters desk-one-quarter inline-block'>
                                    <span class='icon icon-grey-arrow-down'></span>
                                    <select id="select" name='month' data-default=""></select>
                                </div>
                                <span class='input-suffix'>月</span>
                                <div class='basic-input three-quarters desk-one-quarter inline-block'>
                                    <span class='icon icon-grey-arrow-down'></span>
                                    <select id="select" name='day' data-default=""></select>
                                </div>
                                <span class='input-suffix'>日</span></div>
                        </div>
                    </div>
                    <input id='submit' type='submit' class='hidden'></form>
            </section>
            <div class='form-actions brick-shadow'>
                <div class='form-actions-right'>
                    <a class='my-oppo-content-save button-light button-save-form' data-trigger='submit'>保存</a>
                    <a class='my-oppo-content-change button-light button-edit-form'>修改</a></div>
            </div>
        </div>
    </div>
</div>
</main>
