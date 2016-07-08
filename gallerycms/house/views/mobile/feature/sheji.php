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
    <p class="copyright">杭州兔狗科技有限公司
        <br>0571-85866119&nbsp;&nbsp;浙ICP备14016529号</p>
    <!--电话-->
    <!-- <p class="tel"><a href="tel:4008617000">预约热线：4008617000</a></p> --></div>
<style type="text/css">
.list-consult { position: fixed; right: 0; bottom: 4rem; width: 3rem; z-index: 9999; right: 6% } 
.apply-bar { width: 15rem; position: fixed; z-index: 999; left: 0; right: 0; bottom: 0; margin: 0 auto; background-color: #fff; height: 2.16rem; display: none; } 
.apply-bar li { float: left; } 
.apply-bar .sprite-icon-dialog { background-position: 0 -18.28rem; height: 0.61rem; width: 0.64rem; display: inline-block; position: relative; top: 0.08rem; margin-right: 0.16rem; background: url("http://img.tugou.com/consultant/m-consult.png") no-repeat center; background-size: 0.64rem 0.6rem; } 
.apply-bar .consult-submit { font-size: 0.56rem; color: #444; line-height: 2.14rem; text-align: center; width: 5.72rem; border-top: 1px solid #e5e5e5; } 
.apply-bar .apply-submit { line-height: 2.19rem; background-color: #00b7b1; text-align: center; font-size: 0.64rem; color: #fff; width: 9.28rem; } 
.apply-bar .apply-submit a { color: inherit; display: block; }
</style>
<script type="text/javascript" src="http://static.tugou.com/js/city_list.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/m_common.js"></script>
<!-- 2016-05-19 在线客服系统 -->
<div class="apply-bar app-hide">
    <ul>
        <li class="consult-submit" onclick="nTalk.im_openInPageChat();">
            <span class="icon partial-sprite sprite-icon-dialog"></span>我要咨询</li>
        <li class="apply-submit">
            <a href="javascript:;">立即申请</a></li>
    </ul>
</div>
<div class="list-consult app-hide" onclick="nTalk.im_openInPageChat();">
    <img src="//img.tugou.com/consultant/online-tugou.png" width="100%" alt="在线咨询" /></div>
<script type="text/javascript">var NTKF_PARAM = {
        "siteid": "kf_9262"
        /*网站siteid*/
        ,
        "settingid": "kf_9262_1463469263605"
        /*代码ID*/
        ,
        "uid": ""
        /*会员ID*/
        ,
        "uname": ""
        /*会员名*/
        ,
        "userlevel": "0"
        /*会员等级*/
    }</script>
<script type="text/javascript" src="http://static.tugou.com/m/js/foot-online.js" charset="utf-8"></script>
<script type="text/javascript" src="http://dl.ntalker.com/js/xn6/ntkfstat.js?siteid=kf_9262" charset="utf-8"></script>
<script type="text/javascript" src="http://static.tugou.com/m/js/m-region.js"></script>

