<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\SigninForm */

$this->title = 'Signin';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>会员登录_1元云购</title>
  <meta name="Description" content="" />
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
  <link rel="stylesheet" type="text/css" href="https://skin.1yyg.com/Passport/css/layout.css?date=0617" />
  <script language="javascript" type="text/javascript" src="https://skin.1yyg.com/JS/JQuery132.js"></script>
  <script id="pageJS" language="javascript" type="text/javascript" data="https://skin.1yyg.com/Passport/JS/Login.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="g-logo-top g-logo-width">
    <a rel="nofollow" href="http://www.1yyg.com" class="transparent-png fl"><img src="https://skin.1yyg.com/Passport/images/logo.png"></a>
    <span class="fr"><a href="http://www.1yyg.com">返回首页</a></span>
  </div>
    <input name="hidLoginForward" type="hidden" id="hidLoginForward" value="http://www.1yyg.com/" />
    <input name="hidQQAppID" type="hidden" id="hidQQAppID" value="100511748" />
    <input name="hidWxAppID" type="hidden" id="hidWxAppID" value="wxe61d43f2e02a5b10" />
    <input name="hidAccount" type="hidden" id="hidAccount" />
    <div class="g-login-con clrfix" id="g_login">
      <div class="m-login-screen clrfix">
        <div id="loadingPicBlock" class="screen-left fl"></div>
        <div class="screen-right fr clrfix">
          <div class="login-panel" id="LoginForm">
            <dl>
              <dt>
                <em class="fl">登录</em>
                <a id="hylinkRegisterPage" tabindex="7" class="fr orange" href="register.html?forward=http%3a%2f%2fwww.1yyg.com%2f">免费注册<i class="passport-icon"></i></a>
              </dt>
              <dd>
                <div class="register-form-con clrfix">
<div class="site-signin">
  <h1><?= Html::encode($this->title) ?></h1>

  <p>Please fill out the following fields to signin:</p>

  <div class="row">
    <div class="col-lg-5">
      <?php $form = ActiveForm::begin(['id' => 'signin-form']); ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>
        <div style="color:#999;margin:1em 0">
          If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
        </div>
        <div class="form-group">
          <?= Html::submitButton('Signin', ['class' => 'btn btn-primary', 'name' => 'signin-button']) ?>
        </div>
      <?php ActiveForm::end(); ?>
    </div>
    <div>
      <td align="left">
      <a title="QQ" href="/thirduser/bind?platCode=qq">qq</a>
      <a title="新浪微博" href="/thirduser/bind?platCode=weibo">微博</a>
      <a title="豆瓣" href="/thirduser/bind?platCode=douban">豆瓣</a>
      <a title="腾讯微博" href="/thirduser/bind?platCode=tqq">腾讯微博</a>
      </td>
    </div>
  </div>
</div>
                </div>
              </dd>
              <dd class="text-alignR">
                <a id="hylinkGetPassPage" tabindex="3" class="gray9" href="findpassword.html?forward=http%3a%2f%2fwww.1yyg.com%2f">忘记密码？</a>
              </dd>
              <dd class="error-message orange" style="display: none;" id="dd_error_msg"></dd>
            </dl>
            <p><a id="btnSubmitLogin" href="javascript:;" class="z-agreeBtn" tabindex="4">登录</a></p>
            <div class="other-login">
              <span>使用其它方式快捷登录：</span>
              <a id="qq_login_btn" href="javascript:;" class="qq-icon" tabindex="5"><b class="passport-icon transparent-png"></b></a>
              <a id="wx_login_btn" href="javascript:;" class="wx-icon" tabindex="6"><b class="passport-icon transparent-png"></b></a>
            </div>
            <ul id="j-tips-wrap" class="j-tips-wrap j-login-page">
            </ul>
          </div>
          <div class="wx-login clrfix" id="wxLogin" style="display: none;">
            <h2 class="gray3">微信登录</h2>
            <p id="p_code"></p>
            <a id="a_return" href="javascript:;"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- 底部版权 -->
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
  </div>
</body>
</html>



