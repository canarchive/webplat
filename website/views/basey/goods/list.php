<!DOCTYPE html>
<html>
<head>
 <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
 <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>必要 - 全球首家C2M电子商务平台</title>
 <link href="http://static.biyao.com/pc/favicon.ico" rel="shortcut icon"
	type="image/x-icon" />
 <link href="http://static.biyao.com/pc/favicon.ico" rel="icon"
	type="image/x-icon" />
 <script type="text/javascript">
	window.ApiSite = "http://api.biyao.com";    
	window.ControllerSite="";
	window.loginUserId=0;
	window.__pageType="mini";
	
	
 </script>
<link href="http://static3.biyao.com/pc/common/css/common.css?v=biyao_a08c14b" rel="stylesheet" />
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
	<!-- <script>
var _hmt = _hmt || [];
(function() { 
	var hm = document.createElement("script");
	hm.src = "//hm.baidu.com/hm.js?8263bc34c44278c176458d5aca724aed"; 
	var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); 
})();
</script> -->
<div class="pub_nav topBanner slideTrans slideUp J_T1200 none">
		<div class="wrap clearfix">
			<div class="f_l">
				<ul class="pub_nav_list sizeZero"> 
					<li class="inline"><a href="http://www.biyao.com/home/index.html">首页</a><span class="bg"></span></li>
					<li class="inline"><a onclick='LT.skip_to()'>商家中心</a><span class="bg"></span></li>
					<li class="inline"><a href="http://www.biyao.com/minisite/bzzx">平台政策</a><span class="bg"></span></li>
<!-- 					<li class="inline last"><a href="http://www.biyao.com/complaint/toAddComplaint">非法信息投诉</a></li> -->
					<li class="inline last">
  						<a href="#">必要手机版</a>
  						<div class="app_box">
							<span class="inline upArre"></span>
							<div class="con">
								<p class="sj_evm"></p>
								<p class="lineH24 col_999">必要手机版</p>
							</div>
						</div>
	  				</li>	
				</ul>
		</div>
		<div class="f_r">
			<ul class="pub_nav_list sizeZero">
				<div id="welcomID" class="inline">
					<li class="inline"><span class="col_aaa mg_r10">欢迎来到必要，请</span><a class="" onclick='LT.login_uri("http://www.biyao.com/account/login.html")'>登录</a><span class="bg"></span></li>
					<li class="inline"><a onclick='LT.register_uri("http://www.biyao.com/account/register.html")'>注册</a><span class="bg"></span></li>
				</div>
				<li class="inline last ">
					<a href="javascript:void(0);">个人中心<i class="inline pep_bg mg_l10"></i></a>
					<div class="app_box">
						<span class="inline upArre"></span>
				<div class="bg_fff down_list_box">
					<a class="inline" href="http://www.biyao.com/MyCenters/MyOrder.html">我的订单</a>
					<a class="inline" href="http://www.biyao.com/MyCenter/MyWorksList.html">我的作品集</a>
					<a class="inline" href="http://www.biyao.com/MyCenter/MyCoupon.html">我的红包</a>
					<a class="inline" href="http://www.biyao.com/MyCenter/Profile.html">个人设置</a>
				</div>
			</div>
				</li>
				<li class="inline last pd_r0 shopping_cart vTop">
					<a class="inline sizeZero" href="http://buy.biyao.com/shopcars/index.html">
						<i class="inline"></i>
						<span id="shopcarNumID" class="inline">购物车 0</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- 这个jsonp是为了静态化页面调用的，静态化以后利用它获得购物车数量和登录信息 -->
<script type="text/javascript">
$(function(){
	var uid=$.cookie('uid');
	if (typeof (uid) != "undefined") {
		$.ajax({
			url : 'http://www.biyao.com/home/getDataForHomePage',
			dataType : 'jsonp',
			data : {'uid' : uid},
			jsonpCallback : 'callback',
			success : function(data) {
				if(data.success=="1"){
					$("#welcomID").html('<li class="inline"><a class="login" href="http://www.biyao.com/MyCenters/MyOrder.html">Hi,'+data.nickname+'<a class="regist  mg_l10" href="http://www.biyao.com/account/logout">[ 退出 ]</a></li>');
				}
			}
		});
	}
})
</script>
<script type="text/javascript">
	document.domain="biyao.com";
	$("title").html("MUJI制造商出品 纯实木家具，超高性价比掀起行业革命")
	
	
	$(function() {
		if(LT.temp.loginFn.islogin_dialog(false)){ //已经登录
			$("a").each(function(){
				if($(this).attr("href") == "http://www.biyao.com/account/register.html"){
					$(this).attr("href","javascript:void('0');").attr("onclick","LT.alertSmall('您已登录，无需重复登录');");
				}
			})
		}
	});
	
</script>
<link rel="stylesheet" type="text/css" href="http://static1.biyao.com/pc/www/css/home.css?v=biyao_18ee6d7"/>		
<script type="text/javascript">
	var t = n = 0, count;
	$(function() {

		count = $("#banner_switch_list li").length;
		$("#banner_switch_list li:not(:first-child)").hide();
		$("#banner_switch .xb li").click(function() {
			var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4
			n = i;
			if (i >= count)
				return;
			$("#banner_switch_list li").filter(":visible").fadeOut().parent().children().eq(i).fadeIn();
			$(this).toggleClass("checked");
			$(this).siblings().removeClass("checked");
		});
		t = setInterval("showAuto()", 8000);
		$("#banner_switch ").hover(function() {
			clearInterval(t)
		}, function() {
			t = setInterval("showAuto()", 8000);
		});
		

		if(LT.temp.loginFn.islogin_dialog(false)){ //已经登录
			$("a").each(function(){
				if($(this).attr("href") == "http://www.biyao.com/account/register.html"){
					$(this).attr("href","javascript:void('0');").attr("onclick","LT.alertSmall('您已登录，无需重复登录');");
				}
			})
		}
		
	});

	function showAuto() {
		n = n >= (count - 1) ? 0 : ++n;
		$("#banner_switch .xb li").eq(n).trigger('click');
	}
</script>
<div class=" J_T1200 none">
  		<div class="wrap pub_logo_box clearfix">
  			<div class="pub_logo f_l"><a href="http://www.biyao.com/home/index.html"><img src="http://static2.biyao.com/pc/common/img/logo.png?v=biyao_4637d54" alt="" /></a></div>
  			<div class="f_r">
  				<ul class="sizeZero menu_nav_list">
					   <li class="inline ">
									<a href="javascript:;">家居</a>
									<div class="sub_nav_list pos_pub">
										<span class="sub_nav_jd"></span>
										<a href="http://behuge.biyao.com/livingroom/index.html?f_upd=fc-77" class="escp ">客厅</a>
										<a href="http://behuge.biyao.com/diningroom/index.html?f_upd=fc-78" class="escp ">餐厅</a>
										<a href="http://behuge.biyao.com/studyroom/index.html?f_upd=fc-79" class="escp last">书房</a>
										</div>
									</li>
						<li class="inline ">
									<a href="javascript:;">眼镜</a>
									<div class="sub_nav_list pos_pub">
										<span class="sub_nav_jd"></span>
										<a href="http://badge.biyao.com/man/index.html?f_upd=fc-27" class="escp ">男士眼镜</a>
										<a href="http://badge.biyao.com/women/index.html?f_upd=fc-28" class="escp last">女士眼镜</a>
										</div>
									</li>
						<li class="inline ">
									<a href="http://jeans.biyao.com/jeans/index.html?f_upd=fc-84">牛仔</a>
									</li>
						<li class="inline ">
									<a href="http://friday.biyao.com/shaver/index.html?f_upd=fc-85">剃须刀</a>
									</li>
						<li class="inline ">
									<a href="javascript:;">运动</a>
									<div class="sub_nav_list pos_pub">
										<span class="sub_nav_jd"></span>
										<a href="http://bmai.biyao.com/man/index.html?f_upd=fc-30" class="escp ">男子运动</a>
										<a href="http://bmai.biyao.com/women/index.html?f_upd=fc-31" class="escp ">女子运动</a>
										<a href="http://www.biyao.com/products/1300180018000030080-0.html?f_upd=fc-38" class="escp last">儿童运动鞋</a>
										</div>
									</li>
						<li class="inline ">
									<a href="javascript:;">男装</a>
									<div class="sub_nav_list pos_pub">
										<span class="sub_nav_jd"></span>
										<a href="http://jihezhizao.biyao.com/man/index.html?f_upd=fc-61" class="escp ">针织衫</a>
										<a href="http://jihezhizao.biyao.com/man/index.html?f_upd=fc-58" class="escp ">大衣</a>
										<a href="http://jihezhizao.biyao.com/menwear/index.html?f_upd=fc-57" class="escp last">衬衫</a>
										</div>
									</li>
						<li class="inline ">
									<a href="javascript:;">鞋靴</a>
									<div class="sub_nav_list pos_pub">
										<span class="sub_nav_jd"></span>
										<a href="http://vizman.biyao.com/menshoes/index.html?f_upd=fc-44" class="escp ">男鞋</a>
										<a href="http://cm.biyao.com/womenshoes/index.html?f_upd=fc-45" class="escp ">女鞋</a>
										<a href="http://vizman.biyao.com/children/index.html?f_upd=fc-50" class="escp last">儿童皮鞋</a>
										</div>
									</li>
						<li class="inline ">
									<a href="javascript:;">箱包</a>
									<div class="sub_nav_list pos_pub">
										<span class="sub_nav_jd"></span>
										<a href="http://hobie.biyao.com/suitcase/index.html?f_upd=fc-66" class="escp ">Hobie旅行箱</a>
										<a href="http://kufeixiangbao.biyao.com/suitcase/index.html?f_upd=fc-67" class="escp last">CUUFLY箱包</a>
										</div>
									</li>
						<li class="inline last">
									<a href="http://ibuyfun.biyao.com/women/index.html?f_upd=fc-94">女装</a>
									</li>
						</ul>
  			</div>  
  		</div>
  	</div>

   <link rel="stylesheet" href="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/css/special_style.css">
    <!--<script type="text/javascript" src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/js/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/js/jquery.lazyload.min.js"></script>
	    <div class="J_T1200">
	       
	    </div>
	<div class="w1200 auto mg_t10">
	    <div class="pos_nav">
			<div class="zt_navigation">
				<span class="inline mg_l15">客厅</span>
				<span class="inline mg_l15">></span>
				<a class="inline" href="#001">沙发</a>
				<a class="inline" href="#002">茶几</a>
				<a class="inline last" href="#003">储物柜</a>
			</div>
		</div>
		<p class="mg_t20 mg_b10"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/1.jpg" alt=""></p>
		<div name="001" id="001">
			<div class="sw_tit">
				<span>客厅</span>
				<span>></span>
				<span class="grey">沙发</span>
			</div>
			<div class="sp_c_right w1200 auto">
				<ul class="celarfix">
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490000000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/5.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490002000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/6.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490021000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/7.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490020000020000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/8.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490001000020000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/9.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490001000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/10.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
				</ul>	
			</div>
		</div>
		<div name="002" id="002">
			<div class="sw_tit">
				<span>客厅</span>
				<span>></span>
				<span class="grey">茶几</span>
			</div>
			<div class="sp_c_right w1200 auto">
				<ul class="celarfix">
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490008000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/11.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490007000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/12.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490009000040000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/13.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
				</ul>	
			</div>
		</div>
		<div name="003" id="003">
			<div class="sw_tit">
				<span>客厅</span>
				<span>></span>
				<span class="grey">储物柜</span>
			</div>
			<div class="sp_c_right w1200 auto">
				<ul class="celarfix">
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490005000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/14.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490006000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/15.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
					<li>
						<a target="_blank" href="http://www.biyao.com/products/1300490003000000000-0.html#customerPanel"><img src="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/grey.gif" data-original="http://img.biyao.com/files/data0/minisite/f60fce805aa2446a9683dcaed92f1988/pc-kroom/img/16.jpg" class="lazypic hands" width="390" height="490" alt=""></a>
					</li>
				</ul>	
			</div>
		</div>
		<div class="t_c">
			<a href="http://behuge.biyao.com/furniture/index.html" target="_blank" class="prd_more">>返回【家居首页】<span></span></a>
		</div>
	</div>
	
  	<script type="text/javascript">
  		$(function(){ 
  			$(".J_T1200").show();
        	$(".J_1200").show();
        	setTimeout(function(){
	    		$('.lazypic').lazyload({}); 
	    	},1000);
  		});
    	
	</script>
	<script>
		var _hmt = _hmt || [];
		(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?eac6ec212074e6a66c249e4a3bdcced2";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
		})();
		$(window).scroll(function () {
			var t = document.documentElement.scrollTop || document.body.scrollTop;
			if (t >140) {
			 $(".zt_navigation").addClass("fixed_p")
			}else{ 
			   $(".zt_navigation").removeClass("fixed_p")
			 }
		});
	</script>
	
<script type="text/javascript" src="http://static4.biyao.com/pc/common/js/ui/dialog.js?v=biyao_ba57fb5"></script>	
<script type="text/javascript" src="http://static.biyao.com/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
<!-- <script>
var _hmt = _hmt || [];
(function() { 
	var hm = document.createElement("script");
	hm.src = "//hm.baidu.com/hm.js?8263bc34c44278c176458d5aca724aed"; 
	var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); 
})();
</script> --><div data-selector="J_im"></div>
<div class="J_1200 none">
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
</div><script src="http://static4.biyao.com/pc/common/js/common.js?v=biyao_c2ee9c2" type="text/javascript"></script>
	<script type="text/javascript"	src="http://static.biyao.com/pc/www/js/common.js?v=biyao_64f5d7c"></script>
	<script type="text/javascript" src="http://static1.biyao.com/pc/common/js/track.js?v=biyao_7ad8f9a"></script>
	<script type="text/javascript" src="http://static1.biyao.com/pc/minisite/shopsMiniSite/js/attention.js?v=biyao_2be4791"></script>
</body>
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

