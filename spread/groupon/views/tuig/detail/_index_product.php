	<div class="mainBgThree bgImg main_item" id="djsp">
		<?php if (!empty($productInfos['sale'])) { ?>
		<div class="mainBgThreeCon mainBgThrees" data-type="1">
			<div class="title" id="three">
				<h2><?= $productInfos['sale']['title']; ?>
				<i>千款产品厂家直供，打破行业底价，家装一站式购齐，不满意随时退。</i></h2>
			</div>

			<ul class="navList clear" id="navList">
				<li id="sale_cate_id_all">
					<a href="javascript:showProductSale(1, 0);">全部</a>
					<span></span>
				</li>
				<?php foreach ($productInfos['sale']['category'] as $k => $v) { ?>
				<?php if ($k > 0) { ?>
				<li id="sale_cate_id_<?= $k; ?>">
				<a href="javascript: showProductSale(1, <?= $k; ?>);"><?= $v; ?></a>
					<span></span>
				</li>
				<?php } ?>
				<?php } ?>
			</ul>

			<!-- 全部1 -->
			<div class="lister show" id="sale_content">
			</div>

			<?php if ($productInfos['sale']['pages'] > 1) { ?>
			<ul class="pageList2 clear" id="product_sale_page" style="position: absolute; left: 50%; margin-left: -73.5px; ">
                <?php for ($i = 1; $i <= $productInfos['sale']['pages']; $i++) { ?>
				<li <?php if ($i == 1) { echo 'class="show"'; } ?> onclick="javascript: showProductSale(<?= $i; ?>, 0);"><a href="#three"><?= $i; ?></a></li>
                <?php } ?>
			</ul>
			<?php } ?>

			<!-- 抢购就有礼 -->
			<a class="mainBgSevenBtn js_bm_pop" data-pos="product-sale-button" target="" href="javascript:;">抢购就有礼</a>

		</div>
		<?php } ?>
		
	</div>
	<!-- 第三模块 end -->

	<!-- 第四模块 start -->
	<div class="mainBgFour bgImg main_item" id="hbms">		

		<?php if (!empty($productInfos['seckill'])) { ?>
		<div class="mainBgThreeCon mainBgFours" data-type="2">
			<div class="title" id="four">
				<h2><?= $productInfos['seckill']['title']; ?>
				<i><?= $productInfos['seckill']['title_sub']; ?></i>
                </h2>
			</div>
			<div id="seckill_content"></div>

			<!-- 分页 -->
			<?php if ($productInfos['seckill']['pages'] > 1) { ?>
			<ul class="pageList3 clear" id="product_seckill_page">
                <?php for ($i = 1; $i <= $productInfos['seckill']['pages']; $i++) { ?>
				<li <?php if ($i == 1) { echo 'class="show"'; } ?> onclick="javascript: showProductSeckill(<?= $i; ?>, 0);"><a href="#four"><?= $i; ?></a></li>
                <?php } ?>
			</ul>
			<?php } ?>

			<!-- 点我预定吧！ -->
			<a class="mainBgSevenBtn js_bm_pop" data-pos="product-seckill-button" target="" href="javascript:;">点我预定吧！</a>

		</div>
		<?php } ?>
		
	</div>
	<!-- 第四模块 end -->

	<!-- 第五模块 start -->
	<div class="mainBgFive bgImg">
		<?php if (!empty($productInfos['auction'])) { ?>
		<div class="mainBgThreeCon mainBgFives" data-type="1">
			<div class="title" id="five">
			    <h2><?= $productInfos['auction']['title']; ?>
				<i><?= $productInfos['auction']['title_sub']; ?></i>
                </h2>
			</div>
			<div id="auction_content"></div>

			<!-- 分页 -->
			<?php if ($productInfos['auction']['pages'] > 1) { ?>
			<ul class="pageList4 clear" id="product_auction_page">
                <?php for ($i = 1; $i <= $productInfos['auction']['pages']; $i++) { ?>
				<li <?php if ($i == 1) { echo 'class="show"'; } ?> onclick="javascript: showProductAction(<?= $i; ?>, 0);"><a href="#five"><?= $i; ?></a></li>
                <?php } ?>
			</ul>
			<?php } ?>			

			<!-- 开始竞拍吧！ -->
			<a class="mainBgSevenBtn js_bm_pop" data-pos="product-auction-button" target="" href="javascript:;">开始竞拍吧！</a>
			
		</div>
		<?php } ?>
	</div>
	<!-- 第五模块 end -->
<script>
// 特价商品 
<?php if (!empty($productInfos['sale'])) { ?>
var saleJson = <?= $productInfos['sale']['product']; ?>;
var showCountSale = <?= $productInfos['sale']['showCount']; ?>;
function showProductSale(page, categoryId)
{
	var i = j = 0;
	var htmlContent = title = '';

	$.each(saleJson, function(n, value) {
		if (categoryId > 0) {
		    if (value.product_category_id == categoryId) {
		        htmlContent += saleProductContent(i, value);
		        i++;
			}
		} else {
		    if (page == 1) {
			if (i < showCountSale) {
			    $("#product_sale_page").show();
			    htmlContent += saleProductContent(j, value);
				j++;

			}
			} else {
			if ((i >= (page - 1) * 36) && (i < (page * 36))) {
			    htmlContent += saleProductContent(j, value);
				j++;
			}
			}
		    i++;
		}
	});
	if (i % 4 != 3) {
		htmlContent += '</ul>';
	}
	if (categoryId > 0) {
		$("#sale_cate_id_" + categoryId).addClass('show');
		$("#product_sale_page").hide();
	} else {
		$("#product_sale_page").show();
		$("#sale_cate_id_all").addClass('show');
	}	

	$('#sale_content').html(htmlContent);
	bindMouseOverCover();//透明层
	homeFair.signUpPop();//报名弹出框
}

function saleProductContent(i, value)
{
    var content = '';
    if (i % 4 == 0) {
        content += '<ul class="list clear">';
    }
    content += '<li><a class="img js_bmlq_pop" data-pos="product-sale" data-pid="' + value.product_id + '" href="javascript:;">'
        + '<img src="' + value.attachments_path + '" alt="特价商品" width="283px" height="283px">'
        + '<strong></strong><span>' + value.info + '</span></a>'
        + '<div class="listCon"><p class="p1">' + value.product_name + '</p>'
        + '<a class="p2">原价：￥' + value.original_price + '</a>'
        + '<p class="p3"><span>火爆特价：￥</span><em>' + value.current_price + '</em>'
        + '<button class="js_bmlq_pop" data-pos="product-sale" data-pid="' + value.product_id + '">立即预定</button></p></div></li>';

    if (i % 4 == 3) {
        content += '</ul>';
    }
    return content;

}
var curCateId = <?php $cateId = in_array($cateId, array_keys($productInfos['sale']['category'])) ? $cateId : 0; echo $cateId; ?>;
showProductSale(1, curCateId);
<?php } ?>

// 秒杀商品 
<?php if (!empty($productInfos['seckill'])) { ?>
var seckillJson = <?= $productInfos['seckill']['product']; ?>;
var showCountSeckill = <?= $productInfos['seckill']['showCount']; ?>;
function showProductSeckill(page)
{
	var i = j = 0;
	var htmlContent = title = '';
	$.each(seckillJson, function(n, value) {
		if (page == 1) {
			if (i < showCountSeckill) {
			    htmlContent += seckillProductContent(j, value);
				j++;
			}
		} else {
			if ((i >= (page - 1) * 36) && (i < (page * 36))) {
			    htmlContent += seckillProductContent(j, value);
				j++;
			}
		}
	    i++;			
	});
	$("#product_seckill_page").show();
	if (i % 4 != 3) {
		htmlContent += '</ul>';
	}

	$('#seckill_content').html(htmlContent);
	bindMouseOverCover();//透明层
	homeFair.signUpPop();//报名弹出
}

function seckillProductContent(i, value)
{
    var content = '';

    if (i % 4 == 0) {
        content += '<ul class="list clear">';
    }

	content += '<li><a class="img js_bmlq_pop" data-pos="product-seckill" data-pid="' + value.product_id + '" href="javascript:;">'
		+ '<img src="' + value.attachments_path + '" alt="特价商品" width="283px" height="283px">'
		+ '<strong class="mins"></strong><span>' + value.info + '</span>'
		+ '</a>'
		+ '<div class="listCon"><p class="p1">' + value.product_name + '</p>'
		+ '<span class="p4">限量：1件</span>'
                + '<a class="p2" style="display:none;">原价：￥' + value.original_price + '</a>'
		+ '<p class="p3"><span>秒杀价：￥</span><em>' + value.current_price + '</em>'
		+ '<button class="js_bmlq_pop" data-pos="product-seckill" data-pid="' + value.product_id + '">立即预定</button></p></div></li>';

    if (i % 4 == 3) {
        content += '</ul>';
    }
    return content;

}
showProductSeckill(1, 0);
<?php } ?>

// 竞拍商品 
<?php if (!empty($productInfos['auction'])) { ?>
var auctionJson = <?= $productInfos['auction']['product']; ?>;
var showCountAuction = <?= $productInfos['auction']['showCount']; ?>;
function showProductAuction(page)
{
	var i = j = 0;
	var htmlContent = title = '';
	$.each(auctionJson, function(n, value) {
		if (page == 1) {
			if (i < showCountAuction) {
			    htmlContent += auctionProductContent(j, value);
				j++;
			}
		} else {
			if ((i >= (page - 1) * 36) && (i < (page * 36))) {
			    htmlContent += auctionProductContent(j, value);
				j++;
			}
		}
	    i++;
	});
	$("#product_auction_page").show();
	if (i % 4 != 3) {
		htmlContent += '</ul>';
	}

	$('#auction_content').html(htmlContent);
	bindMouseOverCover();//透明层
	homeFair.signUpPop();//报名弹出
}

function auctionProductContent(i, value)
{
    var content = '';

    if (i % 4 == 0) {
        content += '<ul class="list clear">';
    }

	content += '<li><a class="img js_bmlq_pop" data-pos="product-auction" data-pid="' + value.product_id + '" href="javascript:;">'
		+ '<img src="' + value.attachments_path + '" alt="特价商品" width="283px" height="283px">'
		+ '<strong class="mines"></strong><span>' + value.info + '</span>'
		+ '</a>'
		+ '<div class="listCon"><p class="p1">' + value.product_name + '</p>'
                + '<a class="p2" style="display:none;">原价：￥' + value.original_price + '</a>'
		+ '<p class="p3 mt20"><span>起拍价：￥</span><em>' + value.current_price + '</em>'
		+ '<button class="js_bmlq_pop" data-pos="product-auction" data-pid="' + value.product_id + '">我要竞拍</button></p></div></li>';

    if (i % 4 == 3) {
        content += '</ul>';
    }
    return content;

}
showProductAuction(1, 0);
<?php } ?>
</script>
