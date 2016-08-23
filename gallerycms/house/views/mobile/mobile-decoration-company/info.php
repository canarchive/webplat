<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 'swiper.min', 't-footer', 'apply750',
	'lib/total750_v2',
];
$this->params['jsFiles'] = [
	'jquery-1.11.3.min', 'common', 'slideApply', 'lib/total',
	'rem50',
];
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="<?= Url::to(['/house/mobile-decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="return"></a><?= $info['name']; ?>
</div>
<?php echo $this->render('_base', ['info' => $info, 'action' => $action]); ?>
<div class="center">
    <!-- 公司简介 -->
    <div class="introduce ">
        <div class="listone">
            <h4 class="one01">关于我们</h4>
            <p><?= $info['description']; ?>
        </div>
        <div class="listone">
            <h4 class="one02">全程品质保障</h4>
            <ul class="info">
                <li class="clearfix">
                    <span>选材:</span>
                    <span>工厂直供，品质保证</span></li>
                <li class="clearfix">
                    <span>量房:</span>
                    <span>设计师免费上门量房</span></li>
                <li class="clearfix">
                    <span>设计:</span>
                    <span>3天内免费出方案&nbsp;-->&nbsp;出具初期预算&nbsp;-->&nbsp;深化设计&nbsp;-->&nbsp;深化预算</span></li>
                <li class="clearfix">
                    <span>施工:</span>
                    <span>优秀项目经理、精工班组团队一线施工；手机实时直播工地，全程掌握装修进度</span></li>
                <li class="clearfix">
                    <span>验收:</span>
                    <span>装修管家全程一对一专业指导；免费第三方监理，节点验收</span></li>
                <li class="clearfix">
                    <span>售后:</span>
                    <span>网站资质审核，质保金先行赔付；项目基础、隐蔽工程质量保证</span></li>
            </ul>
        </div>
        <div class="listone">
            <h4 class="one03">公司地址</h4>
            <p><?= $info['address']; ?></p>
        </div>
        <div class="listone">
            <h4 class="one04">资质荣誉</h4>
            <div class="swiper-container slide">
                <ul class="clearfix swiper-wrapper">
                    <?php foreach ($info['aptitude'] as $aptitude) { ?>
                    <li class="swiper-slide">
                        <img alt="企业证书" src="<?= $aptitude['url']; ?>">
                    </li>
                    <?php } ?>
                </ul>
                <div style="bottom:0.32rem;" class="page swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<div class="placeholder-footer app-hide"></div>
<footer class="bottomFixedArea app-hide">
    <div class="onlineContact" onclick="nTalk.im_openInPageChat();">
        <img class="consult" src="http://static.tugou.com/m/img/provider/consult.png" />
        <span class="content">在线咨询</span></div>
    <div class="apply-btn">免费申请设计报价</div></footer>
</footer>
<div class="apply-container">
    <form class="pop-apply-form">
        <div class="form-title">免费为我做设计</div>
        <p class="form-subtitle">免费获取3份设计&nbsp;选取适合的设计稿</p>
        <div class="form-body">
            <input type="hidden" id="type" value="52">
            <input type="hidden" id="remark" value="装修公司">
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
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/swiper.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/company/company-m.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_mobile.js"></script>
<script type="text/javascript">$(function() {
        var slide = new Swiper('.slide', {
            direction: 'horizontal',
            loop: true,
            autoplay: 2000,
            autoplayDisableOnInteraction: false,
            pagination: '.swiper-pagination',
            paginationClickable: true,
        })
    })</script>
