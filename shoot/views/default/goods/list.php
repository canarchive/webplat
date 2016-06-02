<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['styles'];
$this->params['controllerForJs'] = 'ProductsController@index';
?>
<main class='main-content'>
    <div class="product-index">
        <div class='wrapper'>
            <ul class='breadcrumb'>
                <li>
				    <a href='<?= Yii::getAlias('@shooturl'); ?>'>
                        首页<span>/</span>
                    </a>
                </li>
                <li>
                    产品
                </li>
            </ul>
        </div>
        <?php //echo $this->render('_list_slice'); ?>
     
        <div class="tabs-blank">
        </div>
        <ul class="tabs-mobile font-normal">
            <li class="tab" id="tab-1">
                R系列
            </li>
            <li class="tab" id="tab-2">
                Find系列
            </li>
            <li class="tab" id="tab-3">
                N系列
            </li>
            <li class="tab" id="tab-4">
                A系列
            </li>
        </ul>
        <div class="box-products">
            <div class="wrapper">
                <!-- <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/title-1.png"
                class="desk-title"> -->
                <div class="desk-title">
                    OPPO 产品系列
                </div>
                <div class="brick-name">
                    <div class="pull-left">
                        <span class="serial-slogan">
                            <span class="serial-name">
                                R系列
                            </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;纤薄设计·至美外观
                        </span>
                    </div>
                    <div class="pull-right">
                        <span class="">
                            <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=3"
                            class="oppo-tj" data-tj="www|link|product|serial_1_more'])" target="_blank">
                                查看更多
                            </a>
                        </span>
                        <span class="icon-more">
                            <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=3"
                            target="_blank" class="oppo-tj" data-tj="www|link|product|serial_1_more'])">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-more.png">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="brick-list">
                    <div class="brick-item serial " id="serial-1">
                        <a href="http://www.oppo.com/cn/product/p/r9/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_1_1" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201603/20160325030321HEuYqLPuQEiPgZUg.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    R9 Plus
                                </div>
                                <p class="brick-desc">
                                    指纹识别 | 4120mAh大电池 | 闪充
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_1_1_more"
                                href="http://www.oppo.com/cn/product/p/r9/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.oppo.com/cn/product/p/r9/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_1_2" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201603/20160317040326vrH1qOjBzCZC8DdZ.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    R9
                                </div>
                                <p class="brick-desc">
                                    1.66mm超窄边框 | 1600万像素 | 闪充
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_1_2_more"
                                href="http://www.oppo.com/cn/product/p/r9/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.oppo.com/cn/product/p/r7s/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_1_3" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040157ccg9T1qh61ayfeMo.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    R7s
                                </div>
                                <p class="brick-desc">
                                    4G运存 | 3070mAh大电池 | 闪充
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_1_3_more"
                                href="http://www.oppo.com/cn/product/p/r7s/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item brick-item-last " id="">
                        <a href="http://www.oppo.com/cn/product/p/r7plus/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_1_4" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040100aA211N5zDWut90BS.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    R7 Plus
                                </div>
                                <p class="brick-desc">
                                    6.0寸大屏 | 4100mAh大电池 | 闪充
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_1_4_more"
                                href="http://www.oppo.com/cn/product/p/r7plus/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="brick-mobile-more">
                    <span class="font-normal">
                        <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=3"
                        class="oppo-tj" data-tj="www|link|product|serial_1_mobile_more">
                            &nbsp;&nbsp;R系列更多产品&nbsp;&nbsp;&gt;&gt;
                        </a>
                    </span>
                </div>
                <div class="brick-name">
                    <div class="pull-left">
                        <span class="serial-slogan">
                            <span class="serial-name">
                                Find系列
                            </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;先进科技·智能旗舰
                        </span>
                    </div>
                    <div class="pull-right">
                        <span class="">
                            <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=1"
                            class="oppo-tj" data-tj="www|link|product|serial_2_more'])" target="_blank">
                                查看更多
                            </a>
                        </span>
                        <span class="icon-more">
                            <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=1"
                            target="_blank" class="oppo-tj" data-tj="www|link|product|serial_2_more'])">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-more.png">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="brick-list">
                    <div class="brick-item serial " id="serial-2">
                        <a href="http://www.opposhop.cn/products/106" class="oppo-tj" data-tj="www|link|product|serial_2_1"
                        target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/2016012104011535Y8H60zg6BnaMGY.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    Find 7 标准版
                                </div>
                                <p class="brick-desc">
                                    2K屏 | 1300万像素 | 闪充
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_2_1_more"
                                href="http://www.opposhop.cn/products/106">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.opposhop.cn/products/103.html" class="oppo-tj" data-tj="www|link|product|serial_2_2"
                        target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040117YChMNcUsb8LD9esq.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    Find 7 轻装版
                                </div>
                                <p class="brick-desc">
                                    超清画质 | 1300万像素 | 闪充
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_2_2_more"
                                href="http://www.opposhop.cn/products/103.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.opposhop.cn/products/111.html" class="oppo-tj" data-tj="www|link|product|serial_2_3"
                        target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040119hqQkCd66DsqLW2uY.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    Find 7 南美超级杯限量版
                                </div>
                                <p class="brick-desc">
                                    巴西 | 阿根廷
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_2_3_more"
                                href="http://www.opposhop.cn/products/111.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item brick-item-last " id="">
                        <a href="http://www.oppo.com/cn/service/proarea/show/132" class="oppo-tj"
                        data-tj="www|link|product|serial_2_4" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040122n2gKo1uxRVnqk1Yf.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    Find 5
                                </div>
                                <p class="brick-desc">
                                    1080P屏幕 | 息屏美学
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_2_4_more"
                                href="http://www.oppo.com/cn/service/proarea/show/132">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="brick-mobile-more">
                    <span class="font-normal">
                        <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=1"
                        class="oppo-tj" data-tj="www|link|product|serial_2_mobile_more">
                            &nbsp;&nbsp;Find系列更多产品&nbsp;&nbsp;&gt;&gt;
                        </a>
                    </span>
                </div>
                <div class="brick-name">
                    <div class="pull-left">
                        <span class="serial-slogan">
                            <span class="serial-name">
                                N系列
                            </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;旋转镜头·创意拍摄
                        </span>
                    </div>
                </div>
                <div class="brick-list">
                    <div class="brick-item serial " id="serial-3">
                        <a href="http://www.oppo.com/cn/product/p/n3/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_3_1" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040125a8qlZ2uDRdcBvHKP.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    N3
                                </div>
                                <p class="brick-desc">
                                    1600万电动旋转摄像头 | 闪充
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_3_1_more"
                                href="http://www.oppo.com/cn/product/p/n3/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.opposhop.cn/products/112" class="oppo-tj" data-tj="www|link|product|serial_3_2"
                        target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040128SYHdNNEYjRRjSrb4.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    N1mini
                                </div>
                                <p class="brick-desc">
                                    1300万旋转摄像头 | 个性多彩
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_3_2_more"
                                href="http://www.opposhop.cn/products/112">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.oppo.com/cn/service/proarea/show/131" class="oppo-tj"
                        data-tj="www|link|product|serial_3_3" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040130HaVe5gPZWcAiTmo9.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    N1
                                </div>
                                <p class="brick-desc">
                                    一转倾心
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_3_3_more"
                                href="http://www.oppo.com/cn/service/proarea/show/131">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="brick-name">
                    <div class="pull-left">
                        <span class="serial-slogan">
                            <span class="serial-name">
                                A系列
                            </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;潮流设计·实用体验
                        </span>
                    </div>
                    <div class="pull-right">
                        <span class="">
                            <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=4"
                            class="oppo-tj" data-tj="www|link|product|serial_4_more'])" target="_blank">
                                查看更多
                            </a>
                        </span>
                        <span class="icon-more">
                            <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=4"
                            target="_blank" class="oppo-tj" data-tj="www|link|product|serial_4_more'])">
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-more.png">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="brick-list">
                    <div class="brick-item serial " id="serial-4">
                        <a href="http://www.oppo.com/cn/product/p/a30/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_4_1" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160123050144nUOdc70sdmRFr3Ik.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    A30
                                </div>
                                <p class="brick-desc">
                                    双2.5D镜面设计
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_4_1_more"
                                href="http://www.oppo.com/cn/product/p/a30/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.oppo.com/cn/product/p/a53/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_4_2" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160121040137MkbYlSk8F5afBj6k.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    A53
                                </div>
                                <p class="brick-desc">
                                    金属大屏拍照手机
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_4_2_more"
                                href="http://www.oppo.com/cn/product/p/a53/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item " id="">
                        <a href="http://www.oppo.com/cn/product/p/a33/index.html" class="oppo-tj"
                        data-tj="www|link|product|serial_4_3" target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/20160128040140CfLkJwMMiv82mwWE.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    A33
                                </div>
                                <p class="brick-desc">
                                    钟爱高颜值
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_4_3_more"
                                href="http://www.oppo.com/cn/product/p/a33/index.html">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="brick-item brick-item-last " id="">
                        <a href="http://www.opposhop.cn/products/308" class="oppo-tj" data-tj="www|link|product|serial_4_4"
                        target="_blank">
                            <div class="brick-img">
                                <img src="http://static.oppo.com/archives/201601/201601210401418M2LYAYRAjrvYnue.png">
                            </div>
                            <div class="brick-content">
                                <div class="brick-title">
                                    A51
                                </div>
                                <p class="brick-desc">
                                    流光镜面 反正都美
                                </p>
                                <a class="brick-learn-more font-normal oppo-tj" data-tj="www|link|product|serial_4_4_more"
                                href="http://www.opposhop.cn/products/308">
                                    &nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="brick-mobile-more">
                    <span class="font-normal">
                        <a href="http://www.opposhop.cn/products/?is_promotion=0&category=1&sort=sequence-desc&serial=4"
                        class="oppo-tj" data-tj="www|link|product|serial_4_mobile_more">
                            &nbsp;&nbsp;A系列更多产品&nbsp;&nbsp;&gt;&gt;
                        </a>
                    </span>
                </div>
                <!-- <div class="brick-name">
                <div class="pull-left">
                <span class=""><strong>Find系列</strong>&nbsp;&nbsp;先进科技 智能旗舰</span>
                </div>
                <div class="pull-right">
                <span>查看更多</span>
                <span class="icon-more"><img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-more.png"></span>
                </div>
                </div>
                <div class="brick-list">
                <div class="brick-item brick-item-last">
                <div class="brick-img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/brick-img.png">
                </div>
                <div class="brick-content">
                <div class="brick-title">R7s 长续航闪充利器</div>
                <p class="brick-desc">4G运存丨3080mAh大电池丨闪充</p>
                <a class="brick-learn-more">了解产品&gt;</a>
                </div>
                </div>
                </div>
                <div class="brick-mobile-more">
                <span>R系列更多产品&nbsp;&nbsp;&gt;&gt;</span>
                </div> -->
            </div>
        </div>
        <div class="oppo-feature">
            <div class="wrapper">
                <div class="desk-title">
                    OPPO 产品特色
                </div>
                <div class="feature-item">
                    <div class="pull-left">
                        <a href="http://hd.oppo.com/2015/vooc/index.html" target="_blank" class="oppo-tj"
                        data-tj="www|link|product|feature_1">
                            <img src="http://static.oppo.com/archives/201601/20160121100120Nobg0mg0q08c8ThO.jpg">
                        </a>
                    </div>
                    <div class="pull-right">
                        <a href="http://www.oppo.com/cn/photogallery" target="_blank" class="oppo-tj"
                        data-tj="www|link|product|feature_2">
                            <img src="http://static.oppo.com/archives/201601/201601211001243YG3UFpx23RdhMt0.jpg"
                            class="feature-second">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
