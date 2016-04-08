<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \passport\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>会员注册_1元云购</title>
  <meta name="Description" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" type="text/css" href="https://skin.1yyg.com/passport/CSS/sslComm.css?date=150713" />
<!--[if IE 6]>
    <script type="text/javascript" src="https://skin.1yyg.com/js/iepng.js"></script> 
    <script type="text/javascript">
    try{
      if(EvPNG!=null&&EvPNG!=undefined){
        EvPNG.fix('.transparent-png');
      }
    }
    catch(e){} 
    </script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="https://skin.1yyg.com/Passport/css/layout.css?date=0720" />
  <script language="javascript" type="text/javascript" src="https://skin.1yyg.com/JS/JQuery132.js"></script>
  <script id="pageJS" language="javascript" type="text/javascript" data="<?= Yii::getAlias('@asseturl'); ?>/website/1yyg/js/register.js"></script>
</head>
<body>
  <div class="wrapper">
    <input name="hidRegisterForward" type="hidden" id="hidRegisterForward" value="http://www.1yyg.com/" />
    <div class="g-logo-top">
      <a href="http://www.1yyg.com" class="transparent-png fl">
        <img src="https://skin.1yyg.com/Passport/images/logo.png" /></a>
      <span class="fr">已有账号？<a id="hylinkLoginPage" class="blue" href="login.html?forward=http%3a%2f%2fwww.1yyg.com%2f">立即登录</a></span>
    </div>

    <div class="g-contentCon clrfix">

      <div class="m-main clrfix">
        <h2 class="gray3">新用户注册</h2>
        <div class="register-form-con clrfix">
  <div class="row">
    <div class="col-lg-5">
      <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <?= $form->field($model, 'mobile') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
          'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
        ]) ?>
        <div class="form-group">
          <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
        </div>
        <div class="link-con clrfix">
          <a id="btnAgreeBtn" href="javascript:;" class="z-agreeBtn">同意协议并注册</a>
          <a id="btnAgreement" href="http://help.1yyg.com/htm-agreement.html" target="_blank" class="z-agreement">《1元云购服务协议》</a>
        </div>
      </div>
    </div>

    <!--版权-->
    <div class="g-copyrightCon clrfix">
    <div class="g-links">
      <a target="_blank" href="http://www.1yyg.com/" title="首页">首页</a><s></s>
      <a target="_blank" href="http://help.1yyg.com/htm-about.html" title="关于云购">关于云购</a><s></s>
      <a target="_blank" href="http://help.1yyg.com/htm-privacy.html" title="隐私声明">隐私声明</a><s></s>
      <a target="_blank" href="http://help.1yyg.com/info/htm-business.html">合作专区</a><s></s>
      <a target="_blank" href="http://www.1yyg.com/link.html">友情链接</a><s></s>
      <a target="_blank" href="http://help.1yyg.com/info/htm-jobs.html" title="加入云购">加入云购</a><s></s>
      <a target="_blank" href="http://help.1yyg.com/htm-contactus.html" title="联系我们">联系我们</a>
    </div>
    <div class="g-copyright">
      Copyright &copy; 2011 - 2015, 版权所有 1yyg.com 粤ICP备09213115号-1
    </div>
  </div>
  
  <script language="javascript" type="text/javascript">
    var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, B) { var B = function () { }; if (callBack != undefined) { B = callBack } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
    function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
    Base.getScript('https://skin.1yyg.com/JS/sslBottomFun.js?v=' + GetVerNum());
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-26998441-1']);
    _gaq.push(['_setDomainName', '1yyg.com']);
    _gaq.push(['_addOrganic', 'soso', 'w']);
    _gaq.push(['_addOrganic', 'sogou', 'query']);
    _gaq.push(['_addOrganic', 'youdao', 'q']);
    _gaq.push(['_addOrganic', 'baidu', 'word']);
    _gaq.push(['_addOrganic', 'baidu', 'q1']);
    _gaq.push(['_addOrganic', '360', 'q']);
    _gaq.push(['_trackPageview']);
    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = 'https://ssl.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <div style="display: none;">
    <script type="text/javascript" language="JavaScript" src=" https://s22.cnzz.com/stat.php?id=3362429&web_id=3362429"></script>
  </div>
    <link type="text/css" rel="stylesheet" href="https://skin.1yyg.com/CSS/pageDialog.css?v=141125" />
  <script language="javascript" type="text/javascript" src="https://skin.1yyg.com/JS/pageDialog.js?v=141125"></script>
  <div class="pageDialogBG" id="pageDialogBG"></div>
  <div class="pageDialogBorder" id="pageDialogBorder"></div>
  <div class="pageDialog" id="pageDialog">
    <div class="pageDialogClose" id="pageDialogClose" title="关闭"></div>
    <div class="pageDialogMain" id="pageDialogMain"> </div>
  </div>

  </div>
</body>
</html>


