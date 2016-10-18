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
$this->context->pcMappingUrl = Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="<?= Url::to(['/house/mobile-decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="return"></a><?= $info['name']; ?>
</div>
<?php echo $this->render('_base', ['info' => $info, 'action' => $action]); ?>
<div class="center">
    <!-- 装修实景 -->
    <ul class="case-list">
        <?php foreach ($realcaseInfos as $info) { ?>
        <li>
            <a href="<?= Url::to(['/house/mobile-realcase/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
                <div class="placeholder-img">
                    <img class="lazy" src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                </div>
                <p class="detail"><?= $info['ownerInfo']['house_type']; ?>&nbsp;&nbsp;<?= $info['ownerInfo']['style']; ?>&nbsp;&nbsp;<?= $info['ownerInfo']['decoration_type'] . $info['ownerInfo']['decoration_price']; ?>万</p>
                <p class="community"><?= $info['ownerInfo']['community_name']; ?></p>
                <p class="msg">
				    <span class="type"><?= $info['ownerInfo']['community_name']; ?></span>
					<span class="intro">已有32382人咨询</span>
                </p>
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
<!--免费为我做设计-->
<div class="apply-container">
    <form class="pop-apply-form">
        <div class="form-title">申请免费设计</div>
        <p class="form-subtitle">免费获取3份设计&nbsp;选取满意设计稿</p>
        <div class="form-body">
            <input type="hidden" name="apply_type" value="53">
            <input type="hidden" id="remark" value="移动美图列表">
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
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/case.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/company/company-m.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_mobile.js"></script>
