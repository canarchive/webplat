<div id="item4" class="J_item_box_wrap item_box">
    <div class="J_item_title">
        <h2>品牌云集<span>文案--上预约锁定，凭短信至现场开单！</span></h2>
    </div>
    <div class="tg_qjzx">
        <ul class="clearfix">
            <?php foreach ($brandInfos as $info) { ?>
			<li onclick="show_div('brand', <?= $info['id']; ?>,'<?= $info['name']; ?>','<?= $info['logo']; ?>')" class="commodity_pos">
                <div class="qjzx_item_above">
                    <dl class="clearfix">
                        <dt>
                            <a onclick="" href="javascript:;">
							    <img width="120" height="120" data-original="<?= $info['logo']; ?>" src="<?= $info['logo']; ?>" class="lazy_tg">
                            </a>
                        </dt>
                        <dd>
                            <h4>
							    <a href="javascript:;"><?= $info['name']; ?></a>
                            </h4>
							<p><?= $info['description']; ?></p>
                        </dd>
                    </dl>
                    <div class="qjzx_item_btm">
                        火热报名中
                        <a href="javascript:;" class="qjzx_yy_btn">
                            点此报名
                        </a>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
