<div id="item2" class="J_item_box_wrap item_box">
    <div class="J_item_title">
        <h2>特惠预约<span>特惠产品，线上预约锁定，凭短信至现场开单！</span></h2>
    </div>
    <div class="tg_qjzx">
        <ul class="clearfix">
            <?php foreach ($productInfos as $info) { ?>
			<li onclick="show_div('product', <?= $info['id']; ?>,'<?= $info['name']; ?>','<?= $info['main_photo']; ?>', '<?= $info['description']; ?>')" class="commodity_pos">
                <div class="qjzx_item_above">
                    <dl class="clearfix">
                        <dt>
                            <a onclick="" href="javascript:;">
							    <img width="120" height="120" data-original="<?= $info['main_photo']; ?>" src="<?= $info['main_photo']; ?>" class="lazy_tg">
                            </a>
                        </dt>
                        <dd>
                            <h4>
							    <a href="javascript:;"><?= $info['name']; ?></a>
                            </h4>
                            <p>预约专享，凭预约短信购买</p>
                            <div class="qjzx_yuyue">
                                <i>团家价</i>
								<strong><em>￥</em><?= $info['price']; ?></strong>
								<span><?= $info['unit']; ?></span>
                            </div>
                        </dd>
                    </dl>
                    <div class="qjzx_item_btm">
                        已预约<b class="b_1">6</b>个，剩余<b class="b_2">9</b>个
                        <a href="javascript:;" class="qjzx_yy_btn">
                            免费预约
                        </a>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
