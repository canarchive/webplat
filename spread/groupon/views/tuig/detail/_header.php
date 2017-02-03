<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="mobile-agent" content="format=xhtml;url=<?= $urlFull; ?>"/>
    <title><?= $info['name']; ?></title>
    <meta name="keywords" content="<?= $info['name']; ?>">
    <meta name="description" content="<?= $info['description']; ?>">
	<link rel="stylesheet" href="<?= Yii::getAlias('@asseturlold'); ?>/common/css/common.css?v=20160122">
	<link rel="stylesheet" href="<?= Yii::getAlias('@asseturlold'); ?>/grouponsem/tuig/css/home_fair.css?v=20160118">
	<script src="<?= Yii::getAlias('@asseturlold'); ?>/common/js/jquery-1.11.3.min.js?v=20151230"></script>
	<script src="<?= Yii::getAlias('@asseturlold'); ?>/common/js/jquery.scrollLoading.js?v=20151230"></script>
	<script src="<?= Yii::getAlias('@asseturlold'); ?>/common/js/common.js?v=20160122"></script>
	<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?= Yii::getAlias('@asseturlold'); ?>/common/js/jquery.nicescroll.js?v=20151230"></script>
	<script src="<?= Yii::getAlias('@asseturlold'); ?>/grouponsem/tuig/js/home_fair.js?v=20160120"></script>
	<!--[if lt IE 9]>
	<script src="<?= Yii::getAlias('@asseturlold'); ?>/common/js/html5shiv.js?v=20151230"></script>
	<![endif]-->
</head>
<body>
<div style="background: url(http://static.17house.com/web/cp/201601/18/1601181152250f724c74a54979daec4682968bde9b1f.jpg) 50% 0 no-repeat;position: relative;height: 70px;overflow: hidden;z-index:1;">
    <a href="http://tuan.17house.com/bj/2376.html" style="display:block; height:70px; width:100%;"></a>
    <a href="javascript:;" class="iclose"></a>
</div>

	<!-- 头部 -->
	<div class="header">

	  <!-- 顶部导航 start -->
	  <div class="siteNav">

	    <div class="siteNavBg clear">

	      <!-- 登录左导航 start -->
	      <ul class="siteNavBgL">
		      <li><a href="http://www.17house.com/changecity.html" ><?= $info['companyInfo']['name']; ?><i></i></a></li>
	      </ul>

	      <ul class="siteNavSmallBgL">
              <li><a href="http://www.17house.com/" target="_blank">首页</a></li>
              <li><a href="http://bbs.17house.com/" target="_blank">装修论坛</a></li>
              <li><a href="http://www.17house.com/news/" target="_blank">装修学堂</a></li>
              <li><a href="http://www.17house.com/xiaoguotu/" target="_blank">效果图</a></li>
              <li><a href="http://zhuangxiu.17house.com/" target="_blank">装修设计</a></li>
              <li><a href="http://mall.17house.com/" target="_blank">家具建材</a></li>
              <li><a href="http://tuan.17house.com/" target="_blank">团购会</a></li>
              <li><a href="http://www.17house.com/news/qita/" target="_blank">家居新闻</a></li>
	      </ul>
	      <!-- 登录左导航 end -->

	      <!-- 登录前右导航 start -->
	      <ul class="siteNavBgR">
	        <li><a class="login" href="javascript:;" target="_self" rel="nofollow">登录</a></li>
	        <li><a class="res" href="http://passport.17house.com/reg/index" rel="nofollow">注册</a></li>
	        <li><a class="color" href="http://zhuangxiu.17house.com/sheji/" target="_blank" rel="nofollow">我要装修</a></li>
	        <li class="customerService" id="CSDexc" >客户服务<i></i></li>
			<li class="last">客服电话：<?= $info['companyInfo']['hotline']; ?></li>
	      </ul>
	      <!-- 登录前右导航 end -->

	      <!-- 登录后右导航 start -->
				<ul class="siteNavBgRS">
	        <li><a id="user" class="login" href="javascript:;" target="_blank" rel="nofollow"></a></li>
	        <li class="owen"><a class="res" href="http://my.17house.com/default/index" target="_blank" rel="nofollow">个人中心<i></i></a></li>
	        <li><a class="color" href="http://zhuangxiu.17house.com/sheji/" target="_blank" rel="nofollow">我要装修</a></li>
	        <li class="customerService" id="CSDexs">客户服务<i></i></li>
	        <li class="last">客服电话：<?= $info['companyInfo']['hotline']; ?></li>
	      </ul>
	      <!-- 登录后右导航 end -->

	      <!-- 登录后退出下拉菜单 start -->
				<ul class="siteNavBgRS_list">
	        <li>
	          <a href="http://my.17house.com/" target="_blank" rel="nofollow" >我的主页</a>
	        </li>
	        <li>
	          <a href="http://my.17house.com/order/allorder" target="_blank" rel="nofollow">我的订单</a>
	        </li>
	        <li>
	          <a href="http://fuwu.17house.com/" target="_blank" rel="nofollow">我的投诉</a>
	        </li>
	        <li>
	          <a href="http://my.17house.com/default/index" target="_blank" rel="nofollow">我的帐号</a>
	        </li>
	        <li>
	          <a id="logout" href="javascript:;"  rel="nofollow">退出登录</a>
	        </li>
	      </ul>
	      <!-- 登录后退出下拉菜单 end -->

	      <!-- 客户服务下拉框 start -->
	      <div id="dropDown" class="dropDown">

	        <div class="dropDownTop clear">

	          <div class="DDTleft">
	            <a class="a1"  target="_blank" rel="nofollow">电话投诉</a>
	            <a class="a2"  target="_blank" rel="nofollow"><?= $info['companyInfo']['hotline']; ?></a>
	            <a class="a3" href="http://help.17house.com/assure.php" target="_blank" rel="nofollow"><i></i>团购保障</a>
	            <a class="a4" href="http://help.17house.com/" target="_blank" rel="nofollow"><i></i>帮助中心</a>
	          </div>

	          <div class="DDTright">
	            <a class="a1"  target="_blank" rel="nofollow">在线投诉</a>
	            <a class="a5" href="http://fuwu.17house.com/" target="_blank" rel="nofollow">我要投诉</a>
	            <a class="a6" href="http://zhuangxiu.17house.com/baozhang/" target="_blank" rel="nofollow"><i></i>装修保障</a>
	            <a class="a7" href="http://about.17house.com/newabout_index.php" target="_blank" rel="nofollow"><i></i>关于我们</a>
	          </div>

	        </div>

	        <div class="dropDownBottom">
	          <a class="DDBimg" href="http://weibo.com/17house" target="_blank" rel="nofollow">
			  <img src="<?= Yii::getAlias('@asseturl'); ?>/tuig/images/sina.png" alt="首页-客户服务-新浪微博" width="30px" height="25px">
	            <span>关注一起装修网新浪微博</span>
	          </a>
	          <a class="DDBword" href="http://weibo.com/17house" target="_blank" rel="nofollow">立即关注</a>
	        </div> 

	      </div>
	      <!-- 客户服务下拉框 end -->

	    </div>

	  </div>
	  <!-- 顶部导航 end -->

	  <div class="HdHead clear">

	    <!-- logo start -->
	    <div class="loginCity">

	      <div class="logo">
	        <a href="http://www.17house.com" target="_blank">
	          <img src="<?= Yii::getAlias('@asseturl'); ?>/tuig/images/sub_logo.png" alt="一起装修网logo" width="128px" height="55px">
	        </a>
	      </div>

	      <div class="border"></div>

	      <div class="logor">
	        <span>团购会</span>
	      </div>

	    </div>
	    <!-- logo end -->
	      
	    <!-- search 搜索框 start -->
	    <div class="search">

	      <div class="searchText">

	        <div id="searchL">
	          <span id="searchLeft">装修案例</span>
	          <i></i>
	        </div>

	        <input id="search" type="search" value="挑选您心仪的装修案例">

	      </div>

	      <div class="searchBtn" >搜索</div>

	      <ul class="searchList" id="searchList">
	        <li prop="1">装修案例</li>
	        <li prop="2">品牌</li>
	        <li prop="3">效果图</li>
	        <li prop="4">装修日记</li>
	        <li prop="6">帖子</li>
	      </ul>

	    </div>
	    <!-- search 搜索框 end -->

	    <!-- 移动应用 start -->
	    <div class="mouble">

	      <div class="nav_ft" id="nav_ft"><i></i>移动应用</div>

	      <ul class="nav_ft_list" id="nav_ft_list">

	        <li>
			  <img src="<?= Yii::getAlias('@asseturl'); ?>/tuig/images/weixin_01.jpg" alt="首页-微信" width="120px" height="120px">
	          <span>添加微信公众号</span>
	        </li>

	        <li>
	          <img src="<?= Yii::getAlias('@asseturl'); ?>/tuig/images/weixin_02.jpg" alt="首页-微信" width="119px" height="113px">
	          <span>下载APP客户端</span>
	        </li>

	      </ul>

	    </div>
	    <!-- 移动应用 end -->

	    

	  </div>

	</div>


	<!-- 登录弹窗 -->
	<div class="loginBox">

	  <div class="loginBox_bg"></div>

	  <div class="loginBox_con" style="width:430px;">

	    <div class="close">&#10005</div>

	    <div class="LBC clear">
	      <div class="LBC_right">

	        <h3><i></i>短信快捷登录</h3>

	        <div class="loginBox_name clear" id="userLogin">
	          <span></span>
	          <input id="username" type="text" value="邮箱/用户名/已验证手机">
	        </div>

	        <div class="loginBox_pwds clear" id="userPwd">
	          <span></span>
	          <input id="password" type="password">
	          <p class="pwdtxt">请输入密码</p>
	        </div>

	        <div class="error_show">
	          <span id="userSpan"></span>
	        </div>

	        <div class="loginBox_checkbox clear">
	          <input type="checkbox" checked="checked">
	          <div>自动登陆</div>
	          <span><a href="http://passport.17house.com/forgetpwd">忘记密码</a></span>
	        </div>

	        <div class="loginBox_btn" >立即登录</div>

	        <div class="loginBox_qita">

	          <h4>您还可以使用合作账号登录网站：</h4>

	          <ul class="list clear">
	            <li><a class="list_img1" href="javascript:;"  target="_blank"></a></li>
	            <li><a class="list_img2" href="#" id="sinaLoginBtn"></a></li>
	           <!--<a href="#" id="sinaLoginBtn"><div class="WB_loginButton WB_widgets"><a href="javascript:void(0);"></a></div></a>-->
	          </ul>

	          <p>还没有一起网帐号？10秒钟,<a href="http://passport.17house.com/reg" target="_blank">快速注册</a></p>

	        </div>

	      </div>

	    </div>

	  </div>

	  <div class="loginBox_conP">

	    <div class="close">&#10005</div>

	    <div class="LBC clear">

	      <div class="LBC_left">
	        <h2>用户登录</h2>
	        <div>
			<img src="<?= Yii::getAlias('@asseturl'); ?>/tuig/images/weixin_01.jpg" alt="登录-二维码" width="158px" height="158px">
	          <p>微信扫码&nbsp;快速登录</p>
	          <p><i>?</i>使用帮助</p>
	        </div>
	      </div>

	      <div class="LBC_right">

	        <h3 class="back"><s></s>返回登录</h3>
	        <div class="loginBox_res">
	          验证即登录，未注册将自动创建一起网帐号
	        </div>

	        <div class="loginBox_name clear">
	          <i></i>
	          <input name="usermobile" class="LBC_tel" id="userMobile" type="text" value="请输入手机号码">
	        </div>

	        <div class="loginBox_pwd clear">
	          <div class="loginBox_pwdL clear">
	            <span></span>
	            <input type="text" name="vcode" id="vcode" value="请输入动态密码">
	          </div>
	          <div class="loginBox_pwdR" name="sendSMS">获取动态密码</div>
	        </div> 

	        <div class="error_show">
	          <span class="alert_phone_login"></span>
	        </div>

	        <div class="loginBox_btn1" >立即登录</div>
	        <!-- 下面这个隐藏字段是为了存储今日短信发送是否超过10条 -->
	        <input type="hidden" name="for_isBeyondLimit" value="" />
	         <!-- 区分当前页面是否处于计时的字段    0表示当前页面没有进行计时-->
	        <input type="hidden" name="for_timing" value="0" />
	        <!-- 下面这个隐藏表单是为了存放间歇调用的ID的 -->
	        <input type="hidden" name="for_intervalId" value="" />
	        <!-- 下面这个隐藏表单是为了存放authkey -->
	        <input type="hidden" name="authkey" id="authkey" value="" />

	      </div>

	    </div>

	  </div>
	  
	</div>


