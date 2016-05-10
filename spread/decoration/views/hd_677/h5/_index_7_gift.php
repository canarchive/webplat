<!-- 7. 装修礼包 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">装修礼包 限量抢</span><em></em></div>
<div class="gift bg-red">
<ul class="gift-list clearfix">
    <?php foreach ($giftBagInfos as $info) { ?>
	<li class="gift-item">
		<img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/_img.jpg" class="img100">
		<div class="gift-tag-img"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/jiao.png" class="img100" alt=""></div>
		<div class="gift-tag-txt"><?= $info['sort']; ?></div>
		<div class="gift-btn jz-gift-bag" 
			data-bonus_id=""
			data-gift_bag_id="<?= $info['id']; ?>"
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position="giftbag"
			data-position_name="<?= $info['name']; ?>"
			data-professor_id=""
			>
			<span class="gift-name etc"><?= $info['name']; ?></span><span class="gift-yuding">抢先预订</span><span class="gift-i">&gt;</span>
		</div>
	</li>
    <?php } ?>
</ul>
</div>
</section>
<!-- 7. 装修礼包 end -->
