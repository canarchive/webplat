<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['dashboard'];
//$this->params['jsFiles'] = [];
//$this->params['jsFooterFiles'] = ['jquery-2.1.0', 'foundation.min', 'main'];
$jsFooterFiles = ['jquery-2.1.0', 'foundation.min', 'main'];
$this->params['jsFooterFiles'] = isset($this->params['jsFooterFiles']) ? $this->params['jsFooterFiles'] : $jsFooterFiles;

?>
<?php $this->beginContent('@merchant/views/layouts/main-base.php'); ?>
<div class="off-canvas-wrap">
    <div class="inner-wrap">
        <header class="header hide-for-small">
            <div class="logo">
                <a href="https://my.luosimao.com/dashboard">Luosimao</a></div>
            <nav class="nav">
                <a class="link  active" href="https://my.luosimao.com/dashboard">概览</a>
                <a class="link " href="https://my.luosimao.com/contact">通讯录</a>
                <a class="link " href="https://sms-my.luosimao.com/send/batch">短信</a>
                <a class="link " href="https://mail-my.luosimao.com/send">邮件</a>
                <a class="link " href="https://voice-my.luosimao.com/send">语音验证</a>
                <a class="link " href="https://captcha-my.luosimao.com/site/index">人机验证</a>
                <a class="link " href="https://my.luosimao.com/shop/goods">充值</a>
                <a class="link " target="_blank" href="https://luosimao.com/docs/api/">开发文档</a></nav>
            <div class="menu right">
                <span class="contact-info">
                    <a href="#" data-dropdown="drop-header-contact" aria-controls="drop-header-contact" aria-expanded="false">
                        <i class="fa fa-support"></i>联系我们</a>
                </span>
                <ul id="drop-header-contact" class="f-dropdown contact-info-drop" data-dropdown-content aria-hidden="true" tabindex="-1">
                    <li>
                        <i class="fa fa-phone"></i>021-31234560</li>
                    <li>
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=1845808782&site=qq&menu=yes" target="_blank">
                            <i class="fa fa-comment"></i>售前咨询</a>
                    </li>
                    <li>
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=1596833994&site=qq&menu=yes" target="_blank">
                            <i class="fa fa-comment"></i>售后咨询</a>
                    </li>
                    <li>
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=1829923478&site=qq&menu=yes" target="_blank">
                            <i class="fa fa-comment"></i>技术支持</a>
                    </li>
                </ul>
                <span class="member">
                    <a href="#" data-dropdown="drop-header-member" aria-controls="drop-header-member" aria-expanded="false">
                        <i class="fa fa-dashboard"></i>个人面板</a>
                </span>
                <div id="drop-header-member" class="f-dropdown content medium header-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                    <div class="header-menu">
                        <div class="menu-hd">
                            <span class="right">
                                <a href="https://my.luosimao.com/auth/setting">
                                    <i class="fa fa-cog"></i>修改联系信息</a>
                            </span>
                            <span class="username">-</span>
                            <span class="email">-</span>
                            <span class="phone">-</span></div>
                        <div class="menu-main">
                            <ul class="small-block-grid-3">
                                <li>
                                    <span class="num sms-deposit">-</span>短信余额
                                    <a href="https://my.luosimao.com/shop/goods">充值</a></li>
                                <li>
                                    <span class="num voice-deposit">-</span>语音余额
                                    <a href="https://my.luosimao.com/shop/goods">充值</a></li>
                                <li>
                                    <span class="num email-deposit">-</span>邮件余额
                                    <a href="https://my.luosimao.com/shop/goods">充值</a></li>
                            </ul>
                        </div>
                        <div class="menu-bd">
                            <!-- <a href="-->
                            <!--" class="right"><i class="fa fa-power-off"></i> 退出登录</a>-->
                            <a href="https://my.luosimao.com/user/user_log">查看账户安全日志</a></div>
                    </div>
                </div>
                <!-- <a class="setting" href="-->
                <!--"><i class="fa fa-gear"></i></a>-->
                <a class="logout" href="https://my.luosimao.com/auth/logout">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </header>
        <header class="header-mini show-for-small">
            <div class="left logo">
                <a href="https://my.luosimao.com/">Luosimao</a></div>
            <div class="menu right">
                <a href="#" class="right-off-canvas-toggle">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </header>
        <aside class="right-off-canvas-menu side-panel">
            <div class="user-block">
                <span class="name">iamwangcan</span>
                <a href="https://my.luosimao.com/auth/setting" class="setting" title="个人设置">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
            <ul class="contact-info">
                <li>
                    <a href="tel:021-31234560">
                        <i class="fa fa-phone"></i>021-31234560</a>
                </li>
                <li>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=1845808782&site=qq&menu=yes" target="_blank">
                        <i class="fa fa-comment"></i>售前咨询</a>
                </li>
                <li>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=1596833994&site=qq&menu=yes" target="_blank">
                        <i class="fa fa-comment"></i>售后咨询</a>
                </li>
                <li>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=1829923478&site=qq&menu=yes" target="_blank">
                        <i class="fa fa-comment"></i>技术支持</a>
                </li>
            </ul>
            <nav class="nav">
                <ul class="nav-list">
                    <li>
                        <a href="https://my.luosimao.com/dashboard" title="概览">概览</a></li>
                    <li>
                        <a href="https://my.luosimao.com/shop/goods" title="充值">充值</a></li>
                    <li>
                        <a href="https://my.luosimao.com/contact" title="通讯录">通讯录</a></li>
                    <li>
                        <a href="https://sms-my.luosimao.com/send/batch" title="短信服务">短信</a></li>
                    <li>
                        <a href="https://mail-my.luosimao.com/send" title="邮件服务">邮件</a></li>
                    <li>
                        <a target="_blank" href="https://luosimao.com/docs/api/">开发文档</a></li>
                    <li>
                        <a href="https://my.luosimao.com/auth/logout" class="button alert small expand radius" title="退出">退出</a></li>
                </ul>
            </nav>
        </aside>
        <?= $content; ?>
        <a href="#" class="exit-off-canvas"></a>
    </div>
</div>
<?php $this->endContent(); ?>
