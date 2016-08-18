<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 'swiper', 't-footer', 'apply640',
	'lib/total',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'slideApply', 'lib/total',
];

$merchantInfo = $info->merchantInfo;
$statusDatas = $info->statusDatas;
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
    <a href="javascript:history.go(-1);" class="return"></a>直播工地
</div>

<div class="siteTop">
    <div class="site-face">
        <i>
            <img src="http://img.tugou.com/company/face04.png"></i>
    </div>
	<p class="sitename"><?= $info['community_name']; ?>的家</p>
	<h1 class="sitetype"><?= $info['community_name']; ?>&nbsp;&nbsp;<?= $info['area']; ?>㎡&nbsp;&nbsp;<?= $info['decoration_type'] . $info['decoration_price']; ?>万&nbsp;&nbsp;</h1>
</div>
<!--<div class="label">
    <ul>
        <li>
            <a>项目经理：</a>
			<span>董经理</span>
        </li>
        <li>
            <a>监理师傅：</a>
			<span>张师傅</span>
        </li>
        <li>
            <a>装修管家：</a>
			<span>小薇</span>
        </li>
    </ul>
</div>-->
<div class="siteBody">
    <div class="line"></div>
    <?php $i = 0; foreach ($info->statusInfos as $statusKey => $statusValue) { $statusData = isset($statusDatas[$statusKey]) ? $statusDatas[$statusKey] : false; if (empty($statusData)) { continue; } ?>
    <div class="siteone">
        <h5>
		    <a id="inner1"><span><?= $statusValue; ?></span></a>
        </h5>
        <?php foreach ($statusData as $sData) { ?>
        <p class="sitework">
            <a></a>
            <b></b>
			<i><?= $sData['name']; ?></i>
			<span><?= $sData['start_time']; ?></span>
        </p>
        <div class="sitecon">
            <p><?= $sData['description']; ?></p>
            <ul class="sitepic listpic swiperimg">
                <?php foreach ($sData['picture_living'] as $living) { ?>
				<li><img src="<?= $living['url']; ?>" alt="施工图片"></a></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
<div class="list-footer"></div>
<style type="text/css">.icon-consult { display: inline-block; width: 0.8rem; height: 1.25rem; background: url("http://img.tugou.com/consultant/m-consult.png") no-repeat center; background-size: 0.6rem 0.6rem; vertical-align: middle; margin-top: -0.2rem; margin-right: 7px } .list-consult { display: none; } .footer-bar { width: 100%; height: 100%; border-collapse: collapse; border-spacing: 0; } .footer-bar td { text-align: center; vertical-align: middle; } footer { width: 100%; height: 2.2rem; line-height: 2.2rem; position: fixed; bottom: 0; z-index: 99; max-width: 750px; } footer table { margin: 0; padding-top: 0; border-collapse: collapse; border-spacing: 0; } footer td { font-size: 0.88rem; color: #fff; background-size: 18%; height: 2.2rem; line-height: 2.2rem; } footer .qq-btn { font-size: 0.58rem; color: #444444; background-color: #fff; } footer .apply-btn { font-size: 0.68rem; color: #fff; background-color: #00b7b1; }</style>
<footer class="tugou-footer app-hide">
    <table class="footer-bar">
        <tr>
            <td class="qq-btn" style="border-right:none;width: 38.2%" onclick="nTalk.im_openInPageChat();">
                <span class="icon-consult"></span>在线咨询</span>
            </td>
            <td style="width:61.8%" class="apply-btn">免费预约设计</td></tr>
    </table>
</footer>
<script type="text/javascript">$(function() {
        $(".apply-btn").click(function() { //弹出申请框
            $(".win_all").show();
        });
        $(".close a").click(function() { //关闭申请框
            $(".win_all").hide();
        });
    });</script>
<footer class="tugou-footer app-hide">
    <table class="footer-bar">
        <tr>
            <td class="qq-btn" style="border-right:none;width: 38.2%" onclick="nTalk.im_openInPageChat();">
                <span class="icon-consult"></span>在线咨询</span>
            </td>
            <td style="width:61.8%" class="apply-btn footerone">免费预约看工地</td></tr>
    </table>
</footer>
<!-- <div id="list_top" class="list_top"></div> -->
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
<div class="apply-container">
    <form class="pop-apply">
        <div class="form-title">免费预约看工地</div>
        <p class="form-subtitle">免费预约看工地 108道超国标工艺</p>
        <div class="form-body">
            <input name="apply_type" type="hidden" value="54">
            <input type="hidden" id="remark" value="装修公司（直播工地）">
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
<script type="text/javascript">var myApply = new applyForm($(".apply-container"));
    //$(".apply-btn").click(function() {
        //myApply.show();
//});
</script>
<script type="text/javascript" src="http://static.tugou.com/m/js/building_diary/swiper/js/swiper.js"></script>
<script src=" http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js "></script>
<script src="http://static.tugou.com/m/js/company/companyList.js"></script>
<script src="http://static.tugou.com/m/js/company/sitedetail.js"></script>
