<?php
$categoryInfos = $voucherInfos['categoryInfos'];
$infos = array_merge($voucherInfos['infosInuse'], $voucherInfos['infosOver']);
$jsonInfos = json_encode($infos);
$totalCount = count($infos);
$showCount = $totalCount >= 16 ? 16 : floor($totalCount / 4) * 4;
$showCount = empty($showCount) ? $totalCount : $showCount;

$pages = ceil($totalCount / 16);
$curCateId = in_array($cateId, array_keys($categoryInfos)) ? $cateId : 0;
?>
	<div class="mainBgSeven bgImg main_item" id="coupon">
		<div class="mainBgThreeCon mainBgSevens">
			
			<div class="title" id="seven">
				<h2>代金券抢购
				<i>价值1000万的代金券每日限量发送</i>
                </h2>
			</div>
			
			<div class="mainBgSevenNavList">
				<ul class="mainBgSevenNav clear">
					<li id="voucher_cate_id_all">
						<a href="javascript: showVoucherInfo(1, 0);">全部<i></i></a>
					</li>
				<?php foreach ($categoryInfos as $k => $v) { ?>
				<li id="voucher_cate_id_<?= $k; ?>">
					<a href="javascript: showVoucherInfo(1, <?= $k; ?>);"><?= $v['name']; ?></a>
					<em></em>
				</li>
                <?php } ?>
				</ul>

				<!-- 全部start -->
				<div class="mainBgSevenList show" id="voucher_content">
				</div>
				<!-- end全部 -->
			</div>

			<!-- 分页 -->
			<?php if ($pages > 1) { ?>
			<ul class="pageList1 clear" id="product_voucher_page">
                <?php for ($i = 1; $i <= $pages; $i++) { ?>
				<li <?php if ($i == 1) { echo 'class="show"'; } ?> onclick="javascript: showVoucherInfo(<?= $i; ?>, 0);"><a href="#seven"><?= $i; ?></a></li>
                <?php } ?>
			</ul>
            <?php } ?>
			<!-- 查看全部优惠券 -->
			<a class="mainBgSevenBtn js_bm_pop" data-pos="voucher-button">领取代金券</a>

		</div>			
	</div>
<script>
var voucherJson = <?= $jsonInfos; ?>;
var showCountVoucher = <?= $showCount; ?>;
function showVoucherInfo(page, categoryId)
{
	var i = j = 0;
	var htmlContent = title = '';
	$.each(voucherJson, function(n, value) {
		if (categoryId > 0) {
		    if (value.business_category_id == categoryId) {
		        htmlContent += voucherProductContent(i, value);
		        i++;
			}
		} else {
		    if (page == 1) {
			if (i < showCountVoucher) {
			    htmlContent += voucherProductContent(j, value);
				j++;
			}
			} else {
			if ((i >= (page - 1) * 16) && (i < (page * 16))) {
			    $("#product_voucher_page").show();
			    htmlContent += voucherProductContent(j, value);
				j++;
			}
			}
		    i++;
		}
	});
	if (i % 4 != 3) {
		htmlContent += '</ul>';
	}
	$(".mainBgSevenNav li").removeClass("show");
	if (categoryId > 0) {
		$("#voucher_cate_id_" + categoryId).addClass('show');
		$("#product_voucher_page").hide();
	} else {
		$("#voucher_cate_id_all").addClass('show');
		$("#product_voucher_page").show();
	var $pageList1 = $('.pageList1'),
        $pageList_li1 = $('.pageList1 li');
        pageShow($pageList1,$pageList_li1,'show');
	}		

	$('#voucher_content').html(htmlContent);
    homeFair.getCoupon();
}

function voucherProductContent(i, value)
{
    var content = '';
    if (i % 4 == 0) {
        content += '<ul class="clear">';
    }
    var j = (i % 2) + 1;
    var voucherName = value.voucher_sort ? value.voucher_sort : '代金券';

	content += '<li><p class="title">' + value.business_name + '</p>'
		+ '<div class="coupons' + j + '" alt="'+value.business_id+'">'
		+ '<img class="left" src="' + value.logo_path + '" alt="代金券" width="140" height="84">'
		+ '<p class="right">￥' + value.voucher_money + '<span>' + voucherName + '</span>'
		+ '</p></div><div class="btn clear"><a>剩余<em>' + value.voucher_handing_num + '</em>张</a>'
		+ '<span alt="' + value.business_id + '" data-pos="voucher" data-vid="' + value.business_voucher_id + '" data-money="' + value.voucher_money + '">点击领取</span></div></li>';

    if (i % 4 == 3) {
        content += '</ul>';
    }
    return content;
}
function pageShow(obj1,objLi,sClass){
    var objWidth = -((objLi.width()+21)*objLi.length)/2;
    obj1.css({'position':'absolute','left':'50%','margin-left':objWidth});
    objLi.bind('click',function() {
        objLi.removeClass(sClass);
        $(this).addClass(sClass);
    });
}

var curCateId = <?= $curCateId; ?>;
showVoucherInfo(1, curCateId);
</script>
