<!-- 5. 幸运大抽奖 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">幸运大抽奖</span><em></em></div>
<div class="bg-red jiang-box">
	<div class="jiang">


		<!-- 大转盘底图1，撑高度 -->
		<img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/jiang_bg1.jpg?v=1" class="jiang-bg" alt="">
		<!-- 大转盘容器 -->
		<div class="pan-box">
			<!-- 转盘背景图，撑高度 -->
			<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/jiang_pan_bg.png?v=1" class="pan-bg" alt="">
			<!-- 旋转容器 -->
		<div class="rotate"><img id="rotate" data-original="<?= $info['picture_lottery']; ?>" class="img100"></div>
			<!-- 按钮 -->
		<img id="rotateBtn" class="rotate-btn jz-lottery" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/jiang_btn.png"
			data-bonus_id=""
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id="1"
			data-position="lottery"
			data-position_name="幸运大抽奖"
			data-professor_id=""
		>
		</div>
	</div>
	<div class="jiang">
		<!-- 大转盘底图2，撑高度 -->
		<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/jiang_bg2.jpg?v=1" class="jiang-bg">


		<div class="txtbox">
			<div class="jiang-title">活动规则</div>
			<div class="jiang-con"><?php //echo $info['lottery_rule']; ?>
				<p>1、活动日期：活动时间：2016年X月X日～2016年X月X日。</p>
				<p>2、奖品需在抽取15日内成功签订施工合同后领取。</p>
				<p>3、每个手机号只能抽取1次，同一施工地址只可领取一份礼品，不可累积使用。</p>
				<p>4、奖品领取方式为：成功签订合同后，一二等奖奖品邮寄给业主指定地点，三四五等奖奖品，业主自行领取。</p>
				<p>5、奖品以实物为准，不兑现。</p>
			</div>
		</div>
	</div>
</div>
</section>
<!-- 5. 幸运大抽奖 end -->
