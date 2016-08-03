<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'animate', 'base'
];
$this->params['jsFiles'] = [
	'jquery', 'library', 'jquery.lazyload.min', 'base', 'jquery.placeholder', 'jquery.owlfixed'
];
$this->params['inIndex'] = true;
?>
<div class="content">
    <div class="banner-screen">
        <div class="banner slide" id="banner">
            <ul class="banner-pic">
                <li style="background-color: #001e38;">
                    <a href="/topic/id_1">
                        <img src="http://www.yql.com/uploadfile/image/160729/214006268.jpg"></a>
                </li>
                <li style="background-color: #ffcc42;">
                    <a href="javascript:;">
                        <img src="/statics/css/images/topics/warning.jpg"></a>
                </li>
                <li style="background-color: #ff524c;">
                    <a href="/list/?keyword=京东" target="_blank">
                        <img src="/statics/css/images/topics/jd.jpg"></a>
                </li>
                <li style="background-color: #44afa5; display: none;">
                    <a href="/list/?keyword=苹果" target="_blank">
                        <img src="/statics/css/images/topics/iphone.jpg"></a>
                </li>
                <li style="background-color: #efefef; display: none;">
                    <a href="/detail/35.html" target="_blank">
                        <img src="/statics/css/images/topics/mi.jpg"></a>
                </li>
            </ul>
            <ol class="slide-dot"></ol>
            <a href="javascript:;" class="slide-btn prev">
                <span>
                    <i class="iconfont iconfont-arrow-left">&#xe608;</i></span>
            </a>
            <a href="javascript:;" class="slide-btn next">
                <span>
                    <i class="iconfont iconfont-arrow-right">&#xe609;</i></span>
            </a>
        </div>
        <div class="emphasis">
            <div class="emphasis-inner">
                <div class="emphasis-sign">
                    <div class="emphasis-avatar">
                        <i class="iconimg png"></i>
                        <img class="aimg" src="http://www.yql.com/uploadfile//avatar/00.jpg" alt="">
                        <div class="text">
                            <h4 class="ellipsis">Hi，一起来夺宝</h4>
                            <p>
                                <a href="/account/index">每日签到，领取积分
                                    <i class="iconfont font-size-12">&#xe609;</i></a>
                            </p>
                        </div>
                    </div>
                    <div class="emphasis-btns clearfix">
                        <a class="btn btn-primary btn-sm" href="/member/signin.html">登录</a>
                        <a class="btn btn-primary btn-sm" href="/member/signup.html">注册</a>
                        <a class="btn btn-secondary btn-sm" href="/account/charge">充值</a></div>
                </div>
                <div class="emphasis-limit">
                    <i class="iconimg iconimg-limit png"></i>
                    <div class="slide limit-slide" id="limit-slide">
                        <ul class="limit-group clearfix">
                            <li>
                                <a class="thumbnail" href="/detail/31.html">
                                    <img src="http://www.yql.com/uploadfile/image/160624/191754228_thumb.jpg"></a>
                                <div class="text">
                                    <h5 class="ellipsis">
                                        <a href="/detail/31.html" target="_blank">苹果（Apple）iPhone 6s Plus 128G版 5.5英寸</a></h5>
                                    <p class="text-primary">疯抢价：&yen;7850</p></div>
                                <a class="btn btn-primary" href="/detail/31.html">立即抢购</a></li>
                            <li>
                                <a class="thumbnail" href="/detail/52.html">
                                    <img src="http://www.yql.com/uploadfile/image/160624/203520315_thumb.jpg"></a>
                                <div class="text">
                                    <h5 class="ellipsis">
                                        <a href="/detail/52.html" target="_blank">Beats Studio2.0 头戴式耳机</a></h5>
                                    <p class="text-primary">疯抢价：&yen;1616</p></div>
                                <a class="btn btn-primary" href="/detail/52.html">立即抢购</a></li>
                        </ul>
                        <ol class="slide-dot"></ol>
                        <a href="javascript:;" class="slide-btn prev">
                            <span>
                                <i class="iconfont iconfont-arrow-left">&#xe608;</i></span>
                        </a>
                        <a href="javascript:;" class="slide-btn next">
                            <span>
                                <i class="iconfont iconfont-arrow-right">&#xe609;</i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-screen end -->
    <div class="publish-broadcast">
        <div class="container">
            <div class="publish">
                <h4>最新揭晓</h4>
                <ul class="publish-group clearix">
                    <li class="publish-item">
                        <div class="publish-goods">
                            <i class="iconimg iconimg-disbeing png">正在揭晓</i>
                            <h5 class="ellipsis publish-title">
                                <a href="/detail/18-804342654.html" target="_blank">中国电信 话费充值卡面值100元</a></h5>
                            <div class="publish-thumb">
                                <a href="/detail/18-804342654.html" target="_blank">
                                    <img width="120" height="120" src="http://www.yql.com/uploadfile/image/160624/171605591_thumb.jpg" /></a>
                            </div>
                            <p>总需人次：110</p>
                            <p>商品期号：804342654</p>
                            <div class="publish-countdown">
                                <p class="text-light">揭晓倒计时:</p>
                                <div class="countdown" data-time="11446,1470276240">
                                    <b>00</b>
                                    <span>:</span>
                                    <b>00</b>
                                    <span>:</span>
                                    <b>00</b>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="publish-item">
                        <div class="publish-goods">
                            <i class="iconimg iconimg-disbeing png">正在揭晓</i>
                            <h5 class="ellipsis publish-title">
                                <a href="/detail/23-804355983.html" target="_blank">中石化加油卡充值卡 100元</a></h5>
                            <div class="publish-thumb">
                                <a href="/detail/23-804355983.html" target="_blank">
                                    <img width="120" height="120" src="http://www.yql.com/uploadfile/image/160624/173325617_thumb.jpg" /></a>
                            </div>
                            <p>总需人次：115</p>
                            <p>商品期号：804355983</p>
                            <div class="publish-countdown">
                                <p class="text-light">揭晓倒计时:</p>
                                <div class="countdown" data-time="11475,1470276240">
                                    <b>00</b>
                                    <span>:</span>
                                    <b>00</b>
                                    <span>:</span>
                                    <b>00</b>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="publish-item">
                        <div class="publish-goods">
                            <i class="iconimg iconimg-disclose png">最新揭晓</i>
                            <h5 class="ellipsis publish-title">
                                <a href="/detail/54-804380034.html" target="_blank">中国移动 话费充值卡面值30元</a></h5>
                            <div class="publish-thumb">
                                <a href="/detail/54-804380034.html" target="_blank">
                                    <img width="120" height="120" src="http://www.yql.com/uploadfile/image/160624/171331941.jpg" /></a>
                            </div>
                            <p>总需人次：33</p>
                            <p>商品期号：804380034</p>
                            <div class="publish-record">
                                <p>
                                    <span class="owner">获奖得主：
                                        <a class="text-blue" href="/user/win/uid_137pke">1234再来一次</a></span>
                                </p>
                                <p>幸运号码：
                                    <span class="text-primary">10000007</span></p>
                                <p>本期参与：
                                    <span class="text-primary">3人次</span></p>
                            </div>
                        </div>
                    </li>
                    <li class="publish-item">
                        <div class="publish-goods">
                            <i class="iconimg iconimg-disclose png">最新揭晓</i>
                            <h5 class="ellipsis publish-title">
                                <a href="/detail/78-804396320.html" target="_blank">中国移动 话费充值卡面值100元 92元抢购</a></h5>
                            <div class="publish-thumb">
                                <a href="/detail/78-804396320.html" target="_blank">
                                    <img width="120" height="120" src="http://www.yql.com/uploadfile/image/160624/171650668.jpg" /></a>
                            </div>
                            <p>总需人次：92</p>
                            <p>商品期号：804396320</p>
                            <div class="publish-record">
                                <p>
                                    <span class="owner">获奖得主：
                                        <a class="text-blue" href="/user/win/uid_1ql0rv">阿凡提着鱼儿</a></span>
                                </p>
                                <p>幸运号码：
                                    <span class="text-primary">10000078</span></p>
                                <p>本期参与：
                                    <span class="text-primary">41人次</span></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="broadcast" id="broadcast-marquee">
                <div class="broadcast-action">
                    <a class="broadcast-prev" href="javascript:;">
                        <span class="caret-top"></span>
                    </a>
                    <a class="broadcast-next" href="javascript:;">
                        <span class="caret"></span>
                    </a>
                </div>
                <i class="iconimg iconimg-shade iconimg-shade-top png"></i>
                <i class="iconimg iconimg-shade iconimg-shade-bottom png"></i>
                <div class="broadcast-body">
                    <ul class="broadcast-list" id="broadcast-list">
                        <li class="loader"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- broadcast end -->
    <div class="panel hottest" id="hottest">
        <div class="container">
            <div class="panel-header">
                <h2 class="title">人气热门商品</h2>
                <div class="more">
                    <div class="actions">
                        <a class="prev" href="javascript:;">
                            <i class="iconfont iconfont-arrow-left">&#xe608;</i></a>
                        <a class="next" href="javascript:;">
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <ul class="thumbnail-group hottest-group clearfix">
                    <li class="thumbnail-item">
                        <span class="flag flag-hot">热门</span>
                        <div class="thumbnail-goods">
                            <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                            <div class="thumbnail-pic">
                                <a href="/detail/42.html">
                                    <img src="http://www.yql.com/uploadfile/image/160624/184838310_thumb.jpg"></a>
                            </div>
                            <div class="thumbnail-title ellipsis">
                                <a href="/detail/42.html" target="_blank">Apple iPad mini 2 平板电脑 7.9英寸</a></div>
                            <div class="thumbnail-price">总需：2500 人次</div>
                            <div class="thumbnail-progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 27%"></div>
                                </div>
                                <ul class="progress-txt clearfix">
                                    <li class="text-left">
                                        <span class="text-blue">675</span>
                                        <br />已参与人次</li>
                                    <li class="text-right">
                                        <span class="text-orange">1825</span>
                                        <br />剩余人次</li></ul>
                            </div>
                        </div>
                        <div class="thumbnail-action">
                            <a class="btn btn-primary btn-quickbuy" href="/detail/42.html">立即夺宝</a>
                            <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_42,,,post">
                                <i class="iconfont">&#xe604;</i></a>
                        </div>
                    </li>
                    <li class="thumbnail-item">
                        <span class="flag flag-hot">热门</span>
                        <div class="thumbnail-goods">
                            <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                            <div class="thumbnail-pic">
                                <a href="/detail/30.html">
                                    <img src="http://www.yql.com/uploadfile/image/160624/192242296_thumb.jpg"></a>
                            </div>
                            <div class="thumbnail-title ellipsis">
                                <a href="/detail/30.html" target="_blank">苹果（Apple）iPhone 6s Plus 64G版 5.5英寸</a></div>
                            <div class="thumbnail-price">总需：656 人次</div>
                            <div class="thumbnail-progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 94%"></div>
                                </div>
                                <ul class="progress-txt clearfix">
                                    <li class="text-left">
                                        <span class="text-blue">617</span>
                                        <br />已参与人次</li>
                                    <li class="text-right">
                                        <span class="text-orange">39</span>
                                        <br />剩余人次</li></ul>
                            </div>
                        </div>
                        <div class="thumbnail-action">
                            <a class="btn btn-primary btn-quickbuy" href="/detail/30.html">立即夺宝</a>
                            <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_30,,,post">
                                <i class="iconfont">&#xe604;</i></a>
                        </div>
                    </li>
                    <li class="thumbnail-item">
                        <span class="flag flag-hot">热门</span>
                        <div class="thumbnail-goods">
                            <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                            <div class="thumbnail-pic">
                                <a href="/detail/35.html">
                                    <img src="http://www.yql.com/uploadfile/image/160627/172605261_thumb.jpg"></a>
                            </div>
                            <div class="thumbnail-title ellipsis">
                                <a href="/detail/35.html" target="_blank">小米5 全网通 3GB内存 32GB ROM 标准版</a></div>
                            <div class="thumbnail-price">总需：2200 人次</div>
                            <div class="thumbnail-progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 65%"></div>
                                </div>
                                <ul class="progress-txt clearfix">
                                    <li class="text-left">
                                        <span class="text-blue">1450</span>
                                        <br />已参与人次</li>
                                    <li class="text-right">
                                        <span class="text-orange">750</span>
                                        <br />剩余人次</li></ul>
                            </div>
                        </div>
                        <div class="thumbnail-action">
                            <a class="btn btn-primary btn-quickbuy" href="/detail/35.html">立即夺宝</a>
                            <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_35,,,post">
                                <i class="iconfont">&#xe604;</i></a>
                        </div>
                    </li>
                    <li class="thumbnail-item">
                        <span class="flag flag-hot">热门</span>
                        <div class="thumbnail-goods">
                            <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                            <div class="thumbnail-pic">
                                <a href="/detail/36.html">
                                    <img src="http://www.yql.com/uploadfile/image/160624/182742303.jpg"></a>
                            </div>
                            <div class="thumbnail-title ellipsis">
                                <a href="/detail/36.html" target="_blank">Apple MacBook Air 13.3英寸笔记本电脑 银色</a></div>
                            <div class="thumbnail-price">总需：750 人次</div>
                            <div class="thumbnail-progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 56%"></div>
                                </div>
                                <ul class="progress-txt clearfix">
                                    <li class="text-left">
                                        <span class="text-blue">423</span>
                                        <br />已参与人次</li>
                                    <li class="text-right">
                                        <span class="text-orange">327</span>
                                        <br />剩余人次</li></ul>
                            </div>
                        </div>
                        <div class="thumbnail-action">
                            <a class="btn btn-primary btn-quickbuy" href="/detail/36.html">立即夺宝</a>
                            <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_36,,,post">
                                <i class="iconfont">&#xe604;</i></a>
                        </div>
                    </li>
                    <li class="thumbnail-item">
                        <span class="flag flag-hot">热门</span>
                        <div class="thumbnail-goods">
                            <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                            <div class="thumbnail-pic">
                                <a href="/detail/45.html">
                                    <img src="http://www.yql.com/uploadfile/image/160624/183656606_thumb.jpg"></a>
                            </div>
                            <div class="thumbnail-title ellipsis">
                                <a href="/detail/45.html" target="_blank">小米 红米 3 全网通版 移动联通电信4G手机 双卡双待</a></div>
                            <div class="thumbnail-price">总需：770 人次</div>
                            <div class="thumbnail-progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 8%"></div>
                                </div>
                                <ul class="progress-txt clearfix">
                                    <li class="text-left">
                                        <span class="text-blue">63</span>
                                        <br />已参与人次</li>
                                    <li class="text-right">
                                        <span class="text-orange">707</span>
                                        <br />剩余人次</li></ul>
                            </div>
                        </div>
                        <div class="thumbnail-action">
                            <a class="btn btn-primary btn-quickbuy" href="/detail/45.html">立即夺宝</a>
                            <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_45,,,post">
                                <i class="iconfont">&#xe604;</i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- hottest end -->
    <div class="border-top py40">
        <div class="container">
            <div class="panel hide" id="apple">
                <div class="panel-header">
                    <h2 class="title">苹果专场</h2>
                    <div class="more">
                        <a class="more-link" href="/list/0-1-0-1.html">查看全部
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="thumbnail-group clearfix"></ul>
                </div>
            </div>
            <!-- apple end -->
            <div class="panel" id="cards">
                <div class="panel-header">
                    <h2 class="title">礼品卡券</h2>
                    <div class="more">
                        <a class="more-link" href="/list/0-2-0-1.html">查看全部
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="thumbnail-group clearfix">
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/3.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/170918497_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/3.html" target="_blank">京东E卡10元 电子礼品卡</a></div>
                                <div class="thumbnail-price">总需：11 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 0%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">0</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">11</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/3.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_3,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/8.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/171136738_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/8.html" target="_blank">京东E卡200元 电子礼品卡</a></div>
                                <div class="thumbnail-price">总需：218 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 79%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">173</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">45</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/8.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_8,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/4.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/171004963_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/4.html" target="_blank">京东E卡20元 电子礼品卡</a></div>
                                <div class="thumbnail-price">总需：22 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 81%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">18</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">4</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/4.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_4,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/5.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/171025942_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/5.html" target="_blank">京东E卡30元 电子礼品卡</a></div>
                                <div class="thumbnail-price">总需：33 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 78%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">26</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">7</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/5.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_5,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/6.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/171048487_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/6.html" target="_blank">京东E卡50元 电子礼品卡</a></div>
                                <div class="thumbnail-price">总需：54 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 53%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">29</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">25</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/6.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_6,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- cards end -->
            <div class="panel" id="mobile">
                <div class="panel-header">
                    <h2 class="title">手机平板</h2>
                    <div class="more">
                        <a class="more-link" href="/list/0-3-0-1.html">查看全部
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="thumbnail-group clearfix">
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/43.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/184404460_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/43.html" target="_blank">小米（XIAOMI）平板电脑2 WIFI版 7.9英寸</a></div>
                                <div class="thumbnail-price">总需：1180 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 76%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">904</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">276</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/43.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_43,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/44.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/184031807_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/44.html" target="_blank">乐视（Letv）乐1S 太子妃版 32GB 金色 移动联通4G手机 双卡双待</a></div>
                                <div class="thumbnail-price">总需：990 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 84%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">835</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">155</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/44.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_44,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/24.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/193037147_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/24.html" target="_blank">苹果（Apple）iPhone 6s 16G版 4G手机</a></div>
                                <div class="thumbnail-price">总需：520 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 58%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">305</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">215</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/24.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_24,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/25.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/192922944_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/25.html" target="_blank">苹果（Apple）iPhone 6s 64G版 4G手机</a></div>
                                <div class="thumbnail-price">总需：605 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 6%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">41</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">564</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/25.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_25,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/27.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/192758389_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/27.html" target="_blank">苹果（Apple）iPhone 6s 128G版 4.7英寸</a></div>
                                <div class="thumbnail-price">总需：685 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 34%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">237</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">448</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/27.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_27,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- mobile end -->
            <div class="panel" id="computer">
                <div class="panel-header">
                    <h2 class="title">电脑数码</h2>
                    <div class="more">
                        <a class="more-link" href="/list/0-4-0-1.html">查看全部
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="thumbnail-group clearfix">
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/32.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/191310319_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/32.html" target="_blank">华为（HUAWEI）MateBook 12英寸平板二合一笔记本电脑 (Intel core m3 4G内存 128G存储 键盘 Win10)</a></div>
                                <div class="thumbnail-price">总需：550 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 92%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">510</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">40</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/32.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_32,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/34.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/190714906_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/34.html" target="_blank">微软（Microsoft）Surface Pro 4 平板电脑 12.3英寸</a></div>
                                <div class="thumbnail-price">总需：600 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 84%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">505</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">95</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/34.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_34,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/38.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/185701830_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/38.html" target="_blank">佳能 EOS 70D 套机</a></div>
                                <div class="thumbnail-price">总需：8666 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 43%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">3787</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">4879</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/38.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_38,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-10 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/47.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/182742303_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/47.html" target="_blank">Apple MacBook Air 11.6英寸笔记本电脑</a></div>
                                <div class="thumbnail-price">总需：692 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 10%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">75</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">617</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/47.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_47,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/53.html">
                                        <img src="http://www.yql.com/uploadfile/image/160627/184915307_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/53.html" target="_blank">佳能（Canon） EOS 700D 单反套机</a></div>
                                <div class="thumbnail-price">总需：4399 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 13%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">615</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">3784</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/53.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_53,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- computer end -->
            <div class="panel" id="diamond">
                <div class="panel-header">
                    <h2 class="title">金银珠宝</h2>
                    <div class="more">
                        <a class="more-link" href="/list/0-7-0-1.html">查看全部
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="thumbnail-group clearfix">
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/79.html">
                                        <img src="http://www.yql.com/uploadfile/image/160725/203048376_thumb.png"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/79.html" target="_blank">9999投资金元宝收藏送礼50g【包邮】</a></div>
                                <div class="thumbnail-price">总需：17699 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 76%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">13494</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">4205</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/79.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_79,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/80.html">
                                        <img src="http://www.yql.com/uploadfile/image/160725/204410629_thumb.png"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/80.html" target="_blank">【中国黄金】2016年生肖猴年贺岁高端工艺金条20g 【包邮】</a></div>
                                <div class="thumbnail-price">总需：10620 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 92%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">9794</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">826</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/80.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_80,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/81.html">
                                        <img src="http://www.yql.com/uploadfile/image/160725/205351904_thumb.png"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/81.html" target="_blank">六福珠宝正品足金十字链圈黄金项链女款【包邮】约40cm 3.08g</a></div>
                                <div class="thumbnail-price">总需：1810 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 56%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">1024</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">786</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/81.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_81,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/82.html">
                                        <img src="http://www.yql.com/uploadfile/image/160725/211623331_thumb.png"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/82.html" target="_blank">六福珠宝足金生肖兔子黄金吊坠计价GDGTBP0009【包邮】约1.72g</a></div>
                                <div class="thumbnail-price">总需：999 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 63%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">638</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">361</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/82.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_82,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/83.html">
                                        <img src="http://www.yql.com/uploadfile/image/160725/210652478_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/83.html" target="_blank">周大福压岁钱日升月恒足金黄金金币计价F201633 约:2g</a></div>
                                <div class="thumbnail-price">总需：999 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 86%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">862</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">137</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/83.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_83,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- diamond end -->
            <div class="panel" id="others">
                <div class="panel-header">
                    <h2 class="title">其它商品</h2>
                    <div class="more">
                        <a class="more-link" href="/list/0-5-0-1.html">查看全部
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="thumbnail-group clearfix">
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/50.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/201928175_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/50.html" target="_blank">小熊(Bear) 煮蛋器 6个蛋容</a></div>
                                <div class="thumbnail-price">总需：64 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 21%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">14</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">50</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/50.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_50,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/51.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/202526331_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/51.html" target="_blank">冈本避孕套003超薄白金10片装 安全套</a></div>
                                <div class="thumbnail-price">总需：97 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 63%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">62</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">35</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/51.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_51,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/48.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/200310599_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/48.html" target="_blank">飞利浦（PHILIPS） 劲锋系列电动剃须刀</a></div>
                                <div class="thumbnail-price">总需：398 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 84%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">337</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">61</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/48.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_48,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/49.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/201440131_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/49.html" target="_blank">小米（MI）插线板 多功能插排接线板</a></div>
                                <div class="thumbnail-price">总需：53 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 64%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">34</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">19</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/49.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_49,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/46.html">
                                        <img src="http://www.yql.com/uploadfile/image/160624/183226544_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/46.html" target="_blank">Ray-Ban 雷朋 意大利经典飞行员系列水银反光蓝色镜片太阳镜</a></div>
                                <div class="thumbnail-price">总需：910 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 48%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">438</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">472</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/46.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_46,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/100.html">
                                        <img src="http://www.yql.com/uploadfile/image/160727/210916438_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/100.html" target="_blank">云南白药 牙膏 180g（留兰香型）</a></div>
                                <div class="thumbnail-price">总需：39 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 0%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">0</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">39</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/100.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_100,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/101.html">
                                        <img src="http://www.yql.com/uploadfile/image/160727/212137434_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/101.html" target="_blank">维达（Vinda）卫生纸 蓝色经典3层140g卷纸*27卷（整箱）</a></div>
                                <div class="thumbnail-price">总需：56 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 3%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">2</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">54</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/101.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_101,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/102.html">
                                        <img src="http://www.yql.com/uploadfile/image/160727/212930312_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/102.html" target="_blank">金龙鱼 优质东北大米 5kg</a></div>
                                <div class="thumbnail-price">总需：42 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 78%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">33</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">9</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/102.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_102,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/103.html">
                                        <img src="http://www.yql.com/uploadfile/image/160727/214108685_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/103.html" target="_blank">虎牌（Tiger）不锈钢多用途保温杯 MMQ-S50C 500ml</a></div>
                                <div class="thumbnail-price">总需：399 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 75%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">303</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">96</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/103.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_103,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                        <li class="thumbnail-item">
                            <div class="thumbnail-goods">
                                <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                                <div class="thumbnail-pic">
                                    <a href="/detail/104.html">
                                        <img src="http://www.yql.com/uploadfile/image/160728/193803846_thumb.jpg"></a>
                                </div>
                                <div class="thumbnail-title ellipsis">
                                    <a href="/detail/104.html" target="_blank">金龙鱼食用调和油1:1:1的黄金比例调和油5L/桶</a></div>
                                <div class="thumbnail-price">总需：75 人次</div>
                                <div class="thumbnail-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 93%"></div>
                                    </div>
                                    <ul class="progress-txt clearfix">
                                        <li class="text-left">
                                            <span class="text-blue">70</span>
                                            <br />已参与人次</li>
                                        <li class="text-right">
                                            <span class="text-orange">5</span>
                                            <br />剩余人次</li></ul>
                                </div>
                            </div>
                            <div class="thumbnail-action">
                                <a class="btn btn-primary btn-quickbuy" href="/detail/104.html">立即夺宝</a>
                                <a class="btn btn-addcart" href="###" data-href="/detail_newshopcart/tradeid_104,,,post">
                                    <i class="iconfont">&#xe604;</i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- others end --></div>
        <div class="container hide">
            <div class="panel index-notes-panel" id="notes">
                <div class="panel-header">
                    <h2 class="title">官方动态</h2></div>
                <div class="panel-body">
                    <div class="index-notes">
                        <s class="doubao-record-line"></s>
                        <ul class="doubao-record-group clearfix">
                            <li>
                                <div class="doubao-record-time">
                                    <i class="iconimg iconimg-dot"></i>
                                    <span class="timeago">
                                        <strong>07</strong>
                                        <br />2015/12</span></div>
                                <div class="doubao-record-body">
                                    <div class="doubao-record-summary">
                                        <h4 class="ellipsis">
                                            <a href="/news/detail/id_1.html">一起来夺宝2016年端午节放假通知</a></h4>
                                        <p>&lt;p&gt; &lt;s......</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel index-share-panel" id="shares">
                <div class="panel-header">
                    <h2 class="title">晒单分享</h2>
                    <div class="more">
                        <a class="more-link" href="/share.html">查看全部
                            <i class="iconfont iconfont-arrow-right">&#xe609;</i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="index-share clearfix">
                        <li>
                            <div class="detail">
                                <div class="figure">
                                    <a href="/user/sharedetail/id_g179oz" target="_blank">
                                        <img src="http://www.yql.com/uploadfile/user/file/160803/162437397_thumb.png"></a>
                                </div>
                                <div class="share-quote">
                                    <i class="iconimg iconimg-quote iconimg-quote-former png"></i>
                                    <div class="text">
                                        <h5>
                                            <a href="/user/sharedetail/id_g179oz">京东E卡20元 电子礼品卡</a></h5>
                                        <p class="desc">感谢一起来夺宝，谢谢</p>
                                        <p class="author">
                                            <a class="text-blue" href="/user/share/uid_vgygj5" target="_blank">
                                                <img src="http://www.yql.com/uploadfile/avatar/00.jpg" alt="">大大</a>
                                            <span class="timeago" title="2016-08-03 16:24:37">2016-08-03 16:24:37</span></p>
                                    </div>
                                    <i class="iconimg iconimg-quote iconimg-quote-after png"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="figure">
                                    <a href="/user/sharedetail/id_gvr8d1" target="_blank">
                                        <img src="http://www.yql.com/uploadfile/"></a>
                                </div>
                                <div class="share-quote">
                                    <i class="iconimg iconimg-quote iconimg-quote-former png"></i>
                                    <div class="text">
                                        <h5>
                                            <a href="/user/sharedetail/id_gvr8d1">很喜欢这种夺宝</a></h5>
                                        <p class="desc">耶耶耶</p>
                                        <p class="author">
                                            <a class="text-blue" href="/user/share/uid_17lygm" target="_blank">
                                                <img src="http://www.yql.com/uploadfile/user/avatar/1608/003650576.jpg" alt="">Jc</a>
                                            <span class="timeago" title="2016-08-03 09:06:39">2016-08-03 09:06:39</span></p>
                                    </div>
                                    <i class="iconimg iconimg-quote iconimg-quote-after png"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="figure">
                                    <a href="/user/sharedetail/id_71386z" target="_blank">
                                        <img src="http://www.yql.com/uploadfile/"></a>
                                </div>
                                <div class="share-quote">
                                    <i class="iconimg iconimg-quote iconimg-quote-former png"></i>
                                    <div class="text">
                                        <h5>
                                            <a href="/user/sharedetail/id_71386z">不错不错不错</a></h5>
                                        <p class="desc">一起来夺宝很公平</p>
                                        <p class="author">
                                            <a class="text-blue" href="/user/share/uid_17lygm" target="_blank">
                                                <img src="http://www.yql.com/uploadfile/user/avatar/1608/003650576.jpg" alt="">Jc</a>
                                            <span class="timeago" title="2016-08-03 09:06:15">2016-08-03 09:06:15</span></p>
                                    </div>
                                    <i class="iconimg iconimg-quote iconimg-quote-after png"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="figure">
                                    <a href="/user/sharedetail/id_n1qmrz" target="_blank">
                                        <img src="http://www.yql.com/uploadfile/"></a>
                                </div>
                                <div class="share-quote">
                                    <i class="iconimg iconimg-quote iconimg-quote-former png"></i>
                                    <div class="text">
                                        <h5>
                                            <a href="/user/sharedetail/id_n1qmrz">很不错</a></h5>
                                        <p class="desc">支持一起来夺宝</p>
                                        <p class="author">
                                            <a class="text-blue" href="/user/share/uid_17lygm" target="_blank">
                                                <img src="http://www.yql.com/uploadfile/user/avatar/1608/003650576.jpg" alt="">Jc</a>
                                            <span class="timeago" title="2016-08-03 09:04:36">2016-08-03 09:04:36</span></p>
                                    </div>
                                    <i class="iconimg iconimg-quote iconimg-quote-after png"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="figure">
                                    <a href="/user/sharedetail/id_gz69yz" target="_blank">
                                        <img src="http://www.yql.com/uploadfile/"></a>
                                </div>
                                <div class="share-quote">
                                    <i class="iconimg iconimg-quote iconimg-quote-former png"></i>
                                    <div class="text">
                                        <h5>
                                            <a href="/user/sharedetail/id_gz69yz">啦啦啦啦啦啦啦啦</a></h5>
                                        <p class="desc">中了</p>
                                        <p class="author">
                                            <a class="text-blue" href="/user/share/uid_134kye" target="_blank">
                                                <img src="http://www.yql.com/uploadfile/avatar/00.jpg" alt="">红帽</a>
                                            <span class="timeago" title="2016-08-03 01:29:18">2016-08-03 01:29:18</span></p>
                                    </div>
                                    <i class="iconimg iconimg-quote iconimg-quote-after png"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="figure">
                                    <a href="/user/sharedetail/id_kzeoo1" target="_blank">
                                        <img src="http://www.yql.com/uploadfile/"></a>
                                </div>
                                <div class="share-quote">
                                    <i class="iconimg iconimg-quote iconimg-quote-former png"></i>
                                    <div class="text">
                                        <h5>
                                            <a href="/user/sharedetail/id_kzeoo1">搬砖，钟情蓝玫瑰</a></h5>
                                        <p class="desc">搬砖项目</p>
                                        <p class="author">
                                            <a class="text-blue" href="/user/share/uid_137nye" target="_blank">
                                                <img src="http://www.yql.com/uploadfile/avatar/00.jpg" alt="">啊实打实的</a>
                                            <span class="timeago" title="2016-07-31 05:43:56">2016-07-31 05:43:56</span></p>
                                    </div>
                                    <i class="iconimg iconimg-quote iconimg-quote-after png"></i>
                                </div>
                            </div>
                        </li>
                        <li class="empty">暂无晒单~</li>
                        <li class="empty">暂无晒单~</li>
                        <li class="empty">暂无晒单~</li></ul>
                </div>
            </div>
            <!-- index-share-panel end --></div>
    </div>
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/website/default/js/jquery.superslide.js" type="text/javascript"></script>
<script>$("#broadcast-list").recordall(20);
    $("#banner").slide({
        titCell: ".slide-dot",
        mainCell: ".banner-pic",
        effect: "fold",
        autoPlay: true,
        autoPage: true,
        interTime: 15000,
        delayTime: 1000,
        trigger: "click"
    });
    $("#limit-slide").slide({
        titCell: ".slide-dot",
        mainCell: ".limit-group",
        autoPage: true,
        effect: "left",
        autoPlay: true,
        interTime: 6000
    });
    $("#hottest").slide({
        mainCell: ".hottest-group",
        autoPage: true,
        effect: "left",
        autoPlay: true,
        vis: 5,
        scroll: 5,
        interTime: 8000,
        pnLoop: false
    });</script>
