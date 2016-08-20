<?php
$datas = [];
foreach ($brandInfos as $info) {
	$datas[$info['category_id']][] = $info;
}
$showDatas = [];
?>
<div class="J_item_box_wrap item_box" id="item4">
    <div class="J_item_title">
        <h2>品牌亮相<span>大牌能放心，小品牌有性价比，生活简直完美！</span></h2>
    </div>
    <div class="clearfix content_box">
        <div class="commodity_item fl">
            <!--<h3><a href="javascript:;">全部品牌</a></h3>-->
            <ul>
                <?php $i = 1; foreach ($categoryInfos as $info) { if (!isset($datas[$info['id']])) { continue; } $showDatas[] = $datas[$info['id']]; ?>
                <li <?php if ($i == 1) { echo 'class="cur"'; } ?>>
                    <?= $info['name']; ?>
                    <em></em>
                </li>
                <?php $i++; } ?>
            </ul>
        </div>
        <div class="fl brand_big_wrap show_100">
            <div class="brand_con_wrap">
                <div class="commodity_scroll">
                    <?php foreach($showDatas as $infos) { ?>
                    <div class="brand_outer_wrap" style="display:block;">
                        <ul class="clearfix big_brand_wrap">
                            <?php $i = 1; foreach ($infos as $info) { ?>
                            <?php if ($i % 20 == 1) { echo '<li class="clearfix">'; } ?>
								<a class="suibian" href="javascript:void(0);" onclick="show_div('brand', <?= $info['id']; ?>,'<?= $info['name']; ?>','<?= $info['logo']; ?>', '<?= $info['description']; ?>')" tjjj="cwpp1">
                                    <div class="flip_wrap">
                                        <div class="img_layer">
										<img src="" class="lazy_tg" data-original="<?= $info['logo']; ?>" width=198 height=120>
                                        </div>
										<div class="text_layer" title="<?= $info['description']; ?>">
                                            <div>
											    <h5><?= $info['name']; ?></h5>
												<p><?= $info['description']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php if ($i % 20 == 0) { echo '</li>'; } ?>
                            <?php $i++; } ?>
                            <?php if ($i % 9 != 0) { echo '</li>'; } ?>
                        </ul>
                        <ol></ol>
                    </div>
                    <?php } ?>
                    <a href="javascript:;" class="brand_prev">上一页</a>
                    <a href="javascript:;" class="brand_next">下一页</a>
                </div>
            </div>
        </div>
    </div>
</div>
