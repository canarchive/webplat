<?php
use yii\helpers\Url;

?>
<?php $this->beginContent('@merchant/views/layouts/main-base.php'); ?>
<div class="off-canvas-wrap">
    <div class="inner-wrap">
        <div class="index-header">
            <div class="header hide-for-small">
                <div class="row doc-width">
                    <div class="small-12 columns">
                        <div class="logo">
                            <a href="https://luosimao.com/" title="返回首页">Luosimao</a></div>
                        <div class="menu right">
                            <a href="https://my.luosimao.com/auth/login" class="button tiny radius success" title="登录">登录</a>
                            <a href="https://my.luosimao.com/auth/register" class="button tiny radius info" title="注册luosimao会员">注册</a></div>
                        <nav class="nav right">
                            <a href="https://luosimao.com/" title="首页" class="active">首页</a>
                            <a href="https://luosimao.com/service/sms" title="短信发送服务与价格">短信服务</a>
                            <a href="https://luosimao.com/service/mail" title="邮件发送服务与价格">邮件服务</a>
                            <a href="https://luosimao.com/service/voice" title="语音验证码服务与价格">语音验证</a>
                            <a href="https://luosimao.com/service/captcha" title="人机验证">人机验证</a>
                            <a href="https://luosimao.com/docs/guid/" title="Luosimao平台使用指南">使用指南</a>
                            <a href="https://luosimao.com/docs/api/" title="短信接口及语音接口介绍">API接口</a></nav>
                    </div>
                </div>
            </div>
            <header class="header-mini show-for-small">
                <div class="left logo">
                    <a href="https://luosimao.com/"></a>
                </div>
                <div class="menu right">
                    <a href="#" class="right-off-canvas-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </header>
            <aside class="right-off-canvas-menu side-panel">
                <nav class="nav">
                    <ul class="nav-list">
                        <li>
                            <a href="https://luosimao.com/" title="首页">首页</a></li>
                        <li>
                            <a href="https://luosimao.com/service/sms" title="短信发送服务与价格">短信服务</a></li>
                        <li>
                            <a href="https://luosimao.com/service/mail" title="邮件发送服务与价格">邮件服务</a></li>
                        <li>
                            <a href="https://luosimao.com/service/voice" title="语音验证码服务与价格">语音验证</a></li>
                        <li>
                            <a href="https://luosimao.com/service/captcha" title="人机验证">人机验证</a></li>
                        <li>
                            <a href="https://luosimao.com/docs/guid/" title="Luosimao平台使用指南">使用指南</a></li>
                        <li>
                            <a href="https://luosimao.com/docs/api/" title="短信接口及语音接口介绍">API接口</a></li>
                        <li>
                            <a href="https://my.luosimao.com/auth/login" class="button small radius success expand" title="登录">登录</a></li>
                        <li>
                            <a href="https://my.luosimao.com/auth/register" class="button small radius info expand" title="注册luosimao会员">注册</a></li>
                    </ul>
                </nav>
            </aside>
        </div>
        <?= $content; ?>
        <footer class="footer">
            <div class="row site-width">
                <div class="small-12 columns">
                    <div class="company-logo">
                        <a href="http://www.techsylar.com/" target="_blank" title="Techsylar.Inc"></a>
                    </div>
                    <div class="footer-inner">
                        <div class="bottom-link">
                            <a href="https://luosimao.com/docs/about" title="关于我们">关于我们</a>
                            <a href="https://luosimao.com/docs/guid/31" title="隐私政策">隐私政策</a>
                            <a href="https://luosimao.com/docs/guid/18" title="服务条款">服务条款</a>
                            <a href="https://luosimao.com/docs/about/27" title="联系我们">联系我们</a>
                            <a href="https://luosimao.com/docs/api" title="短信接口">接口文档</a>
                            <a href="http://weibo.com/luosimaocom/" target="_blank" title="新浪微博">新浪微博</a></div>
                        <div class="company-info ">
                            <div class="footer-tips ">
                                <span class="bottom-tips">客服热线 021-31234560 &nbsp;</span>
                                <span class="bottom-tips">客服工作时间 9:00-18:00（周日和节日除外）</span></div>&copy; 2016 铁壳网络
                            <a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备11011422号</a>增值电信经营许可证 B2-20150858
                            <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001336">
                                <img src="//s.luosimao.com/images/website/beian.png" style="margin-right:5px" />沪公网安备 31010702001336号</a></div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Kefuzu Chat Script Start-->
        <script type="text/javascript">var __kc = __kc || {};
            __kc.o = 'xYqLOt8sL3oa'; (function() {
                var kc = document.createElement('script');
                kc.type = 'text/javascript';
                kc.async = true;
                kc.src = ('https:' == document.location.protocol ? 'https://': 'http://') + 'v1.kefuzu.com/static/v1/dist/widget.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(kc, s);
            })();</script>
        <!--Kefuzu Chat Script End-->
        <a class="exit-off-canvas"></a>
    </div>
</div>
<?php $this->endContent(); ?>
