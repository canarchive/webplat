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
//'个性混搭工业风时尚一居设计装潢案例-兔狗装修效果图';
//'个性混搭工业风时尚一居设计装潢案例';
//'兔狗装修效果图专区,为您提供国内外专业全面的个性混搭工业风时尚一居设计装潢案例,涵盖最流行的个性混搭工业风时尚一居设计装潢案例大全、案例,找装修图,上兔狗家装。';

$info = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
$this->params['showPage'] = true;
?>

<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/pages/meitu/common.css" />
<style rel="stylesheet">.page_header img, .page_footer img { display: inline; } .page_header, .page_footer_links { font-size: 12px; }</style>
<script type="text/javascript">
$(function() {
    setCookie('page_flag', 'meitu');
});
</script>
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/pages/meitu/nav.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/pages/meitu/detail.css" /></head>

<body>
<nav class="tugou-new-nav">
    <div class="nav-body logo-head">
        <ul class="nav">
            <li class="nav-logo">
                <a href="http://www.tugou.com/">
                    <span></span>
                </a>
            </li>
            <li class="nav-cell" data-tabid="index">
                <a href="http://www.tugou.com/">首页</a></li>
            <li class="nav-cell" data-tabid="meitu">
                <a href="http://meitu.tugou.com">装修效果图</a></li>
            <li class="nav-cell" data-tabid="jy">
                <a href="http://www.tugou.com/jy/">装修经验</a></li>
            <li class="nav-cell" data-tabid="realcase">
                <a href="http://www.tugou.com/realcase/">实景作品</a></li>
            <li class="nav-cell" data-tabid="provider">
                <a href="/provider/">装修公司</a></li>
            <li class="nav-cell" data-tabid="guanjia">
                <a href="http://www.tugou.com/free/guanjia/">装修管家</a></li>
            <li class="nav-cell" data-tabid="jiancai">
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
<div class="wp" id="wp">
    <div class="cont">
        <div class="main">
            <div class="topic">
                <div class="crumbs">
                    <a href="/">装修效果图</a>
                    <span class="sep">&gt;</span>
                    <a href="/case/">装修案例</a>
                    <span class="sep">&gt;</span>
                    <em>
                        <h1>个性混搭工业风时尚一居设计装潢案例</h1></em>
                </div>
                <!--<div class="ectbtn">
                <a class="btn-wx" href="javascript:;">
                <i class="i-wx"></i>收藏到微信
                <div class="attachbox-wx">
                <img src="http://img.tugou.com/images/tugou5/qrcode_mobile.jpg" width="120" height="120" /></div>
                </a>
                <a class="btn-mobile" href="javascript:;" onclick="alertMsg('敬请期待！')"><i class="i-mobile"></i>发送到手机</a></div>-->
            </div>
            <div class="details clearfix">
                <div id="suit" class="bigpic js-bigpic-viewbox">
                    <ul>
                        <!-- <li class="active">
                        <p>清爽的白色墙面与灰白的地面简单质朴，各种风格的家具软装装点着整个空间，随性大方。</p>
                        </li>-->
                    </ul>
                    <div class="slider-btn">
                        <a class="slider-prev-js" href="/s2110.html">
                            <i class="slider-prev"></i>
                        </a>
                        <a class="slider-next-js" href="/s2111.html">
                            <i class="slider-next"></i>
                        </a>
                    </div>
                    <div class="bigpic-btns">
                        <div class="bigpic-btnsbox">
                            <a class="btn-prevstorage" href="/s2110.html" title="上一组">
                                <i class="i-save"></i>
                                <i class="i-previcon"></i>
                            </a>
                            <!-- <span class="bigpic-as">
                            <a href="#">简述</a>
                            <a href="#">客厅</a>
                            <a href="#">餐厅</a>
                            <a href="#">卫生间</a>
                            <a href="#">主卧</a></span>-->
                            <a class="btn-nextstorage" href="/s2111.html" title="下一组">
                                <i class="i-nexticon"></i>
                                <i class="i-save"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="aside">
                    <div class="content">
                        <div class="aside-apply">
                            <h3>免费户型设计</h3>
                            <p>3家优质装修公司免费帮您出方案</p>
                            <div class="aside-apply-form apply_form">
                                <input name="apply_type" type="hidden" value="19" />
                                <input class="inptxt" name="name" type="text" placeholder="您的姓名" />
                                <input class="inptxt" name="phone" type="text" placeholder="手机号码" />
                                <div class="select-group clearfix js-region-select-group">
                                    <select class="js-province" name="province" id="province">
                                        <option value="">省/市</option></select>
                                    <select class="js-city" name="city" id="city">
                                        <option value="">市/地区</option></select>
                                </div>
                                <input class="btn" name="apply" type="button" value="立即获取" /></div>
                        </div>
                        <div class="aside-example">
                            <h3>相关案例</h3>
                            <div class="aside-exa-list clearfix">
                                <ul>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/s1506.html">
                                            <img src="http://pic.tugou.com/suit/1452479645_819152.jpeg@100h_105w_1e_1c" alt="现代古典混搭一居设计展示" title="现代古典混搭一居设计展示" /></a>
                                    </li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/s2107.html">
                                            <img src="http://pic.tugou.com/meitu/20160630094627_4344.jpeg@100h_105w_1e_1c" alt="个性混搭工业风时尚一居设计装潢案例" title="个性混搭工业风时尚一居设计装潢案例" /></a>
                                    </li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/s2006.html">
                                            <img src="http://pic.tugou.com/meitu/20160418114609_7020.jpeg@100h_105w_1e_1c" alt="典雅混搭风格80平一居室装修案例" title="典雅混搭风格80平一居室装修案例" /></a>
                                    </li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/s2043.html">
                                            <img src="http://pic.tugou.com/meitu/20160506183832_2982.jpeg@100h_105w_1e_1c" alt="典雅混搭风格80平一居室装修案例" title="典雅混搭风格80平一居室装修案例" /></a>
                                    </li>
                                    <!-- --></ul>
                            </div>
                        </div>
                        <div class="aside-hot">
                            <h3>热门推荐</h3>
                            <div class="aside-hot-list clearfix">
                                <ul>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-a55/" target="_blank">小户型</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-a57/" target="_blank">二居</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-a58/" target="_blank">三居</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-a60/" target="_blank">复式</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-c66/" target="_blank">简约</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-c67/" target="_blank">现代</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-c68/" target="_blank">欧式</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-c70/" target="_blank">田园</a></li>
                                    <!-- -->
                                    <li>
                                        <a href="http://meitu.tugou.com/case-c73/" target="_blank">混搭</a></li>
                                    <!-- --></ul>
                            </div>
                        </div>
                        <div class="aside-hot">
                            <h3>相关热搜词</h3>
                            <div class="aside-hotword-list clearfix">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pop hide">
    <div class="popmain">
        <div class="popform apply_form">
            <h3>
                <!--免费获取报价--></h3>
            <p class="pop-tip">
                <!--10秒轻松获取3套报价方案--></p>
            <input name="apply_type" type="hidden" value="18" />
            <input name="item_id" type="hidden" value="" />
            <input class="inptxt" name="name" type="text" placeholder="您的姓名" />
            <input class="inptxt" name="phone" type="text" placeholder="手机号码" />
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input class="btn" name="apply" type="button" value="立即预约" />
            <!--<p style="line-height: 20px; color: #999;">注：每户业主可同时获取3份设计比较，挑选适合方案后个性化修改</p>--></div>
        <a class="btn-popclose" href="javascript:;" onclick="hidePopMask($('.pop'));">关闭</a></div>
</div>
<script type="text/javascript">$(function() {
        bindPopupForm($('.handler a'));
    })</script>
<script type="text/javascript" src="http://static.tugou.com/js/ga.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/nav.js"></script>
<style type="text/css">
.beian{ 
    width: 15px; height: 15px; display: inline-block; 
    background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; 
    background-size: 100%; position: relative; top: 2px; 
}
</style>
<script type="text/javascript" src="http://static.tugou.com/js/city/ProvinceJson.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/city/CityJson.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/components/cascadingRegion.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/lib/jquery.cookie.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/meitu.js"></script>
<script>//当前页
    var page = '0';
    var page_count = '0';
    page = parseInt(page);
    page_count = parseInt(page_count);

    //套图列表页数组
    var SuitListData = [];
    var data = {};
    data.suitid = '2110';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2107';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2111';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2112';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2113';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2115';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2114';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2109';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2104';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2108';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2106';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2105';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2103';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2102';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2101';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2100';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2099';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2098';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2097';
    SuitListData.push(data);
    var data = {};
    data.suitid = '2096';
    SuitListData.push(data);
    //当前套图包含的单图列表
    var PictureListData = [];
    var arr = {};
    arr.picid = '462783';
    arr.suitid = '2107';
    arr.description = '水泥粉刷的墙面上设计出了几个圆弧形状的书柜，古朴质感的水泥墙摇身变成实用壁柜。';
    arr.title = '';
    arr.image = 'meitu/20160630094627_4344.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);
    var arr = {};
    arr.picid = '462785';
    arr.suitid = '2107';
    arr.description = '清新淡雅的餐厅设计，没有整齐对称的餐桌椅摆放，随性洒脱。';
    arr.title = '';
    arr.image = 'meitu/20160630094627_469.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);
    var arr = {};
    arr.picid = '462788';
    arr.suitid = '2107';
    arr.description = '厨房装修非常特别，抛弃传统沉重的橱柜，清爽的石质台面也非常实用，兼备吧台的功能，创意十足。';
    arr.title = '';
    arr.image = 'meitu/20160630094628_6261.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);
    var arr = {};
    arr.picid = '462790';
    arr.suitid = '2107';
    arr.description = '客厅创意设计的壁炉，返璞归真带着自然质感，为客厅增添温度的同时也让客厅变的温暖又温馨。';
    arr.title = '';
    arr.image = 'meitu/20160630094628_7645.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);
    var arr = {};
    arr.picid = '462787';
    arr.suitid = '2107';
    arr.description = '浓重的画框搭配清淡的装修，典雅中有点俏皮。';
    arr.title = '';
    arr.image = 'meitu/20160630094628_5983.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);
    var arr = {};
    arr.picid = '462786';
    arr.suitid = '2107';
    arr.description = '折叠的沙发床设计便于招待朋友，柔软的地毯在平日里成为了一个多功能的休息空间。';
    arr.title = '';
    arr.image = 'meitu/20160630094627_7156.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);
    var arr = {};
    arr.picid = '462784';
    arr.suitid = '2107';
    arr.description = '全白素雅的墙面给主人留下更多自由发挥的空间，大大小小的照片不那么整齐的悬挂在墙面，自然随性也不乏温馨。';
    arr.title = '';
    arr.image = 'meitu/20160630094627_5512.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);
    var arr = {};
    arr.picid = '462789';
    arr.suitid = '2107';
    arr.description = '你以为鹅蛋型的浴缸就是卫生间的全部，异域风格的装饰品增添风情。';
    arr.title = '';
    arr.image = 'meitu/20160630094628_9987.jpeg';
    arr.collection_count = '0';
    arr.suittitle = '个性混搭工业风时尚一居设计装潢案例';
    PictureListData.push(arr);</script>
<script type="text/javascript">$(function() {
        bindSwitchSuit($('.bigpic-btnsbox > a'));

        // bindSelection($('.aside-apply-form.apply_form'), 'bottom');
        //图片轮播开始
        var suitId = PictureListData[0].suitid; //获取套图第一个
        var currentSuitIndex = undefined;
        var index = 0; //获取渲染一套图片 应该显示第几张的索引.默认是第一张显示active
        //查询当前这套图片  所在PictureListData的index
        for (var i in SuitListData) {
            if (SuitListData[i].suitid == suitId) {
                currentSuitIndex = i;
                break;
            }
        }
        //获取渲染一套图片 应该显示第几张的索引
        if ($.cookie('offset') === '1') {
            index = 0;
        } else if ($.cookie('offset') === '-1') {
            index = PictureListData.length - 1;
        }
        $.cookie('offset', null);
        renderPictureList(index, PictureListData, $('#suit ul'));
        //点击左右轮播按钮事件
        var offset;
        $('.slider-btn a').on('click',
        function() {
            if ($(this).is('.slider-prev-js')) {
                offset = -1;
            } else if ($(this).is('.slider-next-js')) {
                offset = 1;
            } else {
                alertMsg('没有更多啦！', $('#suit'));
                return;
            }
            pictureTurning(offset, currentSuitIndex);
            return false;
        });
        bindPopupForm($('.bigpic-handler a'));
        setHotWordRecom();
    });

    function bindSwitchSuit($trigger) {
        var offset = 0;
        $trigger.on('click',
        function() {
            if ($(this).is('.btn-prevstorage')) {
                offset = -1;
            } else if ($trigger.is('.btn-nextstorage')) {
                offset = 1;
            } else {
                alertMsg('没有更多啦!!)', $('#suit'));
            }
            var suitId = PictureListData[0].suitid;
            var currentSuitIndex = undefined;
            for (var i in SuitListData) {
                if (SuitListData[i].suitid == suitId) {
                    currentSuitIndex = i;
                    break;
                }
            }
            //            if (typeof currentSuitIndex === 'undefined') {
            //                alertMsg('抱歉，系统发生未知错误！（没有找到套图）', $('#suit'));
            //                return;
            //            }
            //start 添加右箭头点击到最后一张触发跳转到套图
            var suitIndex = parseInt(currentSuitIndex) + offset; //currentSuitIndex是当前套图在套图中的索引，suitIndex是下一组套图的索引
            if (typeof currentSuitIndex === 'undefined') {
                suitId = SuitListData[0].suitid;
            } else if (suitIndex < 0) {
                alertMsg('没有更多了');
            } else {
                suitId = SuitListData[suitIndex].suitid;
            }
            window.location.href = 'http://meitu.tugou.com/s' + suitId + '.html';
            //end 添加右箭头点击到最后一张触发跳转到套图
            bindSuitTurning(offset, currentSuitIndex);
            return false;
        });
    }

    function renderPictureList(index, pictureData, $container) {
        var isActive = '';
        for (var i in pictureData) {
            if (i == index) {
                isActive = 'active';
            } else {
                isActive = '';
            }
            var html = '<li class="' + isActive + '">' + '<div class="bigpic-img centered-absolute">' + '<img src="http://pic.tugou.com/' + pictureData[i].image + '" alt="' + pictureData[i].suittitle + '" title="' + pictureData[i].suittitle + '" />' + '<div class="infotxt">' + '<p>' + pictureData[i].description + '</p>' + '</div>' + '<div class="bigpic-attach js-btn-viewbox">' + '<div class="bigpic-handler" data-item-id="' + pictureData[i].picid + '">' + '<a class="handler-design" href="javascript:;"><i class="i-design"></i>免费户型设计</a>' + '<a class="handler-price" href="javascript:;"><i class="i-price"></i>免费获取报价</a>' + '</div>' + '</div>' + '<a class="storage" href="javascript:;"><i class="i-storage"></i>收藏<em>' + pictureData[i].collection_count + '</em></a>' + '</div>' + '</li>';

            $container.append(html);
        }
    }
    function setHotWordRecom() {
        //var crtPicId=$('#suit ul li.active').find(".bigpic-handler").attr("data-item-id");
        var crtSuitId = PictureListData[0].suitid;
        $.ajax({
            url: "http://meitu.tugou.com/meitu/AjaxGetRecommend/",
            data: {
                Id: crtSuitId,
                type: "suit"
            },
            dataType: "json"
        }).done(function(data) {
            if (data == -1) {
                console.log("hoops,there is error occured at backgound");
            } else {
                var $hotWordRecom = $(".aside-hotword-list").find("ul");
                $hotWordRecom.html("");
                var dataJson;
                console.log(crtSuitId, data);
                if (typeof(data) == "string") {
                    dataJson = JSON.parse(data);
                } else {
                    dataJson = data;
                }
                var dataLen = dataJson.length;
                for (var i = 0; i < dataLen; i++) {
                    var item = dataJson[i];
                    var itemName = item.name.substring(0, 14);
					var $li = $('<li><a href="http://meitu.tugou.com/mlist/d' + item.hot_word_id + '/" target="_blank">' + itemName + '</a></li>');
					$hotWordRecom.append($li);
                }
            }
        }).fail(function(data) {
            console.log(data);
        });
    }
    //箭头轮播事件
    function pictureTurning(offset, currentSuitIndex) {
        var current = $('#suit ul li.active');
        var suitIndex = parseInt(currentSuitIndex) + offset; //currentSuitIndex是当前套图在套图中的索引，suitIndex是下一组套图的索引
        var targetIndex = current.index() + offset;
        var suitId;
        if (targetIndex < 0 || targetIndex >= PictureListData.length) {
            //start 添加右箭头点击到最后一张触发跳转到套图
            if (typeof currentSuitIndex === 'undefined') {
                suitId = SuitListData[0].suitid;
            } else if (suitIndex < 0) {
                alertMsg('没有更多了');
                return;
            } else {
                suitId = SuitListData[suitIndex].suitid;
            }
            window.location.href = 'http://meitu.tugou.com/s' + suitId + '.html';
            //end 添加右箭头点击到最后一张触发跳转到套图
        }
        //热搜词
        $.cookie('offset', offset);
        current.removeClass('active');
        $('#suit ul li').eq(targetIndex).addClass('active');
        //setHotWordRecom();
    }
    function bindSuitTurning(offset, currentSuitIndex) {
        var targetIndex = parseInt(currentSuitIndex) + offset; //下一组套图的索引
        //翻到下一页重新计算当前的id
        if (targetIndex < 0 || targetIndex >= SuitListData.length) {
            if (SuitListData.length < 20 && targetIndex >= 0) {
                alertMsg('没有更多了');
                return;
            }
            page += offset;
            if (page > 0 && page < page_count) {
                window.location.href = '/meitu/SuitDetail/page/' + page;
                //window.location.href = 'http://meitu.tugou.com/case?page=' + page;
            } else {
                alertMsg('没有更多了');
                return;
            }
        }
        var suitId = SuitListData[targetIndex].suitid;
        window.location.href = 'http://meitu.tugou.com/s' + suitId + '.html';
    }</script>
<script type="text/javascript" src="http://static.tugou.com/js/meitu/detail.js"></script>
