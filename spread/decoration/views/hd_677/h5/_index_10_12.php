<!-- 10. 优质辅材 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">优质辅材 环保加码</span><em></em></div>
<div class="bg-red">
<ul class="bg-red fucai clearfix">
    <li class="fucai-li2"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/fucai_01.jpg" class="img100"></li>
    <li class="fucai-li2"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/fucai_02.jpg" class="img100"></li>
    <li class="fucai-li3"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/fucai_03.jpg" class="img100"></li>
    <li class="fucai-li3"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/fucai_04.jpg" class="img100"></li>
    <li class="fucai-li3"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/fucai_05.jpg" class="img100"></li>
</ul>
<div class="bg-red">
	<p class="tc"><input type="button" value="预约到店体验" class="yellow-btn jz-signup"
			data-bonus_id=""
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position="bestmaterial"
			data-position_name="优质辅材"
			data-professor_id=""
		></p>
</div>

</section>
<!-- 10. 优质辅材 end -->


<!-- 11. 47道标准施工工序 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">47道标准施工工序</span><em></em></div>
<div class="bg-red">
<?php
    $processInfos = [
		'01' => '水电位放线',
		'02' => '暗管开槽',
		'03' => '电路布线',
		'04' => '水路布管',
	];
?>
	<ul class="gongxv clearfix">
        <?php foreach ($processInfos as $key => $item) { ?>
		<li><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/process-677-<?= $key; ?>.jpg" class="img100"><p class="p1"><span class="num"><?= $key; ?></span><?= $item; ?></p></li>
        <?php } ?>
	</ul>
	<p class="tc mt5"><input type="button" value="免费咨询其他装修流程" class="yellow-btn jz-signup"
			data-bonus_id=""
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position="workprocess"
			data-position_name="标准施工工序"
			data-professor_id=""
		></p>
</div>
</section>
<!-- 11. 47道标准施工工序 end -->


<!-- 12. 6大费用全免 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">6大费用全免</span><em></em></div>
<div class="bg-red">
	<div class="bee-box">
		<img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/bee.jpg" class="beeimg" alt="">
		<div class="txt bee0 f20 fB">免费</div>
		<div class="txt bee1">免<span class="yellow-zzv3">垃圾清运费</span></div>
		<div class="txt bee2">免费<span class="yellow-zzv3">测量</span></div>
		<div class="txt bee3">免费<span class="yellow-zzv3">管理</span></div>
		<div class="txt bee4">免费<span class="yellow-zzv3">设计</span></div>
		<div class="txt bee5">免<span class="yellow-zzv3">施工保护费</span></div>
		<div class="txt bee6">免<span class="yellow-zzv3">杂物费</span></div>
	</div>
	<p class="tc mt5">
	<input type="button" value="马上预约体验" class="yellow-btn jz-signup"
		data-bonus_id=""
		data-gift_bag_id=""
		data-info_id="<?= $info['id']; ?>"
		data-lottery_id=""
		data-position="sixfree"
		data-position_name="六大费用全免"
		data-professor_id=""
	></p>

</div>
</section>
<!-- 12. 6大费用全免 end -->
