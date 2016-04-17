<?php
$cssFiles = ['styles_member'];
$jsFiles = ['modernizr.custom'];
?>
<?php echo $this->render('@shoot/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<header class='main-header login-header'>
    <div class='upper-area'>
        <div class='wrapper g'>
            <ul class='gi menu-sec'>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
                    <a href='http://www.oppo.cn/' target='_blank'>
                        社区
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
                    <a href='http://www.coloros.com/' target='_blank'>
                        ColorOS
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
                    <a href='http://store.oppomobile.com/' target='_blank'>
                        软件商店
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
                    <a href='http://zhushou.oppo.com/' target='_blank'>
                        手机助手
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
                    <a href='http://yun.oppo.com/' target='_blank'>
                        云服务
                    </a>
                </li>
                <!-- <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
                <a href='http://points.oppo.com/' target='_blank'>积分商城</a>
                </li> -->
                <!-- <li class='gi gi-search' data-mobile='.main-menu nav .nav-ul-view> ul'>
                <a href='#' class='m-item'><img src="/media/images/icon-menu-search.png" /></a>
                </li> -->
            </ul>
            <div class='search gi'>
                <a class='js-toggle-close' href='#'>
                    <span class='icon icon-search'>
                    </span>
                </a>
                <div class='search-form js-content'>
                    <div class='wrapper'>
                        <form action='http://www.opposhop.cn/products' class='main-form' data-desktop='.search-form .wrapper'
                        data-mobile='.main-menu .search'>
                            <div class='input-button-item'>
                                <input placeholder='搜索OPPO商品' type='text' name="q">
                                <button class='button button-primary' type='submit'>
                                    搜索
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <ul class='gi log-area'>
                <li class='gi hidden hasLogin' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
                    <a href='http://my.oppo.com/user'>
                        <span class='text'>
                            我的OPPO
                        </span>
                        <span class='icon icon-messages'>
                        </span>
                        <span class='n-messages'>
                            (0)
                        </span>
                    </a>
                </li>
                <li class='gi hidden hasLogin' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
                    <a class='logout' href='http://my.oppo.com/auth/logout?callback=http%3A%2F%2Fmy.oppo.com%2Fauth%2Fregister%3Fcallback%3Dhttp%253A%252F%252Fwww.oppo.com%252Fcn%252F'>
                        退出
                    </a>
                </li>
                <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
                    <a href='http://my.oppo.com/auth/login?callback=http%3A%2F%2Fmy.oppo.com%2Fauth%2Fregister%3Fcallback%3Dhttp%253A%252F%252Fwww.oppo.com%252Fcn%252F'>
                        登录
                    </a>
                </li>
                <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
                    <a href='http://my.oppo.com/auth/register?callback=http%3A%2F%2Fmy.oppo.com%2Fauth%2Fregister%3Fcallback%3Dhttp%253A%252F%252Fwww.oppo.com%252Fcn%252F'>
                        注册
                    </a>
                </li>
            </ul>
            <ul class='gi menu-lang'>
                <li class='gi gi-language' data-desktop='.menu-lang' data-mobile='.main-menu nav .nav-ul-view > ul'>
                    <a class='lang-link js-toggle-close' href='#'>
                        Global
                    </a>
                    <div class='languages js-content' data-desktop='.gi-language' data-mobile='.languages-panel'>
                        <div class='wrapper'>
                            <h3 class='h-epsilon'>
                                Select your country or region
                            </h3>
                            <ul>
                                <li>
                                    <a href='http://www.oppo.com/dz/'>
                                        Algérie
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/au/'>
                                        Australia
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/bd/'>
                                        Bangladesh
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/eg/'>
                                        Egypt
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/en/'>
                                        Global
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/in/'>
                                        India
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/id/'>
                                        Indonesia
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/ke/'>
                                        Kenya
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/my/'>
                                        Malaysia
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/ma/'>
                                        Maroc
                                    </a>
                                </li>
                                <!-- <li>
                                <a  href='http://www.oppo.com/mx/'>México</a>
                                </li> -->
                                <!-- <li>
                                <a  href='http://www.oppo.com/ng/'>Nigeria</a>
                                </li> -->
                                <li>
                                    <a href='http://www.oppo.com/pk/'>
                                        Pakistan
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/ph/'>
                                        Philippines
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/sg/'>
                                        Singapore
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/lk/'>
                                        Sri Lanka
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/tw/'>
                                        台灣
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/ae/'>
                                        UAE
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppomobile.vn/'>
                                        Việt Nam
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/th/'>
                                        ประเทศไทย
                                    </a>
                                </li>
                                <li>
                                    <a href='http://www.oppo.com/mm/'>
                                        Myanmar
                                    </a>
                                </li>
                                <li>
                                    <a class='current' href='http://www.oppo.com/cn/'>
                                        中国
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class='bottom-area'>
        <div class='wrapper'>
            <a class='js-open-menu oppo-tj' data-tj="account|link|auth|openmenu" href='#'>
                <i class='js-open-menu-bar'>
                </i>
            </a>
            <div class='login-home'>
                <a href='http://www.oppo.com' class='oppo-tj' data-tj="account|link|auth|home">
                    <span class='icons-plus icons-plus-home'>
                    </span>
                    <span>
                        回到首页
                    </span>
                </a>
                <a href='http://my.oppo.com/auth/login?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                class=' oppo-tj' data-tj="account|link|auth|login">
                    <span class='icons-plus icons-plus-user'>
                    </span>
                    <span>
                        登录
                    </span>
                </a>
                <a href='http://my.oppo.com/auth/register?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                class='hidden oppo-tj' data-tj="account|link|auth|register">
                    <span class='icons-plus icons-plus-user'>
                    </span>
                    <span>
                        注册
                    </span>
                </a>
            </div>
            <div class='logo'>
                <a href='http://www.oppo.com/cn/'>
                    <img alt='' src='/media/images/oppo_logo.png' />
                </a>
            </div>
            <a class='js-open-user oppo-tj' data-tj="account|link|auth|openusermenu"
            href='#'>
                <img alt='' src='/media/images/icon-menu-user.png' />
            </a>
            <div class='login-breadcrumb'>
                注册OPPO帐号
            </div>
            <div class='main-menu'>
                <!-- <div class='mobile-tools'>
                <a class='js-close-menu' href='#'>
                <img alt='' src='/cn/media/images/icon-menu-close.png' />
                </a>
                <ul class='g log-area'></ul>
                </div> -->
                <div class='search'>
                </div>
                <nav>
                    <div class='nav-ul-view'>
                        <ul class='menu g'>
                            <li class='gi
                            is-active
                            '>
                                <a class='m-item' href='http://www.oppo.com'>
                                    <span>
                                        首页
                                    </span>
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/products'>
                                    <span>
                                        产品
                                    </span>
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/blogs'>
                                    品牌
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.opposhop.cn'>
                                    <span>
                                        在线商城
                                    </span>
                                    <span class='js-toggle-submenu toggle'>
                                    </span>
                                </a>
                                <ul class='sub-menu'>
                                    <li>
                                        <a href='http://www.opposhop.cn/products?is_promotion=0&category=1'>
                                            手机
                                        </a>
                                    </li>
                                    <li>
                                        <a href='http://www.opposhop.cn/products?is_promotion=0&category=2'>
                                            配件
                                        </a>
                                    </li>
                                    <li>
                                        <a href='http://www.oppo.com/cn/service/help?name=%E8%B4%AD%E4%B9%B0%E5%B8%AE%E5%8A%A9'>
                                            购物指南
                                        </a>
                                    </li>
                                    <li>
                                        <a href='http://points.oppo.com/' target='_blank'>
                                            积分商城
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/shops'>
                                    体验店
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/service'>
                                    服务
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class='user-menu'>
                <div class='relative'>
                    <ul>
                        <li class='user-menu-login'>
                            <a href="http://www.opposhop.cn/orders">
                                我的订单
                            </a>
                        </li>
                        <li class='user-menu-login'>
                            <a href="http://my.oppo.com/user/profile">
                                账户信息
                            </a>
                        </li>
                        <li class='user-menu-login'>
                            <a href="http://www.opposhop.cn/user/addresses">
                                配送地址
                            </a>
                        </li>
                        <li class='user-menu-login user-menu-message'>
                            <a href="http://my.oppo.com/user/messages">
                                系统消息
                            </a>
                        </li>
                        <li class='user-menu-login user-menu-cart'>
                            <a href="http://www.opposhop.cn/cart">
                                购物车
                            </a>
                        </li>
                        <li class='user-menu-login user-menu-toLogin'>
                            <a href='http://my.oppo.com/auth/login?callback=http%3A%2F%2Fmy.oppo.com%2Fauth%2Fregister%3Fcallback%3Dhttp%253A%252F%252Fwww.oppo.com%252Fcn%252F'>
                                登录
                            </a>
                        </li>
                        <li class='user-menu-logout'>
                            <a href='http://my.oppo.com/auth/logout?callback=http%3A%2F%2Fmy.oppo.com%2Fauth%2Fregister%3Fcallback%3Dhttp%253A%252F%252Fwww.oppo.com%252Fcn%252F'>
                                退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class='nav-sub-menu'>
        <div class='relative'>
        </div>
    </div>
    <div class='nav-search-mask'>
    </div>
    <div class='nav-search'>
        <div class='nav-search-container'>
            <div class='nav-search-content'>
                <div class='nav-search-input'>
                    <form action='http://www.opposhop.cn/products' class='main-form'>
                        <input placeholder='搜索OPPO商品' type='text' name="q">
                        <button class='button' type='submit'>
                            搜索
                        </button>
                        <a href='#' class='nav-search-close'>
                            取消
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="languages-panel">
    </div>
</header>
<main class="main-content slab-light">
    <div class='wrapper login register'>
        <div class='brick-bottom'>
            <ul class='steps'>
                <li class='one active'>
                    <div class='step-content'>
                        <h5 class='step-heading'>
                            填写注册信息
                        </h5>
                        <div class='step-gradient'>
                        </div>
                    </div>
                </li>
                <li class='two'>
                    <div class='step-content'>
                        <h5 class='step-heading'>
                            验证信息
                        </h5>
                        <div class='step-gradient'>
                        </div>
                    </div>
                </li>
                <li class='three'>
                    <div class='step-content'>
                        <h5 class='step-heading'>
                            注册成功
                        </h5>
                        <div class='step-gradient'>
                        </div>
                    </div>
                </li>
            </ul>
            <div class='register-form'>
                <form class='g' method='post' action='http://my.oppo.com/auth/register'
                onsubmit='return vm.registerValidate()'>
                    <!-- <div class='gi desk-three-fifths register-left'>
                    <div class='login-wrapper register-rules'>
                    <div class='register-rule g'>
                    <span class='icons-plus icons-plus-vip'></span>
                    <p class='gi three-fifths text-gray'>注册产品，成为VIP用户，获得电子保卡，享受相关售后服务政策</p>
                    </div>
                    <div class='register-rule'>
                    <span class='icons-plus icons-plus-take'></span>
                    <p class='gi three-fifths text-gray'>参加各项VIP特权活动，赢取O币、获得实物奖品等</p>
                    </div>
                    <div class='register-rule'>
                    <span class='icons-plus icons-plus-cloud'></span>
                    <p class='gi three-fifths text-gray'>上传和/或下载内容</p>
                    </div>
                    <p class='register-state'>OPPO绝对尊重用户个人隐私权，绝不会公开、编辑或透露用户的个人信息。</p>
                    </div>
                    </div> -->
                    <div class='gi desk-one-quarter lap-hide'>
                        &nbsp;
                    </div>
                    <div class='gi desk-two-quarters one-whole'>
                        <div class='login-wrapper'>
                            <div class='field'>
                                <p>
                                    如已有帐号，请
                                    <a href='http://my.oppo.com/auth/login?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'>
                                        点此登录
                                    </a>
                                </p>
                            </div>
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
                            <div class='field'>
                                <input placeholder="邮箱/手机号" name="username" type="text" value="">
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                                <span class='username_error_note'>
                                </span>
                            </div>
                            <div class='field'>
                                <input placeholder="密码 (密码长度6~16位，数字、字母、字符至少包含两种)" name="password" type="password"
                                value="">
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
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field'>
                                <input placeholder="确认密码(密码长度6~16位，数字、字母、字符至少包含两种)" name="r_password"
                                type="password" value="">
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field g register-vcode'>
                                <div class='gi two-fifths'>
                                    <input placeholder='验证码' name='captcha' type='text'>
                                </div>
                                <div class='gi two-fifths'>
                                    <img src="http://my.oppo.com/captcha?930041" id="captcha" onclick='vm.updateCaptcha()'
                                    class='oppo-tj' data-tj="account|img|register|changecaptcha" />
                                </div>
                                <div class='gi one-fifth'>
                                    <a onclick="vm.updateCaptcha()" class='text-green oppo-tj' data-tj="account|link|register|changecaptcha">
                                        换一张
                                    </a>
                                </div>
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field activation_section register-mobile'>
                                <div class='g'>
                                    <div class='gi lap-three-fifths'>
                                        <input placeholder='手机验证码' type='text' name='activation_code' class='activation_code'>
                                    </div>
                                    <div class='gi lap-two-fifths'>
                                        <button type='button' href='javascript:;' class='button btn_get_activation_code oppo-tj'
                                        data-tj="account|link|register|getcode">
                                            获取验证码
                                        </button>
                                    </div>
                                </div>
                                <span class='icon icon-tick-green-big register-icon'>
                                </span>
                            </div>
                            <div class='field check-item'>
                                <input id='check1' name='allowed' type='checkbox' checked='checked'>
                                <label for='allowed'>
                                    我已阅读并同意
                                    <a href='http://my.oppo.com/agreement.html' target='_blank' class='text-green'>
                                        《OPPO服务协议》
                                    </a>
                                </label>
                            </div>
                            <div class='field'>
                                <button class='button login-button oppo-tj' data-tj="account|link|register|nextbtn"
                                type='submit'>
                                    下一步
                                </button>
                            </div>
                            <div class='field g'>
                                <div class='gi desk-one-quarter one-whole login-ways'>
                                    其他方式登录
                                </div>
                                <div class='gi desk-three-quarters one-whole login-ways'>
                                    <a href='http://my.oppo.com/auth/sinalogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                                    class='oppo-tj' data-tj="account|link|register|weibo">
                                        <span class='icons-plus icons-plus-weibo'>
                                        </span>
                                    </a>
                                    <a href='http://my.oppo.com/auth/qqlogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                                    class='oppo-tj' data-tj="account|link|register|qq">
                                        <span class='icons-plus icons-plus-qq'>
                                        </span>
                                    </a>
                                    <a href='http://my.oppo.com/auth/alipaylogin?callback=http%3A%2F%2Fwww.oppo.com%2Fcn%2F'
                                    class='oppo-tj' data-tj="account|link|register|zfb">
                                        <span class='icons-plus icons-plus-zfb'>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='gi desk-one-quarter lap-hide'>
                        &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<footer class='main-footer'>
    <div class='footer-prominent-area'>
        <div class='wrapper g'>
            <div class='gi lap-one-third'>
                <a class='footer-prominent-button
                primary
                ' href='http://www.oppo.cn/' title="OPPO社区" target='_blank'>
                    <span class='img'>
                        <img alt='OPPO社区' title="OPPO社区" src='http://static.oppo.com/archives/201502270202233FZ8VzjUJgb2YsLn.png'>
                    </span>
                    <span class='text'>
                        OPPO社区
                    </span>
                </a>
            </div>
            <div class='gi lap-one-third'>
                <a class='footer-prominent-button
                secondary
                ' href='http://www.coloros.com/' title="ColorOS" target='_blank'>
                    <span class='img'>
                        <img alt='OPPO ColorOS' title="ColorOS" src='http://static.oppo.com/archives/20150227020237clUXgMcj3UhukiC0.png'>
                    </span>
                    <span class='text'>
                        ColorOS
                    </span>
                </a>
            </div>
            <div class='gi lap-one-third'>
                <a class='footer-prominent-button
                primary
                ' href='http://store.oppomobile.com/' title="软件商店" target='_blank'>
                    <span class='img'>
                        <img alt='OPPO软件商店' title="软件商店" src='http://static.oppo.com/archives/201503/20150314030306RfYFRTucS1nB3wtQ.png'>
                    </span>
                    <span class='text'>
                        软件商店
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class='footer-sitemap'>
        <nav class='wrapper'>
            <ul class='g'>
                <li class='gi lap-one-fifth'>
                    <a class='m-item' href='http://www.oppo.com/cn/products' target="_blank">
                        推荐机型
                    </a>
                    <span class="toggle js-toggle-sitemap">
                    </span>
                    <ul>
                        <li>
                            <a href='http://www.opposhop.cn/products/360.html' target='_blank'>
                                R9
                            </a>
                        </li>
                        <li>
                            <a href='http://www.opposhop.cn/products/330.html' target='_blank'>
                                R7s
                            </a>
                        </li>
                        <li>
                            <a href='http://www.opposhop.cn/products/319.html' target='_blank'>
                                R7 Plus
                            </a>
                        </li>
                        <li>
                            <a href='http://www.opposhop.cn/products/288.html' target='_blank'>
                                R7
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='gi lap-one-fifth'>
                    <a class='m-item' href='http://www.opposhop.cn/' target="_blank">
                        在线购买
                    </a>
                    <span class="toggle js-toggle-sitemap">
                    </span>
                    <ul>
                        <li>
                            <a href='http://www.opposhop.cn/products?is_promotion=0&category=1' target='_blank'>
                                手机
                            </a>
                        </li>
                        <li>
                            <a href='http://www.opposhop.cn/products?is_promotion=0&category=2' target='_blank'>
                                配件
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/service/help?name=购买帮助' target='_blank'>
                                购物指南
                            </a>
                        </li>
                        <li>
                            <a href='http://points.oppo.com/' target='_blank'>
                                积分商城
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/service/help/614?name=打假维权' target='_blank'>
                                官方授权网店
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='gi lap-one-fifth'>
                    <a class='m-item' href='http://www.oppo.com/cn/service' target="_blank">
                        服务
                    </a>
                    <span class="toggle js-toggle-sitemap">
                    </span>
                    <ul>
                        <li>
                            <a href='http://www.oppo.com/cn/service/help?name=购买帮助' target='_blank'>
                                购买帮助
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/service/help/360?name=购买帮助' target='_blank'>
                                物流查询
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/service/faq' target='_blank'>
                                常见问题
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/service/help?name=服务政策' target='_blank'>
                                服务政策
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/service/map' target='_blank'>
                                服务网点查询
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='gi lap-one-fifth'>
                    <a class='m-item' href='http://points.oppo.com/' target="_blank">
                        会员相关
                    </a>
                    <span class="toggle js-toggle-sitemap">
                    </span>
                    <ul>
                        <li>
                            <a href='http://my.oppo.com/auth/login' target='_blank'>
                                会员登录
                            </a>
                        </li>
                        <li>
                            <a href='http://my.oppo.com/auth/register' target='_blank'>
                                会员注册
                            </a>
                        </li>
                        <li>
                            <a href='http://points.oppo.com/' target='_blank'>
                                积分兑换
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='gi lap-one-fifth'>
                    <a class='m-item' href='http://www.oppo.com/cn/blogs' target="_blank">
                        OPPO品牌
                    </a>
                    <span class="toggle js-toggle-sitemap">
                    </span>
                    <ul>
                        <li>
                            <a href='http://www.oppo.com/cn/blogs/about' target='_blank'>
                                关于OPPO
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/blogs?group_name=资讯' target='_blank'>
                                资讯
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/photogallery' target='_blank'>
                                摄影作品
                            </a>
                        </li>
                        <li>
                            <a href='http://www.oppo.com/cn/blogs/video' target='_blank'>
                                我们的视频
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class='footer-tools'>
        <div class='wrapper'>
            <div class='footer-social lap-one-half desk-lap-one-third'>
                <p>
                    <span class='text'>
                        关注我们
                    </span>
                    <a href='http://weibo.com/oppo' target='_blank'>
                        <span class='icon icon-weibo'>
                        </span>
                    </a>
                    <a href='#' id='footer-wx' class='relative'>
                        <span class='icon icon-wechat'>
                        </span>
                        <img src="http://shopfs.myoppo.com/my/media/images/wx.png" class="wx-float"
                        alt="">
                    </a>
                    <a href='http://career.oppo.com' target='_blank' class='text text-link'>
                        加入我们
                    </a>
                    <a href='http://www.oppo.com/cn/service/help?name=sourcing' target='_blank'
                    class='text text-link'>
                        采购相关
                    </a>
                </p>
            </div>
            <div class='footer-subscribe lap-one-half desk-lap-one-third align-right'>
                <!-- <div class='g'>
                <div class='gi lap-one-whole one-whole'>
                <a href='#' id="btn-kf"><img src='/cn/media/images/zxkf.png' /></a>
                </div>
                <div class='gi footer-lap-hide one-third'><img alt='' src='/cn/media/images/m.jpg' /></div>
                </div> -->
                <div class="g one-whole desk-one-half lap-one-half about-contact pull-left">
                    <a id="btn-kf">
                        <div class="about-contact-icon">
                            <span class="icon icon-chat">
                            </span>
                        </div>
                        <div class="about-contact-info">
                            <h4 class='h-delta'>
                                <span class="highlight">
                                    在线客服
                                </span>
                                <span class="icon icon-arrow">
                                </span>
                            </h4>
                            <p>
                                人工服务：8:30~22:00
                            </p>
                            <p>
                                24小时智能机器人服务
                            </p>
                        </div>
                    </a>
                </div>
                <div class="g one-whole desk-one-half lap-one-half about-contact pull-left second-about-contact">
                    <div class="about-contact-icon">
                        <span class="icon icon-tel">
                        </span>
                    </div>
                    <div class="about-contact-info">
                        <h4 class='h-delta'>
                            <span class="highlight">
                                4001-666-888
                            </span>
                        </h4>
                        <p style="">
                            7*24小时客服电话
                        </p>
                    </div>
                </div>
            </div>
            <!-- <div class='footer-subscribe lap-one-half desk-lap-one-third'>
            <form action='#' class='main-form'>
            <div class='input-button-item'><input placeholder='输入Email订阅我们的最新动态' type='text'>
            <button class='button button-primary' type='submit'>订 阅</button>
            </div>
            </form>
            </div> -->
        </div>
    </div>
    <div class='footer-info'>
        <div class='wrapper'>
            <p>
                © 2005 - 2016 广东欧珀电子工业有限公司 版权所有 粤ICP备08130115号-1 联系方式：0755-66866666
            </p>
        </div>
    </div>
</footer>
<div class='navi-scroll'>
    <div class="navi-scroll-content">
        <a href="javascript:;" class="scroll-top-btn">
            <span>
                回到顶部
            </span>
            <i>
            </i>
        </a>
        <a href="http://www.wenjuan.com/s/ENb67n/" target="_blank" class="survey-btn survey-btn-normal">
            <span>
                意见反馈
            </span>
            <i>
            </i>
        </a>
        <a href="http://www.wenjuan.com/s/V7bume6/" class="survey-btn survey-btn-mobile">
            <span>
                意见反馈m
            </span>
            <i>
            </i>
        </a>
    </div>
</div>
<script src="http://shopfs.myoppo.com/my/lib/jquery-1.9.1.min.js">
</script>
<script src="http://shopfs.myoppo.com/my/lib/custom_form.js">
</script>
<script src="http://shopfs.myoppo.com/my/lib/responsive.js">
</script>
<script src="http://shopfs.myoppo.com/my/lib/scripts.js?v=2015813100349">
</script>
<script src="http://shopfs.myoppo.com/my/assets/javascripts/account.min.js?v=20160309102129">
</script>
<script src="http://shopfs.myoppo.com/my/lib/oppo.login.min.js?v=20160309102129">
</script>
<script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "http://my.oppo.com";
    OPPO.conf.STORE_URL = 'http://www.opposhop.cn';
    OPPO.conf.WWW_URL = 'http://www.oppo.com/cn/';
    OPPO.conf.domains = [];
    OPPO.conf.jsonpDone = false;
    OPPO.conf.domains.push('http://www.opposhop.cn');
    OPPO.conf.domains.push('http://bbs.oppo.cn');
    OPPO.conf.domains.push('http://bbs.coloros.com');

    OPPO.conf.wxdomains = [];
    OPPO.conf.wxdomains.push('http://www.opposhop.cn');

    (function() {
        var controllerNameWithAction = "AuthController@register".split('@');
        var controllerName = controllerNameWithAction[0];
        var actionName = controllerNameWithAction[1];
        var controller = OPPO.controller[controllerName];
        if (controller) {
            action = controller()[actionName];
            if (action) {
                $(function() {
                    vm = action();
                });
            }
        }
        // else console.log(controllerNameWithAction);
    })();
</script>
<!-- 百度统计代码 -->
<script>
    var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?9cb8846b548404438c81aaa02eda4f0f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!-- 谷歌统计代码 -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
        function() { (i[r].q = i[r].q || []).push(arguments)
        },
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-66238290-1', 'auto');
    ga('send', 'pageview');
</script>
<!--oppo统计-->
<script>
    var _optj = _optj || [];
    //判断是否登录，有登录则输出用户ID
    //加入购物车的商品ID信息
    //判断是否有订单号信息 有则输出

    //判断是否有订单的商品ID信息 有则输出 多个用"|"中划线分割

    (function() {
        var op = document.createElement("script");
        op.src = "http://static.oppo.com/tj/optj-1.0.4.min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(op, s);
    })();
</script>
<script type="text/javascript">
    $(function() {
        $("body").on("click", ".oppo-tj",
        function() {
            if (typeof $(this).data('tj') != 'undefined' && typeof _optj != 'undefined') {
                var tj = $(this).data('tj');
                var tjs = tj.split("|");
                _optj.push(['_trackEvent', tjs[0], tjs[1], tjs[2], tjs[3]]);
            };
        });
    });
</script>
</body>

</html>
