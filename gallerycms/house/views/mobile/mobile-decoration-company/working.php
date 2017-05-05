<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 't-footer', 'apply750',
	'lib/total750_v2',
];
$this->params['jsFiles'] = [
	'jquery-1.11.3.min', 'common', 'slideApply', 'lib/total',
	'rem50',
];
$this->context->pcMappingUrl = Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjgd', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="<?= Url::to(['/house/mobile-decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="return"></a><?= $info['name']; ?>
</div>
<?php echo $this->render('_base', ['info' => $info, 'action' => $action]); ?>
<div class="center">
    <!-- 工地实拍 -->
    <ul class="site-list">
        <?php foreach ($workingInfos as $info) { ?>
        <li>
            <a href="<?= Url::to(['/house/mobile-decoration-company/show-working', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
                <img class="lazy" src="" data-original="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                <img class="avatar" src="http://img.tugou.com/company/face04.png">
                <h3 class="name"><?= $info['ownerInfo']['brief']; ?>的家</h3>
                <div class="msg">
                    <div class="info">
                        <p class="desc"><?= $info['status']; ?></p>
						<p class="detail"><?= $info['ownerInfo']['area']; ?>m<sup>2</sup>&nbsp;&nbsp;<?= $info['ownerInfo']['decoration_type'] . ' ' . $info['ownerInfo']['decoration_price']; ?>万</p>
                    </div>
					<span class="community"><?= $info['ownerInfo']['community_name']; ?></span>
                </div>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<div class="placeholder-footer app-hide"></div>
<footer class="bottomFixedArea app-hide">
    <div class="onlineContact" onclick="nTalk.im_openInPageChat();">
	    <img class="consult" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/consult.png" />
        <span class="content">在线咨询</span></div>
    <div class="apply-btn">免费申请设计报价</div></footer>
<div class="apply-container">
    <form class="pop-apply-form">
        <div class="form-title">免费预约看工地</div>
        <p class="form-subtitle">免费预约看工地&nbsp;108道超国标工艺</p>
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
                <span class="font-mark">注：</span>找装修公司，<?= Yii::$app->params['siteNameBase']; ?>比其他渠道便宜20%</div></div>
        <span class="form-close"></span>
    </form>
</div>
<div class="alert" style="display: none;">请输入姓名</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/slick.min.js"></script>
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script>
//延迟加载图片
$(function(){
	$('img.lazy').lazyload({
		effect : "fadeIn"
	});
})
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/company/company-m.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_mobile.js"></script>
