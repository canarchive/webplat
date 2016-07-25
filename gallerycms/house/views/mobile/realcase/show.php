<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 'swiper', 't-footer',
];
$this->params['jsFiles'] = [
	'jquery-1.11.3.min', 'common', 'lib/total',
];
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="javascript:history.go(-1);" class="return"></a>实景作品
</div>
<div class="caseTop">
    <h1><?= $info['community_name']; ?>·<?= $info['house_type']; ?>&nbsp;&nbsp;<?= $info['style']; ?>&nbsp;&nbsp;<?= $info['decoration_type'] . $info['decoration_price']; ?></h1>
	<span><?= $info['community_name']; ?></span>
</div>
<div class="content swiperimg">
    <ul>
        <?php foreach ($info['design_sketch'] as $sketchKey => $sketchInfo) { ?>
        <li>
		    <img src="<?= $sketchInfo['url']; ?>" alt="<?= $sketchInfo['description']; ?>">
            <div class="casep">
                <a></a>
				<p><?= $sketchInfo['description']; ?></p>
                <b></b>
            </div>
        </li>
		<?php } ?>
    </ul>
</div>
<div class="share">
    <p>分享到</p>
    <a id="onMenuShareAppMessage">
        <img src="http://img.tugou.com/company/share01.png">
        <span>微信好友</span></a>
    <a id="onMenuShareTimeline">
        <img src="http://img.tugou.com/company/share02.png">
        <span>朋友圈</span></a>
</div>
<div class="related">
    <div class="biaoti">邻居在看</div>
    <ul>
        <li>
            <img src="http://pic.tugou.com/realcase/1450941247_7516312.jpeg@352h_522w_1e_1c" alt="两室两厅  美式">
            <a href="/hz/realcase/18.html">
                <p>
                    <i>两室两厅</i>
                    <b>美式</b>
                </p>
                <h2>瑞和锦亭</h2></a>
        </li>
        <li>
            <img src="http://pic.tugou.com/realcase/1450941365_5526267.jpeg@352h_522w_1e_1c" alt="三房二厅  美式">
            <a href="/hz/realcase/19.html">
                <p>
                    <i>三房二厅</i>
                    <b>美式</b>
                </p>
                <h2>川杨新苑</h2></a>
        </li>
    </ul>
</div>
<div class="masking"></div>
<div class="imageview" id="piclist">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <!-- <div class="swiper-slide tg-img-item"><a href=""><img src="image/zx-example1.png"></a></div>
            <div class="swiper-slide tg-img-item"><a href=""><img src="image/zx-example1.png"></a></div>
            <div class="swiper-slide tg-img-item"><a href=""><img src="image/zx-example1.png"></a></div> --></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="list-footer"></div>
<?php echo $this->render('../common/_nav', []); ?>
<div class="sharewindow">
    <div class="sharehand">
        <img src="http://img.tugou.com/company/share04.gif"></div>
    <div class="sharecontent">
        <p>点击右上角</p>
        <p>发送给朋友或分享到朋友圈</p>
    </div>
</div>
<style type="text/css">.list-consult { position: fixed; right: 0; bottom: 4rem; width: 3rem; z-index: 9999; right: 6% } .apply-bar { width: 15rem; position: fixed; z-index: 999; left: 0; right: 0; bottom: 0; margin: 0 auto; background-color: #fff; height: 2.16rem; display: none; } .apply-bar li { float: left; } .apply-bar .sprite-icon-dialog { background-position: 0 -18.28rem; height: 0.61rem; width: 0.64rem; display: inline-block; position: relative; top: 0.08rem; margin-right: 0.16rem; background: url("http://img.tugou.com/consultant/m-consult.png") no-repeat center; background-size: 0.64rem 0.6rem; } .apply-bar .consult-submit { font-size: 0.56rem; color: #444; line-height: 2.14rem; text-align: center; width: 5.72rem; border-top: 1px solid #e5e5e5; } .apply-bar .apply-submit { line-height: 2.19rem; background-color: #00b7b1; text-align: center; font-size: 0.64rem; color: #fff; width: 9.28rem; } .apply-bar .apply-submit a { color: inherit; display: block; }</style>
<script type="text/javascript" src="http://static.tugou.com/js/city_list.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/m_common.js"></script>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>var appId = 'wxa37ed8ded4f5c8d5';
    var timestamp = '1467886585';
    var nonceStr = '5Twf8rMefhbircsR';
    var signature = '1eeedda3951b819f20e212e03bb7e5fa173fb5fb';

    wx.config({
        debug: false,
        appId: appId,
        timestamp: timestamp,
        nonceStr: nonceStr,
        signature: signature,
        jsApiList: ['checkJsApi', 'onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone', 'hideMenuItems', 'showMenuItems', 'hideAllNonBaseMenuItem', 'showAllNonBaseMenuItem', 'translateVoice', 'startRecord', 'stopRecord', 'onVoiceRecordEnd', 'playVoice', 'onVoicePlayEnd', 'pauseVoice', 'stopVoice', 'uploadVoice', 'downloadVoice', 'chooseImage', 'previewImage', 'uploadImage', 'downloadImage', 'getNetworkType', 'openLocation', 'getLocation', 'hideOptionMenu', 'showOptionMenu', 'closeWindow', 'scanQRCode', 'chooseWXPay', 'openProductSpecificView', 'addCard', 'chooseCard', 'openCard']
    });</script>
<script src="http://static.tugou.com/m/js/company/share.js?rd=5025"></script>
<script type="text/javascript" src="http://static.tugou.com/m/js/building_diary/swiper/js/swiper.js"></script>
<script src="http://static.tugou.com/m/js/company/companyList.js"></script>
<script src=" http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js "></script>
