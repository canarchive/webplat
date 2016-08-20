<?php
$datas = [];
foreach ($productInfos as $info) {
	$datas[$info['category_id']][] = $info;
}
$showDatas = [];
?>
<div class="J_item_box_wrap item_box" id="item3">
    <div class="J_item_title">
        <h2>商品推荐<span>卖得好的，总归是要的人多，口碑值有检验的</span></h2>
    </div>
    <div class="clearfix content_box">
        <div class="commodity_item">
            <ul>
                <?php $i = 1; foreach ($categoryInfos as $info) { if (!isset($datas[$info['id']])) { continue; } $showDatas[] = $datas[$info['id']]; ?>
                <li <?php if ($i == 1) { echo 'class="cur"'; } ?>>
                    <?= $info['name']; ?>
                    <em></em>
                </li>
                <?php $i++; } ?>
            </ul>
        </div>
        <div class="commodity_con">
            <?php foreach($showDatas as $infos) { ?>
            <div class="con_outer_wrap" style="display:block;">
                <ul class="clearfix">
                    <?php $i = 1; foreach ($infos as $info) { ?>
                    <?php if ($i % 9 == 1) { echo '<li class="clearfix">'; } ?>
					<div class="commodity_pos" onclick="show_div('product', <?= $info['id']; ?>,'<?= $info['name']; ?>','<?= $info['main_photo']; ?>', '<?= $info['description']; ?>')">
                            <dl class="commodity_wrap clearfix">
                                <dt>
								<a href="javascript:;" onclick="TJJ.track({block: 'yjsp',content: '<?= $info['id']; ?>',act_id: '<?= $info['category_id']; ?>',item_id: '<?= $info['id']; ?>',rank: 1})">
								<img src="<?= $info['main_photo']; ?>" class="lazy_tg" data-original="<?= $info['main_photo']; ?>"
                                        height=120 width=120>
                                    </a>
                                </dt>
                                <dd>
								<a href="javascript:;"><?= $info['name']; ?></a>
                                    <p class="price_discount">2月28日9:00抢购</p>
                                    <p class="commodity_price">
                                        <em></em>
										<strong><i>￥</i><?= $info['price']; ?></strong>
										<span><?= $info['unit']; ?></span>
                                    </p>
                                </dd>
                            </dl>
                        </div>
                    <?php if ($i % 9 == 0) { echo '</li>'; } ?>
                    <?php $i++; } ?>
                    <?php if ($i % 9 != 0) { echo '</li>'; } ?>
                </ul>
                <ol></ol>
            </div>
            <?php } ?>
            <a href="javascript:;" class="baokuan_prev">上一页</a>
            <a href="javascript:;" class="baokuan_next">下一页</a>
        </div>
    </div>
</div>
