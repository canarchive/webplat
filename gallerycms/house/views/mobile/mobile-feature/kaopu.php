<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'oneMinute', //'free_index',
];
$this->params['jsFiles'] = [
	'jquery', 'rem50', 'free-index',
];
$this->params['bodyClass'] = 'design';
?>
<div class="top toptitle">
    <a href="javascript:history.go(-1);" class="return"></a>
    <a href="<?= Url::to(['/house/mobile-site/select-city']); ?>">
	    <div class="position"><?= Yii::$app->params['currentCompany']['name']; ?></div>
    </a>
</div>
<div class="container">
    <div class="banner">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_banner.jpg" alt="1分钟找到靠谱装修公司">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_1.jpg" alt="1分钟找到靠谱装修公司"></div>
    <div class="freeone" id="form">
        <h1 class="free" id="order">申请靠谱装修</h1>
        <p class="note">您的信息将被严格保密，请准确填写</p>
        <form action="" method="post" class="form apply_form" onsubmit="return flase" id="order">
            <div class="input">
                <input type="text" name="name" class="name" id="name" placeholder="您的姓名" value="" /></div>
            <div class="input">
                <input type="tel" name="phone" class="phone" id="phone" placeholder="手机号码" value="" /></div>
            <div class="input-select js-region-select-group">
                <select name="province" id="province" class="city_select province js-province">
                    <option value="0">省/市</option></select>
                <select name="city" id="city" class="city_per city_select city js-city">
                    <option value="0">市/地区</option></select>
            </div>
            <input type="hidden" value="kaopu" id="type" name="apply_type">
            <input type="button" value="立即免费预约" class="submit-btn" name="apply">
            <p class="number">已有
                <span class="ifocus"></span>人找到靠谱装修公司</p></form>
    </div>
    <div class="pk">
        <p class="title">为什么要3家装修公司PK</p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_2.jpg" alt="为什么要3家装修公司PK">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_3.jpg" alt="为什么要3家装修公司PK"></div>
    <div class="merit">
        <p class="title">为什么选择<?= Yii::$app->params['siteNameBase']; ?>靠谱装修</p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_4.jpg" alt="为什么选择<?= Yii::$app->params['siteNameBase']; ?>靠谱装修"></div>
    <div class="ensure">
        <p class="title"><?= Yii::$app->params['siteNameBase']; ?>如何确保靠谱装修</p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_5.jpg" alt="<?= Yii::$app->params['siteNameBase']; ?>如何确保靠谱装修">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_6.jpg" alt="<?= Yii::$app->params['siteNameBase']; ?>如何确保靠谱装修"></div>
    <div class="company">
        <p class="title"><?= Yii::$app->params['siteNameBase']; ?>精选靠谱装修公司</p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m_minute_7.jpg" alt="<?= Yii::$app->params['siteNameBase']; ?>精选靠谱装修公司"></div>
    <div class="info">
        <p class="title">TA们都选择了<?= Yii::$app->params['siteNameBase']; ?>家装</p>
        <div class="signed_box">
            <div class="signed_list list">
                <ul class="signed_list_body">
                            <?php foreach ($ownerInfos as $ownerInfo) { ?>
                            <li>
								<span class="signed_city"><?= Yii::$app->params['currentCompany']['name']; ?></span>
    						    <span class="signed_name"><?= $ownerInfo['name']; ?></span>
    							<span class="signed_area"><?= $ownerInfo['community_name']; ?></span>
    							<span class="signed_amount"><?= $ownerInfo['area']; ?>㎡</span>
    							<span class="signed_company"><?= $ownerInfo['decoration_type']; ?></span></li>
                            <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="index-add" style="clear: both;color: #999;font-size: 0.5rem;line-height: 1.5;text-align: center;">
    <p><?= Yii::$app->params['siteCopyRightInfo']; ?>&nbsp;&nbsp;<a href="tel:<?= Yii::$app->params['siteHotline']; ?>"><?= Yii::$app->params['siteHotline']; ?></a>&nbsp;&nbsp;<?= Yii::$app->params['siteIcpInfo']; ?></p>
</div>
</body>
<script>$('input[name="apply"]').on('click',
function() {
    setApply($(this).parents('.apply_form'));
});
$(function() {
    listScroll($('.signed_list_body'), $('li'), 'top', 2, 1, 40);
    listScroll($('.signed_comment_list'), $('.signed_comment'), 'top', 8, 1, 281);
});
/*时间*/
function GetDateStr(AddDayCount) {
    var dd = new Date();
    dd.setDate(dd.getDate() + AddDayCount); //获取AddDayCount天后的日期 
    var m = dd.getMonth() + 1; //获取当前月份的日期 
    var d = dd.getDate();
    return m + "/" + d;
}
$(".today").html(GetDateStr(0));
$(".yesterday").html(GetDateStr( - 1));
$(".before-yesterday").html(GetDateStr( - 2));</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/list_scroll.js"></script>
