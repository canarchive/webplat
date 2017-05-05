<!-- 13. 专业团队 一对一星级服务 start -->
<section>
<div class="bg-red zzv3-titlebox pt6 pb3"><em></em><span class="txt">专业团队 一对一星级服务</span><em></em></div>
<div class="bg-red zzv3-jianli">
<ul class="jl-list clearfix">
    <?php foreach ($professorInfos as $info) { ?>
	<li class="jl-item clearfix">
		<div class="imgbox">
		    <img data-original="<?= $info['photo']; ?>" class="img100">
			<div class="jl-mask"></div>
			<div class="jl-name etc"><?= $info['name']; ?></div>
		</div>
		<div class="jl-btn jz-signup"
			data-bonus_id=""
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position="professor"
			data-position_name="<?= $info['name']; ?>"
			data-professor_id="<?= $info['id']; ?>"
		>让TA帮我免费监理</div>
	</li>
    <?php } ?>
</ul>
</div>
</section>
<!-- 13. 专业团队 一对一星级服务 end -->
