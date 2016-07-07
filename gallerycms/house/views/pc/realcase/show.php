<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;

//'之江九里四室两厅欧式半包12万-云格装饰';
//'四室两厅欧式-云格装饰';
//'四室两厅欧式 由云格装饰负责设计施工，四室两厅欧式 每一处的装修细节都是经过云格装饰细心设计和施工的。装修选择云格装饰，就是选择放心!';
$info = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
$this->params['showPage'] = true;
?>
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/lib/apply-form.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/components/arrow.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-nav.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-common.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-casedetail.css" />
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-common.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-casedetail.js"></script>
</head>

<body>
<!-- 兔狗主页导航栏 -->
<nav class="tugou-new-nav">
    <div class="nav-body">
        <ul>
            <li class="nav-logo">
                <a href="http://www.tugou.com/">
                    <span></span>
                </a>
            </li>
            <li class="nav-cell" data-id="index">
                <a href="http://www.tugou.com/">首页</a></li>
            <li class="nav-cell" data-id="meitu">
                <a href="http://meitu.tugou.com">装修效果图</a></li>
            <li class="nav-cell" data-id="jy">
                <a href="http://www.tugou.com/jy/">装修经验</a></li>
            <li class="nav-cell" data-id="realcase">
                <a href="http://www.tugou.com/realcase/">实景作品</a></li>
            <li class="nav-cell" data-id="provider">
                <a href="/provider/">装修公司</a></li>
            <li class="nav-cell" data-id="keeper">
                <a href="http://www.tugou.com/free/guanjia/">装修管家</a></li>
            <li class="nav-cell" data-id="jiancai">
                <a href="http://www.citytogo.com.cn/baoming/hangzhou/jiancai.html" target="_blank">团购建材</a></li>
            <!-- <li class="nav-cell" data-id="product"><a href="/product/">整体装</a></li> -->
            <!-- <li class="nav-cell" data-id="principal"><a href="/principal/">主材包</a></li> --></ul>
        <div class="nav-mobile">
            <span data-icon="mobile"></span>
            <span role="desc">手机兔狗</span>
            <div class="dim-code">
                <img src="http://img.tugou.com/index/app_code.jpg" border="0" alt="装修网">
                <p>下载APP 找装修更轻松</p>
                <img src="http://img.tugou.com/index/app_weixin.jpg" border="0" alt="装修网">
                <p>兔狗家装官方微客服</p>
            </div>
        </div>
    </div>
</nav>
<div class="pd-header">
    <!-- 兔狗主页导航栏 -->
    <!-- <div class="pd-for-nav"></div> -->
    <!-- 面包屑导航主页样式 -->
    <div class="crumbs">
        <a href="/">杭州装修网</a>
        <span class="sep">&gt;</span>
        <a href="/provider/">杭州装修公司</a>
        <span class="sep">&gt;</span>
        <a href="/provider/233/">云格装饰</a>
        <span class="sep">&gt;</span>
        <a href="/realcase/233/">实景作品列表</a>
        <span class="sep">&gt;</span>
        <a href="/realcase/1371.html">
            <span class="btn-crumbs">之江九里·四室两厅·欧式·半包12万
                <i class="i-del"></i></span>
        </a>
    </div>
</div>
<div class="pd-main">
    <div class="pd-case-content">
        <p class="pd-c-title">之江九里·四室两厅·欧式·半包12万</p>
        <figure class="pd-c-layout">
            <img src="http://pic.tugou.com/realcase/20160621185419_8190.png" alt="用户设计图">
            <figcaption>
                <span class="pd-quota left">“</span>大户型的房子讲究装饰品与风格之间的搭配，主次分明，巧思妙想，从每一处细节体现设计师对整个屋子的把控和人性化设想。
                <span class="pd-quota right">”</span></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185430_2082.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">1</span>
                <p class="pd-img-desc">墙面分割成三块，黄金比例对称结构，三组款式各异的沙发按照房间中线摆放，风格不同却意外和谐。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185439_8222.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">2</span>
                <p class="pd-img-desc">每张椅子上都有一个靠垫，可以舒缓主人的腰部因为长坐而造成的压力。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185452_7134.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">3</span>
                <p class="pd-img-desc">主人好客，客厅沙发椅子俱全，满足多人小聚的私密需求，拉上窗帘便是一场浪漫的密谈。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185503_5795.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">4</span>
                <p class="pd-img-desc">柔软的餐椅可以增加进餐的愉快感，也允许手肘地随意倚靠。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185512_1379.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">5</span>
                <p class="pd-img-desc">餐桌摆放在空间的正中间，既不会因靠边而留白，又不会阻碍过往走道。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185522_8291.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">6</span>
                <p class="pd-img-desc">宽敞的窗户保证了厨房充足的光线，也带来清爽的微风，做饭也变得充满小情趣。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185532_4995.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">7</span>
                <p class="pd-img-desc">床位的长凳用来放置次日穿戴的衣物，既不会弄乱床铺，第二天出门也不会手忙脚乱。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185542_4351.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">8</span>
                <p class="pd-img-desc">粉红有活力的壁纸和复古的床头搭配得宜，瞬间回到贵族小公主的房间。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185552_3706.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">9</span>
                <p class="pd-img-desc">儿童玩具房也讲究对称，饱和度高的颜色更能激起人的愉悦和兴奋感。</p></figcaption>
        </figure>
        <figure class="pd-c-item">
            <img src="http://pic.tugou.com/realcase/20160621185601_6858.jpeg" alt="设计图">
            <figcaption>
                <span class="pd-page-number">10</span>
                <p class="pd-img-desc">从浴缸走出来的时候，地面上的地毯把水珠吸走，防止在光滑的瓷砖上摔跤。</p></figcaption>
        </figure>
        <!-- <div class="pd-c-page">
        <p class="pd-btn"><span class="pd-icon-prev"></span>上一篇:<a class="pd-prev" href=""></a></p>
        <p class="pd-btn"><span class="pd-icon-next"></span>下一篇:<a class="pd-next" href=""></a></p></div>-->
    </div>
    <div class="pd-right-bar">
        <div class="pd-keeper">
            <img class="user-head" src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="装修管家">
            <p class="pd-keeper-name">装修管家
                <a role="name">小南</a></p>
            <img class="keeper-dimcode" src="http://pic.tugou.com/crm_admin_avator/1451700077_1848445.jpeg" alt="装修二维码">
            <p>扫我立即获取装修清单</p>
        </div>
        <div class="pd-applyfix">
            <div class="aside-apply">
                <h3>个性定制我的家</h3>
                <p class="title sm pd-apply-title">免费获取3套设计方案，省40%装修款</p>
                <div class="apply_form">
                    <input name="apply_type" type="hidden" value="12" />
                    <input name="name" type="text" placeholder="您的姓名" />
                    <input name="phone" type="text" placeholder="手机号码" />
                    <div class="select-group clearfix js-region-select-group">
                        <select class="js-province" name="province" id="province">
                            <option value="">省/市</option></select>
                        <select class="js-city" name="city" id="city">
                            <option value="">市/地区</option></select>
                    </div>
                    <input name="apply" type="button" value="立即获取" /></div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">.beian{ width: 15px; height: 15px; display: inline-block; background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; background-size: 100%; position: relative; top: 2px; }</style>
