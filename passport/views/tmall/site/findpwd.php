<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
 <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
 <meta property="qc:admins" content="35713343766211176375747716" />
 <title>安全中心 | 必要平台 – 我要的，才是必要的 – 必要biyao.com</title>
 <link href="http://static.biyao.com/pc/favicon.ico" rel="shortcut icon"
	type="image/x-icon" />
 <link href="http://static.biyao.com/pc/favicon.ico" rel="icon"
	type="image/x-icon" />
 <script type="text/javascript">
	window.ApiSite = "http://api.biyao.com";    
	window.ControllerSite="";
	window.loginUserId=0;
	window.__pageType="other";
	
	if (window.loginUserId!=""){
	 	window.WebIMSite="http://webim.idstaff.com";
	}
	else
	{
		window.WebIMSite="http://webim.idstaff.com";	 
	}
 </script>
<link href="http://static3.biyao.com/pc/common/css/common.css?v=biyao_61bc246" rel="stylesheet" />
<link href="http://static4.biyao.com/pc/www/css/cm_www.css?v=biyao_088040a" rel="stylesheet" />
<script type="text/javascript"	src="http://static.biyao.com/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
<script type="text/javascript"	src="http://static1.biyao.com/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>  
<script type="text/javascript" src="http://static2.biyao.com/pc/common/js/lazyload.js?v=biyao_80d4f78"></script> 
<script type="text/javascript" src="http://static3.biyao.com/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
<script type="text/javascript">
	function GetRequest() {
		var url = location.search; //获取url中"?"符后的字串
		var theRequest = new Object();
		if (url.indexOf("?") != -1) {
			var str = url.substr(1);
			strs = str.split("&");
			for (var i = 0; i < strs.length; i++) {
				theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
			}
		}
		return theRequest;
	}
	var Request = new Object();
	Request = GetRequest();
	if(!$.cookie("source")){
		$.cookie('source', Request['source'],{domain:"biyao.com",path:"/"});
	}
</script>
</head>
<body id="pagebody">
	 <script type="text/javascript">
	$(function(){
		
	 	 $(".loginTxt").focus(function(){

				  if ($(this).val() == $(this)[0].defaultValue) {
					    $(this).val("");
				  }
				
			});
			$(".loginTxt").blur(function(){
				  if ($.trim($(this).val()) == "") {
					    $(this).val($(this)[0].defaultValue);
					   }
			});
	});
	
</script>
<div class="bg_fff bd_bottom_ea">
	<div class="wrap pub_logo_box clearfix">
		<div class="pub_logo f_l"><a href="http://www.biyao.com/home/index.html"><img alt="" src="http://static2.biyao.com/pc/www/img/logo.png?v=biyao_4637d54"></a></div>
		<div class="f_r">
			<ul class="sizeZero merchant_info_box">
				<li class="inline mg_l40 mg_t40">
					<span class="inline col_8c8">欢迎来到必要，请 </span><a class="col_8c8 inline mg_l5" href="/account/login.html?returnUrl=http://www.biyao.com/home/index.html">登录 </a><span class="col_8c8 mg_l5 mg_r5 inline">|</span><a class="col_8c8 inline" href="/account/register.html?returnUrl=http://www.biyao.com/home/index.html">注册</a> 
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="wrap">
<div class="loginItem  auto h580">
	<div class="loginBox">
		<form id="J_phone" method="post" action="/findpwd/validate">
		<input type="hidden" id="k" name="k" />
		<input type="hidden" name="returnUrl" value="http://www.biyao.com/home/index.html"/>
			<div class="inline loginTitBox"><i class="inline findwd_bg spIcon mg_r10"></i><span class="inline">找回密码</span></div>
			<dl class="mg_t20">
			<!-- 	<dt class="inline">手机号：</dt> -->
				<dd class="inline mg_r5">
					<input type="text" name="username" id="username" class="loginTxt  w360 col_999" value="请输入您的手机号码"  />
				</dd>
				<dd class="inline col_f90 J_validate" id="J_validate"></dd>
			</dl>
			<dl class="mg_t20">
			<!-- 	<dt class="inline">验证码：</dt> -->
				<dd class="inline mg_r5">
					<input type="text" name="txtVCode" id="txtVCode" class="loginTxt w160 inline col_999 mg_r20 "  value="请填写右侧的验证码" ></input> 
					<img id="imgVCode" src="" sid="" alt="" class="inline h40 w120 " />
					<div class="inline mg_l15"><a id="btnChangeVCode" href="javascript:;" class="col_999 unLine">看不清<br/>换一张</a></div>
				</dd>
				<dd class="inline col_f90 J_validate"></dd>
			</dl>
			<dl class="mg_t20">
			    <!--  <dt class="inline">&nbsp;</dt> -->
				<dd class="inline mg_r5">
					<a id="btnNextStep" href="javascript:;" class="J_release loginBtn w400  inline t_c" style="line-height:50px">获取手机验证码</a>
				</dd>
			</dl>
		</form>
	</div>
</div>
</div>



<div data-selector="J_im" id="webIM_showDiv"></div>

<div class="footer_links clearfix J_1200 auto">
    <div class="content wrap sizeZero">
    	<div class="footer_nav_box inline">
    		<ul class="footer_nav_list clearfix"> 
    			<li>
    				<a target="_blank" href="http://www.biyao.com/minisite/ljby">关于必要</a>
    				<span class="bg_line"></span>
    			</li>
    			<li>
    				<a target="_blank" href="http://www.biyao.com/help/8.html">加入必要</a>
    				<span class="bg_line"></span>
    			</li>
    			<li>
    				<a target="_blank" href="http://www.biyao.com/help/9.html">联系我们</a>
    				<span class="bg_line"></span>
    			</li>
    			<li class="none">
    				<a target="_blank" href="http://www.biyao.com/list/39/list-1.html">网站地图</a>
    			</li>
    			<li>
    				<a target="_blank" href="http://weibo.com/biyaoshangcheng">官方微博</a>
    				<span class="bg_line"></span>
    			</li>
    			
    		</ul>
    		<p class="col_999 lineH18 mg_t15">◎BIYAO.COM 2015 版权所有 <a class="col_999" href='http://www.miitbeian.gov.cn/' target="_blank">粤ICP备13088531号</a><br>   			
			</p>
    	</div>   
    	<div class="footer_evm sizeZero inline">
    		<div class="inline mg_r40 footer_evm_img">
    			<div class="an_bg inline mg_r15"></div>
    			<div class="inline evm_tit_msg">
    				<span class="col_333 f14">扫描二维码下载</span><br/>
					<span class="col_724 f14">必要手机客户端</span>
    			</div>
    		</div>
    		<div class="inline mg_r10 footer_evm_img">
    			<div class="weixin_bg inline mg_r15"></div>
    			<div class="inline evm_tit_msg">
    				<span class="col_333 f14">扫描二维码关注</span><br/>
					<span class="col_724 f14">必要官方微信</span>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<script src="http://static4.biyao.com/pc/common/js/common.js?v=biyao_c2ee9c2" type="text/javascript"></script>
	<script type="text/javascript"	src="http://static.biyao.com/pc/www/js/common.js?v=biyao_64f5d7c"></script>
	<script src="http://static3.biyao.com/pc/common/js/ui/validate.js?v=biyao_d65c35c" type="text/javascript"></script>
<script src="http://static4.biyao.com/pc/www/js/login/forgetpasswd.js?v=biyao_ae1d508" type="text/javascript"></script>
<script src="http://static.biyao.com/pc/common/js/ui/dialog.js?v=biyao_ba57fb5" type="text/javascript"></script>

<script type="text/javascript">

	validateUserName( window.ControllerSite + "/findpwd/userexists","3EBD7718BA0027C75F90A4D7FD579F59");
	LT.findpassword();
</script></body>
<script type="text/javascript" src="http://static2.biyao.com/pc/common/js/bytrack.js?v=biyao_96d50ea"></script>
<script>
// GA跟踪代码20150826
 var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?8263bc34c44278c176458d5aca724aed";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();


</script> 
</html>
