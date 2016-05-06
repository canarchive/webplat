<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['styles_show'];
$this->params['jsFiles'] = ['my/jquery-1.9.1.min.js'];

$controllerForJs = isset($this->params['controllerForJs']) ? $this->params['controllerForJs'] : '';
?>
<script>
    var Yo = Yo || {};

    Yo.base_url = "http://www.opposhop.cn/";

    Yo.config = {
        product_id: 362,
        product_url: "http://www.opposhop.cn/products/362/",
        account_url: "http://my.oppo.com",
        countdown_start: '2016/04/12 09:00:00',
        countdown_end: '2016/04/12 10:00:00'
    };

    var is_insurance_allowed = true;
</script>

<main class='main-content'>
    <div class='wrapper'>
        <ul class='breadcrumb'>
            <li>
                <a href='http://www.oppo.com/cn/'>
                    首页
                    <span>
                        /
                    </span>
                </a>
            </li>
            <li>
                <a href='http://www.opposhop.cn/products?is_promotion=0&category=1'>
                    商品列表
                    <span>
                        /
                    </span>
                </a>
            </li>
            <li>
                R9 Plus 全网通4G 全新拍照手机 金色
            </li>
        </ul>
    </div>
    <div class='buying-details'>
        <article class='wrapper'>
            <div class='buying-header-mov'></div>
            <div class='g'>
                <div class='gi lap-two-fifths desk-one-half'>
                    <div class='product-gallery js-tabs'>
                        <div class='product-gallery-view js-tab-content swipe' id="product-swipe">
                            <div class="swipe-wrap">
                                <div class='swipe-slide  is-active '>
                                    <img alt='' title='' src='http://static.oppo.com/archives/201603/20160325100300MxCBOa1kXjsFL8mD.png'></div>
                                <div class='swipe-slide '>
                                    <img alt='' title='' src='http://static.oppo.com/archives/201603/20160325100305AO0MTT72JCJyYiYw.png'></div>
                                <div class='swipe-slide '>
                                    <img alt='' title='' src='http://static.oppo.com/archives/201603/20160325100311cuj0Y1QWd70R47Ie.png'></div>
                                <div class='swipe-slide '>
                                    <img alt='' title='' src='http://static.oppo.com/archives/201603/20160325100315tbILOVaXCygt7lrr.png'></div>
                                <div class='swipe-slide '>
                                    <img alt='' title='' src='http://static.oppo.com/archives/201603/20160325100320PLVTuLwHtUoG5OAQ.png'></div>
                                <div class='swipe-slide '>
                                    <img alt='' title='' src='http://static.oppo.com/archives/201603/20160325100329NcpM8irtjcvmgqHW.png'></div>
                                <div class='swipe-slide '>
                                    <img alt='' title='' src='http://static.oppo.com/archives/201603/20160325100333jIu43dPleKmMCmHD.png'></div>
                            </div>
                        </div>
                        <div class='product-gallery-items'>
                            <div class="ps-carousel" id="product-carousel">
                                <div class="ps-item  ps-item-active ">
                                    <a href='#'>
                                        <img alt='' src='http://static.oppo.com/archives/201603/_thumbnail/thumbnail_20160325100300MxCBOa1kXjsFL8mD.png'></a>
                                </div>
                                <div class="ps-item ">
                                    <a href='#'>
                                        <img alt='' src='http://static.oppo.com/archives/201603/_thumbnail/thumbnail_20160325100305AO0MTT72JCJyYiYw.png'></a>
                                </div>
                                <div class="ps-item ">
                                    <a href='#'>
                                        <img alt='' src='http://static.oppo.com/archives/201603/_thumbnail/thumbnail_20160325100311cuj0Y1QWd70R47Ie.png'></a>
                                </div>
                                <div class="ps-item ">
                                    <a href='#'>
                                        <img alt='' src='http://static.oppo.com/archives/201603/_thumbnail/thumbnail_20160325100315tbILOVaXCygt7lrr.png'></a>
                                </div>
                                <div class="ps-item ">
                                    <a href='#'>
                                        <img alt='' src='http://static.oppo.com/archives/201603/_thumbnail/thumbnail_20160325100320PLVTuLwHtUoG5OAQ.png'></a>
                                </div>
                                <div class="ps-item ">
                                    <a href='#'>
                                        <img alt='' src='http://static.oppo.com/archives/201603/_thumbnail/thumbnail_20160325100329NcpM8irtjcvmgqHW.png'></a>
                                </div>
                                <div class="ps-item ">
                                    <a href='#'>
                                        <img alt='' src='http://static.oppo.com/archives/201603/_thumbnail/thumbnail_20160325100333jIu43dPleKmMCmHD.png'></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='gi lap-three-fifths desk-one-half'>
                    <div class='buying-header-desk'>
                        <h1 class='product-title' data-desktop='.buying-header-desk' data-mobile='.buying-header-mov'>
                            R9 Plus 全网通4G 全新拍照手机 金色
                        </h1>
                        <p class="product-name-extra" data-desktop=".buying-header-desk" data-mobile=".buying-header-mov">
                            4120mAh大电池，VOOC低压闪充，指纹识别，4GB+64GB大内存，前后1600万摄像头
                        </p>
                    </div>
                    <div class='buying-price'>
                        <p>
                            <strong class='price'>
                                ￥3299.00
                            </strong>
                        </p>
                    </div>
                    <div class='add-cart-form'>
                        <form id="add-cart-form" onsubmit="return false;">
                            <section class="g module product-selector" data-common-name="attribute-0"
                            data-selector-type="box">
                                <div class='gi one-quarter desk-one-fifth'>
                                    <div class='radio-label'>
                                        网络
                                    </div>
                                </div>
                                <div class="gi three-quarters desk-four-fifths">
                                    <div class="g g-wrapper-s">
                                        <div class="gi one-half desk-one-third">
                                            <a href="http://www.opposhop.cn/products/362.html" class="swatch selected">
                                                <span>
                                                    全网通
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="g module product-selector" data-common-name="attribute-1"
                            data-selector-type="box">
                                <div class='gi one-quarter desk-one-fifth'>
                                    <div class='radio-label'>
                                        颜色
                                    </div>
                                </div>
                                <div class="gi three-quarters desk-four-fifths">
                                    <div class="g g-wrapper-s">
                                        <div class="gi one-half desk-one-third">
                                            <a href="javascript:;" class="swatch selected">
                                                <span>
                                                    金色
                                                </span>
                                            </a>
                                        </div>
                                        <div class="gi one-half desk-one-third">
                                            <a href="http://www.opposhop.cn/products/363.html" class="swatch ">
                                                <span>
                                                    玫瑰金
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="g module product-selector" data-common-name="attribute-2"
                            data-selector-type="box">
                                <div class='gi one-quarter desk-one-fifth'>
                                    <div class='radio-label'>
                                        容量
                                    </div>
                                </div>
                                <div class="gi three-quarters desk-four-fifths">
                                    <div class="g g-wrapper-s">
                                        <div class="gi one-half desk-one-third">
                                            <a href="javascript:;" class="swatch selected">
                                                <span>
                                                    64G
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="g product-gifts" id="good-gifts">
                                <div class="one-quarter desk-one-fifth">
                                    <div class="y-label">
                                        赠品
                                    </div>
                                </div>
                                <div class="gi three-quarters desk-four-fifths">
                                    <div class="g gift-item clearfix">
                                        <input type="hidden" name="gift[]" value="214">
                                        <div class="y-img">
                                            <img src="http://static.oppo.com/archives/201505/_thumbnail/thumbnail_20150508040535eIZYIesiDJ9cpwLd_60x60.jpg"
                                            alt="蓝牙音箱">
                                        </div>
                                        <div class="y-name">
                                            <a href="http://www.opposhop.cn/products/214.html" title="蓝牙音箱" target="_blank">
                                                蓝牙音箱
                                            </a>
                                        </div>
                                        <div class="y-attributes">
                                            <ul class="swatches">
                                                <li class="swatch  selected " data-gift-id="214" data-thumbnail="http://static.oppo.com/archives/201505/_thumbnail/thumbnail_20150508040535eIZYIesiDJ9cpwLd_60x60.jpg">
                                                    <a href="javascript:;">
                                                        蓝色
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="g gift-item clearfix">
                                        <input type="hidden" name="gift[]" value="216">
                                        <div class="y-img">
                                            <img src="http://static.oppo.com/archives/201505/_thumbnail/thumbnail_20150508050552auM8VK55Oagbj23p_60x60.jpg"
                                            alt="QCY 大咖蓝牙耳机 J134">
                                        </div>
                                        <div class="y-name">
                                            <a href="http://www.opposhop.cn/products/216.html" title="QCY 大咖蓝牙耳机 J134"
                                            target="_blank">
                                                QCY 大咖蓝牙耳机 J134
                                            </a>
                                        </div>
                                        <div class="y-attributes">
                                            <ul class="swatches">
                                                <li class="swatch  selected " data-gift-id="216" data-thumbnail="http://static.oppo.com/archives/201505/_thumbnail/thumbnail_20150508050552auM8VK55Oagbj23p_60x60.jpg">
                                                    <a href="javascript:;">
                                                        黄黑
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="service-repair" value=" 0 " />
                            <input type="hidden" name="service-screen" value="0" />
                            <div class="g pro-service" id="product-services"></div>
                            <div class="g product-gifts">
                                <div class="one-quarter desk-one-fifth">
                                    <div class="y-label">
                                        分期
                                    </div>
                                </div>
                                <div class="gi three-quarters desk-four-fifths">
                                    <p class='alipay-hb-product alipay-hb-product-free'>
                                        <i class='icon-hb icon-hb-free'></i>
                                        订单满600可使用花呗分期3/6期免息 0手续费
                                    </p>
                                    <a href="http://www.oppo.com/cn/service/help/330?name=%E8%B4%AD%E4%B9%B0%E5%B8%AE%E5%8A%A9"
                                    target="_blank" class='huabei-more'>
                                        了解详情&gt;&gt;
                                    </a>
                                </div>
                            </div>
                            <div class='g slab-white-border buying-actions'>
                                <div class='gi lap-one-third'>
                                    <div class='wrapper'>
                                        <div class='counter-box' id="product-amount">
                                            <a class='btn minus disabled' data-bind="minus">
                                                -
                                            </a>
                                            <input class='number' type='text' id="amount-textbox" value='1'>
                                            <a class='btn plus' data-bind="plus">
                                                +
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="gi lap-two-thirds">
                                    <div class="g">
                                        <div class="gi one-half">
                                            <button class="button-light" id="button-buy">
                                                加入购物车
                                            </button>
                                        </div>
                                        <div class="gi one-half">
                                            <button class="button button-primary" id="go-buy">
                                                立即购买
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class='g delivery-specs pro-delivery-specs'>
                        <div class='gi one-half desk-one-quarter'>
                            <div class='badge'>
                                <div class='badge-item'>
                                    <span class='icon icon-postage'></span>
                                </div>
                                <div class='badge-info'>
                                    <span>
                                        全场包邮
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='gi one-half desk-one-quarter'>
                            <a href="http://www.oppo.com/cn/service/help?name=%E6%9C%8D%E5%8A%A1%E6%94%BF%E7%AD%96"
                            target="_blank">
                                <div class='badge'>
                                    <div class='badge-item'>
                                        <span class='icon icon-return'></span>
                                    </div>
                                    <div class='badge-info'>
                                        <span>
                                            7天包退30天包换
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='gi one-half desk-one-quarter'>
                            <a href="http://www.oppo.com/cn/service/help/330?name=%E8%B4%AD%E4%B9%B0%E5%B8%AE%E5%8A%A9"
                            target="_blank">
                                <div class='badge'>
                                    <div class='badge-item'>
                                        <span class='icon icon-credit'></span>
                                    </div>
                                    <div class='badge-info'>
                                        <span>
                                            分期付款
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class='gi one-half desk-one-quarter'>
                            <div class='badge'>
                                <div class='badge-item'>
                                    <span class='icon icon-points'></span>
                                </div>
                                <div class='badge-info'>
                                    <span>
                                        购物返积分
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="product-related">
        <div class="wrapper">
            <div class="related-tabs">
                <ul class="clearfix tabs" data-bind="related"></ul>
            </div>
            <div class="related-view" data-tab="related"></div>
        </div>
    </div>
    <div class="product-view">
        <div class="product-view-tabs">
            <div class="wrapper">
                <ul class="clearfix tabs" id="product-tabs">
                    <li class="oppo-tj  y-tab-active " data-hash="features" data-tj="store|tab|product_detail|product_features">
                        <a href="javascript:;">
                            商品详情
                        </a>
                    </li>
                    <li class="oppo-tj " data-hash="params" data-tj="store|tab|product_detail|product_params">
                        <a href="javascript:;">
                            规格参数
                        </a>
                    </li>
                    <li class="oppo-tj " data-hash="comments" data-tj="store|tab|product_detail|product_comments">
                        <a href="javascript:;" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'comment-tab']);">
                            用户评价
                            <span id="comment-total">
                                (0)
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="sticky-buy">
                    <a href="javascript:;" class="go-buy oppo-tj" id="sticky-go-buy" data-tj="store|a|product_buy|sticky_buy">
                        购买
                    </a>
                </div>
            </div>
        </div>
        <div class="product-view-detail" id="product-detail">
            <div class="product-detail-tab y-tab-frame  tab-item-active " id="product-detail-features">
                <section>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100340hjFy1tg2QMAdKiRC.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100300ePs2DhaxSg4TyONv.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100300ePs2DhaxSg4TyONv.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100340hjFy1tg2QMAdKiRC.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100346T590bSm9nyX8Vuen.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/201603171003060PQSin0nb7zKK4Wy.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/201603171003060PQSin0nb7zKK4Wy.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100346T590bSm9nyX8Vuen.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100351Zls6IAjAGWBruAiC.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201604/20160413040444FYx9qHorHvu4BAe3.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201604/20160413040444FYx9qHorHvu4BAe3.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100351Zls6IAjAGWBruAiC.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100357MQfuPoBtwmcomHyn.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100317Q2cwpb54wG7uUiW9.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100317Q2cwpb54wG7uUiW9.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100357MQfuPoBtwmcomHyn.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/201603171003109HdzcVKRZfCqpp6e.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/201603171003309Wsp90n4Yx9WTCXV.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/201603171003309Wsp90n4Yx9WTCXV.jpg'
                            srcset='http://static.oppo.com/archives/201603/201603171003109HdzcVKRZfCqpp6e.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/201603171003166C6nfX0rxva1EcVV.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100334UJWW480nUyytOJGZ.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100334UJWW480nUyytOJGZ.jpg'
                            srcset='http://static.oppo.com/archives/201603/201603171003166C6nfX0rxva1EcVV.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/201603171003248BYg8NOptf3QSH82.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100341BhuknBng7YUXT9aY.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100341BhuknBng7YUXT9aY.jpg'
                            srcset='http://static.oppo.com/archives/201603/201603171003248BYg8NOptf3QSH82.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100329tnA92OOTzv00YNiy.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100347NotyiP3qfo6h6mC5.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100347NotyiP3qfo6h6mC5.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100329tnA92OOTzv00YNiy.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/201603310703118mDjCHqMLKZRq4Ue.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160331070315Vb9LFFcKC75CCjRb.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160331070315Vb9LFFcKC75CCjRb.jpg'
                            srcset='http://static.oppo.com/archives/201603/201603310703118mDjCHqMLKZRq4Ue.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100341D93gzvA5N2NZeXRj.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100359nCQcHRTVKrxogj3m.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100359nCQcHRTVKrxogj3m.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100341D93gzvA5N2NZeXRj.jpg'
                            alt=''>
                        </picture>
                    </p>
                </section>
            </div>
            <div class="product-detail-tab y-tab-frame " id="product-detail-params">
                <section>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100317mqTzGkPknpcHuvmQ.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/201603171003096pn8znuJDazsc8AM.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/201603171003096pn8znuJDazsc8AM.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100317mqTzGkPknpcHuvmQ.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/2016031703035062XkXjvtzojbE3SJ.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317030358874N2eRh3UvCNFRn.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317030358874N2eRh3UvCNFRn.jpg'
                            srcset='http://static.oppo.com/archives/201603/2016031703035062XkXjvtzojbE3SJ.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100327b3ALSYzX26vfZmro.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/201603171003190wmhfXIK4b3AXwui.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/201603171003190wmhfXIK4b3AXwui.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100327b3ALSYzX26vfZmro.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100331sSz3OZhDayZY8wJ5.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100324e0AIuRROKdWkWzSs.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100324e0AIuRROKdWkWzSs.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100331sSz3OZhDayZY8wJ5.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100337dYzyHnCcYhS7HH79.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100349AeYbIIul65EEXisi.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100349AeYbIIul65EEXisi.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100337dYzyHnCcYhS7HH79.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100342xEifv9mbbWxy3qo9.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100310euKNz9WJDhqnHrSI.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100310euKNz9WJDhqnHrSI.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100342xEifv9mbbWxy3qo9.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/201603310703246JsSoHLUGoJN8UY0.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160331070327680sEou8NxLwBtaG.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160331070327680sEou8NxLwBtaG.jpg'
                            srcset='http://static.oppo.com/archives/201603/201603310703246JsSoHLUGoJN8UY0.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160317100352Cr0JP4UefSt4roG6.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100326myTtzQJkgksgpgTV.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100326myTtzQJkgksgpgTV.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160317100352Cr0JP4UefSt4roG6.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/201603171003567otVHUERz0sadbqt.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160317100335M7GFpLnIF8YqDyRy.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160317100335M7GFpLnIF8YqDyRy.jpg'
                            srcset='http://static.oppo.com/archives/201603/201603171003567otVHUERz0sadbqt.jpg'
                            alt=''>
                        </picture>
                    </p>
                    <p style="text-align:center;">
                        <picture>
                            <!--[if IE 9]>
                                <video style="display: none;">
                                <![endif]-->
                                <source media='(min-width: 990px)' srcset='http://static.oppo.com/archives/201603/20160331070332MNi6XeAm3IfsERwC.jpg'>
                                    <source media='(min-width: 300px)' srcset='http://static.oppo.com/archives/201603/20160331070335vVk4pMtiTrOdotNI.jpg'>
                                        <!--[if IE 9]></video>
                            <![endif]-->
                            <img src='http://static.oppo.com/archives/201603/20160331070335vVk4pMtiTrOdotNI.jpg'
                            srcset='http://static.oppo.com/archives/201603/20160331070332MNi6XeAm3IfsERwC.jpg'
                            alt=''>
                        </picture>
                    </p>
                </section>
            </div>
            <div class="product-detail-tab y-tab-frame " id="product-detail-comments">
                <section>
                    <div class="wrapper comments-wrapper">
                        <div class="y-comments-header clearfix">
                            <div class="reviews-switchable" id="comments-switchable">
                                <ul>
                                    <li class="switchable checked">
                                        <a href="javascript:;" data-type="all" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'all-comments-button']);">
                                            <span class="cb-radio">
                                                <span class="cb-inner">
                                                    <i>
                                                    </i>
                                                </span>
                                            </span>
                                            <label>
                                                全部评价
                                            </label>
                                        </a>
                                    </li>
                                    <li class="switchable">
                                        <a href="javascript:;" data-type="hasimages" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', '晒图按钮']);">
                                            <span class="cb-radio">
                                                <span class="cb-inner">
                                                    <i>
                                                    </i>
                                                </span>
                                            </span>
                                            <label>
                                                晒图
                                                <span class="reviews-count" data-type="hasimages">
                                                    （0）
                                                </span>
                                            </label>
                                        </a>
                                    </li>
                                    <li class="switchable">
                                        <a href="javascript:;" data-type="hasappend" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'append-comment-button']);">
                                            <span class="cb-radio">
                                                <span class="cb-inner">
                                                    <i>
                                                    </i>
                                                </span>
                                            </span>
                                            <label>
                                                追评
                                                <span class="reviews-count" data-type="hasappend">
                                                    （0）
                                                </span>
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="comments-button">
                                <a class="button button-s" href="javascript:;" data-type="1" id="go-comment"
                                onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'comment-button']);">
                                    我要评论
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div id="comments" class="y-comments-view"></div>
                        <div class="y-comment-pagination clearfix" id="comments-pagination"></div>
                        <div id="respond" class="y-comment-respond" style="display: none;">
                            <div class="y-comment-form">
                                <input type="hidden" id="comment-product-id" value="362">
                                <input type="hidden" id="comment-type" value="1">
                                <input type="hidden" id="comment-score" value="0">
                                <input type="hidden" id="comment-id" value="0">
                                <input type="hidden" id="comment-archive-ids" value="">
                                <div class="field y-form-star" id="comment-star-box">
                                    <label>
                                        评分
                                    </label>
                                    <div class="group clearfix">
                                        <div class="comment-star" data-bind="rating">
                                            <a href="javascript:;" class="stars star-1" data-value="1">
                                                1
                                            </a>
                                            <a href="javascript:;" class="stars star-2" data-value="2">
                                                2
                                            </a>
                                            <a href="javascript:;" class="stars star-3" data-value="3">
                                                3
                                            </a>
                                            <a href="javascript:;" class="stars star-4" data-value="4">
                                                4
                                            </a>
                                            <a href="javascript:;" class="stars star-5" data-value="5">
                                                5
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="field y-form-list" id="comment-list-box" style="display: none;">
                                    <label>
                                        请选择已提交的评论进行追评
                                    </label>
                                    <div id="comment-list">
                                        正在加载中...
                                    </div>
                                </div>
                                <div class="field y-form-comment">
                                    <label id="comment-label">
                                        内容
                                    </label>
                                    <textarea id="comment" placeholder="请输入评价内容, 内容不能超过200字！"></textarea>
                                </div>
                                <div class="y-comments-uploader" id="comments-uploader-container">
                                    <a class="y-upload-button" href="javascript:;" id="comments-file">
                                        <i>
                                        </i>
                                        <span>
                                            上传图片
                                        </span>
                                    </a>
                                    <div class="y-upload-list">
                                        <ul id="comments-upload-list" style="display: none;"></ul>
                                    </div>
                                    <div class="y-upload-note">
                                        最大可支持上传
                                        <em>
                                            2
                                        </em>
                                        M以内的JPG,PNG格式图片，最多允许上传
                                        <em>
                                            4
                                        </em>
                                        张图片
                                    </div>
                                </div>
                                <div class="y-form-button">
                                    <a class="button button-s" href="javascript:;" id="submit-comment">
                                        提交评论
                                    </a>
                                    <a class="button button-s" href="javascript:;" id="comment-loading" style="display: none;">
                                        提交评论中...
                                    </a>
                                    <a class="button-light button-s" href="javascript:;" id="cancel-comment">
                                        取消评论
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<div class="y-modal" id="modal-cancel" role="dialog" tabIndex="1">
    <div class="y-modal-header"></div>
    <div class="y-modal-container">
        <div class="y-modal-content">
            <div class="y-modal-message">
                您确定放弃评价吗？
            </div>
        </div>
        <div class="y-modal-buttons">
            <div class="g">
                <a href="javascript:;" class="y-modal-btn button confirm-button">
                    确定
                </a>
                <a href="javascript:;" class="y-modal-btn button-light y-modal-accept">
                    取消
                </a>
            </div>
        </div>
    </div>
    <div class="y-modal-footer"></div>
    <div class="y-modal-close">
        <span class="close">
            x
        </span>
    </div>
</div>
<div class="y-modal" id="modal-trade" role="dialog" tabIndex="1">
    <div class="y-modal-header"></div>
    <div class="y-modal-container">
        <div class="y-modal-content">
            <div class="trade-message">
                <i>
                </i>
                <span>
                    商品已成功加入购物车！
                </span>
            </div>
            <div class="trade-action">
                <a href="http://www.opposhop.cn/trade" class="button button-primary">
                    去结算
                </a>
            </div>
        </div>
        <div class="y-modal-buttons">
            <div class="g">
                <span>
                    您也可以
                </span>
                <a href="javascript:;" class="y-modal-btn y-modal-accept">
                    再逛逛
                </a>
            </div>
        </div>
    </div>
    <div class="y-modal-footer"></div>
    <div class="y-modal-close">
        <span class="close">
            x
        </span>
    </div>
</div>
<div class="y-modal y-modal-service" id="modal-service" role="dialog"
tabIndex="1">
    <div class="y-modal-header">
        <div class="y-modal-close">
            <span class="close">
                x
            </span>
        </div>
    </div>
    <div class="y-modal-container">
        <div class="y-modal-content">
            <h4 class="y-modal-service-title">
                《OPPO保障服务协议》
            </h4>
            <p>
                在您计划购买OPPO保障服务产品之前，请您全面仔细阅读本条款中的内容，保障服务产品内容已经明确了您享受的权益，您的付费购买行为，将被视为您已经了解并接受了本条款中的内容。本保障服务产品由东莞市永盛通信科技有限公司（以下简称本公司）提供，并由中国人民财产保险股份有限公司承保。
            </p>
            <p>
                <h4>
                    第一条 OPPO保障服务产品内容
                </h4>
            </p>
            <p>
                <h5>
                    OPPO “屏碎保”
                </h5>
            </p>
            <p>
                OPPO屏碎保服务的有效期是一年，以手机发货次日零时起开始计算。（考虑到物流时间，因此屏碎保有效时间为用户增加7个自然日。例如:用户在2015年1月1日下单购买R5手机及对应的屏碎保服务产品，公司于2015年1月2日发货，则屏碎保服务产品于2015年1月3日零时生效，2016年1月9日24时责任终止。）OPPO手机屏碎保需与新机绑定购买，在屏碎保保障服务期限内，因意外造成的屏幕破碎、产生裂纹，本公司负责给您免费更换一次同类同质屏幕组件。
            </p>
            <p>
                具体如下：
            </p>
            <p>
                （1） 手机在正常使用过程中由于意外坠落、挤压、碰撞，造成手机屏幕组件破碎、产生裂纹，本公司负责给您更换同类同质屏幕组件，维修费用由本公司承担。
            </p>
            <p>
                （2） 若手机造成非屏幕组件相关的其它功能性损坏，则由用户自行承担功能性修复的相关费用。
            </p>
            <p>
                （3） 更换后的损坏零部件或产品归本公司所有。
            </p>
            <p>
                （4） 屏碎保服务期内不针对外壳、充电器、数据线、耳机等附件及赠品进行承保。
            </p>
            <p>
                （5） 本公司为您免费更换手机屏幕，鉴于此，您同意委托本公司向保险公司索赔，并同意保险公司将赔款支付给本公司。
            </p>
            <p>
            </p>
            <p>
                <h5>
                    OPPO“延长保”
                </h5>
            </p>
            <p>
                OPPO手机延长保产品分为半年期和一年期两类。OPPO手机延长保需与新机绑定购买，以线上购买签收次日零时起开始计算，在国家“三包”规定一年联保外，延长半年或一年的主机保修时间。
            </p>
            <p>
                具体如下：
            </p>
            <p>
                （1） 在国家“三包”规定一年联保外，延长半年或一年的主机保修时间。延保期内仅对主机提供免费保修服务。
            </p>
            <p>
                （2） 更换后的损坏零部件或产品归本公司所有。
            </p>
            <p>
                （3） 延长保修服务期内不承担退换货责任。
            </p>
            <p>
                （4） 延长保修服务期内不针对外壳、充电器、数据线、耳机、可拆卸电池等附件及赠品进行承保。
            </p>
            <p>
            </p>
            <p>
                <h4>
                    第二条 不属于OPPO保障服务产品范围的内容
                </h4>
            </p>
            <p>
                下列原因造成的损失、费用，本公司不负责赔偿：
            </p>
            <p>
                （1） 因战争、敌对行为、军事行为、武装冲突、罢工、骚乱、暴动、恐怖活动及自然灾害的不可抗力，包括：台风、洪水、地震、火山爆发以及海啸、核反应、核放射等。
            </p>
            <p>
                （2） 手机在外观上的瑕疵，如：脱漆、刮痕、褪色等。但与手机同时受损的情况不在此限。
            </p>
            <p>
                （3） 不影响手机基本使用功能的附件或耗材，包括但不限于耳机、存储卡、充电设备、数据线、书写笔等的磨损、损坏或丢失。
            </p>
            <p>
                （4） 手机设备的正常磨损、腐蚀、氧化、锈垢、耗损等或因积灰、冷凝、受冷、受热等渐变性原因导致的损失。
            </p>
            <p>
                （5） 属于“三包范围”内的置换、损失或费用。
            </p>
            <p>
                （6） 原装基础上添加的存储数据或商品部件的丢失。
            </p>
            <p>
                （7） 因手机意外受损导致的任何间接损失或附带损失（包括但不限于人身损害、无法使用、利润损失、数据损失、故障时间损失及误工费等）不承担任何责任。
            </p>
            <p>
                （8） 被保险人故意行为导致的手机损坏，或因保管不当导致的盗窃、遗失。
            </p>
            <p>
                （9） 交予非OPPO客户服务中心维修点进行拆机、维修。
            </p>
            <p>
                （10） 由于软件中毒导致的系统、软件问题，造成的产品功能故障。
            </p>
            <p>
                （11） 手机型号、IMEI号等与购买本保障服务产品时记载的不符、涂改、缺失或无法辨识的。
            </p>
            <p>
                如发现用户通过故意损坏产品来达到欺诈、骗保的目的，则与该产品对应的OPPO保障服务内容自动终止。本公司不退还任何费用，同时保留追究该用户法律责任的权利。
            </p>
            <p>
            </p>
            <p>
                <h4>
                    第三条 OPPO保障服务产品其他责任免除
                </h4>
            </p>
            <p>
                由于下列原因造成的损失或者费用，本公司不承担赔偿责任：
            </p>
            <p>
                （1） 首年符合国家质检总局、国家工商总局、信息产业部颁布的《移动电话机商品修理更换退货责任规定》范围之内的故障的。
            </p>
            <p>
                （2） 无有效销售凭证的。
            </p>
            <p>
                （3） 消费者提出维修要求时不在保障期内的。
            </p>
            <p>
                （4） 消费者故意人为制造损坏结果，或者故意放大损坏结果的发生。
            </p>
            <p>
                （5） 消费者明知使用方式和使用环境可能造成手机的损坏，而未采取任何防范措施，或因轻信损害结果可以避免，导致损害结果的发生。
            </p>
            <p>
                （6） 不可抗力，自然灾害，相关人或任何机构、人员的故意行为造成的损失或者费用。
            </p>
            <p>
                （7） 消费者私自拆装手机或将手机送到非OPPO客户服务中心进行拆机、维修。
            </p>
            <p>
                （8） 产品型号、产品身份标识、顾客信息等在服务管理系统中记载的产品相关信息与实际修理的产品不符或者涂改的。
            </p>
            <p>
                （9） 参保商品造成的使用者或他人的人身伤害和财产损失，其他各种间接损失或者费用。
            </p>
            <p>
                （10） 非所销售产品对应保障责任范围内的其他保障责任、费用、损失。
            </p>
            <p>
            </p>
            <p>
                <h4>
                    第四条 OPPO保障服务产品的退换货说明
                </h4>
            </p>
            <p>
                OPPO保障服务除“三包”退机外不可申请退出、撤销或终止，同时OPPO手机保障服务产品需与用户购买的手机绑定，不得以任何方式予以转让。
            </p>
            <p>
                “三包”规定期内，手机发生换货，在未曾使用保障服务的前提下，屏碎保服务转移至用户更换的新手机上，屏碎保服务时间按生效之日起剩余时间计算。延长保服务转移至用户更换的新手机上，延长保服务时间按照用户签收最新更换的手机之日起重新计算。
            </p>
            <p>
                “三包”规定期内，手机发生退货，在未曾使用保障服务的前提下，将为用户退还保费，同时保障服务责任终止。
            </p>
            <p>
            </p>
            <p>
                <h4>
                    第五条 OPPO保障服务理赔说明
                </h4>
            </p>
            <p>
                购买保障服务的用户手机需要维修时，用户拨打4001-666-888热线进行报修，热线客服指引用户携带相关资料（注：屏碎保用户只需额外提供身份证复印件、手机销售发票复印件或官网订单截图打印件即可。延长保用户不需额外提供以上资料）并指引用户预约维修。服务中心根据用户手机IMEI号从售后服务系统中查询用户手机是否符合使用保障服务产品的条件。符合条件则为用户免费维修。其中，屏碎保用户自保障服务生效之日起一年内因屏幕意外破碎、产生裂纹只保一次，维修后保障服务责任终止，今后将不再享受屏碎保保障服务。
            </p>
        </div>
    </div>
    <div class="y-modal-footer"></div>
</div>
<div class="purchase-advisory">
    <a href="http://oim.oppo.com/oim/chatClient/chatbox.jsp?companyID=8092&configID=890&enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&k=1"
    target="_blank" id="advisory">
        购机咨询
    </a>
</div>
<script src="http://shopfs.myoppo.com/shop/js/build/global.min.js?20150820191148"></script>
<script src="http://shopfs.myoppo.com/shop/assets/javascripts/opposhop.min.js?20160411163101"></script>
<script src="http://shopfs.myoppo.com/shop/js/build/product/main.min.js?20160126153544"></script>
<script src="http://shopfs.myoppo.com/shop/assets/javascripts/product.min.js?20160408172651"></script>
<script src="http://my.oppo.com/lib/oppo.login.min.js?v=20160126153544"></script>
<script>
    $(window).on('load',
    function() {
        var stickyBuy = new Yo.Product.stickyBuy();
    });
</script>
<script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "http://www.opposhop.cn";
    OPPO.conf.STORE_URL = 'http://www.opposhop.cn';
    OPPO.conf.ACCOUNT_URL = 'http://my.oppo.com';
    OPPO.conf.WWW_URL = "http://www.oppo.com/cn/";
    OPPO.conf.ACCOUNT_URL = "http://my.oppo.com";
    OPPO.conf.domains = [];
    OPPO.conf.jsonpDone = false;
    OPPO.conf.jsonpDone = true;

    var url = OPPO.conf.STORE_URL + '/auth/check';
    //callback for jsonp
    var successCallback = function(data) {
        $('ul.log-area .hasLogout').removeClass('show').addClass('hidden');
        $('ul.log-area .hasLogin').removeClass('hidden').addClass('show');
        $('.cart_number').text(data['cart_number']);
        $('.n-messages').text("(" + data['message_number'] + ")");
        $('.user-menu').addClass('isLogin');
        $('.user-menu-toLogin').hide();
        if (data['message_number'] > 0 || data['cart_number'] > 0) {
            $('.js-open-user').addClass('point-red');
            if (data['message_number'] > 0) $('.user-menu-message a').addClass('point-red');
            if (data['cart_number'] > 0) $('.user-menu-cart a').addClass('point-red');
        };
        if (data['append'] != '') $('body').append(data['append']);
    };
    var errorCallback = function() {
        $('ul.log-area .hasLogin').removeClass('show').addClass('hidden');
        $('ul.log-area .hasLogout').removeClass('hidden').addClass('show');
        $('.cart_number').text(0);
    };
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'jsonp',
        error: function() {
            errorCallback();
        },
        success: function(data) {
            successCallback(data);
        }
    });

    (function() {
        var controllerNameWithAction = "ProductsController@show".split('@');
        var controllerName = controllerNameWithAction[0];
        var actionName = controllerNameWithAction[1];
        var controller = OPPO.controller[controllerName];
        if (controller) {
            action = controller()[actionName];
            if (action) {
                $(function() {
                    vm = action();
                });
            }
        }
        // else console.log(controllerNameWithAction);
    })();
</script>
<script type="text/javascript">
    $(function() {
        Yo.Product.swipe('product-swipe');
        Yo.Product.initCarousel();
        Yo.Product.initAmount();

        var Related = new Yo.Product.Related();

        var Comments = Yo.Product.Comments = new Yo.Product.Comments(362, '#comments', '#comments-pagination', '#respond');

        Yo.Product.Tabs();

        Yo.Product.Tab.on('tab',
        function(tab) {
            var $tab = tab['tab'];

            $tab.parent().find('li').removeClass('clicked');

            if (!$tab.hasClass('clicked')) {
                $tab.addClass('clicked');

                var top = $('.product-view').offset().top || 0;

                $('html, body').animate({
                    scrollTop: top
                },
                500);
            }

            if ($tab.data('hash') == 'comments' && !$tab.data('trigger')) {
                $tab.data('trigger', true);

                Comments.render();
            }
        });
        if ($('#product-tabs').find('li').length == 1 && $('#product-tabs').find('li').data('hash') == 'comments') {
            Comments.render();
        }

        //new Yo.Product.Suits();
    });
</script>
