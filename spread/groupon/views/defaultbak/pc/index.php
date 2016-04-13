<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php echo $this->render('_header', ['info' => $info, 'asseturl' => $asseturl]); ?>

<?php echo $this->render('_input', ['info' => $info]); ?>
<?php echo $this->render('_banner', ['info' => $info]); ?>
<?php echo $this->render('_nav', ['info' => $info]); ?>

<div class="J_tg_main">
    <?php echo $this->render('_index_item1', ['info' => $info]); ?>
    <?php echo $this->render('_index_item2', ['info' => $info, 'productInfos' => $productInfos]); ?>
    <?php echo $this->render('_index_item3', ['info' => $info, 'categoryInfos' => $categoryInfos, 'productInfos' => $productInfos]); ?>
    <?php echo $this->render('_index_item4', ['info' => $info, 'categoryInfos' => $categoryInfos, 'brandInfos' => $brandInfos]); ?>
    <?php echo $this->render('_index_item6', ['info' => $info]); ?>
    <div id="item7" class="item_box"></div>
    <?php //echo $this->render('_index_item7', ['info' => $info]); ?>
    <?php echo $this->render('_index_item8', ['info' => $info]); ?>
</div>

<?php echo $this->render('_float', ['info' => $info]); ?>

<script src="<?= $asseturl; ?>js/tk.js?v=20151121"></script>
<script>
function show_div(poptype, id, name, logo, description) {
	$("#position").val(poptype);
	$("#position_name").val(name);
	$("#" + poptype + "_id").val(id);
    $("#goods_list").html('');
    $("#shop_id").val(shop_id);
	var leftStr = "<a href='javascript: void(0);'><img src='" + logo + "' width=180 height=160 /></a><p>" + name + "</p>";
    $(".booth_l").html(leftStr);
    $(".m_b_booth_info").html(description);
	$(".main_bran_opa,.main_bran_tk").show();
}

$('.m_b_sub').live('click',
function() {
    if ($(this).hasClass('no_open')) {
        return false;
    }
    var params = new Object;
    params.actions_id = $("#actions_id").val();
    params.realname = $("input[name=realname]").val();
    params.mobile = $("input[name=mobile]").val();
    params.shop_id = $("#shop_id").val();
    params.verify = $("input[name=verifys]").val();
    params.agreement = $("input[name=agreements]").val();
    $.jia.signup(params);
});
$(document).ready(function() {
    function getPos(obj) {
        var l = 0,
        t = 0;
        while (obj) {
            l += obj.offsetLeft;
            t += obj.offsetTop;
            obj = obj.offsetParent;
        }
        return {
            left: l,
            top: t
        }
    }
    var winH = document.documentElement.clientHeight;
    $('.lazy_tg').lazyload();

    //关闭弹框
    $(".m_b_close").click(function() {
        $(".main_bran_opa,.main_bran_tk").hide();
    });

    /*报名*/
    $("a[name=signup]").click(function() {
        if ($(this).hasClass('no_open')) {
            return false;
        }
        if ($("input[name=actions_id]").val() == "") {
            alert("数据有误，请刷新页面");
            return false;
        }
        if ($("input[name=del_flag]").val() != "0") {
            alert("活动已结束");
            return false;
        }
        if ($(this).parent().parent().hasClass('float_con_wrap') || $(this).parent().parent().hasClass('tg_form_wrap')) {
            $('.opa_layer,.tg_mask').show();
            $(this).addClass('remove_mask');
        } else if ($(this).parent().parent().hasClass('msg_address_wrap')) {
            $('.msg_address_wrap').hide();
            $(this).addClass('msg');
        } else if ($(this).parent().parent().hasClass('live_sign')) {
            //alert($('.live_sign').get(0).className)
            $('.live_sign').removeClass('show');
            $(this).addClass('msg');
        }

        var str = $(this).attr('val');
        var sign_from = $(this).attr('from');
        var params = new Object;
        params.realname = $("input[name=realname" + str + "]").val();
        params.mobile = $("input[name=mobile" + str + "]").val();
        params.verify = $("input[name=verify" + str + "]").val();
        params.agreement = $("input[name=agreement" + str + "]").val();
        if (sign_from != null) {
			$("#position").val(sign_from);
        }
        $.jia.signup(params);
    });

    $(".sb_rand_code").focus(function() {
        $(this).parent().find('img').attr('src', 'http://tg.jia.com/index.php/ajax/verifycode?w=80&h=37&d=' + Math.random());
    });
});
</script>
<!--*家博会js加载 开始*-->
<!--*家博会js加载 结束*-->
<script src="<?= $asseturl; ?>js/final_edition.js"></script>
<script src="<?= $asseturl; ?>js/global_new.js?v=20151123"></script>

<?php echo $this->render('_footer', ['info' => $info]); ?>
<?php echo $this->render('../../_common_input', ['info' => $info]); ?>
<script src="<?= $asseturl; ?>js/jia-common.js"></script>
<script type="text/javascript">
var TJJ = {};
TJJ.UserCookieName = "JIA_user_name";
TJJ.AreaCookieName = "jia_city_id";
TJJ.t1 = (new Date).getTime();
TJJ.action = function() {};
TJJ.track = function() {};
</script>
<script src="<?= $asseturl; ?>js/tjj.js" type="text/javascript"></script>
<script src="<?= $asseturl; ?>js/qj_popbar.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("img.lazy").show().lazyload();
});
</script>
<div class="baidu_analysis"></div>
</body>
</html>
