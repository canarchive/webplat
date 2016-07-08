<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'free_index',
];
$this->params['jsFiles'] = [
	'jquery', 'free-index',
];
$this->params['bodyClass'] = 'design';
?>
<div class="container sheji">
    <div class="top toptitle">
        <a href="http://m.tugou.com" class="return"></a>免费户型设计与报价
        <a href="http://m.tugou.com/index/CitySelection">
            <div class="position"></div></a>
    </div>
    <!--弹出框-->
    <!-- <div class="box" style="display: none;">
    <div class="box-con">
    <a href="javascript:void(0);" class="close-box"></a>
    <p class="box-title">预约成功</p>
    <p class="box-text">请保持手机畅通哦</br>装修管家会在24小时内联系您哦！</p>
    <p class="box-time"><span>3</span>秒后自动关闭</p></div>
    </div> -->
    <div class="personality">
        <div class="header">
            <img src="http://img.tugou.com/mb/sheji/sheji_banner.png" width="100%" alt="" />
            <img src="http://img.tugou.com/mb/sheji/sheji_01.png" width="100%" alt="" /></div>
        <img src="http://img.tugou.com/mb/sheji/sheji_line.png" width="100%" alt="" style="display: block;" />
        <div class="freeone">
            <p class="free" id="order">免费获取设计报价方案</p>
            <p class="secrecy">您的信息将被严格保密，请准确填写</p>
            <form action="" method="post" class="form" onsubmit="return flase" id="order">
                <div class="input">
                    <input type="text" name="name" class="name" id="name" placeholder="您的姓名" value="" /></div>
                <div class="input">
                    <input type="tel" name="phone" class="phone" id="phone" placeholder="手机号码" value="" /></div>
                <input type="hidden" value="51" id="type" name="apply_type">
                <div class="input-select js-region-select-group clearfix">
                    <select name="province" id="province" class="city_select province js-province">
                        <option value="0">省/市</option></select>
                    <select name="city" id="city" class="city_select city js-city">
                        <option value="0">市/地区</option></select>
                </div>
                <input type="button" value="立即免费获取" id="entirety" class="submit-btn" /></form>
            <!-- <p class="pro-num">已有<span class="ifocus"></span>人预约兔狗设计服务</p> -->
            <p class="apply-subdesc" style="height: 1rem;"></p>
            <div class="alert" style="display:none">请输入姓名</div></div>
        <!--个性化装修方案-->
        <img src="http://img.tugou.com/mb/sheji/sheji_02.png" width="100%" alt="" />
        <div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/sheji/sheji_03.png" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/sheji/sheji_04.png" width="100%" alt="" /></div>
            </div>
            <img src="http://img.tugou.com/mb/sheji/sheji_line.png" width="100%" alt="" style="display: block;" />
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/sheji/sheji_05.png" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/sheji/sheji_06.png" width="100%" alt="" /></div>
            </div>
            <img src="http://img.tugou.com/mb/sheji/sheji_line.png" width="100%" alt="" style="display: block;" />
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/sheji/sheji_07.png" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/sheji/sheji_08.png" width="100%" alt="" /></div>
            </div>
        </div>
    </div>
    <?php echo $this->render('../common/_footer_base', []); ?>
</div>
