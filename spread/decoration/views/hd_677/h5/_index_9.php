<!-- 9. 环保主材 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">环保主材 一站配齐</span><em></em></div>
<div class="bg-red zhucai clearfix">
	<ul>
        <?php foreach ($brandInfos as $cId => $data) { ?>
		<li class="zhucai-item clearfix" data-active="0">
		    <div class="zhucai-l"><div class="txtbox"><p class="p1"><?= $data['name'] . count($data['infos']); ?></p><p class="p2"><?= $data['brief']; ?></p></div></div>
			<div class="zhucai-r bg-red clearfix">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/zhucai_l.jpg" class="btn-l">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/zhucai_r.jpg" class="btn-r">
				<div class="zhucai-box">
                    <?php foreach ($data['infos'] as $info) { ?>
					<div class="img1"><img data-original="<?= $info['logo']; ?>" class="img100"><p class="p1"><?= $info['name']; ?></p></div>
                    <?php } ?>
				</div>
			</div>
		</li>
        <?php } ?>
	</ul>
</div>
<div class="bg-red">
	<p class="tc"><input type="button" value="预约到店体验" class="yellow-btn jz-signup"
			data-bonus_id=""
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position="principalmaterial"
			data-position_name="主材按钮"
			data-professor_id=""
		></p>
</div>
</section>
<!-- 9. 环保主材 end -->
