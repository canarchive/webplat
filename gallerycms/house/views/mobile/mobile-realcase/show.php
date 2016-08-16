<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 't-footer',
	'lib/total750_v2',
];
$this->params['jsFiles'] = [
	'rem50', 'jquery-1.11.3.min', 'lib/total',
];
?>
<link rel="stylesheet" href="http://static.tugou.com/m/css/apply750.css" />
<script type="text/javascript" src="http://static.tugou.com/m/js/slideApply.js"></script>
<script type="text/javascript" src="http://static.tugou.com/m/js/appOpenEmbed.js"></script>
<script src="http://static.tugou.com/m/js/company/companyList.js"></script>
<style type="text/css">body { background-color: #fff; }</style>

<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="javascript:history.go(-1);" class="return"></a>实景作品
</div>
<div class="caseTop">
    <h1><?= $info['community_name']; ?>·<?= $info['house_type']; ?>&nbsp;&nbsp;<?= $info['style']; ?>&nbsp;&nbsp;<?= $info['decoration_type'] . $info['decoration_price']; ?></h1>
	<!--<span><?= $info['community_name']; ?></span>-->
</div>
<div class="casedetail-list">
    <ul>
        <li>
            <div class="placeholder-img">
                <img class="lazy" src="<?= $info['picture_design']; ?>">
            </div>
        </li>
        <li>
            <div class="casep clearfix">
                <span class="top-quote"></span>
                <span class="content"><?= $info['pictureDesignInfo']['description']; ?></span>
                <span class="next-quote"></span>
            </div>
        </li>
        <?php foreach ($info['design_sketch'] as $sketchKey => $sketchInfo) { ?>
        <li>
            <div class="placeholder-img">
		        <img src="<?= $sketchInfo['url']; ?>" alt="<?= $sketchInfo['description']; ?>">
            </div>
            <p class="desc">
			    <?= $sketchKey + 1; ?>&nbsp;<?= $sketchInfo['description']; ?>
            </p>
        </li>
        <?php } ?>
        <li>
    </ul>
</div>
<div class="share">
    <h1 class="title">分享到</h1>
    <a class="friends" id="onMenuShareAppMessage">
        <img src="http://img.tugou.com/company/share01.png">
        <p>微信好友</p>
    </a>
    <a class="group" id="onMenuShareTimeline">
        <img src="http://img.tugou.com/company/share02.png">
        <p>朋友圈</p>
    </a>
</div>
<!--<div class="related">
    <h2 class="title">邻居在看</h2>
    <ul class="clearfix">
        <li style="background-image: url('http://pic.tugou.com/realcase/1450941247_7516312.jpeg@352h_522w_1e_1c')">
            <a href="/hz/realcase/18.html">
                <p class="text type">两室两厅</p>
                <p class="text style">美式</p>
                <h2 class="text community">
                    <img src="http://static.tugou.com/m/img/provider/info3.png">瑞和锦亭</h2></a>
            <a href="/hz/realcase/18.html" class="mask"></a>
        </li>
        <li style="background-image: url('http://pic.tugou.com/realcase/1450941365_5526267.jpeg@352h_522w_1e_1c')">
            <a href="/hz/realcase/19.html">
                <p class="text type">三房二厅</p>
                <p class="text style">美式</p>
                <h2 class="text community">
                    <img src="http://static.tugou.com/m/img/provider/info3.png">川杨新苑</h2></a>
            <a href="/hz/realcase/19.html" class="mask"></a>
        </li>
    </ul>
</div>-->
<div class="sharewindow">
    <div class="sharehand">
        <img src="http://img.tugou.com/company/share04.gif"></div>
    <div class="sharecontent">
        <p>点击右上角</p>
        <p>发送给朋友或分享到朋友圈</p>
    </div>
</div>
<div class="placeholder-footer app-hide"></div>
<footer class="bottomFixedArea app-hide">
    <div class="onlineContact" onclick="nTalk.im_openInPageChat();">
        <img class="consult" src="http://static.tugou.com/m/img/provider/consult.png" />
        <span class="content">在线咨询</span></div>
    <div class="apply-btn">免费申请设计报价</div></footer>
<div class="apply-container">
    <form class="pop-apply-form">
        <div class="form-title">免费为我做设计</div>
        <p class="form-subtitle">免费获取3份设计选取适合的设计稿</p>
        <div class="zpj-form-title">
            <img class="zpj-form-logo" src="http://static.tugou.com/home-m/provider/zpj-logo-1.png" alt="" />作品君免费帮你做设计</div>
        <div class="form-body">
            <input name="apply_type" type="hidden" value="50">
            <input type="hidden" id="remark" value="免费装修方案">
            <div class="form-line input-box first">
                <input type="text" id="name" placeholder="您的姓名" /></div>
            <div class="form-line input-box">
                <input type="tel" id="phone" placeholder="手机号码" /></div>
            <div class="form-line form-line-pure">
                <ul class="city-select-list js-region-select-group">
                    <li class="form-inline">
                        <select class="select-province js-province" name="province" id="province">
                            <option value="0" selected="selected">省/市</option></select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                    <li class="form-inline">
                        <select class="select-city js-city" name="city" id="city">
                            <option value="0" selected="selected">市/地区</option></select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                </ul>
            </div>
            <div class="form-btn-group">
                <input type="button" value="免费申请" class="submit-btn win_sub" id="apply_button" /></div>
            <div class="form-notice">
                <span class="font-mark">注：</span>同一小区同批验房达到5户，可安排免费上门验房服务</div></div>
        <span class="form-close"></span>
    </form>
</div>
<div class="alert" style="display: none;">请输入姓名</div>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>var appId = 'wxa37ed8ded4f5c8d5';
    var timestamp = '1471338738';
    var nonceStr = 'LIoI06QYWBxRG3HN';
    var signature = 'f04a21c35d6eb8ecfdf61ba84b75a908a8e6c3a7';

    wx.config({
        debug: false,
        appId: appId,
        timestamp: timestamp,
        nonceStr: nonceStr,
        signature: signature,
        jsApiList: ['checkJsApi', 'onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo', 'onMenuShareQZone', 'hideMenuItems', 'showMenuItems', 'hideAllNonBaseMenuItem', 'showAllNonBaseMenuItem', 'translateVoice', 'startRecord', 'stopRecord', 'onVoiceRecordEnd', 'playVoice', 'onVoicePlayEnd', 'pauseVoice', 'stopVoice', 'uploadVoice', 'downloadVoice', 'chooseImage', 'previewImage', 'uploadImage', 'downloadImage', 'getNetworkType', 'openLocation', 'getLocation', 'hideOptionMenu', 'showOptionMenu', 'closeWindow', 'scanQRCode', 'chooseWXPay', 'openProductSpecificView', 'addCard', 'chooseCard', 'openCard']
    });</script>
<script src="http://static.tugou.com/m/js/company/share.js?rd=8232"></script>
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script src="http://static.tugou.com/m/js/provider/casedetail.js"></script>
<script src=" http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js "></script>
<script type="text/javascript">var myApply = new applyForm($(".apply-container"));
    $(".apply-btn").click(function() {
        myApply.show();
    });
    $(".share-btn").click(function() {
        myApply.show();
    });</script>
</body>
<script src="http://static.tugou.com/m/js/company/company.js"></script>
