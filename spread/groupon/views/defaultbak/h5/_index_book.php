<section class="v2_tuan  bg_white mt-12 pd12_bot btm_eee top_eee">
    <ul class="tg_subtitle_new">
        <li class="list1"></li>
        <li class="list2">
            <span>特惠预约</span>
        </li>
    </ul>
    <div class="pd12">
        <ul class="tg_prd_ul clearfix ">
			<?php foreach ($productInfos as $info) { ?>
			<li onclick="showPrBm(<?= $info['id']; ?>, this)" tjjj="">
                <div class="tg_item_new">
                    <input type="hidden" class="hiddenvalue" value="9">
                    <!-- <div class="cheep_ic"><span>节省</span><span class="min_money"><em>￥</em>-1699</span></div> -->
					<img class="lazy" data-original="<?= $info['main_photo']; ?>" />
                    <div class="see_more">
                        <span class="tg_search_ic">查看详情</span>
                    </div>
					<p class="cou_moneny"><?= $info['name']; ?></p>
                    <span class="now_price">
					    <strong><?= $info['price']; ?></strong>
                        <?php $unit = !empty($info['unit']) ? $info['unit'] : '元'; echo $unit; ?> 
                    </span>
                    <!-- <span class="old_price">￥0</span> -->
					<div class="want_buy"><?= $info['focus_num']; ?>人已预约</div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</section>
