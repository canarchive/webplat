    <div class='buying-details'>
        <article class='wrapper'>
            <div class='buying-header-mov'></div>
            <div class='g'>
                <div class='gi lap-two-fifths desk-one-half'>
                    <div class='product-gallery js-tabs'>
                        <div class='product-gallery-view js-tab-content swipe' id="product-swipe">
                            <div class="swipe-wrap">
                                <?php $i = 0; foreach ($info['picture'] as $picture) { ?>
								<div class='swipe-slide  <?php if ($i == 0) { echo 'is-active'; } ?>'>
									<img alt='<?= $picture['name']; ?>' title='<?= $picture['name']; ?>' src='<?= $picture['url']; ?>'>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class='product-gallery-items'>
                            <div class="ps-carousel" id="product-carousel">
                                <?php $i = 0; foreach ($info['picture'] as $picture) { ?>
								<div class="ps-item <?php if ($i == 0) { echo 'ps-item-active'; } ?>">
                                    <a href='#'><img alt='' src='<?= $picture['url']; ?>' width="78px" height="78px"></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='gi lap-three-fifths desk-one-half'>
                    <div class='buying-header-desk'>
					    <h1 class='product-title' data-desktop='.buying-header-desk' data-mobile='.buying-header-mov'><?= $info['name']; ?></h1>
						<p class="product-name-extra" data-desktop=".buying-header-desk" data-mobile=".buying-header-mov"><?= $info['brief']; ?></p>
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
