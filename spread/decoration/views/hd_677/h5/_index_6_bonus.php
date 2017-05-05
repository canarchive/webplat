<!-- 6. 抢红包 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">抢红包 享礼遇</span><em></em></div>
<div class="bg-red clearfix">

<ul class="hongbao">
    <?php $i = 0; foreach ($bonusInfos as $info) { ?>
	<?php if ($i / 2 == 0) { echo '<li class="hongbao-li">'; } ?>
		<div class="hongbao-item jz-bonus" 
		    data-bonus_id="<?= $info['id']; ?>"
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position="bonus"
			data-position_name="<?= $info['name']; ?>"
			data-professor_id=""
			>
			<div class="hongbao-bg"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/hongbao_bg.jpg" class="img100"></div>
			<div class="hongbao-con">
			    <span class="hb-money f18"><i class="money f12">¥</i><?= $info['price']; ?></span>
				<div class="txtbox tc">
					<p class="p1">合同款满5万元</p>
					<span class="p2">减<?= $info['price']; ?>元现金</span>
				</div>
			</div>
		</div>
	<?php if ($i / 2 == 1) { echo '</li>'; } ?>
    <?php $i++; } ?>
	<?php if ($i / 2 != 1) { echo '</li>'; } ?>
</div>
</section>
<!-- 6. 抢红包 end -->
