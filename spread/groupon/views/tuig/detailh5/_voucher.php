<?php
$categoryInfos = $voucherInfos['categoryInfos'];
$infos = array_slice($voucherInfos['infosInuse'], 0, 10);
$totalCount = count($infos);
$curCateId = in_array($cateId, array_keys($categoryInfos)) ? $cateId : 0;
?>
        <div class="voucher mt3 clearfix">
            <h2 class="title-tag fN cDGray">
				<i></i><?php if (!empty($curCateId)) { echo $categoryInfos[$curCateId]['name']; } ?><span class="ml3">代金券</span>
            </h2>
            <ul class="cWhite clearfix f12">
				<?php foreach ($infos as $k => $v) { ?>
				<li data-vid="<?= $v['business_voucher_id']; ?>" data-name="<?= $v['business_name']; ?>">
				<span class="f34 ml5 fB"><em class="f26">￥</em><em class="price"><?= $v['voucher_money']; ?></em></span><br />
				<span class="surplus">剩余<?= $v['voucher_handing_num']; ?>张</span>
				<p class="mt3 cMdGray"><?= $v['business_name']; ?></p>
                </li>
                <?php } ?>
            </ul>
			<!--<a href="/tuan/voucher/{$info.groupon_id}/" class="cOrange block-more f14">更多代金券<i class="iconfont f12">&#xe60c;</i></a>-->
        </div>
