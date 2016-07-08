<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'free_index',
];
$this->params['jsFiles'] = [
	'jquery', 'free-index',
];
$this->params['bodyClass'] = 'design';
//'【兔狗免费验房】收房验房注意事项_验房注意事项_交房时如何验房';
//'免费验房,收房验房注意事项,验房注意事项,交房时如何验房';
//'兔狗免费验房,为您验房时提醒您,北京收房验房注意事项,验房注意事项,交房时如何验房';
?>
<div class="container">
    <div class="top toptitle">
        <a href="javascript:history.go(-1);" class="return"></a>
        <a href="http://m.tugou.com/index/CitySelection">
            <div class="position"></div>
        </a>
    </div>
    <!--菜单-->
    <!--<div class="tab_menu"><p class="person_tab">个性装</p></div>-->
    <!--弹出框-->
    <div class="box" style="display: none;">
        <div class="box-con">
            <a href="javascript:void(0);" class="close-box"></a>
            <p class="box-title">预约成功</p>
            <p class="box-text">请保持手机畅通哦</br>装修管家会在24小时内联系您哦！</p>
            <p class="box-time">
                <span>3</span>秒后自动关闭</p></div>
    </div>
    <!--兔狗家装节-->
    <!-- <div class="banner">
    <a href="http://m.tugou.com/html/baimahu.htm"><img src="http://img.tugou.com/mb/images/m_index/banner.png" width="100%" alt=""/></a>
    <a href="javascript:void(0);" class="close"></a></div>
    <a href="http://m.tugou.com/html/baimahu.htm" class="side"></a> -->
    <!--个性装-->
    <div class="personality">
        <div class="header">
            <img src="http://img.tugou.com/mb/yanfang/banner-check.jpg" width="100%" alt="" />
            <img src="http://img.tugou.com/mb/yanfang/图标.jpg" width="100%" alt="" /></div>
        <div class="freeone">
            <p class="free" id="order">申请免费验房</p>
            <form action="" method="post" class="form" onsubmit="return flase" id="order">
                <div class="input">
                    <input type="text" name="name" class="name" id="name" placeholder="您的姓名" value="" /></div>
                <div class="input">
                    <input type="tel" name="phone" class="phone" id="phone" placeholder="手机号码" value="" /></div>
                <input type="hidden" value="56" id="type" name="type">
                <div class="input-select js-region-select-group clearfix">
                    <select name="province" id="province" class="city_select province js-province">
                        <option value="0">省/市</option></select>
                    <select name="city" id="city" class="city_select city js-city">
                        <option value="0">市/地区</option></select>
                </div>
                <input type="button" value="免费申请" id="entirety" class="submit-btn" /></form>
            <p class="apply-subdesc">同一小区同批验房达到5户，可安排免费上门验房服务。</p>
            <div class="alert" style="display:none">请输入姓名</div></div>
        <!--个性化装修方案-->
        <div class="image-show">
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/yanfang/check_img_01.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/yanfang/check_img_02.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/yanfang/check_img_03.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/yanfang/check_img_04.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/yanfang/check_img_05.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/yanfang/check_img_06.jpg" width="100%" alt="" /></div>
            </div>
        </div>
    </div>
    <?php echo $this->render('../common/_footer_base', []); ?>
</div>
