<?php $datas = array_slice($productInfos, 0, 9); ?>
<div id="item2" class="J_item_box_wrap item_box">
    <div class="J_item_title">
        <h2>特别推荐<span>商品超特价展售，惊喜多多，点产品免费报名活动。！</span></h2>
    </div>
    <div class="tg_qjzx">
        <ul class="clearfix">
            <?php foreach ($datas as $info) { ?>
			<li onclick="show_div('product', <?= $info['id']; ?>,'<?= $info['name']; ?>','<?= $info['main_photo']; ?>')" class="commodity_pos">
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
							<p><?= $info['description']; ?></p>
                            <div class="qjzx_yuyue">
                                <i>团家价</i>
								<strong><em>￥</em><?= $info['price']; ?></strong>
								<span><?= $info['unit']; ?></span>
                            </div>
                        </dd>
                    </dl>
                    <div class="qjzx_item_btm">
					    原价<b class="b_1"><?= $info['market_price']; ?></b>
                        <a href="javascript:;" class="qjzx_yy_btn">点此报名</a>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
