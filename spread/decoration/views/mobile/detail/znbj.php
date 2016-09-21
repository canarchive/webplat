<?php
$this->params['cssFiles'] = [
	'znbj-h5/css/mobiscroll.scroller', 'znbj-h5/css/mobiscroll.scroller.android-ics', 'znbj-h5/css/fabiao',
	'znbj-h5/css/animate', 'znbj-h5/css/fabiao_select', 'znbj-h5/css/common.min', 
];
$this->params['jsFiles'] = [
	'znbj-h5/js/jquery.min',
];
$this->params['formPosition'] = 'hd-bjnew';
$this->params['formPositionName'] = '活动推广-报价new';
?>
<!--body onselectstart="return false" -->
<style>.icon-tbt { background: url('<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/images/icon-se174a62dfa.png') no-repeat; background-size: 187.5px 1087px; background-position: -128px -1068px; display: inline-block; height: 21px; width: 62px; margin-top: 11px; margin-left: -80px; } .back-home-page a b { vertical-align: 5px; display: inline-block; padding-left: 4px; } #back { width: 10px; height: 10px; border-top: 2px solid #7c7c7c; border-left: 2px solid #7c7c7c; -webkit-transform: rotate(-45deg); transform: rotate(-45deg); display: block; position: absolute; left: 15px; top: 16px; z-index: 10; } .navigation{ height:34px!important; background-position: -60px -296px!important; top: 7px!important; }</style>
<!-- 0级 -->
<!--一级-->
<header id="dt-hd" class="navstyle2">
    <a class="zxzs-set" dataptag="2_3_10_487" href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>">
        <i id="back"></i>
    </a>
    <h1 class="back-home-page">
        <a class="zxzs-set" dataptag="2_3_10_487" href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>">
            <span class="icon-tbt"></span>
            <b>首页</b>
        </a>
    </h1>
    <!--右边导航按钮-->
    <!--<nav id="dt-hd-nav">
        <i class="icon-dt-hd navigation" id="add_nav_hovers"></i>
    </nav>-->
    <div id="dt-hd-navs-wrap" class="hide">
        <ul class="dt-hd-navs">
        </ul>
    </div>
    <!--页码-->
    <span class="img-count"></span>
</header>
<script>
$(function() {
    $('#addhovers,#add_nav_hovers').on('touchstart',
    function() {
        $(this).addClass('add_hover');
    });
    $('#addhovers,#add_nav_hovers').on('touchend',
    function() {
        $(this).removeClass('add_hover');
    });

    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) {
            return unescape(r[2]);
        }
        return null;
    }
});
</script>
<style type="text/css">.zxd-form .touch-input2 label { position: absolute; right: 15px; top: 16px; color: #333; } .zxd-form div.download-arrow1:after{ content: ''; width: 10px; height: 10px; font-size: 0; position: absolute; top: 20px; right: 18px; border-top: 1px solid #999; border-right: 1px solid #999; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg); } #froms #area { background-color: #fff; text-align: left; border: none; -webkit-appearance: none; -moz-appearance: none; appearance: none; }</style>
<figure>
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/images/fa3_03.jpg" /></figure>
<section class="bgf8">
    <div id="fabiaoqu">
        <form id="froms" class="zxd-form">
            <div class="download-arrow1">
                <input type="text" id="area" placeholder="请选择您的所在城市"></div>
            <div class="touch-input2">
                <input type="tel" name="oarea" id="areaInput" placeholder="请输入您的房屋面积">
                <label for="areaInput">m&sup2</label></div>
            <p class="oarea-remind">* 输入面积小于30㎡时，报价结果将按30㎡计算</p>
            <!--<div class="jiting clearfix" id="jiting">
                <label>
                    <select name="" id="secshi"></select>
                </label>
                <label>
                    <select name="" id="secting"></select>
                </label>
            </div>
            <div class="jishi clearfix">
                <label>
                    <select name="" id="secchu"></select>
                </label>
                <label>
                    <select name="" id="secwei"></select>
                </label>
                <label style='float: right;'>
                    <select name="" id="secyangtai"></select>
                </label>
            </div>-->
            <div>
                <input type="tel" id="newPhone" name="phone" placeholder="输入号码，报价结果将发送到您的手机"></div>
			<input id="zxd-form-submit" class="ptag-set" type="button" dataptag="2_4_19_594" value="立即计算">
        </form>
    </div>
    <section class="calu-result">
        <h1 id="changeTxt">装修报价</h1>
        <div id='bj'>
            <h2 id="money">0
                <span>元</span></h2>
            <div class="calu-content">
                <p id="tubatu_rg">
                    <b>卧室：</b>
                    <strong id="price-ws">0<em>元</em></strong>
                </p>
                <p id="tubatu_cl">
                    <b>客厅：</b>
                    <strong id="price-kt">0<em>元</em></strong>
                </p>
                <p id="tubatu_sj">
                    <b>厨房：</b>
                    <strong id="price-cf">0<em>元</em></strong>
                </p>
                <p id="tubatu_zj">
                    <b>卫生间：</b>
                    <strong id="price-wsj">0<em>元</em></strong>
                </p>
                <p id="tubatu_yt">
                    <b>阳台：</b>
                    <strong id="price-yt">0<em>元</em></strong>
                </p>
                <p id="tubatu_other">
                    <b>其他：</b>
                    <strong id="price-other">0<em>元</em></strong>
                </p>
            </div>
        </div>
    </section>
    <article class="tipss" id="tipss" style="display: none;">
        <h3>* 稍后装修管家将回电您，免费提供装修咨询服务</h3>
		<h4>* 因材料品牌及工程量不同，具体报价以量房实测为准</h4>
    </article>
</section>
<section class="select-planform">
    <figure>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/images/222_03.jpg" alt="最值得您选择的互联网装修平台" /></figure>
    <figure>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/images/222_06.png" alt="在土巴兔装修：更省钱" /></figure>
    <!--<figure style="position:relative;margin-bottom:1px">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/images/222_09.png" alt="在土巴兔装修：更省心" />
        <a href="" class="zxbj-app publick-click-stream" data-ptag="2_4_19_815"></a>
        <a href="" class="zxbj-zxb1 publick-click-stream" data-ptag="2_4_19_816"></a>
        <a href="" class="zxbj-zxb2 publick-click-stream" data-ptag="2_4_19_817"></a>
    </figure>-->
    <div id="bottom_bj">
        <input type="tel" id="mfyy_phone" placeholder="输入手机号，免费预约土巴兔装修服务" />
        <input type="button" id="mfyy-submit" value="免费预约" /></div>
</section>
<section class="fill-msg2" id="msgOne">
    <p class="closes2 publick-tap-stream" id="close_msgOne" data-ptag="2_4_11_811"></p>
    <div class="fill-msg-box">
        <figure class="publick-title-figure">
            <p class="publick-mb7">一对一人工贴心服务</p>
            <p>让天下没有烦心的装修</p>
        </figure>
        <div class="publick-button-box">
            <a class="window-shoot-zxzx publick-click-stream" href="tel:400-6900-282" data-ptag="2_4_11_809" style="color:white;">电话咨询</a>
            <span class="publick-or">或</span>
            <a class="window-shoot-zxzx publick-click-stream" href="http://www.sobot.com/chat/h5/index.html?sysNum=613b490be53d49e58e97db76dc3dec34" data-ptag="2_4_11_810" style="color:white;">在线咨询</a></div>
    </div>
</section>
<section class="fill-msg3" id="msgTwo">
    <!-- <p class="closes2 closes3 publick-tap-stream" id="close_msgTwo"></p> -->
    <div class="fill-msg-box2">
        <figure class="publick-title-figure2">
            <p>因材料品牌及工程量不同，具体报价以量房实测为准；
                <span style="color: #ff8a00;">稍候装修管家将回电您，免费提供装修咨询服务。</span></p>
        </figure>
        <div class="publick-button-box2">
            <a class="window-shoot-zxzx2 publick-click-stream" href="javascript:viod(0);" style="color:white;">我知道了</a></div>
    </div>
</section>
<div class="phone-background-img animated bounce publick-tap-stream" id="phonelink" data-ptag="2_4_11_808">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/images/phoneimg3.png" class="em-phone-background-img" /></div>
<div class="layerout layerout-z"></div>
<form id="form_zx" action="/zb/post">
    <section style="display: none">
        <a href="#jiting" id="jiting_click"></a>
        <a href="#dt-hd" id="dt-hd-clcik"></a>
        <input type="hidden" name="fang" id="fang" value="" />
        <input type="hidden" name="ting" id="ting" value="" />
        <input type="hidden" name="chu" id="chu" value="" />
        <input type="hidden" name="wei" id="wei" value="" />
        <input type="hidden" name="yangtai" id="yangtai" value="" />
        <input type="hidden" name="ptag" value="2_3_1_1">
        <input type='hidden' name='isprice' value="10" />
        <input type='hidden' name='demo' id='demo' value='' />
        <input type='hidden' name='shen' id='shen' value='' />
        <input type='hidden' name='city' id='city' value='' />
        <input type="hidden" name="openid" value="" />
        <input type="hidden" name="pagetype" value="0" />
        <input type="hidden" name="sourceid" value="" />
        <input type="hidden" name="pro_s_sourceid" value="" />
        <input type="hidden" name="device_src" value="" />
        <input type="hidden" name="to8to_from" value="" />
        <input type="hidden" name="uid" value="0" />
        <input type="hidden" name="yid" id="yid" value="0" />
        <input type="hidden" name="logId" id="logId" value="0" />
        <input type="hidden" name="idfa" value="" readonly/>
        <input type="hidden" name="gonghao" value="0" readonly/>
		<input type="hidden" name="fromapp" value="">
    </section>
</form>
<script type="text/javascript">$(function() {
        zxbjObj.init();
        FabiaoSelect.initialize({
            targetDom: '#area'
        });
        var search = parseQuery();
        if (search['utm_source'] !== undefined || search['utm_from'] !== undefined) {
            $('.phone-background-img').show();
        }
    });
    if ("" == 'dz') { (typeof clickStream !== 'undefined') && clickStream.getCvParams('2_4_11_481');
    }
    $('.touch-input').on('touchstart',
    function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).find('input').focus();
    });
    $('#phonelink').on('touchstart',
    function(e) {
        $('.layerout').show();
        $('#msgOne').show();
    });
    $('#msgOne,#msgTwo').on('touchmove',
    function(e) {
        e.preventDefault();
    });
    $('#close_msgOne,.layerout').on('touchend',
    function(e) {
        e.preventDefault();
        if ($('#msgTwo').is(':visible')) {
            return;
        }
        $(".layerout").hide();
        $('#msgOne').hide();
    });
    $('.window-shoot-zxzx2').on('touchend',
    function(e) {
        e.preventDefault();
        $(".layerout").hide();
        $('#msgTwo').hide();
	});
</script>
<script>
(function() {
    /**
     * 输入状态下隐藏导航栏
     */
    function initInputSelectFocus() {
        var dom_arr = document.querySelectorAll('input[type="text"]');
        var sel_arr = document.querySelectorAll('select');
        var txt_arr = document.querySelectorAll('textarea');
        var dom_len = dom_arr.length;
        var sel_len = sel_arr.length;
        var txt_len = txt_arr.length;
        if (sel_len > 0) {
            for (var i = 0; i < sel_len; i++) {
                var _i = dom_len + i;
                dom_arr[_i] = sel_arr[i];
            }
            dom_len += sel_len;
        }
        if (txt_len > 0) {
            for (var i = 0; i < txt_len; i++) {
                var _i = dom_len + i;
                dom_arr[_i] = txt_arr[i];
            }
            dom_len += txt_len;
        }
        if (dom_len > 0) {
            var fix_dom = document.querySelector('.footer-fix');
            var screen_dom = document.querySelector('.screen');
            for (var i = 0; i < dom_len; i++) {
                if (!dom_arr[i]) {
                    continue;
                }
                dom_arr[i].addEventListener('focus',
                function() {
                    fix_dom && fix_dom.style && (fix_dom.style.display = 'none');
                    if (screen_dom) {
                        screen_dom.style.display = 'none';
                    }
                },
                false);
                dom_arr[i].addEventListener('blur',
                function() {
                    fix_dom && fix_dom.style && (fix_dom.style.display = 'block');
                },
                false);
            }
        }
    }
    initInputSelectFocus();
})();
</script>
<script>
var browser = {
    versions: function() {
        var u = navigator.userAgent,
        app = navigator.appVersion;
        return { //移动终端浏览器版本信息
            trident: u.indexOf('Trident') > -1,
            //IE内核
            presto: u.indexOf('Presto') > -1,
            //opera内核
            webKit: u.indexOf('AppleWebKit') > -1,
            //苹果、谷歌内核
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
            //火狐内核
            mobile: !!u.match(/AppleWebKit.*Mobile.*/),
            //是否为移动终端
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
            //ios终端
            android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
            //android终端或uc浏览器
            iPhone: u.indexOf('iPhone') > -1,
            //是否为iPhone或者QQHD浏览器
            iPad: u.indexOf('iPad') > -1,
            //是否iPad
            webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
        };
    } ()
};
if (browser.versions.iPad) {
    $('head').find('meta[name=viewport]').attr('content', 'initial-scale=1.0,user-scalable=no,maximum-scale=1');
}
</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/to8torsas.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/mobiscroll.core.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/mobiscroll.scroller.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/mobiscroll.scroller.android-ics.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/mobiscroll.i18n.zh.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/fabiao_endalert.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/fabiao_select.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/zbcommon.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/common.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/seoStatis.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/znbj-h5/js/h5AppDownload_sourcecharge.min.js"></script>
</body>
</html>
