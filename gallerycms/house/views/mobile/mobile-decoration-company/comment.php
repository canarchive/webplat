<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="canonical" href="http://hz.tugou.com/realcase/92/" />
        <meta name="applicable-device" content="mobile" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta http-equiv="Cache-Control" content="no-transform" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0 user-scalable=no" />
        <title>业主点评|装修公司点评-中博装饰</title>
        <meta name="keywords" content="业主点评,装修公司点评,中博装饰" />
        <meta name="description" content="杭州业主点评频道汇集众多中博装饰业主对中博装饰的评价。从设计水平、装修报价、施工质量、服务态度等多维度对中博装饰进行全面真实有效的评价。 " />
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/dpl.css">
        <link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/company/company.css">
        <link rel="stylesheet" type="text/css" href="http://static.tugou.com/css/mobile/slick.css">
        <link rel="stylesheet" type="text/css" href=" http://static.tugou.com/m/js/components/tugou-footer/css/tugou-footer.css">
        <link rel="stylesheet" href="http://static.tugou.com/m/css/apply750.css" />
        <script type="text/javascript" src="http://static.tugou.com/m/js/rem50.js"></script>
        <script src="http://static.tugou.com/js/weixin/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="http://static.tugou.com/m/js/slideApply.js"></script>
    </head>
    
    <body>
        <script src="http://static.tugou.com/m/js/lib/total750_v2.js"></script>
        <!--抽屉总导航-->
        <div class="total-bg"></div>
        <div class="total">
            <div class="total-con">
                <div class="total-left">
                    <div class="total-off"></div>
                </div>
                <div class="total-right">
                    <p class="total-logo"></p>
                    <ul class="total-menu">
                        <li>
                            <a href="http://m.tugou.com/" class="total-one">首页</a></li>
                        <li>
                            <a href="http://m.tugou.com/provider/" class="total-two">装修公司</a></li>
                        <li>
                            <a href="http://m.tugou.com/meitu/" class="total-three">装修效果图</a></li>
                        <li>
                            <a href="http://m.tugou.com/jy/" class="total-four">装修经验</a></li>
                        <li>
                            <a href="http://m.tugou.com/baike/" class="total-five">装修百科</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toptitle total-top">
            <a href="/hz/provider/" class="return"></a>中博装饰</div>
        <div class="top">
            <span class="face">
                <a>
                    <img src="http://pic.tugou.com/provider/1450923590_735233.jpeg" alt="中博装饰"></a>
            </span>
            <ul class="clearfix">
                <li>
                    <span class="num">3620</span>
                    <p class="msg">已服务业主</p></li>
                <li class="break-line"></li>
                <li>
                    <span class="num">381</span>
                    <p class="msg">口碑值</p></li>
                <li class="break-line"></li>
                <li>
                    <span class="num J_score">4.88</span>
                    <p class="msg">业主评分</p></li>
            </ul>
        </div>
        <ul class="item-list clearfix">
            <li>
                <a href="/hz/realcase/92/">装修实景</a></li>
            <li>
                <a href="/hz/site/92/">工地实拍</a></li>
            <li class="add">
                <a href="http://m.tugou.com/comment/92/">业主点评</a></li>
            <li>
                <a href="/hz/provider/92/tro.html">品牌简介</a></li>
        </ul>
        <ul id='comment-list' v-if='items.length'>
            <li v-for="(i, item) in items">
                <div class="comment-user">
                    <img class="avator" alt='头像' v-bind:src="item.avatar">
                    <span class="nickname" v-text="item.nickname[0]+'****'"></span>
                    <!-- <span class="score">评分:&nbsp;&nbsp;&nbsp;<span class="stg" v-text="parseFloat(item.score).toFixed(1)"></span></span> -->
                    <div class="star-line">
                        <img class="star" v-bind:src="calStarState(item.star, 1)" />
                        <img class="star" v-bind:src="calStarState(item.star, 2)" />
                        <img class="star" v-bind:src="calStarState(item.star, 3)" />
                        <img class="star" v-bind:src="calStarState(item.star, 4)" />
                        <img class="star" v-bind:src="calStarState(item.star, 5)" /></div>
                </div>
                <p readonly="readonly" class="comment-content" v-text="item.content"></p>
                <p class="comment-detail" v-html="item.community+'&nbsp;&nbsp;&nbsp;'+item.area+'m<sup>2</sup>&nbsp;&nbsp;&nbsp;'+item.housestyle"></p>
            </li>
        </ul>
        <div class="placeholder-footer app-hide"></div>
        <footer class="bottomFixedArea app-hide">
            <div class="onlineContact" onclick="nTalk.im_openInPageChat();">
                <img class="consult" src="http://static.tugou.com/m/img/provider/consult.png" />
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
                        <span class="font-mark">注：</span>同一小区同批验房达到5户，可安排免费上门验房服务</div></div>
                <span class="form-close"></span>
            </form>
        </div>
        <div class="alert" style="display: none;">请输入姓名</div>
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
        <script src="http://static.tugou.com/js/slick.min.js"></script>
        <script src="http://static.tugou.com/m/js/company/company.js"></script>
        <script type="text/javascript">var backEndItems = [{
                "nickname": "\u5239\u90a3\u82b3\u534e",
                "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
                "comment_id": "17",
                "comment_status": "10",
                "provider_id": "92",
                "city_id": "1",
                "content": "\u6211\u4e4b\u524d\u88c5\u4fee\u8fc72\u5957\u623f\u5b50\uff0c\u6240\u4ee5\u5bf9\u5176\u4e2d\u7684\u95e8\u9053\u8fd8\u7b97\u61c2\u4e00\u4e9b\uff0c\u62a5\u4ef7\u7684\u65f6\u5019\u8bbe\u8ba1\u5e08\u5f88\u5b9e\u5728\uff0c\u6211\u5c31\u51b2\u8fd9\u4e00\u70b9\u7b7e\u4e86\u4ed6\u4eec\u3002\u6700\u540e\u4e5f\u679c\u7136\u6ca1\u8ba9\u6211\u5931\u671b\uff0c\u9879\u76ee\u7ecf\u7406\u5f88\u7ec6\u5fc3\u8d1f\u8d23\uff0c\u6bcf\u5468\u90fd\u4f1a\u8ddf\u6211\u6c47\u62a5\u65bd\u5de5\u8fdb\u5ea6\uff0c\u5f88\u611f\u8c22\u5154\u72d7\u5bb6\u88c5\u3002",
                "order_id": "0",
                "user_id": "0",
                "username": "\u5239\u90a3\u82b3\u534e",
                "community": "\u6668\u5149\u56fd\u9645",
                "area": "136",
                "housestyle": "\u73b0\u4ee3",
                "amount": "0",
                "rank_design": "5",
                "rank_cons": "5",
                "rank_service": "5",
                "add_time": "1469505153",
                "comment_time": "1469505120",
                "sign_complete_time": "0",
                "complete_time": "0",
                "is_virtual": "1",
                "praise": "6.00",
                "score": "4.87",
                "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
                "star": 5
            },
            {
                "nickname": "\u660e",
                "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
                "comment_id": "78",
                "comment_status": "10",
                "provider_id": "92",
                "city_id": "1",
                "content": "\u539f\u672c\u534a\u5305\u53ea\u6253\u7b97\u82b15-6\u4e07\u7684\uff0c\u7ed3\u679c\u770b\u4e86\u8bbe\u8ba1\u5e08\u51fa\u5f97\u6548\u679c\u56fe\u5b9e\u5728\u592a\u559c\u6b22\uff0c\u5c31\u72e0\u5fc3\u591a\u82b1\u4e86\u4e00\u4e9b\uff0c\u540e\u671f\u8f6f\u88c5\u642d\u914d\u4e0a\u8bbe\u8ba1\u5e08\u4e5f\u7ed9\u4e86\u6211\u5f88\u591a\u610f\u89c1\uff0c\u4e0d\u9519\u54df\uff01",
                "order_id": "0",
                "user_id": "0",
                "username": "\u660e",
                "community": "\u7af9\u6d77\u6c34\u97f5",
                "area": "88",
                "housestyle": "\u7f8e\u5f0f",
                "amount": "0",
                "rank_design": "5",
                "rank_cons": "5",
                "rank_service": "5",
                "add_time": "1469512498",
                "comment_time": "1469512440",
                "sign_complete_time": "0",
                "complete_time": "0",
                "is_virtual": "1",
                "praise": "6.00",
                "score": "4.88",
                "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
                "star": 5
            },
            {
                "nickname": "Vanilla",
                "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
                "comment_id": "83",
                "comment_status": "10",
                "provider_id": "92",
                "city_id": "1",
                "content": "\u4e2d\u535a\u662f\u5927\u54c1\u724c\u4e86\uff0c\u867d\u7136\u4ef7\u683c\u8d35\uff0c\u4f46\u662f\u6211\u4e5f\u6bd4\u8f83\u6311\uff0c\u4e00\u5206\u94b1\u4e00\u5206\u8d27\u3002\u623f\u5b50\u4ee5\u524d\u88c5\u4fee\u8fc7\u4f46\u662f\u98ce\u683c\u4e0d\u559c\u6b22\u6240\u4ee5\u6253\u7b97\u91cd\u65b0\u7ffb\u65b0\u4e00\u4e0b\uff0c\u5e73\u65f6\u5de5\u4f5c\u5fd9\u9009\u62e9\u4e86\u5168\u5305\uff0c\u771f\u7684\u5f88\u7701\u5fc3\uff0c\u6c34\u7535\u8fd9\u4e00\u5757\u505a\u5f97\u6700\u6ee1\u610f\uff0c\u6750\u6599\u4e5f\u5f88\u73af\u4fdd\u3002",
                "order_id": "0",
                "user_id": "0",
                "username": "Vanilla",
                "community": "\u5229\u5179\u57ce\u5e02\u516c\u5bd3",
                "area": "350",
                "housestyle": "\u6df7\u642d",
                "amount": "0",
                "rank_design": "5",
                "rank_cons": "5",
                "rank_service": "5",
                "add_time": "1469515372",
                "comment_time": "1469515320",
                "sign_complete_time": "0",
                "complete_time": "0",
                "is_virtual": "1",
                "praise": "6.00",
                "score": "4.90",
                "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
                "star": 5
            }];</script>
        <script type="text/javascript " src="//cdn.bootcss.com/vue/1.0.24/vue.min.js "></script>
        <script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
        <script src="http://static.tugou.com/m/js/provider/comment.js"></script>
        <script src="http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js"></script>
        <div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
            <!-- 站长统计 -->
            <script src="http://s4.cnzz.com/z_stat.php?id=1255110144&web_id=1255110144" language="JavaScript"></script>
        </div>
    </body>
    <script type="text/javascript" src="http://static.tugou.com/m/js/m-region.js"></script>

</html>
