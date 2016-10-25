<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'sjlf/css/common', 'sjlf/css/home', 'sjlf/css/poplayer',
	'sjlf/css/banner-module', 'sjlf/css/index', 'sjlf/css/swiper.min',
	'sjlf/css/suced',
];
$this->params['jsFiles'] = [
];
$this->params['currentNav'] = 'free';
$this->params['formPosition'] = 'hd-sjlfpc';
$this->params['formPositionName'] = '活动-设计量房pc';
?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    window.location.href = "<?= Yii::getAlias(Yii::$app->params['hostAliasMobile']) . Url::to(['/decoration/detail/feature', 'view' => 'manyi', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>";
}
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/js/jquery-1.11.3.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/js/jquery.scrollLoading.js?v12"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/js/poplayer.js?v18"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/js/banner-module_sempc.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/js/index.js"></script>
<style>
/*0.0*/
		.nav{
			position: relative;
		}
		.nav .nav_empty{
			width:100%;
			height:100%;
			position: absolute;
			top:0;
			left:0;
			z-index: 100;
			cursor:pointer;
		}
</style>
<!-- 头部 -->
<div class="header btn_data-tit" data-tit="申请预约免费设计量房">
  <div class="siteNav">
      <div class="siteNavBg clear">
            <ul class="siteNavBgL">
              <li >找装修公司，<?= Yii::$app->params['siteNameBase']; ?>比其他渠道便宜40%</li>
            </ul>
            <ul class="siteNavBgR">
                <li>登录</li>
                <li>注册</li>
                <li>我要装修</li>
                <li class="customerService" id="CSDexc" >客户服务<i></i></li>
                <li class="last"><?= Yii::$app->params['siteHotline']; ?></li>
            </ul>
			<ul class="siteNavBgRS">
                <li></li>
                <li class="owen">个人中心<i></i></li>
                <li>我要装修</li>
                <li class="customerService" id="CSDexs">客户服务<i></i></li>
                <li class="last">客服电话：<?= Yii::$app->params['siteHotline']; ?></li>
            </ul>
			<ul class="siteNavBgRS_list">
              <li>
                我的主页
              </li>
              <li>
                我的订单
              </li>
              <li>
                我的投诉
              </li>
              <li>
                我的帐号
              </li>
              <li>
               退出登录
              </li>
            </ul>

            <!-- 客户服务下拉框 -->
            <div id="dropDown" class="dropDown">
              <div class="dropDownTop clear">
                  <div class="DDTleft">
                    电话投诉
                    <?= Yii::$app->params['siteHotline']; ?>
                   <i></i>团购保障
                    <i></i>帮助中心
                  </div>
                  <div class="DDTright">
                    在线投诉
                    我要投诉
                    <i></i>装修保障
                    <i></i>关于我们
                  </div>
               </div>
               <div class="dropDownBottom">
                    
                      <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/sina.png" alt="首页-客户服务-新浪微博" width="30px" height="25px">

                    <span>关注<?= Yii::$app->params['siteNameBase']; ?>新浪微博</span>
                    立即关注
               </div>
            </div>

        </div>
    </div>

    <div class="HdHead clear">
      <!-- logo -->
      <div class="loginCity">
          <div class="logo">
            
                 <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/logo1.png" alt="<?= Yii::$app->params['siteNameBase']; ?>logo">
            
          </div>
          <div class="border"></div>
          <div class="logor">
            
              <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/logor1.png" alt="这里的天是业主的天">
        

          </div>
      </div>

      <!-- search 搜索框 -->
      <div class="search">
          <div class="searchText">
              <div id="searchL">
                  <span id="searchLeft">装修案例</span>
                  <i></i>
                </div>
              <input id="search" type="search" value="挑选您心仪的装修案例">
          </div>
          <div class="searchBtn">搜索</div>
          <ul class="searchList" id="searchList">
              <li prop="1">装修案例</li>
              <li prop="2">品牌</li>
              <li prop="3">效果图</li>
              <li prop="4">装修日记</li>
              <li prop="6">帖子</li>
		<li prop="7">文章</li>
          </ul>
      </div>
         <!-- honor 荣誉肯定 -->
      <div class="honor">
          <i></i>
			  <ul id="num" style="display:none;"></ul>
	          <div class="honor_list_bg">
	            <div class="honor_list clear">
	                
	                	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/01.jpg" alt="中装协权威评定：最具信赖装修网站">
	               
	                	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/02.jpg" alt="首推先行赔付" >
	                
	                	<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/03.jpg" alt="7年品牌口碑">
	               
	            </div>
	          </div>

          <i></i>
       </div>

    </div>
  </div>

<div class="nav btn_data-tit" data-tit="申请预约免费设计量房" id="nav">
	<div class="nav_empty"></div>
    <div class="navList">
      <ul class="nav_hd clear" id="nav_hd">
            <li class="nav_hd_list">
                            <a class="nhla active">首页</a>
                        </li>
	                    <li class="nav_hd_list" id="nav_hd_list">
                <a class="nhla" href="" >新房装修<i></i></a>
                <ul class="NHList a">
                </ul>
           </li>
	       	                   <li class="nav_hd_list">
                <a class="nhla" href="" >老房装修<i></i></a>
                 <ul class="NHList a">
                    <li><a href="" >装修论坛</a></li>
                    <li><a href="" >装修圈</a></li>
                                        <li><a href="">装修日记</a></li>
                    <li><a href="" >投诉表扬</a></li>
                    <li><a href="" >装修设计</a></li>
			                         <li><a href="" >团购交流</a></li>
                                                      </ul>
            </li>
            <li class="nav_hd_list">
                 <a class="nhla" href="" >婚房装修<i></i></a>
                 <ul class="NHList b">
                    <li><a href="" >学装修</a></li>
                    <li><a href="" >找灵感</a></li>
                    <li><a href="" >学搭配</a></li>
                    <li><a href="" >选产品</a></li>
                    <li><a href="">装修问答</a></li>
                    <li><a href="">装修百科</a></li>
                </ul>
            </li>
            <li class="nav_hd_list">
                 <a class="nhla" href="" >二手房装修<i></i></a>
                 <ul class="NHList c">
                    <li><a href="" >装修美图</a></li>
                    <li><a href="" >灵感图集</a></li>
                    <li><a href="" >案例图库</a></li>
                 </ul>
            </li>
                        <li class="nav_hd_list">
                                      <a class="nhla" href="" rel="nofollow" >免费设计<i></i></a>
                                   <ul class="NHList d">
                                   	<li><a href="" rel="nofollow">免费量房设计</a></li>
                  <li><a href="" rel="nofollow">免费装修报价</a></li>                     <li><a href="">装修公司</a></li>
        					<li><a href="">找设计师</a></li>
        					<li><a href="">装修案例</a></li>
        					<li><a href="">优惠活动</a></li>                                 </ul>
            </li>
            <li class="nav_hd_list">
                 <a class="nhla" href="" rel="nofollow" >免费量房<i></i></a>
				 <ul class="NHList e">
					
					<li><a href="" rel="nofollow" >产品大全</a></li>
					<li><a href="" rel="nofollow" >实体门店</a></li>
					<li><a href="" rel="nofollow" >优惠券</a></li>
					<li><a href="" rel="nofollow" >口碑评价</a></li>
					                 </ul>
            </li>
                        <li class="nav_hd_list">
                 <a class="nhla" href="" rel="nofollow" >装修效果图</a>
            </li>
                                    <li class="nav_hd_list">
                 <a class="nhla" href="" >装修公司<i></i></a>
                 <ul class="NHList g">
                    <li><a href="">行业热点</a></li>
                    <li><a href="">人物聚焦</a></li>
                    <li><a href="">投诉曝光</a></li>
                    <li><a href="">活动报道</a></li>
                    <li><a href="" >家居生活</a></li>
                    <li><a href="">媒体报道</a></li>
					<li><a href="">一起头条</a></li>

				</ul>
            </li>
            
		</ul>
		<div class="nav_ft" id="nav_ft" style="width:126px;"><i></i><a href="" rel="nofollow"  >移动应用</a></div>
        <ul class="nav_ft_list" id="nav_ft_list">
            <li>
                <a href="" rel="nofollow" >
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/weixin_03.png" alt="首页-微信" width="120px" height="120px">
                <span>添加微信公众号</span>
                </a>
            </li>
            <li>
                <a href="" rel="nofollow" >
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/weixin_02.jpg" alt="首页-微信" width="119px" height="113px">
                <span>下载APP客户端</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- main start -->
	<div class="main">
		<!-- lunBoTu start -->
		<div class="mainOne">
		
    <!--改动在此开始 -->
    <div class="offerlayer" id="offerlayer" data-keyword="免费设计">
        <div class="offer-head clearfix">
            <div class="title active">免费设计</div>
            <div class="title ">免费报价</div>
        </div>
        <div class="offer-body clearfix" id="offerSheji">
            <div class="bodybox active" id="offerZhuangxiu">
                <!-- 装修报价 start -->
                <!-- 装修报价:第1步 -->
                <form method="post" action="" class="step1">
                    <input type="hidden" name="formhash" value="">
                    <div class="p-tip ">
                        <span>免费量房、出装修设计方案</span><span class="cOrange"></span>
                        <p class="f14">今日已有<span class="cOrange">5046</span>业主申请</p>
                    </div>
                    <p class="mb20">
                        <input type="text" name="name" value="" data-value="您的称呼" maxlength="11" class="ipt ipt222">
                    </p>
                    <p class="mb20">
                        <input type="text" name="phone" value="" data-value="您的电话" maxlength="11" class="ipt ipt222">
                    </p>
<div class="selected1">
   <input type="text" value="请选择房屋所在城市" id="source3" class="ipt1 source" name="User_shen">
   <b></b>
   <div class="show-block show-block3">
   <ul>
 <li class="active">北京</li>
<li>上海</li><li>石家庄</li>
<li>天津</li>
<li>哈尔滨</li>
<li>西安</li>
<li>武汉</li>
<li>成都</li>
<li>大连</li>
<li>济南</li>
 </ul>
 </div>
<span></span>
</div>
                    <!--<p class="mb20">
                        <select class="ipt ipt222 mb10" name='User_Shen'>
                            <option value="">省/市</option>
                        </select>
                    </p>-->
                    <p class="error-tip"></p>
                    <input type="submit" class="offerfixbtn ipt222" value="立即申请" id="lijishenqing">
                    <!--<p class="places">今日仅剩 <span class="cOrange">19</span> 个名额</p>-->
                    <div class="sec_topr_list">
                        <ul>
                            <li><span>·</span>A轮获2亿融资，一起装修更透明</li>
                            <li><span>·</span>700万业主的信赖选择</li>
                        </ul>
                    </div>
                </form>
                <!-- 装修报价 end -->
            </div>
            <div class="bodybox" id="offerJiancai">
                <!-- 建材询价 start -->
                <!-- 建材询价:第1步 -->
                <form method="post" action="" class="step1">
                    <div class="p-tip">
                        <span>免费量房、出装修设计方案</span><span class="cOrange"></span>
                        <p class="f14">今日已有<span class="cOrange">5046</span>业主申请</p>
                    </div>
                    <p class="pr mb20">
                        <input type="text" name="square" value="" data-value="建筑面积" maxlength="9" class="ipt ipt270">
                        <em class=" m2-unit">m<i>2</i></em>
                    </p>
                    <p class="mb20">
                        <input type="text" name="phone" value="" data-value="手机号码" maxlength="11" class="ipt ipt270">
                    </p>
                    <p class="mb10">
                        <select class="ipt ipt130" name='User_Shen'>
                            <option value="">省/市</option>
                        </select>
                        <select class="r ipt ipt130" name='User_City'>
                            <option value="">市/地区</option>
                        </select>
                    </p>
                    <p class="error-tip"></p>
                    <input type="submit" id="weizhizuoshangjiao" class="offerfixbtn ipt222" value="5秒立即拿报价">
                </form>
                <!-- 第2步 -->
                <form method="post" action="" class="step2">
                    <div class="p-tip">
                        您的全屋建材价格 <span class="cOrange half-total">39999</span> 元报价
                        <p class="f14">此估价仅供参考</p>
                        <div class="gg-weixin-tip">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/weixin-icon.jpg" height="16" width="16" alt="">微信扫一扫查看完整报价清单
                            <div class="gg-weixin-sa">
                                <img class="l" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/weixin-code.gif" alt="微信扫一扫">
                                <ul >
                                    <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/weixin-sa-text.gif" alt=""></li>
                                    <li class="cGray">关注公众号还可获取装修省钱快报</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="intro">
                        <p class="f12 cGray mt5">96%的业主反馈，参加<?= Yii::$app->params['siteNameBase']; ?>团购会价更实惠。</p>
                        <p class="f14 mt10" id="newgroupon"><a href="">2016年7月9日-10日我报名参加端午材家具团购会，一起去吧！</a></p>
                        <ul class="cOrange f12 mt10">
                            <li class="mt5"><span class="inline-cj">超低折扣</span>折扣直逼底价，支持多渠道比价</li>
                            <li class="mt5"><span class="inline-zk">一单抽奖</span>任意一张订单即可参与终极大奖抽取</li>
                            <li class="mt5"><span class="inline-hl">多单豪礼</span>订单满5单、8单可兑换豪礼一份</li>
                        </ul>
                    </div>
                </form>
                <!-- 建材询价 end -->
            </div>
        </div>
    </div>
    
    <!--offerlayer改动在此结束-->
    
    
			<div class="index_box clearfix btn_data-tit" data-tit="申请整装套餐装修">
			    <div class=" h260" id="box">
				        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/banner.png">
			    </div>
			        <ul class="index_box_ul btn_data-tit" data-tit="申请预约免费设计量房">
	                <li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/header_hui1.png" id="img111"></li>
	                <li class="marginleft25"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/header_hui2.png" id="img112"></li>
	                <li class="marginleft25"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/header_hui3.png" id="img113"></li>
	            </ul>
	      </div>
    <!-- 报名成功 start -->
    <div class="poplayer pop-bm-sucess">
        <span class="close js-close">&#10005;</span>
        <div class="layout620 mb30 cDGray clearfix">
            <h4 class="title">恭喜您报名成功！</h4>
            <p class="f18 tc p18-gray">工作人员15分钟内将会与您联系，请耐心等候。</p>
            <div class="weixin-l">
                <img class="l" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/pop-wx-code-01.jpg" alt="">
                <ul>
                    <li class="f18">微信扫一扫</li>
                    <li class="f18">领取装修大礼包</li>
                    <li class="mt5">红包领不停</li>
                </ul>
            </div>
            <div class="recommend">
                <p class="fB">为您推荐</p>
                <ul>
				    <li><a><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/201606201039128235.jpg" alt="" width="80" height="80"></a></li>
                    <li class="mt10"><a href=""></a>小卧室窗设计</li>
                </ul>
                <ul>
				<li><a><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/201606201054549654.jpg" alt=""  width="80" height="80"></a></li>
                    <li class="mt10"><a href=""></a>地中海风格客厅</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 报名成功 end -->
    <!-- offer 310宽 免费设计+建材询价 start -->

    <div class="main_list1 btn_data-tit" data-tit="申请预约免费设计量房">
				<ul>
					<li>
						<span class="empty"></span>
							<span class="main_list1_span1">
								<span class="main_list1_span1_hidd"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/header_nav1.jpg"></span>
							</span>
						<span class="main_list1_span2 marl10">
							<i class=" main_list1_span_i1">婚房装修</i>
							<i class=" main_list1_span_i2">人气设计方案一览</i>
							<input type="submit" class="main1_btn" value="立即预约"></span>
					</li>
					<li>
						<span class="empty"></span>
						<span class="main_list1_span1">
							<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/header_nav2.jpg">
						</span>
						<span class="main_list1_span2 marl10">
							<i class="main_list1_span_i1">空间大改造</i>
							<i class="main_list1_span_i2">人气设计方案一览</i>
							<input type="submit" class="main1_btn" value="立即预约"></span>
					</li>
					<li>
						<span class="empty"></span>
						<span class=" main_list1_span1">
							<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/header_nav3.jpg">
						</span>
						<span class=" main_list1_span2 marl10">
							<i class=" main_list1_span_i1">二手房变新居</i>
							<i class="main_list1_span_i2">人气设计方案一览</i>
							<input type="submit" class="main1_btn" value="立即预约"></span>
					</li>
				</ul>
			</div>
			<!-- offer 310宽 免费设计+建材询价 end -->
			
			
			
		</div>
		
		<!--maintwo-->
		<div class="main2 btn_data-tit" data-tit="申请免费预约会员方案">
			<span class="main2_span1">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/header_HYimg.png">
			</span>
			<!--实现交互效果-->
			<span class="main2_span2">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/anli_img1.png">
				<i class="main2_span2_i1">
					<i class="main2_span2_i1_i1">现代简约风格</i>
					<i class="main2_span2_i1_i2">总价：6.8万</i>
				</i>
			</span>
			<span class="main2_span2">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/anli_img2.png">
				<i class="main2_span2_i2">
					<i class="main2_span2_i2_i1">现代简约风格</i>
					<i class="main2_span2_i2_i2">总价：6.8万</i>
				</i>
			</span>
			<span class="main2_span2">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/anli_img3.png">
				<i class="main2_span2_i3">
					<i class="main2_span2_i3_i1">现代简约风格</i>
					<i class="main2_span2_i3_i2">总价：6.8万</i>
				</i>
			</span>
			<span class="main2_span2">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/anli_img4.png">
				<i class="main2_span2_i4">
					<i class="main2_span2_i4_i1">现代简约风格</i>
					<i class="main2_span2_i4_i2">总价：6.8万</i>
				</i>
			</span>
		</div>
		<!--mainthree-->
		<div class="main3 btn_data-tit" data-tit="申请免费预约精选方案">
			<div class="main3_div1">
				<span class="main3_div1_span1">装修方案精选</span>
				<span class="main3_div1_span2">&nbsp;已服务<i class="color">62182</i>位业主</span>
				<ul>
					<li class="active">新房装修</li><li class="active1">|</li>
					<li class="active">二手房装修</li><li class="active1">|</li>
					<li class="active">复式装修</li><li class="active1">|</li>
					<li class="active">别墅装修</li><li class="active1">|</li>
					<li class="active">商业装修</li>
					<li class="active">&nbsp;更多></li>
				</ul>
			</div>
			<div class="main3_div2">
					<div class="main3_div2_p1">
							<p class=" main3_div2_p1_p1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/FN_img1.jpg"></p>
							<p class="main3_div2_p1_p2">
								<span class="main3_div2_p1_p2_s1"><a>70-90㎡经济型平层整装解决方案</a></span>
								<span class="main3_div2_p1_p2_s2">¥<i>58080</i>起</span>
								<span class="main3_div2_p1_p2_s3">
										<i>免费设计</i>
										<i class="marl3">免费监理</i>
										<i class="marl3">专业施工</i>
								</span>
								<span class="main3_div2_p1_p2_s4">
									<input type="submit" class="s4_btn1" value="立即预订"><input type="submit" class="s4_btn2" value="了解详情">
								</span>
							</p>
					</div>
					<div class="main3_div2_p1">
							<p class=" main3_div2_p1_p1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/FN_img2.jpg"></p>
							<p class="main3_div2_p1_p2">
								<span class="main3_div2_p1_p2_s1"><a>120-150㎡经济型复式别墅装修公司解决方案</a></span>
								<span class="main3_div2_p1_p2_s2">¥<i>82341</i>起</span>
								<span class="main3_div2_p1_p2_s3">
										<i>品牌设计</i>
										<i class="marl3">用量不限</i>
										<i class=" marl3">上门安装</i>
										<i class="marl3">售后无忧</i>
								</span>
								<span class="main3_div2_p1_p2_s4">
									<input type="submit" class="s4_btn1" value="立即预订"><input type="submit" class="s4_btn2" value="了解详情">
								</span>
							</p>
					</div>
			</div>
			<div class="main3_div2 clearaa">
					<div class="main3_div2_p1">
							<p class="main3_div2_p1_p1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/FN_img3.jpg"></p>
							<p class="main3_div2_p1_p2">
								<span class="main3_div2_p1_p2_s1"><a>70-90㎡经济型平层整装解决方案</a></span>
								<span class="main3_div2_p1_p2_s2">¥<i>58080</i>起</span>
								<span class="main3_div2_p1_p2_s3">
										<i>免费设计</i>
										<i class="marl3">免费监理</i>
										<i class="marl3">专业施工</i>
								</span>
								<span class="main3_div2_p1_p2_s4">
									<input type="submit" class="s4_btn1" value="立即预订"><input type="submit" class="s4_btn2" value="了解详情">
								</span>
							</p>
					</div>
					<div class="main3_div2_p1">
							<p class="main3_div2_p1_p1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/FN_img4.jpg"></p>
							<p class="main3_div2_p1_p2">
								<span class="main3_div2_p1_p2_s1"><a>120-150㎡经济型复式别墅装修公司解决方案</a></span>
								<span class="main3_div2_p1_p2_s2">¥<i>82341</i>起</span>
								<span class="main3_div2_p1_p2_s3">
										<i>品牌设计</i>
										<i class="marl3">用量不限</i>
										<i class="marl3">上门安装</i>
										<i class="marl3">售后无忧</i>
								</span>
								<span class="main3_div2_p1_p2_s4">
									<input type="submit" class="s4_btn1" value="立即预订"><input type="submit" class="s4_btn2" value="了解详情">
								</span>
							</p>
					</div>
			</div>
			<div class="main3_div4">
					<div class="main3_div4_div">
							<p class="main3_div4_div_p1">
								 <i class="main3_div4_div_p1_i">今日已有<i class="color">1319</i>位业主</i>
								 <i class="main3_div4_div_p1_i">预定精选套餐方案</i>
							</p>
							<!--轮播图start-->
							<div class="swiper-container">
								<div class="swiper-wrapper">
								<div class="swiper-slide">
										<span>刘先生     90㎡     158****244     6分钟前</span>&nbsp;<span>田先生     86㎡     187****300     9分钟前</span>
								</div>
								<div class="swiper-slide">
										<span>易先生     70㎡     138****756     12分钟前</span>&nbsp;<span>卫先生     70㎡     138****756     18分钟前</span>
								</div>
								<div class="swiper-slide">
										<span>魏先生     68㎡     137****279     24分钟前</span>&nbsp;<span>张先生     97㎡     157****455     28分钟前</span>
								</div>
								<div class="swiper-slide">
										<span>陈女士     108㎡     138****508     30分钟前</span>&nbsp;<span>齐先生     117㎡     150****137     38分钟前</span>
								</div>
									<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/js/swiper.min.js"></script>
									<script>		    
									  var mySwiper = new Swiper('.swiper-container',{
									    slidesPerView: 2,
									    loop: true,
									    simulateTouch : false,
									    grabCursor: true,
				   						autoplay: 2000,
				   						direction: 'vertical'
									  })				  
									</script>
							</div>
						</div>
						<!--按钮-->
						<p class="main3_div4_div_p2"><input type="value" class="d4_btn" value="我也要预定"></p>
					</div>
			</div>
		</div>
		<div class="btn_data-tit main4" data-tit="申请免费预约设计量房">
						<div class="main4_div1">
						<span class="main4_div1_span1">装修效果图</span>
						<span class="main4_div1_span2">&nbsp;已为<i class="color">4563278</i>位业主找到灵感</span>
						<ul>
							<li class="active">新房装修</li><li class="active1">|</li>
							<li class="active">二手房装修</li><li class="active1">|</li>
							<li class="active">复式装修</li><li class="active1">|</li>
							<li class="active">别墅装修</li><li class="active1">|</li>
							<li class="active">商业装修</li>
							<li class="active">&nbsp;更多></li>
						</ul>
					</div>
					<div class="main4_div2">
							<ul>
								<li>
									<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_navimg1.jpg">
									<span class="main-center-cent_div2_sp"><i class="main-center-cent_div2_sp_i1">空间</i><i class="main-center-cent_div2_sp_i2">
									<a>客厅</a>&nbsp;<a>卧室</a>&nbsp;<a>卫生间</a>&nbsp;<a>厨房</a>&nbsp;<a>电视墙</a>&nbsp;<a>榻榻米</a>
									</i>
									</span>
								</li>
								<li class="marl35">
									<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_navimg2.jpg">
									<span class="main-center-cent_div2_sp"><i class="main-center-cent_div2_sp_i1">户型</i><i class="main-center-cent_div2_sp_i2">
										<a>一居室</a>&nbsp;<a>二居室</a>&nbsp;<a>三居室</a>&nbsp;<a>复式</a>&nbsp;<a>别墅</a>&nbsp;<a>小户型</a>
									</i>
									</span>
								</li>
								<li class="marl35">
									<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_navimg3.jpg">
									<span class="main-center-cent_div2_sp"><i class="main-center-cent_div2_sp_i1">风格</i><i class="main-center-cent_div2_sp_i2">
										<a>简约</a>&nbsp;<a>现代</a>&nbsp;<a>中式</a>&nbsp;<a>欧式</a>&nbsp;<a>美式</a>&nbsp;<a>田园</a>
									</i></span>
								</li>
							</ul>
					</div>
					<div class="main4_div3">
							<ul>
								<li class="li1">
									<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_img1.png">
									<p class="li1_p1">
										<span class="sp1">萌娃城堡必备</span>
										<span class="sp2"><i class="sp2_i1">扮靓儿童房3大招</i><i class="sp2_i2">832案例&nbsp;5492浏览</i></span>
									</p>
								</li>
								<li class="li3">
									<ul>
										<li class="li4"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_img2.png">
											<p class="li4_p1">
												<span class="sp1"><i class="sp1_i1">80平小户型挑高装修</i><i class="sp1_i2">50案例</i></span>
											</p>
										</li>
										<li class="li5">
											<span><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_img3.png">
													<span class="li5_p1">
														<span class="sp1"><i class="sp1_i1">80平小户型挑高装修</i><i class="sp1_i2">50案例</i></span>
													</span>
											</span><span class="spanMarL"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_img4.png">
															<span class="li6_p1">
																	<span class="sp1"><i class="sp1_i1">80平小户型挑高装修</i><i class="sp1_i2">50案例</i></span>
															</span>
											</span></li>
									</ul>
								</li>
								<li class="li2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/XG_img5.png">
									<p class="li2_p1">
										<span class="sp1"><i class="sp1_i1">三部打造文艺家居</i><i class="sp1_i2">832案例</i></span>
									</p>
								</li>
							</ul>
					</div>
		</div>
		
		<div class="main5">
				<div class="main5_div1 btn_data-tit "  data-tit="申请预约免费设计量房">
						<span class="main5_div1_span1">知名装修公司</span>
						<span class="main5_div1_span2">&nbsp;已服务<i class="color">4351879</i>位业主</span>
						<ul>
							<li class="active">新房装修</li><li class="active1">|</li>
							<li class="active">二手房装修</li><li class="active1">|</li>
							<li class="active">复式装修</li><li class="active1">|</li>
							<li class="active">别墅装修</li><li class="active1">|</li>
							<li class="active">商业装修</li>
							<li class="active">&nbsp;更多></li>
						</ul>
					</div>
					<div class="main5_empty">
							
					</div>
					<div class="main5_div2 btn_data-tit "  data-tit="申请预约免费设计量房">
							<ul>
									<li class="activeli"><i>知名品牌</i></li>
									<li><i class="bbs">高性价比</i></li>
									<li><i>高口碑值</i></li>
									<li><i>擅长二手房翻新</i></li>
									<li><i>擅长大宅设计</i></li>
									<li></li><li></li><li class="bossli"></li>
							</ul>
					</div>
		<div class="main5_div3 btn_data-tit "  data-tit="申请预约免费设计量房">
			<!--轮播图start-->
			<!--<div class="swiper-container1">
				
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongsi.png">
					</div>
					<div class="swiper-slide">
						<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongsi.png">
					</div>
					<script>

//								var swiper = new Swiper('.swiper-container1', {
//								        pagination: '.swiper-pagination',
//								        nextButton: '.swiper-button-next',
//								        prevButton: '.swiper-button-prev',
//								        paginationClickable: true,
//								        spaceBetween: 30,
//								        centeredSlides: true,
//								        autoplay: 2500,
//								        autoplayDisableOnInteraction: false
//								    });

					</script>
			</div>

		</div>-->
		<!--这里不要轮播图，改为固定的-->
				<ul>
					<li>
						<span class="main5_div3_sp1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/pinpai_img1.jpg"></span>
						<span class="main5_div3_sp2"><i class="main5_div3_sp2_i1"><a>业之峰装饰</a></i><i class="main5_div3_sp2_i2">案例：8个</i><i class="main5_div3_sp2_i2">评论：1189条</i><i class="main5_div3_sp2_i2">口碑值：106</i></span>
					</li>
					<li>
						<span class="main5_div3_sp1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/pinpai_img2.jpg"></span>
						<span class="main5_div3_sp2"><i class="main5_div3_sp2_i1"><a>泰峰装饰</a></i><i class="main5_div3_sp2_i2">案例：34个</i><i class="main5_div3_sp2_i2">评论：1356条</i><i class="main5_div3_sp2_i2">口碑值：1329</i></span>
					</li>
					<li>
						<span class="main5_div3_sp1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/pinpai_img3.jpg"></span>
						<span class="main5_div3_sp2"><i class="main5_div3_sp2_i1"><a>轻舟幸福</a></i><i class="main5_div3_sp2_i2">案例：46个</i><i class="main5_div3_sp2_i2">评论：3256条</i><i class="main5_div3_sp2_i2">口碑值：674</i></span>
					</li>
					<li>
						<span class="main5_div3_sp1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/pinpai_img4.jpg"></span>
						<span class="main5_div3_sp2"><i class="main5_div3_sp2_i1"><a>东日易盛</a></i><i class="main5_div3_sp2_i2">案例：0个</i><i class="main5_div3_sp2_i2">评论：1423条</i><i class="main5_div3_sp2_i2">口碑值：532</i></span>
					</li>
					<li>
						<span class="main5_div3_sp1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/pinpai_img5.jpg"></span>
						<span class="main5_div3_sp2"><i class="main5_div3_sp2_i1"><a>今朝装饰</a></i><i class="main5_div3_sp2_i2">案例：7个</i><i class="main5_div3_sp2_i2">评论：1189条</i><i class="main5_div3_sp2_i2">口碑值：557</i></span>
					</li>
				</ul>
		</div>
		<div class="main5_div4">
				<span data-tit="申请预约免费设计量房" class="btn_data-tit "><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/SQ_img.png"></span><span class="span111 btn_data-tit"  data-tit="立即预约<?= Yii::$app->params['siteNameBase']; ?>装修报价"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/js_img.png"></span>
		</div>
		</div>
		<div class="main6 btn_data-tit " data-tit="免费预约人气设计师">
					<div class="main6_div1">
						<span class="main6_div1_span1">人气设计师</span>
						<!--<span class="main6_div1_span2">&nbsp;已服务<i class="color">4351879</i>位业主</span>-->
						<ul>
							<li class="active">&nbsp;更多设计师></li>
						</ul>
					</div>
					<div class="main6_div2">
						<ul>
						<li>
							<span class="main6_div2_li_s1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/p1.png"/></span>
							<span class="main6_div2_li_s2">
								<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/touxiang0.png">
								<span class="main6_div2_li_s2_ss"><i>立即咨询</i></span>
							</span>
							<span class="main6_div2_li_s3">
								<span><i class="main6_li_ss1">史敏</i><i class="main6_li_ss2">经验6年</i></span>
							</span>
							<span class="main6_div2_li_s4">擅长:田园、欧式、简约等风格</span>
						</li>
						<li class="li00">
							<span class="main6_div2_li_s1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/p2.png"/></span>
							<span class="main6_div2_li_s2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/touxiang1.png"><span class="main6_div2_li_s2_ss"><i>立即咨询</i></span></span>
							<span class="main6_div2_li_s3">
								<span><i class="main6_li_ss1">梁静</i><i class="main6_li_ss2">经验5年</i></span>
							</span>
							<span class="main6_div2_li_s4">擅长:风水、格局改造，软装搭配</span>
						</li>
						<li class="li00">
							<span class="main6_div2_li_s1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/p3.png"/></span>
							<span class="main6_div2_li_s2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/touxiang2.png"><span class="main6_div2_li_s2_ss"><i>立即咨询</i></span></span>
							<span class="main6_div2_li_s3">
								<span><i class="main6_li_ss1">方圆圆</i><i class="main6_li_ss2">经验5年</i></span>
							</span>
							<span class="main6_div2_li_s4">擅长:巧妙划分空间，色彩搭配</span>
						</li>
						<li class="li00">
							<span class="main6_div2_li_s1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/p4.png"/></span>
							<span class="main6_div2_li_s2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/touxiang3.png"><span class="main6_div2_li_s2_ss"><i>立即咨询</i></span></span>
							<span class="main6_div2_li_s3">
								<span><i class="main6_li_ss1">王磊</i><i class="main6_li_ss2">经验5年</i></span>
							</span>
							<span class="main6_div2_li_s4">擅长:榻榻米、书房等局部改造装饰</span>
						</li>
						<li class="li00">
							<span class="main6_div2_li_s1"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/p5.png"/></span>
							<span class="main6_div2_li_s2"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/touxiang4.png"><span class="main6_div2_li_s2_ss"><i>立即咨询</i></span></span>
							<span class="main6_div2_li_s3">
								<span><i class="main6_li_ss1">李海</i><i class="main6_li_ss2">经验6年</i></span>
							</span>
							<span class="main6_div2_li_s4">擅长:收纳空间改善，细节装饰</span>
						</li>
						</ul>
					</div>

		</div>
		<!--main7-->
		<div class="main7 btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务">
			<p class="ttit"><b>真实工地直播</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上网就能看到装修中的家<span>更多&nbsp;></span></p>
			<!--图片-->
			<ul class="list_img">
				<li class="list_li">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongdi_img1.jpg" class="d_img" />
					<p></p>
					<ul>
						<li>
							<span>刘先生</span>
							<span>二居室80㎡</span>
							<span>43260元</span>
						</li>
						<li class="li2">
							<span class="yan">
								<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/yan.png"/> &nbsp;1636</span>
								<span class="xin"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xin.png"/> &nbsp;16</span>
								<span class="btn">查看详情</span></li>
					</ul>
				</li>
				<li class="list_li">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongdi_img2.jpg" class="d_img" />
					<p></p>
					<ul>
						<li>
							<span>王先生</span>
							<span>一居室62㎡</span>
							<span>32000元</span>
						</li>
						<li class="li2">
							<span class="yan">
								<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/yan.png"/> &nbsp;1636</span>
								<span class="xin"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xin.png"/> &nbsp;16</span>
								<span class="btn">查看详情</span></li>
					</ul>
				</li>
				<li class="list_li">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongdi_img3.jpg" class="d_img" />
					<p></p>
					<ul>
						<li>
							<span>王小姐</span>
							<span>三居室120㎡</span>
							<span>72800元</span>
						</li>
						<li class="li2">
							<span class="yan">
								<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/yan.png"/> &nbsp;1636</span>
								<span class="xin"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xin.png"/> &nbsp;16</span>
								<span class="btn">查看详情</span></li>
					</ul>
				</li>
				<li class="list_li">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongdi_img4.jpg" class="d_img" />
					<p></p>
					<ul>
						<li>
							<span>陈先生</span>
							<span>二居室90㎡</span>
							<span>46000元</span>
						</li>
						<li class="li2">
							<span class="yan">
								<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/yan.png"/> &nbsp;1636</span>
								<span class="xin"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xin.png"/> &nbsp;16</span>
								<span class="btn">查看详情</span></li>
					</ul>
				</li>
				<li class="list_li">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongdi_img5.jpg" class="d_img" />
					<p></p>
					<ul>
						<li>
							<span>戴先生</span>
							<span>二居室92㎡</span>
							<span>63000元</span>
						</li>
						<li class="li2">
							<span class="yan">
								<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/yan.png"/> &nbsp;1636</span>
								<span class="xin"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xin.png"/> &nbsp;16</span>
								<span class="btn">查看详情</span></li>
					</ul>
				</li>
				<li class="list_li">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongdi_img6.jpg" class="d_img" />
					<p></p>
					<ul>
						<li>
							<span>赵先生</span>
							<span>三居室80㎡</span>
							<span>88600元</span>
						</li>
						<li class="li2">
							<span class="yan">
								<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/yan.png"/> &nbsp;1636</span>
								<span class="xin"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xin.png"/> &nbsp;16</span>
								<span class="btn">查看详情</span></li>
					</ul>
				</li>
			</ul>
			<!--图片END-->
			<!--右侧列表-->
			<div class="dl_list">
				<p>
					业主说
				</p>
				<dl>
					<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/sunwei_img.jpg" /></dt>
					<dd>
						<span>赵先生</span><br />师傅水平很高，也很负责，监理经验丰富，意见很有用...
					</dd>
				</dl>
				<dl>
					<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/wangxiansheng_img.jpg" /></dt>
					<dd>
						<span>罗先生</span><br />选门窗的时候很纠结，主要由于正赶上节能改造，街道免...
					</dd>
				</dl>
				<dl>
					<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/zhaonvshi_img.jpg" /></dt>
					<dd>
						<span>曲女士</span><br />5月23日上午8点半，欧十时力门业的 时师傅、李师傅...
					</dd>
				</dl>
				<dl>
					<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/hexiansheng_img.jpg" /></dt>
					<dd>
						<span>万先生</span><br />何先生记得接触大运豪门是在一起网组织的团购会上，大运豪门...
					</dd>
				</dl>
			</div>
			<!--右侧列表END-->
		</div>
		<!--main7END-->
		<!--main8-->
		<div class="main8">
			<p class="ttit  btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务"><b>小区工地案例</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已为<em>58341</em>位业主查看了小区真实案例</p>
			<ul class="btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务">
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xiaoqu_img1.jpg" class="big" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xiaoqu_img1_txt.png" class="img-txt" /></li>
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xiaoqu_img2.jpg" class="big" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xiaoqu_img2_txt.png" class="img-txt" /></li>
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xiaoqu_img3.jpg" class="big" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/xiaoqu_img3_txt.png" class="img-txt" /></li>
			</ul>
			<div class="Q_biao">
				<!--表 -->
                <form method="post" action="" class="biao_yuyue2" id="biao_yuyue2">
                    <div class="biao-data">
                        <b>申请整装套餐</b>
                    </div>
                    <div class="selected">
                        <input type="text" id="source2" class="ipt source" value="请选择房屋所在城市"/>
                        <div class="show-block show-block2">
                            <ul>
                                <li class="active">北京</li>
                                <li>上海</li>
                                <li>石家庄</li>
                                <li>天津</li>
                                <li>哈尔滨</li>
                                <li>西安</li>
                                <li>武汉</li>
                                <li>成都</li>
                                <li>大连</li>
                                <li>济南</li>
                            </ul>
                        </div>
                        <b></b>
                        <span></span>
                    </div>
                    <input type="text" name="rname" value="" class="ipt" id="byName2" maxlength="10" val=""  data-value="请输入您的姓名" >
                    <input type="tel" name="mobile" value="" class="ipt" id="byTel2" maxlength="11" val=""  data-value="请输入您的电话" >
                    <p class=" btn-submit"><input type="button" value="马上预约" class="ipt ipt-submit ipt-submit2" id="yuyuesource2">提<br />交</p>
                </form>
			</div>
		</div>
		<!--main8END-->
		<!--main9-->
		<div class="main9" >
			<p class="ttit"><b class="btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>480道工艺">施工工艺</b><em class="wid btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务"></em><b class="btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务">品质保障</b></p>
			<ul class="ul_img btn_data-tit" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>480道工艺">
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongyi_img1.jpg" /></li>
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongyi_img2.jpg" /></li>
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongyi_img3.jpg" /></li>
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongyi_img4.jpg" /></li>
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongyi_img5.jpg" /></li>
				<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/gongyi_img6.jpg" /></li>
			</ul>
			<div class="rigth btn_data-tit"  data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务">
			    <p><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/footer_banner.jpg" /><span><b>最值得信赖装修平台</b><br />装修咨询热线：<?= Yii::$app->params['siteHotline']; ?></span></p>
				<ul class="L_ul">
					<li><b>200万套</b><br />房屋装修经验</li>
					<li><b>100%</b><br />业主投诉解决率</li>
					<li><b>700万套</b><br />业主口碑NO.1</li>
				</ul>
				<ul class="dl_list">
					<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/footer_nav1.jpg" /><br />100%正品保障</li>
					<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/footer_nav2.jpg" /><br />0增项保障</li>
					<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/footer_nav3.jpg" /><br />售后保障</li>
					<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/footer_nav4.jpg" /><br />投诉100%解决</li>
					<li><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/footer_nav5.jpg" /><br />施工保障保障</li>
				</ul>
				<div class="text">
					<b><?= Yii::$app->params['siteNameBase']; ?>郑重承诺：</b>为切实保障业主利益，不发布虚假广告，自觉抵制假货、假冒知名商品，保证业主的知情权、选择权，不虚标价格、折扣和团购数据，不误导、侵害业主的合法权益，认真解决业主投诉，主动接受工商、通信管理等有关政府部门、行业组织、业主和媒体的监督。
				</div>
			</div>
		</div>
		<!--main9END-->
		<!--蒙层-->
		<div class=" Hui" id="Hui"></div>
		<!--蒙层END-->
		<!--表 二维码-->
		<div class="biao_d" id="biao_d">
			<!--二维码-->
			<div class="Er" id="Er">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/close.png" class="close" alt="关闭" /><!--关闭按钮-->
				<p class="P_tit"><b>恭喜您预约成功</b></p>
				<p>扫一扫，关注<?= Yii::$app->params['siteNameBase']; ?>官方微信号</p>
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/Er.jpg" class=" M" />
				<p>网页即将跳转到首页...</p>
			</div>
		<!--二维码END-->
		<!--表 -->
            <form method="post" action="" class="biao_yuyue" id="biao_yuyue">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/close.png" class="close" alt="关闭" /><!--关闭按钮-->
                <div class="biao-data">
                    <b id="tit">申请整装套餐</b>
                    <p>已有<span>197l8</span>人报名</p>
                </div>
                <input type="text" name="rname" value="" class="ipt"  id="byName" maxlength="10" val=""  data-value="请填写您的姓名">
                <input type="tel" name="mobile" value="" class="ipt"  id="byTel" maxlength="11" val=""  data-value="填写手机号，预约上门量房">
                <div class="selected">
                    <input type="text" value="请选择房屋所在城市" id="source1" class="ipt source">

                    <div class="show-block show-block1">
                        <ul>
                            <li class="active">北京</li>
                            <li>上海</li>
                            <li>石家庄</li>
                            <li>天津</li>
                            <li>哈尔滨</li>
                            <li>西安</li>
                            <li>武汉</li>
                            <li>成都</li>
                            <li>大连</li>
                            <li>济南</li>
                        </ul>
                    </div>
                    <b></b>
                    <span></span>
                </div>
                <input type="button" value="马上预约" class="ipt ipt-submit ipt-submit3" id="yuyuesource">
            </form>
			<!--表END-->
		</div>
		<!--表 二维码END-->
		
	</div>
	<!-- end main -->
	 <!-- 底部 -->
  <div class="subFooter btn_data-tit" style="float:left;" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务">

      <div class="subFooterBG">
          <div class="subFooterT">
               <ul class="subFooterT_list clear">
                 <li>
                   <a >
                     <i class="i1"></i>
                     <span>100%正品保障</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i2"></i>
                     <span>90天退换货</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i9"></i>
                     <span>质保金先行赔付</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i4"></i>
                     <span>30天调补差价</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i5"></i>
                     <span>7x24小时客服</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i6"></i>
                     <span>设计保障</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i7"></i>
                     <span>资金保障</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i8"></i>
                     <span>施工保障</span>
                   </a>
                 </li>
                 <li>
                   <a >
                     <i class="i3"></i>
                     <span>投诉100%解决</span>
                   </a>
                 </li>
                 <li class="last">
                   <a >
                     <i class="i0"></i>
                     <span>投诉保障</span>
                   </a>
                 </li>
               </ul>
          </div>
      </div>

      <div class="subFooterBg">
         <div class="subFooterB">
            <ul>
                <li>
                    <a  rel="nofollow"><p>网站服务</p></a>
                  </li>
                  <li>
                    <a >家具建材团购</a>
                  </li>
                  <li>
                    <a >家具建材网铺</a>
                  </li>
                  <li>
                    <a >找装修公司</a>
                  </li>
              </ul>
              <ul>
                <li>
                    <a ><p>新手帮助</p></a>
                  </li>
                  <li>
                    <a>会员注册</a>
                  </li>
                  <li>
                    <a>个人密码</a>
                  </li>
                  <li>
                    <a >找回资料</a>
                  </li>
              </ul>
              <ul>
                <li>
                    <a  ><p>购物指南</p></a>
                  </li>
                  <li>
                    <a >参加团购会</a>
                  </li>
                  <li>
                    <a >下单流程</a>
                  </li>
                  <li>
                    <a >商家折扣</a>
                  </li>
              </ul>
              <ul>
                <li>
                    <a  rel="nofollow"><p>售后服务</p></a>
                  </li>
                  <li>
                    <a >退换货说明</a>
                  </li>
                  <li>
                    <a >退单流程</a>
                  </li>
                  <li>
                    <a >投诉受理</a>
                  </li>
              </ul>
              <ul class="last">
                <li><p>联系我们</p></li>
				  <li>业主服务：<?= Yii::$app->params['siteHotline']; ?></li>
				  <li>商务合作：周经理<?= Yii::$app->params['siteJoinusTel']; ?></li>
              </ul>
              <div class="SFBlist">
			  <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/images/source_53d88ed69ef36.png" alt="微信二维码" width="80px" height="80px">
                  <div class="weixin">
                    <span>扫描二维码</span>
                    <span>关注官方微信</span>
                  </div>
              </div>
        </div>
      </div>

     </div>
  </div>

<!-- 版权 -->
<div class="copyRight btn_data-tit" style="float:left;" data-tit="申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务">
  <div class="subcoptRight">
      <div class="SCRleft">
          <ul>
                <li class="first"><a >关于<?= Yii::$app->params['siteNameBase']; ?></a></li>
                <li><a >团购活动</a></li>
                <li><a >媒体报道</a></li>
                <li><a >合作单位</a></li>
                <li><a >友情链接</a></li>
                <li><a >诚聘英才</a></li>
                <li><a >联系我们</a></li>
				<li class="last"><a >网站地图</a></li>
            </ul>
            <p><a  title="<?= Yii::$app->params['siteIcpInfo']; ?>"><?= Yii::$app->params['siteIcpInfo']; ?></a></p>
        </div>
        <div class="SCRright">
            <a >
              <span class="s1"></span>
            </a>
            <a  rel="nofollow">
              <span class="s2"></span>
            </a>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sjlf/js/js.js?v5"></script>
