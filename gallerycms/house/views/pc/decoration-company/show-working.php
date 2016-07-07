<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'杭州天鸿香榭丽88㎡全包13万-【南鸿】浙江南鸿装饰股份有限公司';
//'杭州天鸿香榭丽88㎡全包13万,【南鸿】浙江南鸿装饰股份有限公司';
//'【南鸿】浙江南鸿装饰股份有限公司提供杭州天鸿香榭丽88㎡全包13万装修施工的每个细节，杭州业主可以清楚知道装修的每个环节。装修施工选择【南鸿】浙江南鸿装饰股份有限公司，就是选择放心! ';

$info = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
$this->params['showPage'] = true;
?>
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/lib/apply-form.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/components/arrow.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-nav.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-common.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-real.css" />
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-common.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-real.js"></script>
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
        <a href="/provider/957/">南鸿装饰</a>
        <span class="sep">&gt;</span>
        <a href="/site/957/">直播工地列表</a>
        <span class="sep">&gt;</span>
        <a href="/site/646.html">
            <span class="btn-crumbs">魏先生的家
                <i class="i-del"></i></span>
        </a>
    </div>
</div>
<div class="pd-main">
    <div class="pd-step">
        <div class="pd-user-basic">
            <img class="user-head" src=" http://img.tugou.com/company/face03.png" alt="用户头像"></a>
            <div class="user-info">
                <p>
                    <a role="name">魏先生的家</a></p>
                <p>
                    <a role="building">天鸿香榭丽</a>
                    <a role="area">88m&sup2;</a>
                    <a role="prod-category">全包</a>
                    <a role="price">13万</a>
                    <a role="style">欧式</a></p>
                <p>项目经理:
                    <a role="manager">舒经理</a>监理师傅:
                    <a role="monitor">周师傅</a>装修管家:
                    <a role="keeper">小南</a></p>
            </div>
        </div>
        <div class="pd-user-home">
            <div class="pd-uh-main">
                <div step-id="0" id="pd-start">
                    <div class="pd-step-title">
                        <div class="pd-step-spinner active">
                            <span class="icon-point active"></span>
                            <span class="icon-down"></span>
                            <a>开工</a>
                        </div>
                    </div>
                    <div step-sequence="0" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">测量放线</a>
                            <a role="time">16.02.18</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553582_0834503.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">插座盒、灯线盒、开关底盒、电视线盒、电话线盒依水平标高线划出线盒位置。</p></div>
                    <div step-sequence="1" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">墙体拆改</a>
                            <a role="time">16.02.19</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553607_1009881.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">拆墙前，要先切断电源，关闭天然气。</p></div>
                </div>
                <div step-id="1" id="pd-electric">
                    <div class="pd-step-title">
                        <div class="pd-step-spinner active">
                            <span class="icon-point active"></span>
                            <span class="icon-down"></span>
                            <a>水电</a>
                        </div>
                    </div>
                    <div step-sequence="0" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">强弱电</a>
                            <a role="time">16.03.12</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553641_6508416.jpeg@220w_220h_1e_1c" alt="施工图片">
                            <img src="http://pic.tugou.com/buildingdiary/1461553641_6933943.jpeg@220w_220h_1e_1c" alt="施工图片">
                            <img src="http://pic.tugou.com/buildingdiary/1461553641_7328213.jpeg@220w_220h_1e_1c" alt="施工图片">
                            <img src="http://pic.tugou.com/buildingdiary/1461553641_7766776.jpeg@220w_220h_1e_1c" alt="施工图片">
                            <img src="http://pic.tugou.com/buildingdiary/1461553641_8133218.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">弱电一般是直流电路或音频、视频线路、网络线路、电话线路，直流电压一般在32V以内。</p></div>
                </div>
                <div step-id="2" id="pd-cement">
                    <div class="pd-step-title">
                        <div class="pd-step-spinner active">
                            <span class="icon-point active"></span>
                            <span class="icon-down"></span>
                            <a>泥木</a>
                        </div>
                    </div>
                    <div step-sequence="0" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">瓷砖铺贴</a>
                            <a role="time">16.03.20</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553701_9884328.jpeg@220w_220h_1e_1c" alt="施工图片">
                            <img src="http://pic.tugou.com/buildingdiary/1461553702_0251157.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">地面处理完成后，需要在地面铺上一层砂浆，砂浆与水的比例是3:1，形成半干的一层，用铁铲和抹灰刀填平表面，一般砂浆厚度为3-4厘米。</p></div>
                </div>
                <div step-id="4" id="pd-finish">
                    <div class="pd-step-title">
                        <div class="pd-step-spinner active">
                            <span class="icon-point active"></span>
                            <span class="icon-down"></span>
                            <a>竣工</a>
                        </div>
                    </div>
                    <div step-sequence="0" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">地板安装</a>
                            <a role="time">16.04.09</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553725_7647186.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">木地板安装前，必须保证地面干燥、平整、无杂物，水管、暖气管、电线、通讯线路等原则上不宜在木地板下通过，以免跑、冒、滴、漏或线路损坏造成木地板损坏和检修不便。</p></div>
                    <div step-sequence="1" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">厨柜安装</a>
                            <a role="time">16.04.12</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553752_8588944.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">逐个拼装后连接以三合一螺丝连接柜体板——调整柜角——连接下柜柜体，安装铰链——安装上下柜——安装侧板、收口条和门板——以层板钉安装活动门板——安装拉手。</p></div>
                    <div step-sequence="2" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">灯具安装</a>
                            <a role="time">16.04.18</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553772_820268.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">照明系统应该设置成可调节的，即当感觉灯光暗淡或者是刺眼的时候，可以进行调整，人们也会感觉更舒服、更自在。</p></div>
                    <div step-sequence="3" class="step-case">
                        <div class="pd-subtitle">
                            <span class="icon-point"></span>
                            <a role="substep">木门安装</a>
                            <a role="time">16.04.21</a></div>
                        <div class="pd-img-list">
                            <img src="http://pic.tugou.com/buildingdiary/1461553797_7168210.jpeg@220w_220h_1e_1c" alt="施工图片"></div>
                        <p class="pd-step-desc">按洞口门型号，复查洞口尺寸，将门框对号入位。</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd-step-menu">
        <div class="pd-menu">
            <div class="menu-item menu-item-start alternative pd-btn">
                <a href="#pd-start">开工阶段</a>
                <span class="menu-arrow">
                    <a class="arrow arrow_down"></a>
                </span>
            </div>
            <div class="menu-item menu-item-electric pd-btn">
                <a href="#pd-electric">水电阶段</a>
                <span class="menu-arrow">
                    <a class="arrow arrow_down"></a>
                </span>
            </div>
            <div class="menu-item menu-item-cement alternative  pd-btn">
                <a href="#pd-cement">泥木阶段</a>
                <span class="menu-arrow">
                    <a class="arrow arrow_down"></a>
                </span>
            </div>
            <div class="menu-item menu-item-paint pd-btn">
                <a href="#pd-paint">油漆阶段</a>
                <span class="menu-arrow">
                    <a class="arrow arrow_down"></a>
                </span>
            </div>
            <div class="menu-item menu-item-finish alternative pd-btn">
                <a href="#pd-finish">竣工阶段</a></div>
        </div>
        <div class="pd-contact-us">
            <span class="pd-line-arrow"></span>
            <img src="http://img.tugou.com/provider/ewm-hangzhou.jpg" alt="兔狗二维码">
            <p class="sm">快扫我!!!
                <br>立即看到你家的装修进度</p></div>
    </div>
</div>
<style type="text/css">.beian{ width: 15px; height: 15px; display: inline-block; background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; background-size: 100%; position: relative; top: 2px; }</style>
