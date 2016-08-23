<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 't-footer', 'apply750', 
	'lib/total750_v2', 
];
$this->params['jsFiles'] = [
	'rem50', 'jquery-1.11.3.min', 'slideApply', 'lib/total', 
	'appOpenEmbed', 'company/companyList',
];
?>
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
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<!--<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/t-footer.js "></script>-->
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_mobile.js"></script>
<script type="text/javascript">
var myApply = new applyForm($(".apply-container"));
    $(".apply-btn").click(function() {
        myApply.show();
    });
    $(".share-btn").click(function() {
        myApply.show();
	}
);
/*延迟加载图片*/
$(function(){
	$('img.lazy').lazyload({
		effect : "fadeIn",
		threshold : 100,
	});
})
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/company/company-m.js"></script>
