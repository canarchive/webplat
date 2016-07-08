<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'free_index',
];
$this->params['jsFiles'] = [
	'jquery', 'free-index',
];
$this->params['bodyClass'] = 'design';
//'【免费监理】家装工程监理_装修监理_施工监理-北京兔狗家装';
//'免费监理,家装工程监理,装修监理,施工监理,北京兔狗家装';
//'北京兔狗免费监理服务,为您提供竣工收尾后的水电验收,泥工验收,油漆验收,竣工验收,家装工程监理,装修监理,施工监理给您全方面的装修保障服务！';
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
    <!-- -->
    <!--个性装-->
    <div class="personality">
        <div class="header">
            <img src="http://img.tugou.com/mb/jianli/banner-monitor.jpg" width="100%" alt="" />
            <img src="http://img.tugou.com/mb/jianli/jianli02.jpg" width="100%" alt="" /></div>
        <div class="freeone">
            <p class="free" id="order">申请免费监理</p>
            <form action="" method="post" class="form" onsubmit="return flase" id="order">
                <div class="input">
                    <input type="text" name="name" class="name" id="name" placeholder="您的姓名" value="" /></div>
                <div class="input">
                    <input type="tel" name="phone" class="phone" id="phone" placeholder="手机号码" value="" /></div>
                <input type="hidden" value="57" id="type" name="type">
                <div class="input-select js-region-select-group clearfix">
                    <select name="province" id="province" class="city_select province js-province">
                        <option value="0">省/市</option></select>
                    <select name="city" id="city" class="city_select city js-city">
                        <option value="0">市/地区</option></select>
                </div>
                <input type="button" value="免费申请" id="entirety" class="submit-btn" /></form>
            <!-- <p class="pro-num">已有<span class="ifocus"></span>人预约兔狗设计服务</p> -->
            <p class="apply-subdesc">需在装修开工前预约资深监理师傅，提前安排验房时间。</p>
            <div class="alert" style="display:none">请输入姓名</div></div>
        <!--个性化装修方案-->
        <div class="image-show">
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_01.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_02.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_03.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_04.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_05.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_06.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_07.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_08.jpg" width="100%" alt="" /></div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="http://img.tugou.com/mb/jianli/monitor_img_09.jpg" width="100%" alt="" /></div>
            </div>
        </div>
    </div>
    <?php echo $this->render('../common/_footer_base', []); ?>
</div>
