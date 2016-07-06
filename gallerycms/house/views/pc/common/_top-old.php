<?php
$controller = $this->context;
$companyInfos = $controller->companyInfos;
print_r($companyInfos);exit();
$currentCompany = $controller->currentCompany;
?>
<div class="roof">
    <div class="content clearfix">
        <div class="fn-left">
            <span class="address fn-left">&nbsp;</span>
			<span class="fn-left" id="current_city"><?= $currentCompany['name']; ?></span>
            <div class="check-address fn-left">切换城市
                <div class="cities-list">
                    <dl>
                        <dt>[A-E]</dt>
                        <dd>
                            <a href="http://bj.tugou.com/" title="北京装修网">北京站</a>
                            <a href="http://cd.tugou.com/" title="成都装修网">成都站</a>
                            <a href="http://cs.tugou.com/" title="长沙装修网">长沙站</a>
                            <a href="http://cx.tugou.com/" title="慈溪装修网">慈溪站</a>
                            <a href="http://cz.tugou.com/" title="常州装修网">常州站</a></dd>
                    </dl>
                    <dl>
                        <dt>[F-H]</dt>
                        <dd>
                            <a href="http://hz.tugou.com/" title="杭州装修网">杭州站</a>
                            <a href="http://fz.tugou.com/" title="福州装修网">福州站</a>
                            <a href="http://gz.tugou.com/" title="广州装修网">广州站</a>
                            <a href="http://gy.tugou.com/" title="贵阳装修网">贵阳站</a></dd>
                    </dl>
                    <dl>
                        <dt>[J-L]</dt>
                        <dd>
                            <a href="http://km.tugou.com/" title="昆明装修网">昆明站</a>
                            <a href="http://jh.tugou.com/" title="金华装修网">金华站</a>
                            <a href="http://jx.tugou.com/" title="嘉兴装修网">嘉兴站</a>
                            <a href="http://ks.tugou.com/" title="昆山装修网">昆山站</a></dd>
                    </dl>
                    <dl>
                        <dt>[M-Q]</dt>
                        <dd>
                            <a href="http://nj.tugou.com/" title="南京装修网">南京站</a>
                            <a href="http://nc.tugou.com/" title="南昌装修网">南昌站</a>
                            <a href="http://nb.tugou.com/" title="宁波装修网">宁波站</a>
                            <a href="http://qd.tugou.com/" title="青岛装修网">青岛站</a></dd>
                    </dl>
                    <dl>
                        <dt>[R-T]</dt>
                        <dd>
                            <a href="http://sh.tugou.com/" title="上海装修网">上海站</a>
                            <a href="http://su.tugou.com/" title="苏州装修网">苏州站</a>
                            <a href="http://sjz.tugou.com/" title="石家庄装修网">石家庄站</a>
                            <a href="http://sx.tugou.com/" title="绍兴装修网">绍兴站</a>
                            <a href="http://ty.tugou.com/" title="太原装修网">太原站</a>
                            <a href="http://tj.tugou.com/" title="天津装修网">天津站</a>
                            <a href="http://tz.tugou.com/" title="台州装修网">台州站</a></dd>
                    </dl>
                    <dl>
                        <dt>[W-X]</dt>
                        <dd>
                            <a href="http://wh.tugou.com/" title="武汉装修网">武汉站</a>
                            <a href="http://wx.tugou.com/" title="无锡装修网">无锡站</a>
                            <a href="http://xm.tugou.com/" title="厦门装修网">厦门站</a>
                            <a href="http://xa.tugou.com/" title="西安装修网">西安站</a></dd>
                    </dl>
                </div>
            </div>
            <span class="border">全国领先互联网家装平台</span></div>
        <ul class="login fn-right" id="roof-nav">
            <li id="login-link" class="word hide no-icon">
                <a href="http://www.tugou.com/passport/UserLogin/">登录</a></li>
            <li id="register-link" class="hide no-icon">
                <a href="http://www.tugou.com/passport/UserRegister/">免费注册</a></li>
            <li id="phone-link" class="phone">
                <a href="http://www.tugou.com/apps/pc_app.html" target="_blank">手机兔狗</a>
                <div class="code">
                    <img src="http://img.tugou.com/index/app_code.jpg" border="0" alt="装修网">
                    <p>下载APP 找装修更轻松</p>
                    <img src="http://img.tugou.com/index/app_weixin.jpg" border="0" alt="装修网">
                    <p>兔狗家装官方微客服</p>
                </div>
            </li>
            <li class="number">
                <a>400 8617 000</a>
            </li>
            <li class="baike">
                <a href="http://www.tugou.com/baike/">装修百科</a></li>
        </ul>
    </div>
</div>
