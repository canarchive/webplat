<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'free_index',
];
$this->params['jsFiles'] = [
	'jquery', 'free-index', 'baojia',
];
$this->params['bodyClass'] = 'design';
$this->params['formPosition'] = 'baojia';
$this->params['formPositionName'] = '报价';
?>
<div class="container pricing">
    <div class="top toptitle">
        <a href="javascript:history.go(-1);" class="return"></a>
        <a href="<?= Url::to(['/house/mobile-site/select-city']); ?>">
	        <div class="position"><?= Yii::$app->params['currentCompany']['name']; ?></div>
        </a>
    </div>
    <div class="box" style="display: none;">
        <div class="box-con">
            <a href="javascript:void(0);" class="close-box"></a>
            <p class="box-title">预约成功</p>
            <p class="box-text">请保持手机畅通哦</br>装修管家会在24小时内联系您哦！</p>
            <p class="box-time">
                <span>3</span>秒后自动关闭</p></div>
    </div>
    <div class="personality">
        <div class="header">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/price-banner-m.png" width="100%" alt="" /></div>
        <div class="freeone bottom-border">
            <h1 class="baojia">免费获取装修预算</h1>
            <p class="free" id="order" style="font-size: 0.56rem;color: #696666;padding-top: 0">请正确填写手机号码，报价结果将发送到您的手机</p>
            <form action="" method="post" class="form" onsubmit="return flase" id="order">
                <div class="input">
                    <input type="text" name="name" class="name" id="name" placeholder="您的姓名" value="" /></div>
                <div class="input">
                    <input type="tel" name="phone" class="phone" id="phone" placeholder="手机号码" value="" /></div>
                <!--<div class="input">
                    <input type="text" name="sms_code" class="sms_code" id="sms_code" placeholder="请输入验证码" value="" />
                    <a class="captcha" id="captcha">获取验证码</a></div>-->
                <div class="input">
                    <input type="text" name="area" class="area" id="area" placeholder="面积" value="" />
                    <span>m&sup2;</span></div>
                <input type="hidden" value="baojia" id="type" name="apply_type">
                <div class="input-select js-region-select-group clearfix" style="border-bottom: none;">
                    <select name="province" id="province" class="city_select province js-province">
                        <option value="0">省/市</option></select>
                    <select name="city" id="city" class="city_select city js-city">
                        <option value="0">市/地区</option></select>
                </div>
                <!--<div class="input-select">
                    <span class="select-icon"></span>
                    <select name="level" id="level">
                        <option value="0">装修档次</option>
                        <option value="1">普通装修</option>
                        <option value="2">中档装修</option>
                        <option value="3">高端装修</option></select>
                </div>-->
                <input type="hidden" id="city_id" value="" />
                <input type="button" value="免费申请" id="entirety_baojia" class="submit-btn" /></form>
            <!-- <p class="pro-num">每户业主可同时获取3份设计报价，省40%装修款。</p> -->
            <p class="pro-num">已有
                <span class="ifocus">32382</span>户业主获取装修报价</p>
            <div class="alert" style="display:none;">请输入姓名</div></div>
    </div>
    <div class="price-special" style="border-bottom: 1px solid #e5e5e5;">
        <p class="total" id="detail">您的装修预算为
            <span class="money">0</span>元</p>
        <div class="detail-list">
            <p class="list-left">客厅</p>
            <p class="list-right">
                <span class="price-kt">0</span>元</p></div>
        <div class="detail-list">
            <p class="list-left">卧室</p>
            <p class="list-right">
                <span class="price-ws">0</span>元</p></div>
        <div class="detail-list">
            <p class="list-left">厨房</p>
            <p class="list-right">
                <span class="price-cf">0</span>元</p></div>
        <div class="detail-list">
            <p class="list-left">卫生间</p>
            <p class="list-right">
                <span class="price-wsj">0</span>元</p></div>
        <div class="detail-list">
            <p class="list-left">阳台</p>
            <p class="list-right">
                <span class="price-yt">0</span>元</p></div>
        <div class="detail-list" style="border-bottom: 1px solid #E5E5E5;">
            <p class="list-left">其他预算</p>
            <p class="list-right">
                <span class="price-other">0</span>元</p></div>
        <p class="beizhu">* 报价仅供参考，真实报价以实际量房为准</p></div>
    <div class="price-special" style="margin-top: 0.4rem">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/price-img-m.png" width="100%" alt="" /></div>
    <p class="copyright" style="margin-bottom: 2.2rem; background: #fff">杭州<?= Yii::$app->params['siteNameBase']; ?>科技有限公司 浙ICP备14016529号 0571-85866119</p></div>
