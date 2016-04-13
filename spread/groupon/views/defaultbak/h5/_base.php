<section class="v2_tuan  bg_white">
    <div class="">
        <p class="tg-detail-more">
            <a href="javascript:void(0);" tjjj="waptg.tg_detail_new">
                <img class="lazy" width="610" height="260" data-original="http://mtgi1.jia.com/115/868/15868238.jpg">
            </a>
        </p>
		<h2 class="active_name_new"><?= $info['holding_at']; ?></h2>
        <input type="hidden" id="address_baidu" value="<?= $info['address']; ?>" />
        <div class="tg_address_new">
		    <?= $info['address']; ?>
            <b class="showall" style="right:.12rem"></b>
        </div>
        <div class="tg_time_new">
            活动时间09:00-18:00
			<span class="tg_num"><?= $info['signup_number']; ?>人已报名</span>
        </div>
    </div>
</section>
<!--活动基本信息.end-->
<!--优惠亮点、报名框-->
<section class="v2_tuan  bg_white mt-12 btm_eee top_eee">
    <div class="pd12_bot ">
        <p class="mt-6">
            <span class="span_r cffa92f">活动优惠</span>
            <em class="tg_yh_em">满1000减100 上不封顶</em>
        </p>
        <p class="mt-6">
            <span class="span_r cfb7c00">去现场买</span>
            <em class="tg_yh_em">400款商品线上预约来店面付尾</em>
        </p>
        <p class="mt-6">
            <span class="span_r cfb4d00">团家汇装修</span>
            <em class="tg_yh_em">团家汇施工包338元/㎡</em>
        </p>
    </div>
    <div class="tg_bm_new gomain" onclick="showBm_new('top')">免费报名</div>
    <div class="server-clause tg-server tg-server-fix">
        <p class="server-input-box">
            <span class="ss">
                我已阅读并同意团家汇网的
                <a href="http://m.jia.com/user/agreement">用户协议</a>
            </span>
        </p>
    </div>
</section>
