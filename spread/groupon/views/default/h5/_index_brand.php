<section class="v2_tuan  bg_white mt-12 pd12_bot btm_eee top_eee">
    <ul class="tg_subtitle_new">
        <li class="list1"></li>
        <li class="list2"><span>热门品牌</span></li>
    </ul>
    <div class="pd12">
        <ul class="tg_brand_new clearfix">
			<?php foreach ($brandInfos as $info) { ?>
			<li onclick="showBrandBm(<?= $info['id']; ?>, this)">
                <a href="javascript: void(0);">
                    <div class="tg_brand_item">
					    <img class="lazy" data-original="<?= $info['logo']; ?>" style="80%; height: 80px;"/>
						<p class="cou_moneny"><?= $info['name']; ?></p>
                        <!--<p class="more_shop" style="display: ;">更多店铺促销〉 <em> 〉 </em></p>-->
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <!--<div class="al_center mt-12" style="margin-bottom:.12rem;">
        <a href="http://m.jia.com/coupons/beijing/31477">
            <span class="tg_f13 f_666666">更多品牌</span>
            <b class="tg_arrow_down"></b>
        </a>
    </div>-->
</section>
