<?php
use yii\helpers\Url;

$guarantees = [
    'postage' => [
        'name' => '免费上门',
    ],
    'return' => [
        'name' => '不满意不收费',
    ],
    /*'credit' => [
        'name' => '',
    ],*/
    'points' => [
        'name' => '消费返红包',
    ],
];

$attributes = [
	'step_1' => ['申请预约' => ''],
];
?>
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
                <!--<div class='product-gallery-items'>
                    <div class="ps-carousel" id="product-carousel">
                        <?php $i = 0; foreach ($info['picture'] as $picture) { ?>
                        <div class="ps-item <?php if ($i == 0) { echo 'ps-item-active'; } ?>">
                            <a href='#'><img alt='' src='<?= $picture['url']; ?>' width="78px" height="78px"></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>-->
            </div>
        </div>
        <div class='gi lap-three-fifths desk-one-half'>
            <div class='buying-header-desk'>
                <h1 class='product-title' data-desktop='.buying-header-desk' data-mobile='.buying-header-mov'><?= $info['name']; ?></h1>
                <p class="product-name-extra" data-desktop=".buying-header-desk" data-mobile=".buying-header-mov"><?= $info['brief']; ?></p>
            </div>
            <div class='buying-price'>
                <!--<p><strong class='price'>￥<?= $info['price']; ?></strong></p>-->
            </div>
            <div class='add-cart-form'>
                <form id="add-cart-form" onsubmit="return false;">
                    <div class="g product-gifts" id="good-gifts"></div>
                    <section class="g module product-selector">
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
                    <section class="g module product-selector">
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
                    <section class="g module product-selector">
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
                    <div class="g product-gifts" id="good-gifts"></div>
                    <div class='g slab-white-border buying-actions'>
                        <div class="gi lap-two-thirds">
                            <div class="g">
                                <div class="gi one-half">
                                    <a><button class="button-light" id="button-buy">
                                        电话咨询
                                    </button></a>
                                </div>
                                <div class="gi one-half">
				                    <button class="button button-primary" id="go-buy" onclick="window.location.href='<?= Yii::getAlias('@spreadurl') . Url::to(['/shoot/signup/index', 'goods_id' => $info['id']]); ?>'">
                                        申请预约
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class='g delivery-specs pro-delivery-specs'>
                <?php foreach ($guarantees as $item => $guarantee) { ?>
                <div class='gi one-half desk-one-quarter'>
                    <div class='badge'>
                        <div class='badge-item'><span class='icon icon-<?= $item; ?>'></span></div>
                        <div class='badge-info'><span><?= $guarantee['name']; ?></span></div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</article>
</div>
