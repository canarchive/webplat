<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <link rel="canonical" href="http://www.tugou.com/free/price/" />
        <meta name="applicable-device" content="mobile" />
        <meta http-equiv="Cache-Control" content="no-transform">
        <meta http-equiv="Cache-Control" content="no-siteapp">
        <link rel="shortcut icon" href="/favicon.ico" />
        <title>兔狗装修报价器</title>
        <meta name="keywords" content="装修报价,装修预算清单,装修公司报价,装修预算表" />
        <meta name="description" content="兔狗免费报价,为您提供北京装修公司报价,北京装修报价吗,装修预算表,装修预算清单" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no">
        <meta name="format-detection" content="address=no">
        <meta content="false" name="twcClient" id="twcClient" />
        <script type="text/javascript" src="http://static.tugou.com/js/lib/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="http://static.tugou.com/css/mobile/m_free_index.css" />
        <script type="text/javascript" src="http://static.tugou.com/js/mobile/m-free-index.js"></script>
        <script type="text/javascript" src="http://static.tugou.com/m/js/baojia/baojia.js"></script>
    </head>
    
    <body class="price">
        <div class="container pricing">
            <div class="top toptitle">
                <a href="http://m.tugou.com" class="return"></a>
                <a href="http://m.tugou.com/index/CitySelection">
                    <div class="position"></div>
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
                    <img src="http://img.tugou.com/mb/baojia/price-banner-m.png" width="100%" alt="" /></div>
                <div class="freeone bottom-border">
                    <h1 class="baojia">免费获取装修预算</h1>
                    <p class="free" id="order" style="font-size: 0.56rem;color: #696666;padding-top: 0">请正确填写手机号码，报价结果将发送到您的手机</p>
                    <form action="" method="post" class="form" onsubmit="return flase" id="order">
                        <div class="input">
                            <input type="text" name="name" class="name" id="name" placeholder="您的姓名" value="" /></div>
                        <div class="input">
                            <input type="tel" name="phone" class="phone" id="phone" placeholder="手机号码" value="" /></div>
                        <div class="input">
                            <input type="text" name="sms_code" class="sms_code" id="sms_code" placeholder="请输入验证码" value="" />
                            <a class="captcha" id="captcha">获取验证码</a></div>
                        <div class="input">
                            <input type="text" name="area" class="area" id="area" placeholder="面积" value="" />
                            <span>m&sup2;</span></div>
                        <input type="hidden" value="65" id="type" name="type">
                        <div class="input-select js-region-select-group clearfix" style="border-bottom: none;">
                            <select name="province" id="province" class="city_select province js-province">
                                <option value="0">省/市</option></select>
                            <select name="city" id="city" class="city_select city js-city">
                                <option value="0">市/地区</option></select>
                        </div>
                        <div class="input-select">
                            <span class="select-icon"></span>
                            <select name="level" id="level">
                                <option value="0">装修档次</option>
                                <option value="1">普通装修</option>
                                <option value="2">中档装修</option>
                                <option value="3">高端装修</option></select>
                        </div>
                        <input type="hidden" id="city_id" value="" />
                        <input type="button" value="免费申请" id="entirety_baojia" class="submit-btn" /></form>
                    <!-- <p class="pro-num">每户业主可同时获取3份设计报价，省40%装修款。</p> -->
                    <p class="pro-num">已有
                        <span class="ifocus"></span>户业主获取装修报价</p>
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
                <img src="http://img.tugou.com/mb/baojia/price-img-m.png" width="100%" alt="" /></div>
            <p class="copyright" style="margin-bottom: 2.2rem; background: #fff">杭州兔狗科技有限公司 浙ICP备14016529号 0571-85866119</p></div>
        <style type="text/css">.list-consult { position: fixed; right: 0; bottom: 4rem; width: 3rem; z-index: 9999; right: 6% } .apply-bar { width: 15rem; position: fixed; z-index: 999; left: 0; right: 0; bottom: 0; margin: 0 auto; background-color: #fff; height: 2.16rem; display: none; } .apply-bar li { float: left; } .apply-bar .sprite-icon-dialog { background-position: 0 -18.28rem; height: 0.61rem; width: 0.64rem; display: inline-block; position: relative; top: 0.08rem; margin-right: 0.16rem; background: url("http://img.tugou.com/consultant/m-consult.png") no-repeat center; background-size: 0.64rem 0.6rem; } .apply-bar .consult-submit { font-size: 0.56rem; color: #444; line-height: 2.14rem; text-align: center; width: 5.72rem; border-top: 1px solid #e5e5e5; } .apply-bar .apply-submit { line-height: 2.19rem; background-color: #00b7b1; text-align: center; font-size: 0.64rem; color: #fff; width: 9.28rem; } .apply-bar .apply-submit a { color: inherit; display: block; }</style>
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
        <script type="text/javascript" src="http://static.tugou.com/js/city_list.js"></script>
        <script type="text/javascript" src="http://static.tugou.com/js/m_common.js"></script>
        <!-- 2015-12-10新增加 -->
        <script type="text/javascript" src="http://static.tugou.com/js/ga.js"></script>
        <!-- 2016-05-19 在线客服系统 -->
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
        <script>// PC/移动端加百度统计代码：
            var _hmt = _hmt || []; (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?dc5a135b405f74dc32ec7a6e5e1f5716";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();</script>
        <div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
            <!-- 站长统计 -->
            <script src="http://s4.cnzz.com/z_stat.php?id=1255110144&web_id=1255110144" language="JavaScript"></script>
        </div>
    </body>
    <script type="text/javascript" src="http://static.tugou.com/m/js/m-region.js"></script>

</html>
