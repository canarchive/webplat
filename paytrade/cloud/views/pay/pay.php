<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="wb:webmaster" content="8eabb156d1a9cb46">
	<title>必要平台-在线支付 – 我要的，才是必要的 – 必要biyao.com</title>
    <link href="http://static.biyao.com/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="http://static.biyao.com/pc/favicon.ico" rel="icon" type="image/x-icon" />	
	<link href="http://static.biyao.com/pc/common/css/common.css?v=biyao_6eac854" rel="stylesheet"/>
	<link href="http://static.biyao.com/pc/www/css/cm_www.css?v=biyao_c0d1bd0" rel="stylesheet"/>
	<link href="http://static.biyao.com/pc/buy/css/newBuy.css?v=biyao_bd48ea6" rel="stylesheet"/>
	<script type="text/javascript">
	window.basePath = "";
	window.ControllerSite = "http://www.biyao.com";
	var ua = navigator.userAgent.toLowerCase(); 
	var isiOS = navigator.userAgent.match('iPad')||navigator.userAgent.match('iPhone')||navigator.userAgent.match('iPod'),isAndroid=navigator.userAgent.match('Android'),isDesktop = !isiOS&&!isAndroid;
	if (isiOS||isAndroid) {
		if(window.location.href.toString().indexOf("www.biyao.com/product/")>0){//如果现在进的是编辑器页
			var designId=(window.location.href.toString()).substr(parseInt(window.location.href.toString().indexOf("www.biyao.com/product/"))+"www.biyao.com/product/".length,4);//获得样例ID
			window.location.href="http://m.biyao.com/product/show?designid="+designId;
		}
	}
	</script>
	<script type="text/javascript" src="http://static.biyao.com/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
	<script type="text/javascript" src="http://static.biyao.com/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script> 
	<script type="text/javascript" src="http://static.biyao.com/pc/common/js/jquery.cookie.js?v=biyao_a5283b2"></script>
	<script type="text/javascript" src="http://static.biyao.com/pc/common/js/common.js?v=biyao_9e5cb44"></script>
	<script type="text/javascript" src="http://static.biyao.com/pc/common/js/ui/dialog.js?v=biyao_ba57fb5"></script>
	<script type="text/javascript" src="http://static.biyao.com/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
	<script type="text/javascript" src="http://static.biyao.com/pc/common/js/ui/loadmask.js?v=biyao_5aac5cc"></script>
	<script type="text/javascript" src="http://static.biyao.com/pc/buy/js/commonre.js?v=biyao_27f335b"></script>
	<script type="text/javascript" src="http://static.biyao.com/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
	
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
<body>

<!-- 新版首页 -->
	<div class="pub_nav">
  		<div class="wrap clearfix">
  			<div class="f_l">
  				<ul class="pub_nav_list sizeZero">
  					<li class="inline"><a href="http://www.biyao.com/home/index.html">首页</a><span class="bg"></span></li>
  					<li class="inline"><a onclick='LT.skip_to()'>商家中心</a><span class="bg"></span></li>
  					<li class="inline"><a href="http://www.biyao.com/minisite/bzzx">平台政策</a><span class="bg"></span></li>
<!--   					<li class="inline last"><a href="http://www.biyao.com/complaint/toAddComplaint">非法信息投诉</a></li> -->
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
					<li class="inline">
					<a class="login"  href="http://www.biyao.com/MyCenters/MyOrder.html">
						Hi,2862141
</a>
					<a class="regist mg_l10" href="http://www.biyao.com/account/logout">[ 退出 ]</a><span class="bg"></span>
					</li>
					<li class="inline last ">
						<a href="javascript:void(0);" class="">个人中心<i class="inline pep_bg mg_l10"></i></a>
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
  	<div class="bd_bottom_ea">
  		<div class="wrap pub_logo_box clearfix">
  			<div class="pub_logo"><a href="http://www.biyao.com/home/index.html"><img alt="" src="http://static.biyao.com/pc/common/img/logo.png?v=biyao_3251680"></a></div>
  		</div>
  	</div>
</div><div class="wrap relative">
	<div class="shopStepBox">
		<div class="publicStepsbox">
			<div class="car_step_icon car_step3"></div>
			<ul class="clearfix car_step_txt">
				<li>查看购物车</li>
				<li>确认订单信息</li>
				<li class="checked">在线付款</li>
				<li>收货并评价</li>
			</ul>
		</div>
	</div>
</div>
<div class="wrap  ie78 mg_t20 bg_fff mg_b40 online_info_box">
	<div class="shoppingBox  t_c">
		<div class="suc_bg inline"></div>
		<div class="sop_tip inline">
			<p class="f18 col_523 t_l" id="hintID">订单提交成功，马上付款~</p>
			<p class="col_666 t_l f16 lineH24">请在 <span class="col_b76 f16" id="left_time_id">45分00秒</span> 内完成支付</p>
			<p class=" t_l lineH24 mg_t20"><span class="f12 inline col_666">应付金额：</span><span class="f12 col_f60 inline fb">798</span><span class="f12 inline  col_666">元</span></p>
			<p class="col_666 lineH24 f12 t_l">生产周期：25天</p>
			<p class=" t_l lineH24"><span class="inline f12 col_666">收货人：王13811974106</span><span class="inline f12 col_666 mg_l40">收货地址：北京市市辖区朝阳区南磨房</span></p>
			</div>
	</div>
	<div class="shoppingBox pd_t10  bd_top_e8 bg_fff">
		<h4 class="order_title_n relative pd_b10">
			<span class="pd_l15 inline f16 col_523">请选择支付方式完成付款</span>
				<!-- <a href="#" class="get_paid_btn inline" onclick="getPaid();">找人代付</a> -->
		</h4>
		<form id="form33" action="/order/pay" method="post" target="_blank"> 
			<input type="hidden" name="order_id_list" value="MTIyMDA1Mzk4ODczNzQ2MTE4LDEyMjAwNTM5ODg3Mzc2NjM4OA==" />
<input type="hidden" id="pay_type" name="pay_type" value="1" />
			<input type="hidden" id="bank_type" name="bank_type" value="DEFAULT" />
			<input type="hidden" name="totalprice" value="798" />
		</form>
		<div class="payment_list">
			<ul class="paymentTab mg_t15">
				<li class="checked f14">支付平台</li>
			</ul>
			<ul class="clearfix payIconBox pd20">
					<!-- 微信扫码支付平台 -->
				<li>
					<label class="radioLable" data-comm="DEFAULT" data-paytype="4" data-value="DEFAULT" data-cartype='{"credit":false,"debit":false}' data-credit='{"common":false,"quick":false}' data-debit='{"common":false,"quick":false}' data-show="false"><i class="radioIcon inline mg_l15"></i><i class="bank_new bk20  inline mg_l15"></i></label>
				</li>
				<li>
					<label class="radioLable checked" data-comm="DEFAULT" data-paytype="1" data-value="DEFAULT" data-cartype='{"credit":false,"debit":false}' data-credit='{"common":false,"quick":false}' data-debit='{"common":false,"quick":false}' data-show="false"><i class="radioIcon inline mg_l15"></i><i class="bank_new bk19 inline mg_l15"></i></label>
				</li>
				<!-- 支付宝平台-->
				<li>
					<label class="radioLable" data-comm="DEFAULT" data-paytype="3" data-value="DEFAULT" data-cartype='{"credit":false,"debit":false}' data-credit='{"common":false,"quick":false}' data-debit='{"common":false,"quick":false}' data-show="false"><i class="radioIcon inline mg_l15"></i><i class="bank_new bk21  inline mg_l15"></i></label>
				</li>
				
			</ul>
		</div>
		<div class="payment_list">
			<ul class="paymentTab  mg_t20">
				<li class="checked f14">网上银行 <span class="col_999 f12">（储蓄卡、信用卡均支持）</span></li>
			</ul>
			<ul class="clearfix payIconBox pd20">
				<li>
				<label class="radioLable" data-comm="ICBC" data-value="ICBC_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true"> 
				     <i class="radioIcon inline mg_l15"></i><i class="bank_new bk16 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="ABC" data-value="ABC_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true"> 
				     <i class="radioIcon inline mg_l15"></i><i class="bank_new bk15 inline mg_l15"></i>
				</label>
				<label class="radioLable" data-comm="CMB" data-value="CMB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true"> 
				     <i class="radioIcon inline mg_l15"></i><i class="bank_new bk14 inline mg_l15"></i>
				</label>
				<label class="radioLable" data-comm="CCB" data-value="CCB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true"> 
				     <i class="radioIcon inline mg_l15"></i><i class="bank_new bk10 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="BOC" data-value="BOC_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true">
				     <i class="radioIcon inline mg_l15"></i><i class="bank_new bk7 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="COMM" data-value="COMM_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":false}' data-debit='{"common":true,"quick":false}' data-show="true">
				     <i class="radioIcon inline mg_l15"></i><i class="bank_new bk8 inline mg_l15"></i>
				</label>
				<label class="radioLable" data-comm="POSTGC" data-value="PSBC_FP" data-cartype='{"credit":false,"debit":true}' data-credit='{"common":false,"quick":false}' data-debit='{"common":true,"quick":true}' data-show="true"> 
				     <i class="radioIcon inline mg_l15"></i><i class="bank_new bk17 inline mg_l15"></i>
				</label>
				<label class="radioLable" data-comm="SPDB" data-value="SPDB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true"> 
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk4 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="GDB" data-value="GDB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true"> 
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk13 inline mg_l15"></i>
				</label>
			    <label class="radioLable" data-comm="CMBC" data-value="CMBC_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true">
			        <i class="radioIcon inline mg_l15"></i><i class="bank_new bk9 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="PAB" data-value="PAB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true">
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk6 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="CEB" data-value="CEB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":false,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true">
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk1 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="CIB" data-value="CIB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true">
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk3 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="CITIC" data-value="CITIC_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":false,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true">
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk12 inline mg_l15"></i>
				</label>
				<label class="radioLable" data-comm="NBCB" data-value="NBCB_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":true}' data-debit='{"common":true,"quick":true}' data-show="true">
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk5 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="BOB" data-value="BOB_FP" data-cartype='{"credit":false,"debit":true}' data-credit='{"common":false,"quick":false}' data-debit='{"common":true,"quick":false}' data-show="true"> 
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk18 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="BEA" data-value="BEA_FP" data-cartype='{"credit":true,"debit":true}' data-credit='{"common":true,"quick":false}' data-debit='{"common":true,"quick":false}' data-show="true">
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk2 inline mg_l15"></i>
				</label> 
				<label class="radioLable" data-comm="NJCB" data-value="NJCB_FP" data-cartype='{"credit":false,"debit":true}' data-credit='{"common":false,"quick":false}' data-debit='{"common":true,"quick":true}' data-show="true">
				    <i class="radioIcon inline mg_l15"></i><i class="bank_new bk11 inline mg_l15"></i>
				</label></li>
			</ul>
			<ul class="paymentTab mg_t20">
				<li class="checked f14">找人代付 <span class="col_999 f12">（生成付款链接，发送给好友，让TA帮您付款）</span></li>
			</ul>
			<ul class="clearfix payIconBox pd20">
              <li>
				<label class="radioLable" id="othersPayLabel"><i class="radioIcon inline mg_l15" onclick="othersPayCheck();"></i><span class="mg_l15 col_666 f14 inline h40 w110 lineH40">找TA帮我买单</span></label>		
               </li>
			</ul>
		</div>

		<div class="t_c pd20  bd_top_e8 relative">
<!-- 			<span class="inline get_paid_link"><span class="inline col_666 f14">您还可以：</span><a href="###" onclick="getPaid();" class="get_paid_btn col_724 inline f14">找人代付</a></span> -->
			<a href="#" id="pay" class="confirm_120 inline col_fff f18" >确认支付</a>
		</div>
	</div>
</div>

<script type="text/html" id="contentDiv">
<div class="pop_bd pd_t15 clearfix">
	<p class="mg_b10" ><i id="new_bank_title" class=""></i></p>
	<div class="mg_b15" >
		<span class="inline col_66 f14">选择支付卡类型：</span> 
		<label class="radiolable_type inline lable_bank_d" value="debit" data-type="">
            <i class="radioIcon inline mg_l15"></i> 
            <span class="mg_l15 f16 inline bank_d col_333">储蓄卡</span>			
		</label>
		<label class="radiolable_type inline lable_bank_c" value="credit" data-type="">
            <i class="radioIcon inline mg_l15"></i> 
            <span class="mg_l15 f16 inline bank_c col_333">信用卡</span>			
		</label>
		<div class="f14 col_f60 h20 " id="radiolable_type_tips"></div>
	</div>
	<div class="bd_top_e8">
		<label class="radiolable_chanel inline mg_t15 lable_bank_k" value="fp"> 
            <i class="radioIcon inline"></i>
            <span class="mg_l15 f14 inline bank_colr_k col_333">快捷支付</span>
			<span class="mg_l15 f14 inline col_999">开通快捷支付后，无需跳转，一步轻松付</span>
		</label><br /> 
		<label class="radiolable_chanel inline mg_t15 lable_bank_co" value="com">
            <i class="radioIcon inline"></i> 
            <span class="mg_l15 f14 inline bank_colr_co col_333">网银支付</span>
			<span class="mg_l15 f14 inline col_999">跳转至银行网站支付</span>
		</label><br /> 
		<span class=" f14 inline col_f60 h20 mg_t10" id="radiolable_chanel_tips"></span>
	</div>
	<div class="bd_top_e8 pd_t20 t_c mg_t10">
		<a class="confirm_120 inline col_fff f18" id="dialog_btn" href="javascript:;">确定</a>
	</div>
</div>
</script>
<script type="text/javascript">
     payfinish = function () {
        var callurl = ""+"/Order/SYChargeSuccess";
        $.ajax({
            url: callurl,
            contentType: "application/x-www-form-urlencoded; charset=utf-8",
            type: "POST",
            dataType: "json",

			async : false,
			global : true,
			success : function(msg) {
				if (msg.IsError) {
					$(".pop_close").click();
					LT.alertSmall("订单支付异常。", function() {
					});
				} else {
					if (msg.Data != '') {
						window.location.href = msg.Data;
					}
				}
			},
			error : function() {
				$(".pop_close").click();
				LT.alertSmall("订单支付异常。", function() {
				});
			}
		});
	};
	$(function() {
		if (window.location.href.indexOf('#nsc') > -1) {
			var a = '<div class="steps_left">' + '</div>'
					+ '<div class="steps_right clearfix">'
					+ '<ul class="steps3">'
					+ '<li class="col_ee5b47">1.确认订单信息</li>'
					+ '<li  class="step_checked"><div>2.在线付款</div></li>'
					+ '<li>3.等待收货给出评价</li>' + '</ul>' + '</div>';
			$('.stepsbox').html(a)
		} 
	});
	
	var timeS = 7109;	
	window.onload=showTime();
	function showTime(){
		var hour = Math.floor(timeS/60/60);
		var minute = Math.floor(timeS/60%60);
		var second = Math.floor(timeS%60);
		$("#left_time_id").html(hour+"小时"+minute+"分"+second+"秒");
		timeS=timeS-1;
		if(timeS>0){
			setTimeout("showTime()",1000);
		}else{
			$("#hintID").html("超时未支付，订单已自动取消!");
			$("#left_time_id").html("0小时0分0秒");
		}
	} 
</script>
<script type="text/javascript" src="http://static.biyao.com/pc/buy/js/pay.js?v=biyao_b0897c3"></script>
<script type="text/javascript" src="http://static.biyao.com/pc/www/js/product/fcode.js?v=biyao_0755f8d"></script><div data-selector="J_im" id="webIM_showDiv"></div>
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
</div><script type="text/javascript" src="http://static.biyao.com/pc/www/js/common.js?v=biyao_64f5d7c"></script>
<script type="text/javascript" src="http://static.biyao.com/pc/common/js/track.js?v=biyao_7ad8f9a"></script>
</body>

</html>
