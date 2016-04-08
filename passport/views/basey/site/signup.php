<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<?php echo $this->render('@website/views/basey/common/_header_base', []); ?>
<body id="pagebody">
<script type="text/javascript">
$(function(){
    var passwordRegex = /.*\s+.*/;
    $(".loginTxt").focus(function(){
        if ($(this).val() == $(this)[0].defaultValue) {
            $(this).val("");
        }
    });

    $("#passwd_show").focus(function(){
        $(this).addClass("none");
        $("#passwd1").val("").removeClass("none").focus();
        $("#error1").html("<i class=\"tip_erorr inline\"></i>");
    });

    $("#passwd1").blur(function(){
        if($("#passwd1").val()==""){
            $("#passwd_show").removeClass("none");
            $(this).addClass("none")
        }
        if (passwordRegex.test($('#passwd1').val())) {
            $("#passwd_show").removeClass("none");
            $("#passwd1").val("");
            $(this).addClass("none")
            $("#error1").html("<i class=\"tip_erorr inline\"></i>密码中不可包含空格");
        }
    });

    $("#passwd_show2").focus(function(){
        $(this).addClass("none");
        $("#passwd2").removeClass("none").focus();
        $("#error2").html("<i class=\"tip_erorr inline\"></i>");
    });
    $("#passwd2").blur(function(){
        if($("#passwd2").val()==""){
            $("#passwd_show2").removeClass("none");
            $(this).addClass("none")
        }
        if (passwordRegex.test($('#passwd2').val())) {
          $("#passwd_show2").removeClass("none");
          $("#passwd2").val("");
           $(this).addClass("none");
           $("#error2").html("<i class=\"tip_erorr inline\"></i>密码中不可包含空格");
       }
        
    });
    $(".loginTxt").blur(function(){
          if ($.trim($(this).val()) == "") {
                $(this).val($(this)[0].defaultValue);
               }
    });
});
$(document).ready(function(){
    var source = $.cookie("source");
    $("#sourceID").attr("value",source);
});
</script>
<?php echo $this->render('_common_top', []); ?>
<div class="wrap">
<div class="loginItem auto ">
    <?php $form = ActiveForm::begin(['id' => 'J_phone']); ?>
    <div class="loginBox">
        <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">新用户注册</span></div>
        <dl class="mg_t20">
            <dd class="inline mg_r5">
                <input  type="text" value="请输入您的手机号码" class="loginTxt w360 col_999 border" name="mobile" data-type="mobile-number" maxlength="11"  />
                <input type="hidden" value="" name="source" id="sourceID"/>
            </dd>
            <dd class="J_validate inline col_f90"></dd>
        </dl>
        <dl class="mg_t20">
		    <dd class="inline mg_r5">
                <input type="text" value="请输入短信验证码" name="mobileCode" id="verificationCode"  class="loginTxt w200 col_999 border" />
                <input type="button" value="获取验证码" class="setCodeBtn" id="getVerificationCode" style="margin-left: 17px;" />
                <span class="inline mg_l5" id="desc" style="display: none"></span>
                <span id="prompt" class="none"></span>
            </dd>
            <dd class="J_validate inline col_f90"></dd>
        </dl>
        <dl class="mg_t20">
            <dd class="inline mg_r5">
                <input type="password" id="passwd1"    value="" name="password" id=""  class="loginTxt w360 col_999 border none"  />
                <input id="passwd_show" type="text" value="请输入您要设置的密码"  class=" loginTxt  w360 col_999 border"/>
            </dd>
            <dd class="inline col_f90 J_validate" id="error1"></dd>
        </dl>
        <dl class="mg_t20">
            <dd class="inline mg_r5">
                <input type="password" id="passwd2"  value="" name="confirmPassword" id=""  class="loginTxt w360 col_999 border none" />
                <input id="passwd_show2" type="text" value="请确认密码"  class=" loginTxt  w360 border col_999"/>
            </dd>
            <dd class="inline col_f90 J_validate" id="error2"></dd>
        </dl>
        <dl class="mg_t20">
            <dd class="inline">
                <label class="inline col_666 mg_r10 checked" id="ckfw"><i class="openIcon inline mg_r10"></i><span name="consent-agreement" class="inline col_8a8a8a">我已阅读并同意</span></label>
				<a href="<?php Url::to(['info/agreement']); ?>" target="_blank" class="inline col_link mg_r10"  id="linkServiceAgreement">《用户服务协议》</a><span class="isxt"></span> 
            </dd>
        </dl>
        <input href="javascript:;" type="submit" class="loginBtn w400 inline t_c mg_t20" value="注册"/>
        <input type="button" class="loginBtns w240 inline t_c mg_t20 none" value="注册"/>
        <div class="pop_mark" style="display:none"></div>
        <div class="pop pd_b30" style="width:600px;top:90px;left:50%;margin-left:-300px; display: none;">
            <div class="pop_hd"><span class="pop_close"></span> 网站服务协议</div>
            <div class="t_c mg_t20">
                 <a href="javascript:;" class="confirm_btn">同意协议并继续</a>
            </div>
        </div>   
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div>

<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/validate.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/common.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/dialog.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/registNew.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/regval.js?v="></script>
<script>
validateUserName();
LT.registNew();
LT.findpassword();
LT.controller.findPassword({
    interval: 60000
});
$(function () {
    $('.loginItem').css('min-height',($(window).height()-315)+'px');
    $('#ckfw').on('click', function () {
        if ($(this).hasClass('checked')){ 
            $(this).removeClass('checked');
        }
        else{
            $(this).addClass('checked');
            $('.isxt').html('');
        }
    });
    $("#linkServiceAgreement").click(function() {
        /* $(".pop").show();
        $(".pop_mark").show(); */
    });
    $(".pop_close").click(function() {
        $(".pop").hide();
        $(".pop_mark").hide();
    });
    $(".confirm_btn").click(function() {
        $(".pop").hide();
        $(".pop_mark").hide();
        if (!$('#ckfw').hasClass('checked')){
            $('#ckfw').click();
        }
    });
});
</script>
<div data-selector="J_im" id="webIM_showDiv"></div>

<?php echo $this->render('@website/views/basey/common/_footer', []); ?>

<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/common_2.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/track.js?v="></script>
<?php echo $this->render('@website/views/basey/common/_footer_base', []); ?>
