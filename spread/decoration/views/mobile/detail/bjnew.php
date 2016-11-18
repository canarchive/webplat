<?php
use yii\helpers\Url;
$this->params['cssFiles'] = [
	'bjmh/css/tab', 'bjmh/css/zxbj.min', 'bjmh/css/common.min',
];
$this->params['jsFiles'] = [
	'bjmh/js/jquery-1', 'bjmh/js/common',
];
$this->params['formPosition'] = 'hd-bjmh';
$this->params['formPositionName'] = '活动推广-报价mh';
?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 0) {
    //window.location.href = "<?= Yii::getAlias(Yii::$app->params['hostAliasPc']) . Url::to(['/decoration/detail/feature', 'view' => 'sj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>";
}
</script>
<style>
#container,.bjjg_qingdan,.item_hd{ width:100%; } 
#gc1_info,#gc2_info,#gc3_info,#gc4_info,#gc5_info,#gc6_info,#gc7_info{ display:none; } 
.orange1{font-size:18px; color:#ff4100;}
</style>
<script>var jq = jQuery.noConflict();</script>
<div class="mobile_top">
    <div class="mobile_top_son1">
	    <a href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>" class="detail-first">首页</a>
        <div class="detail-second1">免费量房/设计</div>
    </div>
</div>
<div class="h45"></div>
<section id="zxbjPage" class="zxbj-wrap">
    <figure class="zxbj-banner">
		<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/tenders_banner.png" />
    </figure>
    <h2 class="zxbj-apply-num">今日已有<em>3397</em>人获取报价</h2>
    <section>
        <form class="zxd-form sjbj-form" id="form_zx" method="post" action="javascript:void(0);">
            <div class="apply_info">
                <div class="zxd-form-area">
                    <input id="zxd-area" name="square" type="number" placeholder="输入你的房屋面积">
					<label for="zxd-area">平方米</label>
                </div>
                <input id="mobile" type="tel" name="mobile" placeholder="输入手机号估算精确报价">
                <input type="hidden" name="isprice" value="1">
                <input type="hidden" id="post_url" value="/zb/post">
				<input id="zxd-form-submit" type="button" value="估算报价">
            </div> 
        </form>
        <div class="yusuan">您的装修预算是
            <p id="bprice">? 元</p>
            <div id="message"></div>
        </div>
        <div id="container1" class="result-form">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/i-pic1.jpg" alt="">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/i-title1.jpg" alt="">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/i-pic2.jpg" alt="">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/i-title2.jpg" alt="">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/i-pic3.jpg" alt="">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/i-title3.jpg" alt="">
			<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/bjmh/images/i-pic4.jpg" alt="">
        </div>
        <div class="pg-ft">
		    <div class="company-info">装修领导者<?= Yii::$app->params['siteName']; ?>：
			<a href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>"><?= Yii::getAlias('@m.gallerycmsurl'); ?></a>&nbsp;</div>
            </div>
        </div>
    </section>
</section>
<Script language="javascript">
jq("#zxd-form-submit").click(function() {
    jq('#bprice').html(" 计算中。。。 ");
    var fengge = jq("#fengge option:selected").val();
    var zhonglei = jq("#zhonglei").val();
    var huxing = jq('#huxing option:selected').val();
    var yangtai = jq("yangtai option:selected").val();
    var dangci = jq("#dangci option:selected").val();
    var User_Shen = jq("#User_Shen  option:selected").val();
    var User_City = jq("#User_City  option:selected").val();
    var User_Town = jq("#User_Town  option:selected").val();
    var square = jq("#zxd-area").val();
    var address = jq("#loupan").val();
    var demo_zt = jq("#demo_zt").val();
    var shi = jq("#shi option:selected").val();
    var ting = jq("#ting option:selected").val();
    var chu = jq("#chu option:selected").val();
    var wei = jq("#wei option:selected").val();
    var mobile = jq("#mobile").val();
    var truename = jq("#truename").val();
    if (jq("#zxd-area").val() == '') {
        alert("请输入您的房屋面积");
        jq("#zxd-area").focus();
        return false;
    }
    if (jq("#mobile").val() == '') {
        alert("请输入您的手机号码");
        jq("#mobile").focus();
        return false;
    }
    /*if (jq("#demo_zt").val() == '') {
        alert("请选择您的装修状态");
        jq("#demo_zt").focus();
        return false;
    }*/
            var $data = {
                name: truename,
                mobile: mobile,
                note: '',
				area_input: square,
                //house_areaflag: house_areaflag,
				select_city: '',
                type: '',
            };


		    $data.position = jq("#position").val();
		    $data.position_name = jq("#position_name").val();
		    $data.info_id = jq("#info_id").val();
		    $data._csrf = jq("#_csrf").val();
            jq.ajax({
                type: 'POST',
                data: $data,
                url: window.signupUrl,// + '/jz-signup.html',
                dataType: "json",
                success:function(data){
console.log(data);
                    var quoteInfo = data.quoteInfo;
                    var bprice = (quoteInfo.price/10000).toFixed(2);
                    jq('#bprice').html(bprice + '万元');
                    return false;
                    /*$('.zp-btn-price').html('重新计算');
                    var priceElems = data.elems;
                    $('.price-shi').html(priceElems.bedroom_master.price_result+priceElems.bedroom_second.price_result);
                    $('.price-ting').html(priceElems.living_room.price_result + priceElems.dining_room.price_result);
                    $('.price-chu').html(priceElems.kitchen.price_result);
                    $('.price-wei').html(priceElems.toilet.price_result);
                    $('.price-yangtai').html(priceElems.balcony.price_result);
                    $('.price-other').html(priceElems.other.price_result);

                    $('.mobile-li').hide();
                    $('.tips-info').show();*/

                    if(data.status == 200){
                        var redirectUrl = window.BASE_URL + '/bm-result.html';
						alert(redirectUrl);
                        //window.location.href = redirectUrl;
                    }else if ( data.status == 400 ) {
                        jq('#message').html("<font style='color:red;'>" + data.message + "</font>");
                    } else {
                        jq('#message').html("<font style='color:red;'>报名失败</font>");
                    }
                }//end success

            })// end ajax


    return false;
});
</Script>
