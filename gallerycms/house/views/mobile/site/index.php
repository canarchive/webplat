<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'index_new', 'swiper.min',
];
$this->params['jsFiles'] = [
	'jquery', 'rem50',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
?>
<div class="toptitle">
    <a href="<?= Url::to(['/site/select-city']); ?>">
	    <div class="position"><?= $currentCity['name']; ?></div>
    </a>
</div>
<div class="content" style="position:relative;">
    <div class="swiper-container banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide tg-img-item">
                <a href="http://m.tugou.com/topic/kaopu/">
                    <img src="http://img.tugou.com/index/4.0/m_lunbo_yfz.jpg" width="100%" alt="一分钟找到靠谱装修公司" /></a>
            </div>
            <div class="swiper-slide tg-img-item">
                <a href="http://m.tugou.com/tuan/baoming/beijing/?tgsy">
                    <img src="http://img.tugou.com/index/4.0/m_lunbo_hangzhou.jpg" width="100%" alt="建材团购" /></a>
            </div>
            <div class="swiper-slide tg-img-item">
                <a href="http://m.tugou.com/topic/jy/29/?lunbo_m">
                    <img src="http://img.tugou.com/index/4.0/m_banner_jy.jpg" width="100%" alt="装修经验" /></a>
            </div>
            <!-- <div class="swiper-slide tg-img-item"><a href="http://m.tugou.com/topic/realcase/"><img src="http://img.tugou.com/index/m_banner_case_01.jpg" width="100%" alt="实景作品"/></a></div> --></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- 豆腐块 -->
    <div class="cube">
        <div class="cube-list cubeTop">
            <a href="/bj/provider/" class="cube-left green">
                <span class="company"></span>
                <p>找装修公司</p>
            </a>
            <div class="cube-right">
                <a class="green" href="/free/design/">户型设计</a>
                <a class="green" href="/free/price/">在线报价</a>
                <a class="green" href="http://m.tugou.com/topic/kaopu/">靠谱装修公司</a>
                <a class="green" href="http://m.tugou.com/bj/wzx/">局部装修</a></div>
        </div>
        <div class="cube-list">
            <a href="http://m.tugou.com/tuan/baoming/beijing/" class="cube-left orange">
                <span class="tuan"></span>
                <p>团建材家具</p>
            </a>
            <div class="cube-right">
                <a class="orange" href="http://m.tugou.com/tuan/baoming/beijing/">建材团购会</a>
                <a class="orange" href="http://m.tugou.com/tuan/baoming/beijing/">家具团购</a>
                <a class="orange" href="/hz/principal/">主材包</a>
                <a class="orange" href="http://m.tugou.com/free/jiancai/">查建材底价</a></div>
        </div>
        <div class="cube-list" style="margin-bottom: 0">
            <a href="http://m.tugou.com/free/guanjia/" class="cube-left blue">
                <span class="guanjia"></span>
                <p>问装修管家</p>
            </a>
            <div class="cube-right">
                <a class="blue" href="http://m.tugou.com/meitu/">装修效果图</a>
                <a class="blue" href="http://m.tugou.com/jy/">装修经验</a>
                <a class="blue" href="http://m.tugou.com/site/">装修实景</a>
                <a class="blue" href="http://m.tugou.com/baike/">装修百科</a></div>
        </div>
    </div>
    <!-- 活动 -->
    <div class="activite">
        <ul class="two">
            <li>
                <a href="http://m.tugou.com/topic/kaopu/">
                    <p class="act-title act-red">免费设计报价</p>
                    <p class="act-bz">3家装修公司PK
                        <br/>先比较 再装修</p></a>
            </li>
            <li>
                <a href="http://m.tugou.com/tuan/baoming/beijing/">
                    <p class="act-title act-orange">团建材家具</p>
                    <p class="act-bz">年中大促
                        <br/>一站式购齐 省30%-50%</p></a>
            </li>
        </ul>
    </div>
    <!-- 装修实景 -->
    <div class="case">
        <div class="case-title">装修实景
            <a href="http://m.tugou.com/realcase/">更多</a></div>
        <div class="cast-list">
            <a class="cast-left" href="http://m.tugou.com/bj/realcase/898.html">
                <img src="http://img.tugou.com/index/m_sjzp01.jpg" alt="原品素心">
                <div class="cast-word">
                    <p>原品素心</p>
                    <p>三室两厅 简约</p>
                </div>
            </a>
            <a class="cast-right" href="http://m.tugou.com/bj/realcase/885.html">
                <img src="http://img.tugou.com/index/m_sjzp02.jpg" alt="以简蕴灵">
                <div class="cast-word">
                    <p>以简蕴灵</p>
                    <p>两室两厅 简约</p>
                </div>
            </a>
        </div>
        <div class="type-list">
            <a href="http://m.tugou.com/meitu/case-a56/">一居室</a>
            <a href="http://m.tugou.com/meitu/case-a57/">二居室</a>
            <a href="http://m.tugou.com/meitu/case-a58/">三居室</a>
            <a href="http://m.tugou.com/meitu/case-a60/">复式</a>
            <a href="http://m.tugou.com/meitu/case-c66/">简约</a>
            <a href="http://m.tugou.com/meitu/case-c73/">混搭</a>
            <a href="http://m.tugou.com/meitu/case-c69/">中式</a>
            <a href="http://m.tugou.com/meitu/case-c72/">美式</a></div>
    </div>
    <!-- 装修经验 -->
    <div class="jingyan">
        <div class="case-title">装修经验
            <a href="http://m.tugou.com/jy/">更多</a></div>
        <div class="swiper-container jy-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/yf/">收房</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/sj/">设计</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/ys/">预算</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/ht/">合同</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/jc/">建材</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/cg/">拆改</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/sd/">水电</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/ng/">泥工</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/mg/">木工</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/yq/">油漆</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/jg/">竣工</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/rz/">软装</a></div>
                <div class="swiper-slide">
                    <a href="http://m.tugou.com/jy/bj/">入住</a></div>
            </div>
        </div>
    </div>
    <!-- 为什么选择兔狗靠谱装修 -->
    <div class="why">
        <h1>为什么选择兔狗家装</h1>
        <img src="http://img.tugou.com/index/4.0/index-why.png" alt="为什么选择兔狗靠谱装修"></div>
    <div class="app-weixin">
        <a href="http://m.tugou.com/act/app/m_down.html" class="tugou-app">
            <img src="http://img.tugou.com/index/index-tugou.png" alt="兔狗家装app"></a>
        <a href="http://m.tugou.com/act/weixin.html" class="tugou-weixin">
            <img src="http://img.tugou.com/index/index-weixin.png" alt="兔狗家装微信公众号"></a>
        <p class="app-p">下载APP</p>
        <p class="weixin-p">微信公众号</p></div>
    <div class="index-add" style="position: absolute;bottom: 0;left: 0;right: 0;">
        <p>杭州兔狗科技有限公司&nbsp;&nbsp;0571-85866119
            <br/>浙ICP备14016529号</p></div>
    <p class="bespoke">
        <span onclick="nTalk.im_openInPageChat();"></span>
        <a href="http://m.tugou.com/topic/kaopu/"></a>
    </p>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/swiper.min.js"></script>
<style type="text/css">.list-consult { position: fixed; right: 0; bottom: 4rem; width: 3rem; z-index: 9999; right: 6% } .apply-bar { width: 15rem; position: fixed; z-index: 999; left: 0; right: 0; bottom: 0; margin: 0 auto; background-color: #fff; height: 2.16rem; display: none; } .apply-bar li { float: left; } .apply-bar .sprite-icon-dialog { background-position: 0 -18.28rem; height: 0.61rem; width: 0.64rem; display: inline-block; position: relative; top: 0.08rem; margin-right: 0.16rem; background: url("http://img.tugou.com/consultant/m-consult.png") no-repeat center; background-size: 0.64rem 0.6rem; } .apply-bar .consult-submit { font-size: 0.56rem; color: #444; line-height: 2.14rem; text-align: center; width: 5.72rem; border-top: 1px solid #e5e5e5; } .apply-bar .apply-submit { line-height: 2.19rem; background-color: #00b7b1; text-align: center; font-size: 0.64rem; color: #fff; width: 9.28rem; } .apply-bar .apply-submit a { color: inherit; display: block; }</style>
<div class="apply-bar app-hide">
    <ul>
        <li class="consult-submit" onclick="nTalk.im_openInPageChat();">
            <span class="icon partial-sprite sprite-icon-dialog"></span>我要咨询</li>
        <li class="apply-submit">
            <a href="javascript:;">立即申请</a></li>
    </ul>
</div>
<div class="list-consult app-hide" onclick="nTalk.im_openInPageChat();">
    <img src="//img.tugou.com/consultant/online-tugou.png" width="100%" alt="在线咨询" /></div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/city_list.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_common.js"></script>
<!-- 2016-05-19 在线客服系统 -->
<script type="text/javascript">var NTKF_PARAM = {
        "siteid": "kf_9262"
        /*网站siteid*/
        ,
        "settingid": "kf_9262_1463469263605"
        /*代码ID*/
        ,
        "uid": ""
        /*会员ID*/
        ,
        "uname": ""
        /*会员名*/
        ,
        "userlevel": "0"
        /*会员等级*/
    }</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/foot-online.js" charset="utf-8"></script>
<script type="text/javascript" src="http://dl.ntalker.com/js/xn6/ntkfstat.js?siteid=kf_9262" charset="utf-8"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m-nav.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m-region.js"></script>
<script type="text/javascript">$(function() {
        var mySwiper = new Swiper('.banner', {
            direction: 'horizontal',
            loop: true,
            autoplay: 3000,
            autoplayDisableOnInteraction: false,
            pagination: '.swiper-pagination',
            paginationClickable: true,
        });
        var mySwiper3 = new Swiper('.jy-list', {
            slidesPerView: "auto",
            slidesPerGroup: 1,
            freeMode: true,
            freeModeMomentumBounceRatio: 4,
		});
	   	var ua = navigator.userAgent.toLowerCase();
        if (/android/.test(ua)) {
            $('.position').addClass('Android');
            $('.case-title a').addClass('case-android');
        }
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            var Top = $(".cubeTop").offset().top;
            if (scrollTop >= Top) {
                $(".bespoke").show();
            } else {
                $(".bespoke").hide();
            }
        });
    });</script>
</div>
