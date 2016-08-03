<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'animate', 'base'
];
$this->params['jsFiles'] = [
	'jquery', 'library', 'jquery.lazyload.min', 'base', 'jquery.placeholder', 'jquery.owlfixed'
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
?>

<?php //echo $this->render('_signup_slice', []); ?>
<div class="content">
    <div class="simbanner fast-simbanner mb15"></div>
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">首页</a>
            <em class="sep">&gt;</em>
            <a href="/list/0-0-0-1.html">全部商品</a>
            <em class="sep">&gt;</em>
            <span>即满即开</span></div>
    </div>
    <div class="listing pb30">
        <div class="container">
            <ul class="thumbnail-group thumbnail-group-four clearfix">
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/55.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171352524.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/55.html" target="_blank">中国移动 话费充值卡面值50元</a></div>
                        <div class="thumbnail-price">总需：55 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 12%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">7</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">48</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11108" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="48" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="55" />
                            <input type="hidden" name="periodid" value="11108" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/64.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171004963.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/64.html" target="_blank">京东E卡20元 电子礼品卡</a></div>
                        <div class="thumbnail-price">总需：22 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 0%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">0</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">22</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11107" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="22" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="64" />
                            <input type="hidden" name="periodid" value="11107" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/63.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/170918497.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/63.html" target="_blank">京东E卡10元 电子礼品卡</a></div>
                        <div class="thumbnail-price">总需：11 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 9%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">1</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">10</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11105" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="10" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="63" />
                            <input type="hidden" name="periodid" value="11105" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/65.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171025942.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/65.html" target="_blank">京东E卡30元 电子礼品卡</a></div>
                        <div class="thumbnail-price">总需：33 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 36%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">12</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">21</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11104" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="21" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="65" />
                            <input type="hidden" name="periodid" value="11104" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/61.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171048487.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/61.html" target="_blank">京东E卡50元 电子礼品卡</a></div>
                        <div class="thumbnail-price">总需：54 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 16%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">9</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">45</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11101" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="45" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="61" />
                            <input type="hidden" name="periodid" value="11101" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/60.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/173325617.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/60.html" target="_blank">中石化加油卡充值卡 100元</a></div>
                        <div class="thumbnail-price">总需：115 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 5%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">6</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">109</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11096" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="109" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="60" />
                            <input type="hidden" name="periodid" value="11096" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/54.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171331941.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/54.html" target="_blank">中国移动 话费充值卡面值30元</a></div>
                        <div class="thumbnail-price">总需：33 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 0%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">0</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">33</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11095" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="33" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="54" />
                            <input type="hidden" name="periodid" value="11095" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <i class="iconimg iconimg-area iconimg-area-qiang png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/78.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171650668.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/78.html" target="_blank">中国移动 话费充值卡面值100元 92元抢购</a></div>
                        <div class="thumbnail-price">总需：92 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 96%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">89</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">3</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11091" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="3" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="78" />
                            <input type="hidden" name="periodid" value="11091" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/57.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171524552.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/57.html" target="_blank">中国电信 话费充值卡面值10元</a></div>
                        <div class="thumbnail-price">总需：12 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 0%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">0</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">12</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11086" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="12" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="57" />
                            <input type="hidden" name="periodid" value="11086" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/67.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171159556.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/67.html" target="_blank">京东E卡300元 电子礼品卡</a></div>
                        <div class="thumbnail-price">总需：340 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 13%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">45</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">295</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11067" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="295" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="67" />
                            <input type="hidden" name="periodid" value="11067" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/58.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171545618.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/58.html" target="_blank">中国电信 话费充值卡面值50元</a></div>
                        <div class="thumbnail-price">总需：55 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 25%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">14</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">41</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11037" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="41" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="58" />
                            <input type="hidden" name="periodid" value="11037" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/59.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171605591.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/59.html" target="_blank">中国电信 话费充值卡面值100元</a></div>
                        <div class="thumbnail-price">总需：110 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 48%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">53</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">57</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11025" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="57" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="59" />
                            <input type="hidden" name="periodid" value="11025" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/62.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171112977.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/62.html" target="_blank">京东E卡100元 电子礼品卡</a></div>
                        <div class="thumbnail-price">总需：108 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 83%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">90</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">18</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11020" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="18" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="62" />
                            <input type="hidden" name="periodid" value="11020" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/56.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171650668.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/56.html" target="_blank">中国移动 话费充值卡面值100元</a></div>
                        <div class="thumbnail-price">总需：110 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 52%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">58</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">52</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_11014" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="52" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="56" />
                            <input type="hidden" name="periodid" value="11014" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/66.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171136738.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/66.html" target="_blank">京东E卡200元 电子礼品卡</a></div>
                        <div class="thumbnail-price">总需：218 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 38%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">84</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">134</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_10969" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="134" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="66" />
                            <input type="hidden" name="periodid" value="10969" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
                <li class="thumbnail-item">
                    <div class="thumbnail-goods">
                        <i class="iconimg iconimg-area iconimg-area-1 png"></i>
                        <i class="iconimg iconimg-area iconimg-area-fast png"></i>
                        <div class="thumbnail-pic">
                            <a href="/detail/54.html">
                                <img src="http://www.yql.com/uploadfile/image/160624/171331941.jpg"></a>
                        </div>
                        <div class="thumbnail-title ellipsis">
                            <a href="/detail/54.html" target="_blank">中国移动 话费充值卡面值30元</a></div>
                        <div class="thumbnail-price">总需：33 人次</div>
                        <div class="thumbnail-progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 15%"></div>
                            </div>
                            <ul class="progress-txt clearfix">
                                <li class="text-left">
                                    <span class="text-blue">5</span>
                                    <br />已参与人次</li>
                                <li class="text-right">
                                    <span class="text-orange">28</span>
                                    <br />剩余人次</li></ul>
                        </div>
                    </div>
                    <form method="post" id="detail_10957" class="dsubmit" action="/order/confirm">
                        <div class="thumbnail-action">
                            <div class="thumbnail-inumber">
                                <span class="inumber-text">参与</span>
                                <div class="inumber" data-min="1" data-max="28" data-step="1">
                                    <a class="inumber-btn inumber-minus" href="javascript:;">-</a>
                                    <input name="buynum" class="inumber-input" type="text" value="1" maxlength="5" />
                                    <a class="inumber-btn inumber-plus" href="javascript:;">+</a></div>
                                <span class="inumber-text">人次</span></div>
                            <input type="hidden" name="tradeid" value="54" />
                            <input type="hidden" name="periodid" value="10957" />
                            <input type="hidden" name="formhash" value="d006ef28">
                            <a class="btn btn-primary btn-quickbuy" name="submit" type="button">立即夺宝</a>
                            <a data-href="/detail_newshopcart,,,post" class="btn btn-secondary btn-addcart">加入清单</a></div>
                    </form>
                </li>
            </ul>
            <div class="pagination py30"></div>
        </div>
    </div>
</div>
