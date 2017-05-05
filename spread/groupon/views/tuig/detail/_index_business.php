	<div class="mainBgSix bgImg" id="czsj">
		<?php if (!empty($businessInfos['totalCount'])) { ?>
		<div class="mainBgThreeCon  mainBgSixs">
			<div class="title" id="six">
				<h2>参展商家
				<i>一线品牌，源头采购，质量保证！</i>
                </h2>
			</div>

			<div class="mainBgSixCon">
				<ul class="mainBgSixNav clear">
					<li id="business_cate_id_all">
					    <a href="javascript: showBusiness(1);">全部品牌<span>(<?= $businessInfos['totalCount']; ?>)</span></a>
					</li>
					<?php foreach ($businessInfos['categoryInfo'] as $k => $v) { ?>
					<li id="business_cate_id_<?= $k; ?>">
					    <a href="javascript: showBusiness(1, <?= $k; ?>);"><?= $v['name']; ?><span>(<?= $v['count']; ?>)</span></a>
					</li>
                    <?php } ?>
				</ul>

				<!-- 全部品牌start -->
				<ul class="mainBgSixConList show clear" class="clear" id="business_content">
				</ul>
				<!-- end全部品牌 -->

				<!-- 分页 -->
				<?php if ($businessInfos['pages'] > 1) { ?>
				<ul class="pageList5 clear" id="business_page">
                    <?php for ($i = 1; $i <= $businessInfos['pages']; $i++) { ?>
					<li <?php if ($i == 1) { echo 'class="show"'; } ?> onclick="javascript: showBusiness(<?= $i; ?>);"><a href="#six"><?= $i; ?></a></li>
                    <?php } ?>
				</ul>
                <?php } ?>
			</div>
		</div>
        <?php } ?>
	</div>
	<!-- 第六模块 end -->
<script>
<?php if (!empty($businessInfos['totalCount'])) { ?>
// 商家信息展示
var businessJson = <?= $businessInfos['infos']; ?>;
var showCountBusiness = <?= $businessInfos['showCount']; ?>;
function showBusiness(page, categoryId)
{
	var i = 0;
	var htmlContent = title = '';
	$.each(businessJson, function(n, value) {
		if (categoryId > 0) {
		    if (value.business_category_id == categoryId) {
		    title = value.business_name.substr(0, 10);
		    htmlContent += '<li><img class="js_bm_pop" data-pos="business" data-bid="' + value.business_id + '" src="' + value.attachments_path + '" alt="商家logo" width="140px" height="84px">'
		        + '<p>' + title + '</p><span class="js_bm_pop" data-pos="business" data-name="' + value.business_name + '" data-bid="' + value.business_id + '" style="background: #0099cc; color: #f8f8f8;">质保金商家</span></li>';
			}
		} else {
		    if (page == 1 ) {
		        if (i < showCountBusiness) {
		            title = value.business_name.substr(0, 10);
		            htmlContent += '<li><img class="js_bm_pop" data-pos="business" data-bid="' + value.business_id + '" src="' + value.attachments_path + '" alt="商家logo" width="140px" height="84px">'
		                + '<p>' + title + '</p><span class="js_bm_pop" data-pos="business" data-name="' + value.business_name + '" data-bid="' + value.business_id + '" style="background: #0099cc; color: #f8f8f8;">质保金商家</span></li>';
				}
			} else {
    			if ((i >= (page - 1) * 36) && (i < (page * 36))) {
    		        title = value.business_name.substr(0, 10);
    		        htmlContent += '<li><img class="js_bm_pop" data-pos="business" data-bid="' + value.business_id + '" src="' + value.attachments_path + '" alt="商家logo" width="140px" height="84px">'
    		            + '<p>' + title + '</p><span class="js_bm_pop" data-pos="business" data-name="' + value.business_name + '" data-bid="' + value.business_id + '" style="background: #0099cc; color: #f8f8f8;">质保金商家</span></li>';
    			}
			}
		}
		i++;
	});
	if (categoryId > 0) {
		$("#business_page").hide();
		$("#business_cate_id_" + categoryId).addClass('show');
	} else {
		$("#business_cate_id_all").addClass('show');
		$("#business_page").show();
	}

	$('#business_content').html(htmlContent);
	homeFair.bmPop();//报名弹窗
}
var curCateId = <?php $cateId = in_array($cateId, array_keys($businessInfos['categoryInfo'])) ? $cateId : 0; echo $cateId; ?>;
showBusiness(1, curCateId);
<?php } ?>
</script>
