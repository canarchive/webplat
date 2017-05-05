<!-- 14. 全程自有产业工人施工 start -->
<section>
<div class="bg-red zzv3-titlebox pt6"><em></em><span class="txt">全程自有产业工人施工</span><em></em></div>
<div class="bg-red tc">
	<div class="zzv3-tools-box clearfix">
	    <div class="tools-bg-line"></div>
	    <div class="tools-item"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/tools.jpg" class="img100"><p class="f12 cWhite mt4">专业工具</p></div>
	    <div class="tools-item"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/tools.jpg" class="img100"><p class="f12 cWhite mt4">专业工具</p></div>
	    <div class="tools-item"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/tools.jpg" class="img100"><p class="f12 cWhite mt4">专业工具</p></div>
	    <div class="tools-item"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/tools.jpg" class="img100"><p class="f12 cWhite mt4">专业工具</p></div>
	</div>
</div>
</section>
<!-- 14. 全程自有产业工人施工 end -->


<!-- 15. 安心服务保障 start -->
<section>
<div class="bg-red zzv3-titlebox pt6"><em></em><span class="txt">安心服务保障</span><em></em></div>
<ul class="bg-red zzv3-baozhang">
    <li class="baozhang-item clearfix"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/baozhang1.jpg" class="img"><p class="p1">监理全程到场</p><p class="p2">家装本就是复杂的事情，监理必须全程管控</p></li>
    <li class="baozhang-item clearfix"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/baozhang2.jpg" class="img"><p class="p1">环保健康为核心宗旨</p><p class="p2">环保主材、环保装修、环保服务</p></li>
    <li class="baozhang-item clearfix"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/baozhang3.jpg" class="img"><p class="p1">5年售后保障</p><p class="p2">高达5年售后保障，业主无后顾之忧</p></li>
    <li class="baozhang-item clearfix"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/baozhang4.jpg" class="img"><p class="p1">绝不偷工减料 以次充好</p><p class="p2">全程监管，公开接受业主投诉</p></li>
</ul>
</section>
<!-- 15. 安心服务保障 end -->


<!-- 16. 业主到店考察 start -->
<section>
<div class="bg-red zzv3-titlebox pt6"><em></em><span class="txt">业主到店考察</span><em></em></div>
<div class="bg-red kaocha">

	<p class="p1 mt2">专业门店、样板间</p>
	<p class="p1">200多名服务人员在这里告诉你如何装修</p>
	<img src="<?= $info['map']; ?>" class="imgmap" alt="地图">
	<p class="p2 mt4"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/loc.png" class="loc"><?= $info['address']; ?></p>
	<p class="p3 mt4"><img data-original="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/images/phone24.png" class="phone24" alt=""><?= $info['companyInfo']['hotline']; ?></p>
	<p class="tc mt5"><input type="button" value="一键发送到手机" class="yellow-btn jz-signup"
			data-bonus_id=""
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position="sendsms"
			data-position_name="一键发送到手机"
			data-professor_id=""
		></p>

</div>
</section>
<!-- 16. 业主到店考察 end -->


<!-- 17. 业主疑问咨询 start -->
<section>
<div class="bg-red zzv3-titlebox pt6"><em></em><span class="txt">业主疑问咨询</span><em></em></div>
<div class="bg-red zzv3-qa">
<ul>
    <?php foreach ($faqInfos as $info) { ?>
	<li class="qa-item clearfix">
		<span class="qa">Q&A</span>
		<div class="txtbox">
		    <p class="author"><?= $info['owner']; ?></p>
			<p class="q"><?= $info['name']; ?></p>
			<p class="a"><?= $info['description']; ?></p>
		</div>
	</li>
    <?php } ?>
</ul>
</div>
</section>
<!-- 17. 业主疑问咨询 end -->

