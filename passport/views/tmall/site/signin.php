<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<?php echo $this->render('@website/views/basey/common/_header_base', []); ?>
<body id="pagebody">
     <script type="text/javascript">
    if(typeof($.cookie("__qc__k"))!="undefined"){
        $.cookie("__qc__k", null,{expires:0,path:"/"});   
    }
    var passwordRegex = /.*\s+.*/;
    function blankTest() {
        if (passwordRegex.test($('#passwd1').val())) {
            $("#passwd1").val("");
        }
    };
</script>
<?php echo $this->render('_common_top', []); ?>
<div class="wrap h580">
    <div class="loginItem auto ">
        <?php $form = ActiveForm::begin(['id' => 'J_login', 'options' => ['class' => 'loginBox']]); ?>
        <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">用户登录</span></div>
        <dl class="mg_t20 ">
            <!-- <dt class="inline">手机号：</dt> -->
            <dd class="inline mg_r5"><input value="请输入您的手机号码" type="text" name="username"  class=" loginTxt  w360 col_999"  /></dd>
            <dd class="J_validate inline col_f90 "></dd>
        </dl>
        <dl class=" mg_t20 ">
            <dd class="inline mg_r5">
                <input id="passwd1"  type="password" name="password"  onblur="blankTest();" class=" loginTxt w360 col_999 none"  />
                <input id="passwd_show" type="text" value="请输入您的密码"   class=" loginTxt w360 col_999"/>
            </dd>
            <dd class="J_validate inline col_f90" ></dd>
        </dl>
        <dl class="mg_t20 sizeZero none" id="authCode">
            <dd class="inline mg_r20"><input value="请填写右侧的验证码" type="text" name="" id="checkNum" class="loginTxt w160 col_999" maxlength="4"/></dd>
            <dd class="inline mg_r20"><img src="http://static.biyao.com/pc/common/img/grey.gif?v=biyao_e3e994b" height="45" width="120" id="imgVCode" /></dd>
            <dd class="inline mg_r5"><a href="javascript:;" id="imgChange" class="col_999 unLine">看不清<br/>换一张</a></dd>
            <dd class="J_validate_code inline col_f90 "></dd>
        </dl>
        <dl class="mg_t20 w400 relative">
            <!-- <dt class="inline">&nbsp</dt> -->
            <dd class="inline">
                <span class="inline mg_r10 "><i class="openIcon inline mg_r10" name="checkRememberMe"></i><span class="inline col_8a8a8a">下次自动登录</span></span>
				<a href="<?= Url::to(['site/forgetpwd']); ?>?returnUrl=http://www.biyao.com/home/index.html" class="inline col_link boxR">忘记密码</a>
            </dd>
        </dl>
        <dl class="mg_t10">
            <dd class="J_loginTips inline "><span class="col_f90"></span></dd>
        </dl>
		<input type="hidden"  id="returnUrlId" name="returnUrl" value="<?= $returnUrl; ?>"/>
        <input type="button"  class="J_login_btn loginBtn w400  inline t_c mg_t10" value="登录"/> <br/>
        <div class="w400 mg_t40">
            <p class="sizeZero">
                <span class="col_666 f14 mg_r10 inline">使用第三方账号登录：</span>
                <a class="inline weix_login" href="https://open.weixin.qq.com/connect/qrconnect?appid=wx80d97d6a31aaa448&redirect_uri=http://www.biyao.com/account/weixinlogin.html?returnUrl=http://www.biyao.com/home/index.html&response_type=code&scope=snsapi_login&state=123#wechat_redirect" style="border-left:1px solid #ddd">微信</a>
                <a class="qq_login inline mg_l10 "href="javascript:void(0);" onclick="qqLogin();" >qq</a>
            </p>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<script>
function qqLogin(){
    var returnUrl = $("#returnUrlId").val();
    var url = "http://www.biyao.com/account/qqlogin.html?returnUrl="+returnUrl;
    window.location.href=url;
}
</script>

<div data-selector="J_im" id="webIM_showDiv"></div>
<?php echo $this->render('@website/views/basey/common/_footer', []); ?>

<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/common.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/common_2.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/track.js?v="></script>
<script type="text/javascript">
$(function(){
    $(".loginTxt").focus(function(){
        if ($(this).val() == $(this)[0].defaultValue) {
            $(this).val("");
        }
    });

    $("#passwd_show").focus(function(){
        $(this).addClass("none");
        $("#passwd1").removeClass("none").focus();
    });
    $("#passwd1").blur(function(){
        if ($.trim($(this).val()) == "") {
            $("#passwd_show").removeClass("none");
            $(this).addClass("none")
        }
    });
    $(".loginTxt").blur(function(){
        if ($.trim($(this).val()) == "") {
            $(this).val($(this)[0].defaultValue);
        }
    });
});
</script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/validate.js?v="></script>
<script type="text/javascript">
$(function(){
    setTimeout(function(){
        LT.temp.loginFn.changeVcode();
    },100);
    
    $('form').find("[name='checkRememberMe']").click(function(){
        $(this).parent().toggleClass('checked');
        if($(this).parent().hasClass('checked')){
            $(this).next().text("请勿在公用电脑上勾选此选项");
        }else{
            $(this).next().text("下次自动登录");
        }
    })
    LT.temp.loginFn.login($("#J_login"));
    isLoginError();
    $(".J_login_btn").click(function(){ 
        isLoginError();
    });
    $("#imgChange").bind('click',function(){
        LT.temp.loginFn.changeVcode();
    });
})

function register(){
	parent.window.open('<?= Url::to(['site/signup']); ?>?returnUrl='+parent.window.location.href);
}

function findpwd(){
	parent.window.open('<?= Url::to(['site/findpwd']); ?>?returnUrl='+parent.window.location.href);
}
    
//判断是否显示验证码登录 
function isLoginError()
{
    if(parseInt($.cookie("loginErrorTimes"))>=2){
        //$("#authCode").removeClass("none");
    }
}
</script>
<?php echo $this->render('@website/views/basey/common/_footer_base', []); ?>
