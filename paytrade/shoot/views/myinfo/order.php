<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['styles_member_address'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'OrdersController@index';
$this->params['jsFooters'] = [
	'my/jquery-1.9.1.min', 'jquery.lazyload.min', 'underscore-min', 
	'es5-shim.min', 'base64.min', 'custom_form', 
	'jquery.countdown.min', 'slick.min', 'my/responsive', 'picturefill.min', 
	'scripts-address', 'sdj-new',
];
?>
<main class='main-content user'>
<div class='wrapper'>
    <ul class='breadcrumb'>
        <li>
            <a href='http://www.oppo.com/cn/'>首页
                <span>/</span></a>
        </li>
        <li>
            <a href='http://my.oppo.com/user'>我的OPPO
                <span>/</span></a>
        </li>
        <li>我的订单</li></ul>
    <div class='myOppo-menu'>
        <h1 class='h-gamma'>我的订单</h1>
        <ul class='navigation'>
            <li class=''>
                <a href='http://my.oppo.com/user'>个人首页</a></li>
            <li class=''>
                <a href='http://my.oppo.com/user/profile'>账户信息</a></li>
            <li class=''>
                <a href='http://www.opposhop.cn/user/addresses'>配送地址</a></li>
            <li class='is-active'>
                <a href='http://www.opposhop.cn/orders'>我的订单</a></li>
            <li class=''>
                <a href='http://my.oppo.com/user/messages'>系统消息</a></li>
            <li class=''>
                <a href='http://www.opposhop.cn/coupons/show'>优惠券</a></li>
        </ul>
    </div>
    <div class='g'>
        <div class="order-history">
            <a class="box-link" href="http://t.shop.oppo.com/user/orders" target="_blank">查看历史订单</a></div>
        <div class='gi one-whole my-oppo-content slab-white-border order'>
            <div class='g brick-shadow order-list-top'>
                <div class='gi one-whole desk-one-half'>订单编号：
                    <strong>
                        <a class='clickable order-id' href='http://www.opposhop.cn/orders/160619100465211/show'>160619100465211</a></strong>
                </div>
                <div class='gi one-whole desk-one-half desk-text-align-right'>下单时间：2016-06-19</div></div>
            <ul class='order-list-header'>
                <li class='order-product'>商品</li>
                <li class='order-quantity'>数量</li>
                <li class='order-amount'>订单金额</li>
                <li class='order-detail'>收货信息</li>
                <li class='order-primary'>状态操作</li></ul>
            <div class='order-list'>
                <div class='order-item order-product desk-text-align-center'>
                    <a href='http://www.opposhop.cn/products/330' target="_blank">
                        <img class='order-product-thumbnail' alt='' src='http://static.oppo.com/archives/201510/20151020101058HKred6jAaeaNwjcg.jpg' /></a>
                    <div class='row'>
                        <a href='http://www.opposhop.cn/products/330' target="_blank">R7s移动4G【金色】 长续航闪充利器</a></div>
                    <p class='row'>
                        <a href='http://www.opposhop.cn/orders/160619100465211/show'>+其余1款商品</a></p>
                </div>
                <div class='order-item order-quantity desk-text-align-center'>
                    <span class='order-desk-hide'>商品数量：</span>2</div>
                <div class='order-item order-amount desk-text-align-center'>
                    <span class='order-desk-hide'>订单金额：</span>¥5598.00</div>
                <div class='order-item order-detail'>
                    <div class='row order-username'>王</div>
                    <div class='row'>13811974106</div>
                    <div class='row'>hdwyz@163.com</div>
                    <div class='row'>北京北京市朝阳区南磨房农光里</div></div>
                <div class='order-item order-primary desk-text-align-center'>
                    <div class='row'>订单状态：未付款</div>
                    <div class='row'>
                        <a class='button button-s' href='http://www.opposhop.cn/orders/160619100465211/payments'>立即支付</a></div>
                    <div class='row'>
                        <a class='button button-s' href='http://www.opposhop.cn/orders/160619100465211/show'>查看详情</a></div>
                    <div class='row'>
                        <a class='box-link' href='javascript: vm.cancel("160619100465211");'>取消订单</a></div>
                </div>
            </div>
            <div class='g brick-shadow order-list-top'>
                <div class='gi one-whole desk-one-half'>订单编号：
                    <strong>
                        <a class='clickable order-id' href='http://www.opposhop.cn/orders/160612114174790/show'>160612114174790</a></strong>
                </div>
                <div class='gi one-whole desk-one-half desk-text-align-right'>下单时间：2016-06-12</div></div>
            <ul class='order-list-header'>
                <li class='order-product'>商品</li>
                <li class='order-quantity'>数量</li>
                <li class='order-amount'>订单金额</li>
                <li class='order-detail'>收货信息</li>
                <li class='order-primary'>状态操作</li></ul>
            <div class='order-list'>
                <div class='order-item order-product desk-text-align-center'>
                    <a href='http://www.opposhop.cn/products/360' target="_blank">
                        <img class='order-product-thumbnail' alt='' src='http://static.oppo.com/archives/201603/20160315030351KKwrcwls9cvvMmC7.jpg' /></a>
                    <div class='row'>
                        <a href='http://www.opposhop.cn/products/360' target="_blank">R9 全网通4G 全新拍照手机 金色</a></div>
                </div>
                <div class='order-item order-quantity desk-text-align-center'>
                    <span class='order-desk-hide'>商品数量：</span>1</div>
                <div class='order-item order-amount desk-text-align-center'>
                    <span class='order-desk-hide'>订单金额：</span>¥2799.00</div>
                <div class='order-item order-detail'>
                    <div class='row order-username'>王</div>
                    <div class='row'>13811974106</div>
                    <div class='row'>hdwyz@163.com</div>
                    <div class='row'>北京北京市朝阳区南磨房农光里</div></div>
                <div class='order-item order-primary desk-text-align-center'>
                    <div class='row'>订单状态：已取消</div>
                    <div class='row'>
                        <a class='button button-s' href='http://www.opposhop.cn/orders/160612114174790/show'>查看详情</a></div>
                </div>
            </div>
        </div>
        <div class='gi lap-three-fifths desk-three-quarters pagination-content'></div>
    </div>
</div>
</main>
<div id='dialog-confirm' class='hidden'>
    <div class="mask-common"></div>
    <div class="dialog-common dialog-box-common">
        <div class="dialog-container">
            <a class="dialog-close-common">×</a>
            <div class="dialog-content-common">
                <div class="field">
                    <h4 class='dialog-title-common'>您确定取消订单吗？</h4></div>
                <div class="dialog-common-content"></div>
                <div class="field dialog-btn">
                    <div class="g g-wrapper-s">
                        <div class="gi lap-one-half">
                            <a class='button button-one'>确定</a></div>
                        <div class="gi lap-one-half">
                            <a class='button-light button-two'>取消</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
