<?php
use yii\helpers\Url;

$this->params['jsFooterFiles'] = [
	'jquery-2.1.0', 'foundation.min',
	'main',
];
?>
<div class="container">
    <aside class="sidebar">
        <ul class="side-list">
            <li>
                <a href="https://my.luosimao.com/">服务概览</a></li>
            <li>
                <a href="https://my.luosimao.com/article">网站公告</a></li>
            <li class="active">
                <a href="https://my.luosimao.com/auth/setting">账号设置</a></li>
            <li>
                <a href="https://my.luosimao.com/user/user_log">安全日志</a></li>
        </ul>
    </aside>
    <section class="main-wrap dash-main-wrap">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">账号设置</div>
                <div class="sub-title">修改密码、email</div></div>
            <ul class="breadcrumbs">
                <li>
                    <a href="https://my.luosimao.com/dashboard">概览</a></li>
                <li class="current">账号设置</li></ul>
        </div>
        <div class="row full-width">
            <form action="https://my.luosimao.com/auth/setting" method="post">
                <div class="small-12 columns">
                    <div class="block">
                        <div class="block-content">
                            <div class="panel">
                                <div class="alert">1.修改个人信息时，为保证安全，需要输入原密码
                                    <br/>2.修改邮箱需要重新进行验证</div></div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="old_password" class="inline">输入原密码：</label></div>
                                        <div class="small-9 columns">
                                            <input type="password" name="old_password" id="old_password" autocomplete="off" placeholder="如需修改信息，请输入您目前的账户密码"></div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="new_password" class="inline">输入新密码：</label></div>
                                        <div class="small-9 columns">
                                            <input type="password" name="new_password" id="new_password" autocomplete="off" placeholder="6位数字字母组合，不能以_开头"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="password_repeat" class="inline">再次输入密码：</label></div>
                                        <div class="small-9 columns">
                                            <input type="password" id="password_repeat" autocomplete="off"></div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="old_mail" class="inline">原邮箱：</label></div>
                                        <div class="small-9 columns">
                                            <input type="text" id="old_mail" disabled placeholder="iamwangcan@163.com"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="new_mail" class="inline">输入新邮箱：</label></div>
                                        <div class="small-9 columns">
                                            <input type="text" id="new_mail" name="new_email" placeholder="为了保证您及时收到Luosimao的通知，修改邮箱需要重新进行验证" value=""></div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="old_phone" class="inline">原手机号：</label></div>
                                        <div class="small-9 columns">
                                            <input type="text" id="old_phone" disabled value="13811974106"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="new_phone" class="inline">输入新手机号：</label></div>
                                        <div class="small-9 columns">
                                            <input type="text" id="new_phone" name="new_mobile" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 columns">
                    <div class="setting-sub">
                        <input type="submit" name="submit" class="button small success radius" value="保存个人设置" /></div>
                </div>
            </form>
        </div>
    </section>
</div>
<a href="#" class="exit-off-canvas"></a>
