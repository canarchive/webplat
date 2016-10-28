<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'sj/css/version_1200', 'sj/css/new_finish', 'sj/css/new_putin', '/sj/css/layer_order',
];
$this->params['jsFiles'] = [
	'sj/js/jquery-1.9.1', 'sj/js/comm', 
];
$this->params['currentNav'] = 'free';
$this->params['formPosition'] = 'hd-sjpc';
$this->params['formPositionName'] = '活动-设计量房pc';
?>
<script>
var isMobile = '<?= intval($this->context->isMobile); ?>';
if (isMobile == 1) {
    window.location.href = "<?= Yii::getAlias(Yii::$app->params['hostAliasMobile']) . Url::to(['/decoration/detail/feature', 'view' => 'bjnew', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>";
}
</script>
<style>.layer_content_v2 .rank_li .get_code_v2{display:block;height:16px;line-height:16px;color:#ff875a;position: absolute;right: 15px;top:18px;z-index: 4;}</style></head>

<body>
<div class="site_topnav" role="navigation">
    <div class="top_nav_info">
        <div class="wrap clearfix">
            <div class="nav_info_right clearfix">
                <p class="top_info"></p>
                <ul class="entry_menu tn_menu clearfix">
                    <!--<li class="myorder">
                        <a class="menu_hd major_pop" href="javascript:;" tjjj="click_pc_top.menu.qjqb" tjjj_name="<?= Yii::$app->params['siteNameBase']; ?>钱包"><?= Yii::$app->params['siteNameBase']; ?>钱包</a>
                        <b>
                        </b>
                        <div class="menu_bd hide">
                            <a href="javascript:;" class="major_pop" tjjj="click_pc_top.menu.daikuan" tjjj_name="装修贷款">装修贷款</a></div>
                    </li>-->
                    <li class="myorder">
                        <a id="shanghu" class="menu_hd major_pop" href="javascript:;" tjjj="click_pc_top.menu.shzx" tjjj_name="商户中心">商户中心
                            <b></b>
                        </a>
                        <div class="menu_bd hide">
                            <a id="sh_ruzhu" class="major_pop" href="javascript:;" tjjj="click_pc_top.menu.shrz" tjjj_name="商户入驻">商户入驻</a></div>
                    </li>
                    <li class="myorder nolist">
                        <a class="menu_hd major_pop" href="javascript:;" tjjj="click_pc_top.menu.help" tjjj_name="帮助中心">帮助中心</a></li>
                    <li class="mall_tel">
					    <strong><?= Yii::$app->params['siteHotline']; ?></strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<input name="tjjj" value="" type="hidden" />
<input name="tjjj_name" value="" type="hidden" />
<input name="apply_title" value="" type="hidden" />
<div id="header">
    <div class="wrap">
        <div class="jia_logo clearfix fl" style="padding-top: 0px;">
            <div class="logo fl" style="padding-top: 10px;">
                <a target="_top" class="major_pop" tjjj="click_pc_head.logo.jia" tjjj_name="首页logo" href="javascript:;">
				<img width="121" height="75" alt="<?= Yii::$app->params['siteNameBase']; ?>网首页" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/logo.png"></a>
            </div>
            <div class="fl" style="position: relative;">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_logo.right.link" tjjj_name="暖暖的新家logo">
				<img width="128" height="94" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/nndxj_logo.gif" style="display: block;"></a>
            </div>
        </div>
        <div class="top-nav" role="navigation" id="top-nav"></div>
        <div class="outWrap">
            <div class="searchWrap">
                <ul class="clearfix choose_out_jcy" tjjj="click_pc_top" tjjj_name="搜索">
                    <li class="selected">
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.sp" tjjj_name="商品">
                            <span>商品</span></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.dp" tjjj_name="店铺">
                            <span>店铺</span></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.tk" tjjj_name="图库">
                            <span>图库</span></a>
                    </li>
                    <li class="more_jcy">
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_search.top.gd" tjjj_name="更多">
                            <span>更多</span></a>
                        <i class="ang"></i>
                    </li>
                </ul>
                <div class="searchBox">
                    <input type="text" autocomplete="off" name="keyword" class="searchInput mall_jia_goods_search " id="searchInput">
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_search.btn" tjjj_name="搜索">
                        <input type="submit" class="searchBtn" value=""></a>
                    <i>
                    </i>
                    <span style="" id="search_hotword"></span>
                    <ul></ul>
                </div>
            </div>
            <div class="my_Qj">
                <div class="my_Qj_wrap">
                    <p>
                        <em></em>
                        <a class="major_pop" tjjj="click_pc_top.menu.myqj" href="javascript:;" tjjj_name="我的<?= Yii::$app->params['siteNameBase']; ?>">我的<?= Yii::$app->params['siteNameBase']; ?></a></p>
                    <i>
                    </i>
                </div>
                <div class="my_ord_bbs">
                    <a tjjj="click_pc_top.menu.myorder" class="major_pop" href="javascript:;" tjjj_name="我的订单">我的订单</a>
                    <a tjjj="click_pc_top.menu.mybbs" class="major_pop" href="javascript:;" tjjj_name="我的论坛">我的论坛</a></div>
            </div>
            <div class="cart">
                <div class="cartTxt">
                    <p>
                        <em></em>
                        <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="购物车">购物车</a></p>
                    <span></span>
                    <i>
                    </i>
                    <div class="num_jcy">
                        <b>0</b>
                        <strong></strong>
                    </div>
                </div>
                <div id="head_cart" class="cartshow"></div>
            </div>
            <p class="other">
                <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="开关">开关</a>
                <a class="major_pop" tjjj="click_pc_top" href="javascript:;" tjjj_name="地板">地板</a>
                <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="橱柜">橱柜</a>
                <a class="major_pop" tjjj="click_pc_top" href="javascript:;" tjjj_name="家具">家具</a>
                <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="床">床</a>
                <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="沙发">沙发</a>
                <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="瓷砖">瓷砖</a>
                <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="吊顶">吊顶</a>
                <a tjjj="click_pc_top" class="major_pop" href="javascript:;" tjjj_name="热水器">热水器</a></p>
        </div>
    </div>
</div>
<div class="g_web_nav clearfix">
    <ul class="clearfix top_nav_ul">
        <li id="jia_nav_home" class="major_pop g_nav_active">
            <a href="javascript:;" tjjj="click_pc_2014.nav.home" tjjj_name="首页">首页</a></li>
        <li id="jia_nav_tg">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.tg" tjjj_name="现场活动">现场活动</a></li>
        <li class="major_pop pos_sec" id="jia_nav_zx">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_nav" tjjj_name="装修设计">装修设计</a>
            <i>
            </i>
        </li>
        <li id="jia_nav_daikuan">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.daikuan" tjjj_name="装修贷款">装修贷款</a></li>
        <li id="jia_nav_tm">
            <a href="javascript:;" class="major_pop" id="jia_nav_home" tjjj="click_pc_2014.nav.temai" tjjj_name="品牌特卖">品牌特卖</a></li>
        <li class="major_pop pos_sec" id="jia_nav_mall">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.mall" tjjj_name="建材商城">建材商城</a>
            <i>
            </i>
        </li>
        <li class="major_pop pos_sec" id="jia_nav_jiaju">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.jiaju" tjjj_name="家居商城">家居商城</a>
            <i>
            </i>
        </li>
        <li class="major_pop pos_sec" id="jia_nav_tuku">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.tuku" tjjj_name="图库">图库</a>
            <i>
            </i>
        </li>
        <li class="major_pop pos_sec" id="jia_nav_xue">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.xiaoguo" tjjj_name="装修效果图">装修效果图</a>
            <i>
            </i>
        </li>
        <li id="jia_nav_bbs">
            <a href="javascript:;" class="major_pop" tjjj="click_pc_2014.nav.gonglue" tjjj_name="装修攻略">装修攻略</a></li>
        <li style="margin-right: 0px;" id="jia_nav_pinpai">
            <a href="javascript:;" class="major_pop" id="jia_nav_tiyan" tjjj="click_pc_2014.nav.pinpai" tjjj_name="线下体验馆">线下体验馆</a></li>
    </ul>
</div>
<!--<div class="self-introduction">
    <div class="self_box">
		<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/jia_pet36x36.png"><?= Yii::$app->params['siteNameBase']; ?>网成立于2005年，是国内知名的专注于装修、建材、家居垂直领域的电商平台。</div>
</div>-->
<div class="newput_main">
    <div class="topmost clearfix">
        <div class="topm_left">
            <div class="change_tab">
                <ul class="clearfix">
                    <li class="active">
                        <a href="javascript:;">在线装修报价</a></li>
                    <li>
                        <a href="javascript:;">免费量房设计</a>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/hot.png"></li>
                </ul>
            </div>
            <div class="change_cont">
                <div class="change_item">
                    <p class="p_stong">免费帮你获取装修预算</p>
                    <p class="p_little">今日已有
                        <em>6867</em>业主申请</p>
                    <div class="menu_box">
                        <div class="menu_li">
                            <input type="text" value="80" class="lang_input" onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" maxlength="3" name="area">
                            <em>㎡</em></div>
                        <div class="menu_li clearfix">
                            <div class="p_li">
                                <input type="text" class="quote_select" name="" value="2室" />
                                <i>
                                </i>
                                <ul class="norms_se" style="display:none;">
                                    <li>
                                        <a href="javascript:;">1室</a></li>
                                    <li>
                                        <a href="javascript:;">2室</a></li>
                                    <li>
                                        <a href="javascript:;">3室</a></li>
                                    <li>
                                        <a href="javascript:;">4室</a></li>
                                </ul>
                            </div>
                            <div class="p_li space">
                                <input type="text" class="quote_select" name="" value="1厅" />
                                <i>
                                </i>
                                <ul class="norms_se" style="display:none;">
                                    <li>
                                        <a href="javascript:;">1厅</a></li>
                                    <li>
                                        <a href="javascript:;">2厅</a></li>
                                </ul>
                            </div>
                            <div class="p_li space">
                                <input type="text" class="quote_select" name="" value="1卫" />
                                <i>
                                </i>
                                <ul class="norms_se" style="display:none;">
                                    <li>
                                        <a href="javascript:;">1卫</a></li>
                                    <li>
                                        <a href="javascript:;">2卫</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="menu_radio">
                            <label>
                                <input type="radio" name="home_state" />二手房装修</label>
                            <label>
                                <input type="radio" name="home_state" />毛坯房装修</label></div>
                        <a href="javascript:;" class="putin_btn estimate_offer major_pop" tjjj="click_pc_top_left_bjbtn" tjjj_name="在线装修报价" apply_title="立即预约<?= Yii::$app->params['siteNameBase']; ?>网装修报价">立即估算报价</a></div>
                    <div class="grade_price">
                        <p>经济实惠≤299元/㎡&nbsp;&nbsp;&nbsp;简约现代≥299元/㎡</p>
                        <p>低调奢华≥499元/㎡&nbsp;&nbsp;&nbsp;高端大气≥999元/㎡</p>
                    </div>
                </div>
                <div class="change_item" style="display:none;">
                    <p class="p_stong">免费量房、出装修设计方案</p>
                    <p class="p_little">今日已有
                        <em>6867</em>业主申请</p>
                    <form class="centre_form">
                        <div class="menu_box">
                            <div class="rank_li menu_li user_name_li">
                                <input type="text" class="input_focus lang_input" name="user_name" value="">
                                <span class="placeholder" style="display: block;">姓名</span></div>
                            <div class="verify_tips" id="user_name_tips" style="display:none;">
                                <i>
                                </i>
                                <span></span>
                            </div>
                            <div class="rank_li menu_li mobile_li">
                                <input type="text" class="input_focus lang_input" name="mobile" maxlength="11" value="">
                                <span class="placeholder" style="display: block;">手机号</span></div>
                            <div class="verify_tips" id="mobile_tips" style="display:none;">
                                <i>
                                </i>
                                <span></span>
                            </div>
                            <div class="rank_li menu_li">
                                <input type="text" value="北京" readonly="" class="lang_input infor_city place_city" name="areaflag_name">
                                <i>
                                </i>
                            </div>
                            <!-- <div class="rank_li menu_li validateCode_li validateCode">
                            <input type="text" class="lang_input input_focus input-text-v2" name="verify_code" maxlength="4" value="" onkeyup="this.value=this.value.replace(/[\u4e00-\u9fa5]/g,'');send_msg_code($(this),4);"  onBlur="send_msg_code($(this),0);">
                            <span class="placeholder " style="display: block;">图片验证码</span>
                            <div class="Turing_number">
                            <span></span>
                            <img width="70" height="28" class="passport" id="passport2" onclick="newchange($(this))" >
                            <a href="javascript:;" <a href="javascript:;" onclick="newchange($('.passport'))">换一张</a></div>
                            </div>
                            <div class="verify_tips" id="verify_code_tips" style="display:none;">
                            <i></i><span></span></div>
                            <div class="rank_li menu_li verify_code_li" style="display:none;">
                            <input type="text" class="lang_input input_focus input-text-v2" name="note" maxlength="6" value=""> 
                            <span class="placeholder codeText" style="display: block;">手机验证码</span>
                            <a href="javascript:;" class="get_code get_code_v2">获取手机验证码</a></div>
                            <div class="verify_tips" id= "validateCode_tips" style="display:none;">
                            <i></i><span></span></div> -->
                            <!--<div class="form_remember_v2">
                                <span class="rem_box memCheck" id="iagree2">
                                    <input class="infor_areaflag" name="house_areaflag" value="shanghai" type="hidden" />
                                    <input type="checkbox" checked="checked" class="rem_check" name="iagree">我已阅读并且同意<?= Yii::$app->params['siteNameBase']; ?>网的
                                    <a target="_blank" class="forget_pass" href="/help/0051.html">用户协议</a></span>
                            </div>-->
                            <div class="verify_tips" id="iagree_tips" style="display:none;">
                                <i>
                                </i>
                                <span></span>
                            </div>
                            <a href="javascript:;" class="putin_btn major_pop" tjjj="click_pc_top_left_sqbtn" tjjj_name="免费量房设计">立即申请</a>
                            <input name="xnkf_id" id="xnkf_id" value="" type="hidden">
                            <input name="shop_id" value="0" type="hidden" />
                            <input name="source" value="pc-toufang-new" type="hidden" />
                            <input name="type" value="1" type="hidden" /></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="topm_among">
            <div class="big_graph">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_top_nndxj" tjjj_name="暖暖的新家">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/top_nndxj.jpg" /></a>
            </div>
            <div class="free_fuwu clearfix">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_free_lf" tjjj_name="免费量房">
                    <div class="fuwu-txt">
                        <span>免费量房</span>
                        <p>设计全程陪同</p>
                        <p>初步装修规划</p>
                    </div>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/free_lf.png"></a>
                <a href="javascript:;" class="major_pop gap" tjjj="click_pc_free_sj" tjjj_name="免费设计">
                    <div class="fuwu-txt">
                        <span>免费设计</span>
                        <p>省千元设计费</p>
                        <p>找满意的方案</p>
                    </div>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/free_sj.png"></a>
                <a href="javascript:;" class="major_pop gap" tjjj="click_pc_free_dk" tjjj_name="装修贷款">
                    <div class="fuwu-txt">
                        <span>装修贷款</span>
                        <p>0首付 0利息</p>
                        <p>年利率3.6%起</p>
                    </div>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/free_dk.png"></a>
                <!-- <a href="javascript:;" class="major_pop gap" tjjj="click_pc_free_jl" tjjj_name="免费监理">
                <div class="fuwu-txt">
                <span>免费监理</span>
                <p>获取预算模板</p>
                <p>避免价格陷阱</p>
                </div>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/free_jl.png"></a> -->
            </div>
        </div>
        <div class="topm_right">
            <ul>
                <li class="clearfix border_none">
                    <a href="javascript:;" class="major_pop fl" tjjj="click_pc_top_right1" tjjj_name="婚房装修">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/house_vary_01.jpg" /></a>
                    <div class="houvar fl">
                        <span>婚房装修</span>
                        <p>人气设计方案一览</p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_top_right1_btn" tjjj_name="婚房装修">立即预约</a></div>
                </li>
                <li class="clearfix">
                    <a href="javascript:;" class="major_pop fl" tjjj="click_pc_top_right2" tjjj_name="空间大改造">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/house_vary_02.jpg" /></a>
                    <div class="houvar fl">
                        <span>空间大改造</span>
                        <p>40平变80平</p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_top_right2_btn" tjjj_name="空间大改造">立即预约</a></div>
                </li>
                <li class="clearfix">
                    <a href="javascript:;" class="major_pop fl" tjjj="click_pc_top_right3" tjjj_name="二手房变新居">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/house_vary_03.jpg" /></a>
                    <div class="houvar fl">
                        <span>二手房变新居</span>
                        <p>7天焕新服务</p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_top_right3_btn" tjjj_name="二手房变新居">立即预约</a></div>
                </li>
            </ul>
        </div>
    </div>
    <div id="1F" class="member_case clearfix">
        <div class="memtag">
            <em></em>
            <span>会员案例</span></div>
        <ul class="clearfix">
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case1" tjjj_name="三房欧式风格 6.8万">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/member_li01.jpg" /></a>
                <p class="p_txt">
                    <em>总价: 6.8万</em>
                    <span>三房欧式风格</span></p>
                <p class="p_mast"></p>
            </li>
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case2" tjjj_name="二房简欧风格 7.6万">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/member_li02.jpg" /></a>
                <p class="p_txt">
                    <em>总价: 7.6万</em>
                    <span>二房简欧风格</span></p>
                <p class="p_mast"></p>
            </li>
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case3" tjjj_name="一房美式风格 3.5万">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/member_li03.jpg" /></a>
                <p class="p_txt">
                    <em>总价: 3.5万</em>
                    <span>一房美式风格</span></p>
                <p class="p_mast"></p>
            </li>
            <li>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_member_case4" tjjj_name="别墅现代风格 27.3万">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/member_li04.jpg" /></a>
                <p class="p_txt">
                    <em>总价: 27.3万</em>
                    <span>别墅现代风格</span></p>
                <p class="p_mast"></p>
            </li>
        </ul>
    </div>
    <div id="2F" class="finish_scheme">
        <h2 class="column_title">
            <span>装修方案精选</span>
            <em>已服务
                <i>53467</i>位业主</em>
            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_1F_title_more" tjjj_name="装修方案精选 更多">更多></a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_01" tjjj_name="商业装修">商业装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_02" tjjj_name="别墅装修">别墅装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_03" tjjj_name="复式装修">复式装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_1F_title_04" tjjj_name="二手房装修">二手房装修</a>
                <a href="javascript:;" class="major_pop bordernone" tjjj="click_pc_1F_title_05" tjjj_name="新房装修">新房装修</a></div>
        </h2>
        <div class="scheme_handpick clearfix">
            <div class="handpick_item delpd_t delpd_l">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_01">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/scheme_01.jpg" tjjj_name="70-90㎡经济型平层整装解决方案  58080起" /></a>
                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_01" tjjj_name="70-90㎡经济型平层整装解决方案  58080起">70-90㎡经济型平层整装解决方案</a>
                    <span>¥
                        <em>58080</em>起</span>
                    <p>
                        <span>免费设计</span>
                        <span>免费监理</span>
                        <span>专业施工</span></p>
                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_01" tjjj_name="70-90㎡经济型平层整装解决方案  58080起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btns_01" tjjj_name="70-90㎡经济型平层整装解决方案  58080起">了解详情</a></p>
                </div>
            </div>
            <div class="handpick_item delpd_t delpd_r">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_02" tjjj_name="120-150㎡经济型复式别墅装修公司解决方案  82360起">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/scheme_02.jpg" /></a>
                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_02" tjjj_name="120-150㎡经济型复式别墅装修公司解决方案 82360起">120-150㎡经济型复式别墅装修公司解决方案</a>
                    <span>¥
                        <em>82360</em>起</span>
                    <p>
                        <span>品牌主材</span>
                        <span>用量不限</span>
                        <span>上门安装</span>
                        <span>售后无忧</span></p>
                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_02" tjjj_name="120-150㎡经济型复式别墅装修公司解决方案  82360起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btns_02" tjjj_name="120-150㎡经济型复式别墅装修公司解决方案  82360起">了解详情</a></p>
                </div>
            </div>
            <div class="handpick_item delpd_b delpd_l">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_03" tjjj_name="40-50㎡标准平层套餐解决方案  30920起">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/scheme_03.jpg" /></a>
                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_03" tjjj_name="40-50㎡标准平层套餐解决方案  30920起">40-50㎡标准平层套餐解决方案</a>
                    <span>¥
                        <em>30920</em>起</span>
                    <p>
                        <span>免费量房</span>
                        <span>免费设计</span>
                        <span>3家PK</span>
                        <span>专业施工</span></p>
                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_03" tjjj_name="40-50㎡标准平层套餐解决方案  30920起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btn2_03" tjjj_name="40-50㎡标准平层套餐解决方案  30920起">了解详情</a></p>
                </div>
            </div>
            <div class="handpick_item delpd_b delpd_r">
                <a href="javascript:;" class="major_pop item_img" tjjj="click_pc_1F_image_04" tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/scheme_04.jpg" /></a>
                <div class="handpick_right">
                    <a href="javascript:;" class="major_pop pick_tit" tjjj="click_pc_1F_txt_04" tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">100-120㎡经济型平层组合包解决方案</a>
                    <span>¥
                        <em>78700</em>起</span>
                    <p>
                        <span>免费设计</span>
                        <span>品牌主材</span>
                        <span>用量不限</span>
                        <span>专业施工</span></p>
                    <p>
                        <a href="javascript:;" class="major_pop putin_btn" tjjj="click_pc_1F_btn_04" tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">立即预定</a>
                        <a href="javascript:;" class="major_pop know_btn" tjjj="click_pc_1F_btn2_04" tjjj_name="100-120㎡经济型平层组合包解决方案  78700起">了解详情</a></p>
                </div>
            </div>
        </div>
        <div class="already_reserve">
            <div class="already_left">今日已有
                <em>6867</em>位业主
                <br/>预定精选套餐方案</div>
            <div class="already_among">
                <ul type="box">
                    <li>
                        <em>·</em>
                        <span class="rl">杨女士</span>
                        <span class="rl">200㎡</span>
                        <span>158****3449</span>
                        <span class="bl">13分钟前</span>
                        <em>·</em>
                        <span class="rl">刘女士</span>
                        <span class="rl">140㎡</span>
                        <span>183****8625</span>
                        <span class="bl">35分钟前</span></li>
                    <li>
                        <em>·</em>
                        <span class="rl">胡女士</span>
                        <span class="rl">98㎡</span>
                        <span>184****5156</span>
                        <span class="bl">42分钟前</span>
                        <em>·</em>
                        <span class="rl">孙先生</span>
                        <span class="rl">130㎡</span>
                        <span>151****6681</span>
                        <span class="bl">1小时前</span></li>
                    <li>
                        <em>·</em>
                        <span class="rl">江先生</span>
                        <span class="rl">97㎡</span>
                        <span>135****3656</span>
                        <span class="bl">1小时前</span>
                        <em>·</em>
                        <span class="rl">张明</span>
                        <span class="rl">54㎡</span>
                        <span>189****3389</span>
                        <span class="bl">1小时前</span></li>
                    <li>
                        <em>·</em>
                        <span class="rl">刘女士</span>
                        <span class="rl">150㎡</span>
                        <span>181****4558</span>
                        <span class="bl">1小时前</span>
                        <em>·</em>
                        <span class="rl">熊先生</span>
                        <span class="rl">140㎡</span>
                        <span>138****7285</span>
                        <span class="bl">1小时前</span></li>
                </ul>
            </div>
            <div class="already_right">
                <a href="javascript:;" class="major_pop ihave_btn" tjjj="click_pc_1F_ihave_btn">我也要预定</a></div>
        </div>
    </div>
    <div id="3F" class="effect_picture">
        <h2 class="column_title">
            <span>装修效果图</span>
            <em>已为
                <i>3689516</i>位业主找到灵感</em>
            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_2F_title_more" tjjj_name="装修效果图 更多">更多></a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_01" tjjj_name="商业装修">商业装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_02" tjjj_name="别墅装修">别墅装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_03" tjjj_name="复式装修">复式装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_title_04" tjjj_name="二手房装修">二手房装修</a>
                <a href="javascript:;" class="major_pop bordernone" tjjj="click_pc_2F_title_05" tjjj_name="新房装修">新房装修</a></div>
        </h2>
        <div class="property_tag clearfix">
            <dl class="space clearfix">
                <dt></dt>
                <dd>
                    <span>空间</span>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_01" tjjj_name="客厅">客厅</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_02" tjjj_name="卧室">卧室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_03" tjjj_name="卫生间">卫生间</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_04" tjjj_name="厨房">厨房</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_05" tjjj_name="电视墙">电视墙</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_space_06" tjjj_name="榻榻米">榻榻米</a></dd>
            </dl>
            <dl class="housetype clearfix">
                <dt></dt>
                <dd>
                    <span>户型</span>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_01" tjjj_name="一居室">一居室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_02" tjjj_name="二居室">二居室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_03" tjjj_name="三居室">三居室</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_04" tjjj_name="复式">复式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_05" tjjj_name="别墅">别墅</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_huxing_06" tjjj_name="小户型">小户型</a></dd>
            </dl>
            <dl class="style clearfix">
                <dt></dt>
                <dd>
                    <span>风格</span>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_01" tjjj_name="简约">简约</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_02" tjjj_name="现代">现代</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_03" tjjj_name="中式">中式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_04" tjjj_name="欧式">欧式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_05" tjjj_name="美式">美式</a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_style_06" tjjj_name="田园">田园</a></dd>
            </dl>
        </div>
        <div class="effect_img clearfix">
            <div class="effect_left">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_01" tjjj_name="萌娃城堡必备 扮靓儿童房3大招">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/15951373.jpg">
                    <div class="float_txt">
                        <p class="big_font">萌娃城堡必备</p>
                        <p class="small_font">
                            <span>832 案例</span>
                            <span>5942 浏览</span>扮靓儿童房3大招</p></div>
                </a>
            </div>
            <div class="effect_among">
                <div class="among_top">
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_02" tjjj_name="180平米装出完美混搭风">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/15951375.jpg">
                        <div class="float_txt">
                            <p class="small_font">
                                <span>252 案例</span>180平米装出完美混搭风</p></div>
                    </a>
                </div>
                <div class="among_bom">
                    <a href="javascript:;" class="major_pop among_t_left" tjjj="click_pc_2F_image_03" tjjj_name="80平小户型挑高装修">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/15951377.jpg">
                        <div class="float_txt">
                            <p class="small_font">
                                <span>50 案例</span>80平小户型挑高装修</p></div>
                    </a>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_06" tjjj_name="鸡肋空间变书房">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/14748807.jpg">
                        <div class="float_txt">
                            <p class="small_font">
                                <span>133 案例</span>鸡肋空间变书房</p></div>
                    </a>
                </div>
            </div>
            <div class="effect_right">
                <a href="javascript:;" class="major_pop" tjjj="click_pc_2F_image_07" tjjj_name="3步打造文艺家居咖啡角">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/14037743.jpg" width="280">
                    <div class="float_txt">
                        <p class="small_font">
                            <span>1045 案例</span>3步打造文艺家居咖啡角</p></div>
                </a>
            </div>
        </div>
    </div>
    <!--effect_picture end-->
    <div id="4F" class="famous_company">
        <h2 class="column_title">
            <span>知名装修公司</span>
            <em>已服务
                <i>53467</i>位业主</em>
            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_3F_title_more" tjjj_name="知名装修公司 更多">更多></a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_01" tjjj_name="商业装修">商业装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_02" tjjj_name="别墅装修">别墅装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_03" tjjj_name="复式装修">复式装修</a>
                <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_title_04" tjjj_name="二手房装修">二手房装修</a>
                <a href="javascript:;" class="major_pop bordernone" tjjj="click_pc_3F_title_05" tjjj_name="新房装修">新房装修</a></div>
        </h2>
        <div class="famous_nav">
            <a href="javascript:;" class="major_pop active" tjjj="click_pc_3F_nav_01" tjjj_name="知名品牌<b></b>">知名品牌
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_02" tjjj_name="高性价比<b></b>">高性价比
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_03" tjjj_name="高口碑值<b></b>">高口碑值
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_04" tjjj_name="擅长二手房翻新<b></b>">擅长二手房翻新
                <b></b>
            </a>
            <a href="javascript:;" class="major_pop" tjjj="click_pc_3F_nav_05" tjjj_name="擅长大宅设计">擅长大宅设计</a></div>
<div class="company_list">
					
				<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides clearfix" style="width: 2000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="215226319" tjjj="click_pc_3F_logo_0" tjjj_name="今朝装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/13568499.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_0" shop_id="215226319" title="今朝装饰" tjjj_name="今朝装饰">今朝装饰</a>
								<span>案例：8个</span>
								<span>评论：1725条</span>
								<span>口碑值：1748</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="215125099" tjjj="click_pc_3F_logo_1" tjjj_name="轻舟幸福亿家装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/12365334.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_1" shop_id="215125099" title="轻舟幸福亿家装饰" tjjj_name="轻舟幸福亿家装饰">轻舟幸福亿家装饰</a>
								<span>案例：36个</span>
								<span>评论：1122条</span>
								<span>口碑值：1457</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="215227639" tjjj="click_pc_3F_logo_5" tjjj_name="六艺轩装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/14865201.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_5" shop_id="215227639" title="六艺轩装饰" tjjj_name="六艺轩装饰">六艺轩装饰</a>
								<span>案例：9个</span>
								<span>评论：1111条</span>
								<span>口碑值：914</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="5124887" tjjj="click_pc_3F_logo_3" tjjj_name="苏技创意装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/10774247.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_3" shop_id="5124887" title="苏技创意装饰" tjjj_name="苏技创意装饰">苏技创意装饰</a>
								<span>案例：26个</span>
								<span>评论：1591条</span>
								<span>口碑值：1016</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="215229201" tjjj="click_pc_3F_logo_4" tjjj_name="多彩饰家装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/17391458.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_4" shop_id="215229201" title="多彩饰家装饰" tjjj_name="多彩饰家装饰">多彩饰家装饰</a>
								<span>案例：0个</span>
								<span>评论：1244条</span>
								<span>口碑值：933</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="5124840" tjjj="click_pc_3F_logo_6" tjjj_name="我爱我家装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/13032543.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_6" shop_id="5124840" title="我爱我家装饰" tjjj_name="我爱我家装饰">我爱我家装饰</a>
								<span>案例：4个</span>
								<span>评论：1105条</span>
								<span>口碑值：897</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="215228567" tjjj="click_pc_3F_logo_7" tjjj_name="速美超级家"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/15900725.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_7" shop_id="215228567" title="速美超级家" tjjj_name="速美超级家">速美超级家</a>
								<span>案例：0个</span>
								<span>评论：1960条</span>
								<span>口碑值：743</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="5124480" tjjj="click_pc_3F_logo_8" tjjj_name="合建装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/9556113.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_8" shop_id="5124480" title="合建装饰" tjjj_name="合建装饰">合建装饰</a>
								<span>案例：20个</span>
								<span>评论：1795条</span>
								<span>口碑值：709</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="5124263" tjjj="click_pc_3F_logo_2" tjjj_name="泰峰装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/15356754.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_2" shop_id="5124263" title="泰峰装饰" tjjj_name="泰峰装饰">泰峰装饰</a>
								<span>案例：38个</span>
								<span>评论：1854条</span>
								<span>口碑值：1231</span>
							</div>
							<b></b>
						</li>
												<li style="width: 197.6px; float: left; display: block;">
							<a href="javascript:;" class="major_pop" shop_id="215226853" tjjj="click_pc_3F_logo_9" tjjj_name="合为国际别墅装饰"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/14199418.jpg" draggable="false"></a>
							<div class="message_r">
								<a href="javascript:;" class="major_pop" tjjj="click_pc_3F_name_9" shop_id="215226853" title="合为国际别墅装饰" tjjj_name="合为国际别墅装饰">合为国际别墅装饰</a>
								<span>案例：248个</span>
								<span>评论：1947条</span>
								<span>口碑值：708</span>
							</div>
							<b></b>
						</li>
											</ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#" tabindex="-1">Next</a></li></ul></div>
    </div>
    <!--famous_company end-->
    <div id="5F" class="AdPositionId clearfix">
        <a href="javascript:;" class="major_pop ad_baojia" tjjj="click_pc_Ad_left" tjjj_name="获取报价" apply_title="立即预约<?= Yii::$app->params['siteNameBase']; ?>网装修报价">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/ad_baojia.png" /></a>
        <a href="javascript:;" class="major_pop" tjjj="click_pc_Ad_right" tjjj_name="免费申请设计方案">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/ad_free.png" /></a>
    </div>
    <div class="Popular_designer">
        <h2 class="column_title">
            <span>人气设计师</span>
            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_4F_title_more" tjjj_name="人气设计师">更多设计师></a></div>
        </h2>
        <div class="designer_li">
            <ul class="clearfix">
                <li>
                    <span class="topn">Top1</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_01" tjjj_name="田园、欧式、简约等风格">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/style_01.jpg" /></a>
                    <div class="personal_details">
                        <p>
                            <span>方波</span>经验7年</p>
                        <p>擅长: 田园、欧式、美式等风格</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_01" tjjj_name="田园、欧式、简约等风格">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/stylist_01.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top2</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_02" tjjj_name="风水、格局改造，软装搭配">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/style_02.jpg" /></a>
                    <div class="personal_details">
                        <p>
                            <span>王强</span>经验5年</p>
                        <p>擅长: 风水、格局改造，软装搭配</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_02" tjjj_name="风水、格局改造，软装搭配">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/stylist_02.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top3</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_03" tjjj_name="巧妙划分空间，色彩搭配">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/style_03.jpg" /></a>
                    <div class="personal_details">
                        <p>
                            <span>周宝宝</span>经验5年</p>
                        <p>擅长: 巧妙划分空间，色彩搭配</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_03" tjjj_name="巧妙划分空间，色彩搭配">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/stylist_03.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top4</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_04" tjjj_name="榻榻米、书房等局部改造装饰">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/style_04.jpg" /></a>
                    <div class="personal_details">
                        <p>
                            <span>张帅</span>经验4年</p>
                        <p>擅长: 榻榻米、书房等局部改造装饰</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_04" tjjj_name="榻榻米、书房等局部改造装饰">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/stylist_04.jpg">
                        <span>立即咨询</span></a>
                </li>
                <li>
                    <span class="topn">Top5</span>
                    <a href="javascript:;" class="major_pop anlitu" tjjj="click_pc_4F_image_05" tjjj_name="收纳空间改善，细节装饰">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/style_05.jpg" /></a>
                    <div class="personal_details">
                        <p>
                            <span>赵玥</span>经验5年</p>
                        <p>擅长: 收纳空间改善，细节装饰</p>
                    </div>
                    <a href="javascript:;" class="major_pop head_portrait" tjjj="click_pc_4F_btn_05" tjjj_name="收纳空间改善，细节装饰">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/stylist_05.jpg">
                        <span>立即咨询</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div id="6F" class="realgd_live">
        <h2 class="column_title">
            <span>真实工地直播</span>
            <em>上网就能看到装修中的家</em>
            <div class="another">
                <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_5F_title_more" tjjj_name="真实工地直播">更多></a></div>
        </h2>
        <div class="clearfix">
            <div class="live_case">
                <ul class="clearfix">
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_01" tjjj_name="二居室 80平 43600元">
                            <span class="kaigong"></span>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/live_01.jpg" /></a>
                        <div class="bom_ceng">
                            <p class="pT">
                                <span>王先生</span>
                                <span>二居室</span>
                                <span>80平</span>43600元</p>
                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>5706</span>
                                <span class="zan">
                                    <i>
                                    </i>2864</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_01" tjjj_name="二居室 80平 43600元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_02" tjjj_name="一居室 36平 32000元">
                            <span class="shuidian"></span>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/live_02.jpg" /></a>
                        <div class="bom_ceng">
                            <p class="pT">
                                <span>李先生</span>
                                <span>一居室</span>
                                <span>40平</span>32000元</p>
                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>6273</span>
                                <span class="zan">
                                    <i>
                                    </i>865</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_02" tjjj_name="一居室 36平 32000元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_03" tjjj_name="三居室 114平 72800元">
                            <span class="nimu"></span>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/live_03.jpg" /></a>
                        <div class="bom_ceng">
                            <p class="pT">
                                <span>张女士</span>
                                <span>三居室</span>
                                <span>114平</span>72800元</p>
                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>7356</span>
                                <span class="zan">
                                    <i>
                                    </i>1024</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_03" tjjj_name="三居室 114平 72800元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_04" tjjj_name="二居室 90平 46200元">
                            <span class="youqi"></span>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/live_04.jpg" /></a>
                        <div class="bom_ceng">
                            <p class="pT">
                                <span>廖先生</span>二居室
                                <span>90平</span>46200元</p>
                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>2364</span>
                                <span class="zan">
                                    <i>
                                    </i>599</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_04" tjjj_name="二居室 90平 46200元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_05" tjjj_name="二居室 96平 66600元">
                            <span class="jungong"></span>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/live_05.jpg" /></a>
                        <div class="bom_ceng">
                            <p class="pT">
                                <span>章女士</span>二居室
                                <span>96平</span>66600元</p>
                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>11584</span>
                                <span class="zan">
                                    <i>
                                    </i>7305</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_05" tjjj_name="二居室 96平 66600元">查看详情</a></p>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_live_06" tjjj_name="三居室 146平 82000元">
                            <span class="jungong"></span>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/live_06.jpg" /></a>
                        <div class="bom_ceng">
                            <p class="pT">
                                <span>张小姐</span>三居室
                                <span>146平</span>82000元</p>
                            <p class="pb">
                                <span class="kan">
                                    <i>
                                    </i>26584</span>
                                <span class="zan">
                                    <i>
                                    </i>9253</span>
                                <a href="javascript:;" class="major_pop" tjjj="click_pc_5F_btn_06" tjjj_name="三居室 146平 82000元">查看详情</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="live_comment">
                <h3>
                    <i class="comment"></i>业主说</h3>
                <div class="comment_roll">
                    <ul type="box">
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/VNMic85jx3X5m9wAcZZpMc0n12hcWCsLtvDAiajGzgf4Idaa0zmDm23MBdzS4IaaGaaeLDJQphaUCZ9gKyK41Ayg/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>郭先生</p>
                                <p>与公司沟通后，态度明显转变。需要完成的细节部分，..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>张先生</p>
                                <p>对泥工师傅很满意，有问题主动和业主沟通。多个细节..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>王先生</p>
                                <p>管线开槽合理，横平竖直，走线很好，基本都是最短路..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>张先生</p>
                                <p>基本点都列出来，一二三四都很详细。监理也很负责任..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM5GVERsqnuf3f60oLTch706x8xGPUDYqrcJRf5fjXUZ8u25ND1MgllrGClmm1chhKDiazpJgNTUpuw/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>李先生</p>
                                <p>设计师有想法，很有经验，能很好的将设计和施工结合..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM4D2iaE4LpOXo6UYg91s2iclOgVF9pLsC87bx7bgvdEyl3dzqwxB7a4cWsRFJyU3FKeeb53w0SRjZ6A/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>郭小姐</p>
                                <p>郑监理很专业的给我上了一堂入门知识课，并将所有齐..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/Q3auHgzwzM4D2iaE4LpOXo6UYg91s2iclOgVF9pLsC87bx7bgvdEyl3dzqwxB7a4cWsRFJyU3FKeeb53w0SRjZ6A/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>郭小姐</p>
                                <p>很专业，讲述了很多装修入门级技巧..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEITMMzrrFOkLLJeaG5DdPaFySBXp7LGxnia43vMhaBrTxTaJaZNRDBE0mGhjUoCc62onxWL2lbajQg/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>刘女士</p>
                                <p>水电做的不错，走线什么都挺专业..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEITMMzrrFOkLLJeaG5DdPaFySBXp7LGxnia43vMhaBrTxTaJaZNRDBE0mGhjUoCc62onxWL2lbajQg/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>汪小姐</p>
                                <p>签合同时候承诺的挺好，前期也陪着跑了几家建材公司..</p>
                            </div>
                        </li>
                        <li>
                            <img width="40" height="40" src="http://wx.qlogo.cn/mmopen/VNMic85jx3X5HUfsFwQXl6LpTTW1hsjE7Sp8P5ApAlYjd6icfWcOUNoKQicTpMviaUqz075htdXYibiautzrDc7cYFzQ/64">
                            <div class="ment_r">
                                <p class="tit">
                                    <span></span>刘小姐</p>
                                <p>对设计师的印象非常好，专业沟通能力非常强，希望..</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="7F" class="plotgd_live">
        <h2 class="column_title">
            <span>小区工地案例</span>
            <em>已为
                <i>59364</i>位业主查看了小区真实案例</em>
            <!-- <div class="another">
            <a href="javascript:;" class="major_pop bordernone st" tjjj="click_pc_6F_title_more" tjjj_name="小区工地案例">找我家小区></a></div> -->
        </h2>
        <div class="live_widthalter __web-inspector-hide-shortcut__">
            <ul class="clearfix">
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_03.jpg" />
                    <a href="javascript:;" class="major_pop" tjjj="6F_btn_03" tjjj_name="万科翡翠江湾 9.3万">报名参观工地</a>
                    <div class="fl_layer"></div>
                    <p>
                        <span class="fr">预算: 9.3万</span>
                        <span>万科翡翠江湾</span></p>
                </li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_04.jpg" />
                    <a href="javascript:;" class="major_pop" tjjj="6F_btn_04" tjjj_name="绿地世纪城 10.7万">报名参观工地</a>
                    <div class="fl_layer"></div>
                    <p>
                        <span class="fr">预算: 10.7万</span>
                        <span>绿地世纪城</span></p>
                </li>
                <li>
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_05.jpg" />
                    <a href="javascript:;" class="major_pop" tjjj="6F_btn_05" tjjj_name="保利溪湖 7.9万">报名参观工地</a>
                    <div class="fl_layer"></div>
                    <p>
                        <span class="fr">预算: 7.9万</span>
                        <span>保利溪湖</span></p>
                </li>
            </ul>
        </div>
        <div class="seek_home">
            <h3>找我家小区</h3>
            <form class="seek_form">
                <div class="row_item">
                    <input type="text" class="infor_city" name="areaflag_name" data-city="shanghai" readonly="" value="北京">
                    <i>
                    </i>
                    <div class="tab_select_v2 clearfix" style="display: none;">
                        <ul class="breviary_list clearfix">
                            <li class="">ABCDE</li>
                            <li class="cur">FGHJ</li>
                            <li class="">KLMNP</li>
                            <li class="">QRSTW</li>
                            <li class="">XYZ</li></ul>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="beijing">北京</a></li>
                                <li>
                                    <a href="javascript:;" name="chongqing">重庆</a></li>
                                <li>
                                    <a href="javascript:;" name="chengdu">成都</a></li>
                                <li>
                                    <a href="javascript:;" name="changsha">长沙</a></li>
                                <li>
                                    <a href="javascript:;" name="changchun">长春</a></li>
                                <li>
                                    <a href="javascript:;" name="dalian">大连</a></li>
                                <li>
                                    <a href="javascript:;" name="changzhou">常州</a></li>
                                <li>
                                    <a href="javascript:;" name="gddg">东莞</a></li>
                                <li>
                                    <a href="javascript:;" name="ahaq">安庆</a></li>
                                <li>
                                    <a href="javascript:;" name="hncd">常德</a></li>
                                <li>
                                    <a href="javascript:;" name="anshan">鞍山</a></li>
                                <li>
                                    <a href="javascript:;" name="baoding">保定</a></li>
                            </ul>
                        </div>
                        <div class="region_cont region_show">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="fuzhou">福州</a></li>
                                <li>
                                    <a href="javascript:;" name="jxfz">抚州</a></li>
                                <li>
                                    <a href="javascript:;" name="guiyang">贵阳</a></li>
                                <li>
                                    <a href="javascript:;" name="hangzhou">杭州</a></li>
                                <li>
                                    <a href="javascript:;" name="haerbin">哈尔滨</a></li>
                                <li>
                                    <a href="javascript:;" name="hefei">合肥</a></li>
                                <li>
                                    <a href="javascript:;" name="jinan">济南</a></li>
                                <li>
                                    <a href="javascript:;" name="jiaxing">嘉兴</a></li>
                                <li>
                                    <a href="javascript:;" name="jingmen">荆门</a></li>
                                <li>
                                    <a href="javascript:;" name="jsha">淮安</a></li>
                                <li>
                                    <a href="javascript:;" name="guilin">桂林</a></li>
                                <li>
                                    <a href="javascript:;" name="ganzhou">赣州</a></li>
                                <li>
                                    <a href="javascript:;" name="sxjc">晋城</a></li>
                                <li>
                                    <a href="javascript:;" name="jljl">吉林</a></li>
                                <li>
                                    <a href="javascript:;" name="huzhou">湖州</a></li>
                                <li>
                                    <a href="javascript:;" name="guangzhou">广州</a></li>
                            </ul>
                        </div>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="jslyg">连云港</a></li>
                                <li>
                                    <a href="javascript:;" name="gxlz">柳州</a></li>
                                <li>
                                    <a href="javascript:;" name="kunming">昆明</a></li>
                                <li>
                                    <a href="javascript:;" name="kunshan">昆山</a></li>
                                <li>
                                    <a href="javascript:;" name="lanzhou">兰州</a></li>
                                <li>
                                    <a href="javascript:;" name="maanshan">马鞍山</a></li>
                                <li>
                                    <a href="javascript:;" name="luoyang">洛阳</a></li>
                                <li>
                                    <a href="javascript:;" name="nanchang">南昌</a></li>
                                <li>
                                    <a href="javascript:;" name="nanning">南宁</a></li>
                                <li>
                                    <a href="javascript:;" name="nantong">南通</a></li>
                                <li>
                                    <a href="javascript:;" name="nanjing">南京</a></li>
                                <li>
                                    <a href="javascript:;" name="ningbo">宁波</a></li>
                                <li>
                                    <a name="ningde" href="javascript:;">宁德</a></li>
                                <li>
                                    <a href="javascript:;" name="nanyang">南阳</a></li>
                                <li>
                                    <a name="putian" href="javascript:;">莆田</a></li>
                            </ul>
                        </div>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="qingdao">青岛</a></li>
                                <li>
                                    <a href="javascript:;" name="quanzhou">泉州</a></li>
                                <li class="sign">
                                    <a href="javascript:;" name="shanghai">上海</a></li>
                                <li>
                                    <a href="javascript:;" name="shenyang">沈阳</a></li>
                                <li>
                                    <a href="javascript:;" name="suzhou">苏州</a></li>
                                <li>
                                    <a name="sanming" href="javascript:;">三明</a></li>
                                <li>
                                    <a href="javascript:;" name="shenzhen">深圳</a></li>
                                <li>
                                    <a href="javascript:;" name="shijiazhuang">石家庄</a></li>
                                <li>
                                    <a href="javascript:;" name="tianjin">天津</a></li>
                                <li>
                                    <a href="javascript:;" name="wuxi">无锡</a></li>
                                <li>
                                    <a href="javascript:;" name="wuhan">武汉</a></li>
                                <li>
                                    <a href="javascript:;" name="taiyuan">太原</a></li>
                                <li>
                                    <a href="javascript:;" name="xiamen">厦门</a></li>
                                <li>
                                    <a href="javascript:;" name="qhxn">西宁</a></li>
                                <li>
                                    <a href="javascript:;" name="jsxz">徐州</a></li>
                                <li>
                                    <a href="javascript:;" name="zjtz">台州</a></li>
                                <li>
                                    <a href="javascript:;" name="hbxt">邢台</a></li>
                                <li>
                                    <a href="javascript:;" name="wulumuqi">乌鲁木齐</a></li>
                                <li>
                                    <a href="javascript:;" name="sdwf">潍坊</a></li>
                                <li>
                                    <a href="javascript:;" name="zjwz">温州</a></li>
                            </ul>
                        </div>
                        <div class="region_cont">
                            <ul class="clearfix">
                                <li>
                                    <a href="javascript:;" name="xian">西安</a></li>
                                <li>
                                    <a href="javascript:;" name="zhengzhou">郑州</a></li>
                                <li>
                                    <a href="javascript:;" name="yancheng">盐城</a></li>
                                <li>
                                    <a href="javascript:;" name="jsyz">扬州</a></li>
                                <li>
                                    <a href="javascript:;" name="sxyc">运城</a></li>
                                <li>
                                    <a href="javascript:;" name="hnyy">岳阳</a></li>
                                <li>
                                    <a href="javascript:;" name="other">其它</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row_item">
                    <input type="hidden" class="input_focus lang_input" name="user_name" value="钓鱼页网友">
                    <input type="text" class="input_focus" name="village" value="">
                    <span style="display: block;" class="placeholder">请输入小区名称</span></div>
                <div class="row_item">
                    <input type="text" class="input_focus" name="mobile" maxlength="11" value="">
                    <span style="display: block;" class="placeholder">请输入您的电话</span></div>
                <a href="javascript:;" tjjj="click_pc_6F_find_btn" tjjj_name="找我家小区" class="seet_submit major_pop">提交</a>
                <input class="infor_areaflag" name="house_areaflag" value="shanghai" type="hidden" />
                <input name="xnkf_id" id="xnkf_id" value="" type="hidden">
                <input name="shop_id" value="0" type="hidden" />
                <input name="source" value="pc-toufang-new" type="hidden" />
                <input name="type" value="1" type="hidden" /></form>
        </div>
        <!-- <ul class="clearfix">
        <li>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_01.jpg" />
        <a href="javascript:;" class="major_pop" tjjj="click_pc_6F_btn_01" tjjj_name="万科九龙山 12.6万<">报名参观工地</a>
        <div class="fl_layer"></div>
        <p><span class="fr">预算: 12.6万</span><span>万科九龙山</span></p></li>
        <li>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_02.jpg" />
        <a href="javascript:;" class="major_pop" tjjj="click_pc_6F_btn_02" tjjj_name="万科世纪之光 8.7万">报名参观工地</a>
        <div class="fl_layer"></div>
        <p><span class="fr">预算: 8.7万</span><span>万科世纪之光</span></p></li>
        <li>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_03.jpg" />
        <a href="javascript:;" class="major_pop" tjjj="click_pc_6F_btn_03" tjjj_name="万科翡翠江湾 9.3万">报名参观工地</a>
        <div class="fl_layer"></div>
        <p><span class="fr">预算: 9.3万</span><span>万科翡翠江湾</span></p></li>
        <li>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_04.jpg" />
        <a href="javascript:;" class="major_pop" tjjj="click_pc_6F_btn_04" tjjj_name="绿地世纪城 10.7万">报名参观工地</a>
        <div class="fl_layer"></div>
        <p><span class="fr">预算: 10.7万</span><span>绿地世纪城</span></p></li>
        <li>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/plotgd_05.jpg" />
        <a href="javascript:;" class="major_pop" tjjj="click_pc_6F_btn_05" tjjj_name="保利溪湖 7.9万">报名参观工地</a>
        <div class="fl_layer"></div>
        <p><span class="fr">预算: 7.9万</span><span>保利溪湖</span></p></li>
        </ul> -->
    </div>
    <div class="technology_safeguard clearfix">
        <div id="8F" class="shigong_gongyi">
            <h2 class="column_title">
                <span>施工工艺</span></h2>
            <ul class="clearfix">
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_01" tjjj_name="阳角金属 . 护角工艺">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/craft_01.jpg" />
                        <p>阳角金属 . 护角工艺</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_02" tjjj_name="双层石膏 . 抗开裂墙">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/craft_02.jpg" />
                        <p>双层石膏 . 抗开裂墙</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_03" tjjj_name="卫生间管道 . 防噪音">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/craft_03.jpg" />
                        <p>卫生间管道 . 防噪音</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_04" tjjj_name="水管连接 . 终生维护">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/craft_04.jpg" />
                        <p>水管连接 . 终生维护</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_05" tjjj_name="线管规范 . 耐用节省">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/craft_05.jpg" />
                        <p>线管规范 . 耐用节省</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_image_06" tjjj_name="安装龙骨 . 防损防灰">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/craft_06.jpg" />
                        <p>安装龙骨 . 防损防灰</p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="9F" class="qijia_baozhang">
            <h2 class="column_title">
                <span><?= Yii::$app->params['siteNameBase']; ?>保障</span></h2>
            <div class="safeguard_cont">
                <ul class="clearfix">
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_01" tjjj_name="基础服务">
                            <span class="fw_01"></span>
                            <p>基础服务</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_02" tjjj_name="平台保障">
                            <span class="fw_02"></span>
                            <p>平台保障</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_03" tjjj_name="优质施工队">
                            <span class="fw_03"></span>
                            <p>优质施工队</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_04" tjjj_name="第三方监理">
                            <span class="fw_04"></span>
                            <p>第三方监理</p>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="major_pop" tjjj="click_pc_7F_fuwu_05" tjjj_name="优质服务">
                            <span class="fw_05"></span>
                            <p>贴心服务</p>
                        </a>
                    </li>
                </ul>
                <div class="terrace_referral jiabg">
                    <h3>为什么选择<?= Yii::$app->params['siteNameBase']; ?>？
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/fw_terrace.png" /></h3>
                    <p>1.<?= Yii::$app->params['siteNameBase']; ?>致力于让更多的网友体验到实实在在的装修体验</p>
					<p>2.<?= Yii::$app->params['siteNameBase']; ?>真正的建立起了业主和装修公司、材料商家互通的网上桥梁。</p>
					<p>3.<?= Yii::$app->params['siteNameBase']; ?>已成为广大业主装修青睐的装修综合门户网站</p>
                </div>
                <div class="terrace_referral shield">
                    <h3><?= Yii::$app->params['siteNameBase']; ?>网优质施工队认证标准
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/sj/images/jia_QA.png" /></h3>
                    <p>1.必须是通过审核在<?= Yii::$app->params['siteNameBase']; ?>网入住的商家所属的施工队才有资格申请认证优质施工队。</p>
                    <p>2.优质施工队必须参加每次<?= Yii::$app->params['siteNameBase']; ?>网主办的施工队长培训，并经过考核。</p>
                    <p>3.任何一个月中有3名业主对同一支优质施工队不满，即取消优质资格。</p>
                    <p>4.优质施工队长在任何时候出现有效投诉在5个工作日内没有解决的则取消资格。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="jia_footer">
    <div class="jia_foot_info">
		<p><?= Yii::$app->params['siteCopyRightInfo']; ?></p>
		<p><?= Yii::$app->params['siteIcpInfo']; ?></p>
    </div>
</div>
<div class="toufang_kf">
    <!--<a tjjj="click_pc_jia.kf.global.btm" href="javascript:;" tjjj_name="咨询客服" class="toufang_kf_btn major_pop"></a>
    <p style="height: 24px; top: 77px; padding-top: 7px;">
        <a tjjj="click_pc_jia.kf.global.btm" href="javascript:;" tjjj_name="咨询客服" class="major_pop">咨询客服</a></p>-->
    <a href="javascript:;" class="J_returnTop" style="display: none;"></a>
</div>
<!--统计代码-->
<script type="text/javascript">var TJJ = {};
    TJJ.UserCookieName = "JIA_user_name";
    TJJ.AreaCookieName = "jia_city_id";
    TJJ.t1 = (new Date).getTime();
    TJJ.action = function() {};
    TJJ.track = function() {};</script>
<script src="http://fastued2.jia.com/js/tjj.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://fastued2.jia.com/js/common/jquery.flexslider-min.js"></script>
<script type="text/javascript">$(".J_returnTop").click(function() {
        $('html,body').animate({
            scrollTop: 0
        },
        400);
    });
    $(window).scroll(function() {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 620) {
            $(".J_returnTop").fadeIn(100);
        } else {
            $(".J_returnTop").fadeOut(200);
        }
    });

    $(".change_tab li").hover(function() {
        var index = $(".change_tab li").index(this);
        $(this).addClass('active').siblings().removeClass('active');
        $(".change_item").eq(index).show().siblings('.change_item').hide();
    });
    $('.company_list').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        controlNav: false,
        itemWidth: 198,
        itemMargin: 0,
        minItems: 5,
        maxItems: 5
    });
    $(".designer_li li").hover(function() {
        $(this).find('.head_portrait').addClass('replace');
    },
    function() {
        $(this).find('.head_portrait').removeClass('replace');
    });
    $(".live_case li").hover(function() {
        $(this).find('.bom_ceng').stop().animate({
            bottom: 0
        });
    },
    function() {
        $(this).find('.bom_ceng').stop().animate({
            bottom: '-50px'
        });
    });
    $(".plotgd_live .live_widthalter li").hover(function() {
        $(this).find('.fl_layer').stop().animate({
            bottom: 0
        });
        $(this).find('a').fadeIn();
    },
    function() {
        $(this).find('.fl_layer').stop().animate({
            bottom: '-168px'
        });
        $(this).find('a').fadeOut();
    });
    $(".quote_select").click(function(event) {
        $(this).parents(".p_li").find("ul").slideToggle("fast").parents(".p_li").siblings().find("ul").hide();
    });
    $(".norms_se li a").live("click",
    function() {
        $(this).parents(".p_li").find(".quote_select").val($(this).text()).parents(".p_li").find(".norms_se").hide();
    });</script>
<script type="text/javascript">//滚动
    (function($) {
        $.fn.easysroll = function(options) {
            var parameter = {
                direction: "left",
                numberr: "1",
                delays: "1000",
                scrolling: "1000",
                fadein: false,
                enterStop: true
            };
            var ops = $.extend(parameter, options);
            var $this = $(this);
            var _this = this;
            var _time = null;
            var obj = _this.find("[type='box']");
            var items = obj.find("li");
            var itemsleg = items.length;
            var itemsW = items.outerWidth(true);
            var itemsH = items.outerHeight(true);
            var _direction = ops.direction;
            var _numberr = ops.numberr;
            var _delays = ops.delays;
            var _scrolling = ops.scrolling;
            var _fadein = ops.fadein;
            var _enterStop = ops.enterStop;
            if (_direction == "top" || _direction == "bottom") {
                items.css({
                    "float": "none"
                });
                obj.width(itemsW * itemsleg);
                if (_direction == "bottom") {
                    obj.css("margin-top", -_numberr * itemsH);
                }
            } else if (_direction == "left" || _direction == "right") {
                items.css({
                    "float": "left"
                });
                obj.width(itemsW * itemsleg);
                if (_direction == "right") {
                    obj.css("margin-left", -_numberr * itemsW);
                }
            } else {
                alert("您配置的滚动方向有误，请重新配置");
                return true;
            }
            function scroll() {
                if (_direction == "left") {
                    obj.animate({
                        "margin-left": -_numberr * itemsW
                    },
                    Number(_delays),
                    function() {
                        for (var i = 0; i < _numberr; i++) {
                            obj.find("li").eq(0).appendTo(obj);
                        }
                        obj.css({
                            "margin-left": 0
						});
						if (_fadein) {
                            obj.find("li").eq(0).animate({
                                "opacity": 0
                            },
                            Number(_delays));
                            obj.find("li").eq(itemsleg - 1).css({
                                "opacity": 1
                            });
                        }
                    });
                } else if (_direction == "right") {
                    obj.animate({
                        "margin-left": 0
                    },
                    Number(_delays),
                    function() {
                        for (var i = 0; i < _numberr; i++) {
                            obj.find("li").eq(itemsleg - 1).prependTo(obj);
                        };
                        obj.css("margin-left", -_numberr * itemsW);
                        if (_fadein) {
                            obj.find("li").eq(0).animate({
                                "opacity": 1
                            },
                            Number(_delays));
                            obj.find("li").eq(itemsleg - 1).css({
                                "opacity": 0
                            });
                        }
                    });
                } else if (_direction == "top") {
                    obj.animate({
                        "margin-top": -_numberr * itemsH
                    },
                    Number(_delays),
                    function() {
                        for (var i = 0; i < _numberr; i++) {
                            obj.find("li").eq(0).appendTo(obj);
                        }
                        obj.css({
                            "margin-top": 0
                        });
                        if (_fadein) {
                            obj.find("li").eq(0).animate({
                                "opacity": 0
                            },
                            Number(_delays));
                            obj.find("li").eq(itemsleg - 1).css({
                                "opacity": 1
                            });
                        }
                    });
                } else if (_direction == "bottom") {
                    obj.animate({
                        "margin-top": 0
                    },
                    Number(_delays),
                    function() {
                        for (var i = 0; i < _numberr; i++) {
                            obj.find("li").eq(itemsleg - 1).prependTo(obj);
                        }
                        obj.css("margin-top", -_numberr * itemsH);
                        if (_fadein) {
                            obj.find("li").eq(0).animate({
                                "opacity": 1
                            },
                            Number(_delays));
                            obj.find("li").eq(itemsleg - 1).css({
                                "opacity": 0
                            });
                        }
                    });
                }
            }
            $this.hover(function() {
                if (_enterStop) {
                    clearInterval(_time);
                }
            },
            function() {
                _time = setInterval(scroll, _scrolling);
            }).trigger('mouseleave');
        }
    })(jQuery);

    $(".already_among").easysroll({
        direction: "top",
        numberr: "1",
        delays: "1000",
        scrolling: "3000",
        fadein: false,
        enterStop: true
    });
    $(".comment_roll").easysroll({
        direction: "top",
        numberr: "1",
        delays: "1000",
        scrolling: "3000",
        fadein: false,
        enterStop: true
    });
    var tupian_yz = $(".passport");
    var order_html = '<div id="apply_form" class="layer_order_v2 layer_order_ap layer_anim" style="display:none">' + '      <div class="layer_title_v2 apply_title">申请预约免费设计量房</div>' + '      <div class="layer_content_v2">' + '        <p class="lead_num">今日已有<span class="day_number">6867</span>用户预约装修</p>' + '      	<form class="centre_form">' + '      		<div class="rank_li">' + '      			<input type="text" value="" name="user_name" class="input-text-v2" />' + '	            <span class="placeholder" style="display: block;">请输入您的姓名</span>' + '	            <div class="cut_off"></div>' + '     		</div>' + '<div class="verify_tips" id="user_name_tips" style="display:none;"><i></i><span></span> </div>' + '      	<div class="rank_li">' + '      		<input type="text" value="" maxlength="11" name="mobile" class="input-text-v2" />' + '	            <span class="placeholder" style="display: block;">请输入您的电话</span>' + '	            <div class="cut_off"></div>' + '      	</div>' + '<div class="verify_tips" id="mobile_tips" style="display:none;"><i></i><span></span></div>' + '      	<div class="rank_li">' + '      			<input type="text" value="北京" readonly="" data-city="shanghai" name="areaflag_name" class="infor_city" />' + '            		<div class="cut_off"></div>' + '      			<div style="display:none" class="tab_select_v2 clearfix"><ul class="breviary_list clearfix"><li class="cur">ABCDE</li><li>FGHJ</li><li>KLMNP</li><li>QRSTW</li><li>XYZ</li></ul><div class="region_cont region_show"><ul class="clearfix"><li><a name="beijing" href="javascript:;">北京</a></li><li><a name="chongqing" href="javascript:;">重庆</a></li><li><a name="chengdu" href="javascript:;">成都</a></li><li><a name="changsha" href="javascript:;">长沙</a></li><li><a name="changchun" href="javascript:;">长春</a></li><li><a name="dalian" href="javascript:;">大连</a></li><li><a name="changzhou" href="javascript:;">常州</a></li><li><a name="gddg" href="javascript:;">东莞</a></li><li><a name="ahaq" href="javascript:;">安庆</a></li><li><a name="hncd" href="javascript:;">常德</a></li><li><a name="anshan" href="javascript:;">鞍山</a></li><li><a name="baoding" href="javascript:;">保定</a></li></ul></div><div class="region_cont"><ul class="clearfix"><li><a name="fuzhou" href="javascript:;">福州</a></li><li><a name="jxfz" href="javascript:;">抚州</a></li><li><a name="guiyang" href="javascript:;">贵阳</a></li><li><a name="hangzhou" href="javascript:;">杭州</a></li><li><a name="haerbin" href="javascript:;">哈尔滨</a></li><li><a name="hefei" href="javascript:;">合肥</a></li><li><a name="jinan" href="javascript:;">济南</a></li><li><a name="jiaxing" href="javascript:;">嘉兴</a></li><li><a name="jingmen" href="javascript:;">荆门</a></li><li><a name="jsha" href="javascript:;">淮安</a></li><li><a name="guilin" href="javascript:;">桂林</a></li><li><a name="ganzhou" href="javascript:;">赣州</a></li><li><a name="sxjc" href="javascript:;">晋城</a></li><li><a name="jljl" href="javascript:;">吉林</a></li><li><a name="huzhou" href="javascript:;">湖州</a></li><li><a name="guangzhou" href="javascript:;">广州</a></li></ul></div><div class="region_cont"><ul class="clearfix"><li><a name="jslyg" href="javascript:;">连云港</a></li><li><a name="gxlz" href="javascript:;">柳州</a></li><li><a name="kunming" href="javascript:;">昆明</a></li><li><a name="kunshan" href="javascript:;">昆山</a></li><li><a name="lanzhou" href="javascript:;">兰州</a></li><li><a name="maanshan" href="javascript:;">马鞍山</a></li><li><a name="luoyang" href="javascript:;">洛阳</a></li><li><a name="nanchang" href="javascript:;">南昌</a></li><li><a name="nanning" href="javascript:;">南宁</a></li><li><a name="nantong" href="javascript:;">南通</a></li><li><a name="nanjing" href="javascript:;">南京</a></li><li><a name="ningbo" href="javascript:;">宁波</a></li><li><a href="javascript:;" name="ningde">宁德</a></li><li><a name="nanyang" href="javascript:;">南阳</a></li><li> <a href="javascript:;" name="putian">莆田</a></li></ul></div><div class="region_cont"><ul class="clearfix"><li><a name="qingdao" href="javascript:;">青岛</a></li><li><a name="quanzhou" href="javascript:;">泉州</a></li><li><a name="shanghai" href="javascript:;">上海</a></li><li><a name="shenyang" href="javascript:;">沈阳</a></li><li><a name="suzhou" href="javascript:;">苏州</a></li><li><a href="javascript:;" name="sanming">三明</a></li><li><a name="shenzhen" href="javascript:;">深圳</a></li><li><a name="shijiazhuang" href="javascript:;">石家庄</a></li><li><a name="tianjin" href="javascript:;">天津</a></li><li><a name="wuxi" href="javascript:;">无锡</a></li><li><a name="wuhan" href="javascript:;">武汉</a></li><li><a name="taiyuan" href="javascript:;">太原</a></li><li><a name="xiamen" href="javascript:;">厦门</a></li><li><a name="qhxn" href="javascript:;">西宁</a></li><li><a name="jsxz" href="javascript:;">徐州</a></li><li><a name="zjtz" href="javascript:;">台州</a></li><li><a name="hbxt" href="javascript:;">邢台</a></li><li><a name="wulumuqi" href="javascript:;">乌鲁木齐</a></li><li><a name="sdwf" href="javascript:;">潍坊</a></li><li><a name="zjwz" href="javascript:;">温州</a></li></ul></div><div class="region_cont"><ul class="clearfix"><li><a name="xian" href="javascript:;">西安</a></li><li><a name="zhengzhou" href="javascript:;">郑州</a></li><li><a name="yancheng" href="javascript:;">盐城</a></li><li><a name="jsyz" href="javascript:;">扬州</a></li><li><a name="sxyc" href="javascript:;">运城</a></li><li><a name="hnyy" href="javascript:;">岳阳</a></li><li><a name="other" href="javascript:;">其它</a></li></ul></div></div>' + '                  <i></i>' + '      		</div>' + ' <div class="rank_li validateCode_li validateCode">' + '<input type="text" class="input-text-v2 input_focus" name="verify_code" maxlength="4" value="" onkeyup="this.value=this.value.replace(/[\u4e00-\u9fa5]/g,\'\');send_msg_code($(this),4);"  onBlur="send_msg_code($(this),0);" >' + '<span class="placeholder "    onBlur="shop_name_check()">请输入图片验证码</span>' + '<div class="cut_off"></div>' + ' <div class="Turing_number">' + '	<span style="display:none"></span>' + '  <img width="70" height="28" src="" class="passport" id="passport2" onclick="newchange($(this))">' + '	 <a href="javascript:;" onclick="newchange($(\'.passport\'))">换一张</a>' + '	</div>' + ' </div>' + ' <div class="verify_tips" id="verify_code_tips" style="display:none;"><i></i><span></span></div>'

    + '<div class="rank_li verify_code_li" style="display:none;">' + ' <input type="text" class="input-text-v2 input_focus" name="note" maxlength="6" value=""> ' + '  <span class="placeholder codeText" style="display: block;" >请输入验证码</span>' + '   <div class="cut_off"></div>' + '  <a href="javascript:;" class="get_code_v2">获取手机验证码</a>' + ' </div>' + '<div class="verify_tips" id= "validateCode_tips" style="display:none;"><i></i><span></span></div>' + '      		<div class="form_remember_v2" style="display:none;">' + '              <span id="iagree2" class="rem_box memCheck">' + '                <input type="checkbox" name="iagree" class="rem_check" checked="checked">我已阅读并且同意<?= Yii::$app->params['siteNameBase']; ?>网的' + '                <a href="/help/0051.html" class="forget_pass" target="_blank">用户协议</a>' + '              </span>' + '            </div>' + '<input name="xnkf_id" id="xnkf_id" value="" type="hidden">' + '<input name="shop_id" value="0" type="hidden" />' + '<input name="source" value="pc-toufang-new" type="hidden" />' + '<input name="type" value="1" type="hidden" />' + '<input class="infor_areaflag" name="house_areaflag" value="shanghai" type="hidden" />' + '            <div class="verify_tips" style="display:none;margin:26px 0 -26px 0;"></div>' + '      	  <a href="javascript:;" class="entire_present apply_submit">立即预约</a>' + '      	</form>' + '      </div>' + '<div class="verify_tips" id= "iagree_tips" style="display:none;"><i></i><span></span></div>'

    + '      <a href="javascript:;" class="layer_setwin apply_close"></a>' + '   </div>' + '   <div style="display:none;" class="layer_shade"></div>';

    var add_completion = '<div id="buquan_form" class="layer_order_v2 layer_anim" style="display:none">' + '      <div class="layer_title_v2 apply_buquan">恭喜你已预约成功</div>' + '      <div class="layer_content_v2">' + '        <p class="lead_times">24小时内会有客服人员与您联系，确认您的具体需求</p>' + '      	<p class="lead_tiny">由于申请人数较多，完善资料可更快获取审核服务</p>' + '      	<form class="centre_form">' + '      		<div class="rank_li house_type">' + '      			<label class="use_a"></label>' + '      			<input type="text" class="input-text-v2" name="fangxing" value="" readonly="">' + '            		<span class="placeholder" style="display: block;">请选择您的房型</span>' + '      			<i></i>' + '            	    <div class="cut_off"></div>' + '      			<ul class="house_list" style="display:none">' + '      				<li id="382">一房</li>' + '      				<li id="383">二房</li>' + '      				<li id="384">三房</li>' + '      				<li id="385">四房</li>' + '      				<li id="386">复式</li>' + '      				<li id="387">别墅</li>' + '      			</ul>' + '      		</div>' + '<div class="verify_tips" id="user_name_tips" style="display:none;"><i></i><span></span></div>' + '      		<div class="rank_li">' + '      			<input type="text" class="input-text-v2 input_focus" name="house_space" maxlength="6" value="">' + '                  <span class="placeholder" style="display: block;">请输入你要装修的房屋面积</span>' + '      			<em class="unit">㎡</em>' + '                  <div class="cut_off"></div>' + '      		</div>' + '<div class="verify_tips" id="user_name_tips" style="display:none;"><i></i><span></span></div>' + '      		<div class="rank_li house_type">' + '      		<input type="text" class="input-text-v2" name="yusuan" value="" readonly="">' + '            	<span class="placeholder" style="display: block;">请选择不包括家具、电器的预算</span>' + '      			<i></i>' + '            	    <div class="cut_off"></div>' + '      			<ul class="house_list" style="display:none">' + '      				<li id="292">3万以下</li>' + '      				<li id="293">3-5万</li>' + '      				<li id="294">5-8万</li>' + '      				<li id="949">8-10万</li>' + '      				<li id="950">10-12万</li>' + '      				<li id="951">12-15万</li>' + '      				<li id="952">15-18万</li>' + '      				<li id="953">18-25万</li>' + '      				<li id="954">25-30万</li>' + '      				<li id="955">30万以上</li>' + '      			</ul>' + '      		</div>' + '<div class="verify_tips" id="user_name_tips" style="display:none;"><i></i><span></span></div>' + '      		<div class="rank_li">' + '      			<input type="text" class="input-text-v2 input_focus" name="house_address" value="">' + '	                <span class="placeholder" style="display: block;">您的小区&nbsp;如：佳嘉佳苑</span>' + '	                <div class="cut_off"></div>' + '	  		    </div>' + '<div class="verify_tips" id="user_name_tips" style="display:none;"><i></i><span></span></div>' + '      		<div class="rank_li house_type">' + '	              <input type="text"  readonly="" value="" name="" class="" />' + '	              <em class="placeholder" style="display: block;">是否需要装修贷款</em>' + '	              <i></i>' + '	              <div class="cut_off"></div>' + '	              <ul class="house_list" style="display:none">' + '	                 <li id="">是</li>' + '	                <li id="">否</li>' + '	              </ul>' + '              </div>' + '  			<a href="javascript:;" class="entire_present" onclick="submit_apply_add($(this))">提交</a>' + '      	</form>' + '      </div>' + '      <a href="javascript:;" class="layer_setwin layer_anim_close"></a>' + '   </div>';

    var order_success = '<div class="layer_order_v2 layer_anim" style="display:none" id="sucess">' + '      <div class="layer_title_v2 apply_success"><i class="ok"></i>恭喜您预约成功！</div>' + '      <div class="layer_content_v3">' + '        <p class="p_green">扫一扫，关注<?= Yii::$app->params['siteNameBase']; ?>官方微信号</p>' + '        <div class="planar_code"><img src="http://fastued3.jia.com/image/zhuangxiu/new_finish_v2/pc_jiazx.jpg" width="232" height="232" id="qcode"></div>' + '        <p class="stay_cul stor_cul">“您还可以在微信上找到更多服务”</p>' + '      </div>' + '      <a href="javascript:;" class="layer_setwin layer_anim_close" close_tag="success"></a>' + '   </div>';

    $('body').append(order_html);
    $('body').append(add_completion);
    $('body').append(order_success);
    var validate = true;
    check_send_msg();
    //判断是否需要发送短信验证码
    function check_send_msg() {
                    validate = false;
                    $(".validateCode").hide();
                    $(".float_order").removeClass("besides_order");
        /*$.ajax({
            url: "/zx/shanghai/apply/checkValidate",
            type: "post",
            dataType: "json",
            success: function(data) {
                if (data.msg == "false") {
                    validate = false;
                    $(".validateCode").hide();
                    $(".float_order").removeClass("besides_order");
                } else {
                    change_table();
                    newchange($('.verification'));
                    newchange($('.passport'));
                    $(".float_order").addClass("besides_order");
                }
            }
	    });*/
    }
    //检查
    function change_table() {
        $(".menu_li.validateCode").hide();
        $(".menu_li.verify_code_li").hide();
    }
    // 判断手机号码
    function isRealMobile(mobile) {
        var regex = /^(((1[34578]{1}))+\d{9})$/gi;
        return regex.test(mobile);
    }
    //发送短信验证码
    function send_msg_code(obj, num) {
        var $obj = obj,
        $form = $obj.parents("form"),
        $down = $form.find(".get_code_v2"),
        mobile = $form.find("input[name=mobile]").val(),
        verify_code = $form.find("input[name=verify_code]").val(),
        time = 60;
        if (num == 4 && verify_code.length < 4) {
            return;
        }
        if (num == 0 && (verify_code.length == 0 || verify_code.length == 4)) {
            return;
        }
        $form.find('.verify_tips').css('display', 'none');
        if (mobile == "" || mobile == "您的联系方式" || $.trim(mobile) == "") {
            $form.find("#mobile_tips").show();
            $form.find("#mobile_tips span").text("手机号码不能为空");
            $form.find("input[name='verify_code']").val("");
            return false;
        }
        if (isRealMobile(mobile) == false) {
            $form.find("#mobile_tips").show();
            $form.find("input[name='verify_code']").val("");
            $form.find("#mobile_tips span").text("请填写正确的手机号码");
            $form.find("input[name='verify_code']").attr("disabled", true);
            return false;
        }
        if ($.trim(verify_code) == "") {
            $form.find("#validateCode_tips").show();
            $form.find("#validateCode_tips span").text("请填写图片验证码");
            return false;
        }
        //发送验证码
        $.ajax({
            url: "/zx/shanghai/apply/check_verify_code",
            data: {
                //mobile     : mobile,
                verify_code: verify_code
            },
            type: "post",
            dataType: "json",
            success: function(res) {
                if (false == res['success']) {
                    $form.find("#validateCode_tips").show();
                    $form.find("#validateCode_tips span").text(res['msg']);
                    newchange($('.passport'));
                    $form.find("input[name='verify_code']").val("");
                } else {
                    $form.find("input[name='verify_code']").attr("disabled", true);
                    $form.find("#validateCode_tips").hide();
                    $form.find(".validateCode_li .Turing_number span").show();
                    $.ajax({
                        url: "/zx/shanghai/apply/send_code_v",
                        data: {
                            mobile: mobile
                        },
                        type: "post",
                        dataType: "json",
                        success: function(res) {
                            // console.log(res);
                            if (false == res['success']) {
                                alert(res['msg']);
                            } else {
                                $form.find(".verify_code_li").show();
                                //$(".validateCode_li").find("span").remove();
                                var $down = $form.find(".get_code_v2");
                                $down.addClass("JJ_getCode");
                                var t = setInterval(function() {
                                    time--;
                                    $down.html(time + "秒后重新发送");
                                    if (time == 0) {
                                        clearInterval(t);
                                        $down.html("重新获取验证码");
                                        $down.removeClass("JJ_getCode");
                                    }
                                },
                                1000);
                            }

                        }
                    });

                }
            }
        });
    }
    //图片验证码输入框
    $(".get_code_v2").live("click",
    function() {
        var $this = $(this);
        var $form = $this.closest("form");
        if ($this.hasClass("JJ_getCode")) return false;
        $(".graph_yz .row_li b").hide();
        $form.find("input[name='verify_code']").val("");
        if ($form.find("input[name='verify_code']").attr("disabled")) {
            $form.find("input[name='verify_code']").removeAttr("disabled");
        }

        mobile = $.trim($form.find("input[name=mobile]").val());
        if (mobile == "" || mobile == "您的联系方式" || $.trim(mobile) == "" || mobile == "手机") {
            $form.find("#mobile_tips").show();
            $form.find("#mobile_tips span").text("手机号码不能为空");
            return false;
        }
        if (isRealMobile(mobile) == false) {
            $form.find("#mobile_tips").show();
            $form.find("#mobile_tips span").text("请填写正确的手机号码");
            return false;
        }
        $form.find(".graph_yz").show();
        $form.find(".passport").attr("src", "/zx/shanghai/apply/mobile_code/" + new Date().getTime() + "/");
    });
    //弹出关闭
    $(".major_pop").click(function() {
        show_box($(this));
    });
    function ex_affect($obj) {
        var tjjj = $obj.attr("tjjj");
        var tjjj_name = $obj.attr("tjjj_name");
        $("input[name='tjjj']").val(tjjj);
        $(".apply_close").attr("tjjj", tjjj);
        $("input[name='tjjj_name']").val(tjjj_name);
        //var tjjj_sp = $obj;
        //文案编辑
        if (tjjj.indexOf("5F_") != -1 || tjjj.indexOf("6F_") != -1 || tjjj.indexOf("7F_fuwu_") != -1 || tjjj == "free_jl") {
            $(".apply_title").text("申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务");
            $(".apply_buquan").text("恭喜你已申请成功");
            $(".apply_success").html("<i class='ok'></i>恭喜您申请成功！");
            $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户申请体验");
        } else {
            if (tjjj.indexOf("3F_name_") != -1 || tjjj.indexOf("3F_logo_") != -1) {
                var shop_id = $obj.attr("shop_id");
                $("input[name='shop_id']").val(shop_id);
            }
            if (tjjj.indexOf("7F_image_") != -1) {
                $(".apply_title").text("申请体验<?= Yii::$app->params['siteNameBase']; ?>480道工艺");
                $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户申请体验");
            } else if (tjjj.indexOf("4F_") != -1) {
                $(".apply_title").text("免费预约人气设计师");
                $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户预约装修");
            } else if (tjjj == 'click_pc_top_nndxj') {
                $(".apply_title").text("申请免费领装修基金");
                $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户预约装修");
            } else if (tjjj == 'click_pc_head.logo.jia' || tjjj == 'click_pc_top.menu.myqj') {
                $(".apply_title").text("申请免费体验<?= Yii::$app->params['siteNameBase']; ?>服务");
                $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户预约装修");
            } else if (tjjj.indexOf("1F_") != -1) {
                $(".apply_title").text("申请免费预约精选方案");
                $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户预约装修");
            } else if (tjjj.indexOf("member_case") != -1) {
                $(".apply_title").text("申请免费预约会员方案");
                $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户预约装修");
            } else {
                if ($obj.attr("apply_title")) {
                    $(".apply_title").text($obj.attr("apply_title"));
                    $(".lead_num").html("<span style='color: #f26122;'>请补充联系方式，以便报价方案能准确推送至您的手机</span>");
                } else {
                    $(".apply_title").text("申请预约免费设计量房");
                    $(".lead_num").html("今日已有<span class='day_number'>6867</span>用户预约装修");
                }

            }

            $(".apply_buquan").text("恭喜你已预约成功");
            $(".apply_success").html("<i class='ok'></i>恭喜您预约成功！");
        }

        if (tjjj == "click_pc_top_left_sqbtn" || tjjj == "click_pc_6F_find_btn") {
            if (validate == false) {
                apply_order($obj);
                return false;
            }
        }
        return true;
    }
    function show_box($obj) {
        if (ex_affect($obj)) {
            $(".layer_order_ap").show();
            $(".layer_shade").show();
            popUp($("#apply_form"));
        } else {
            return false;
        }

    }

    $(".input_focus").focus(function() {
        $(this).siblings(".placeholder").hide();
    }).blur(function() {
        if (this.value == "") $(this).siblings(".placeholder").show();
    });
    $(".cut_off,.placeholder").live("click",
    function() {
        $(this).siblings("input,#laydate_id").focus();
    });
    $(".tab_select_v2 a").live("click",
    function() {
        $(this).parent('.tab_select_v2').siblings(".infor_city").focus();
    });
    //城市选择
    $(".infor_city").each(function() {
        $(this).focus(function() {
            $(this).siblings('.tab_select_v2').fadeIn();
        });
        $(this).blur(function() {
            $(this).siblings('.tab_select_v2').fadeOut();
        });
    });
    $(".tab_select_v2 a").each(function() {
        if ($(this).text() == $(".layer_content_v2 .infor_city").val()) {
            $(this).parent('li').addClass('sign');
        }
        $(this).click(function() {
            var txtvalue = $(this).text();
            var txtname = $(this).attr('name');
            $("input[name='house_areaflag']").attr("value", txtname);
            $(".infor_city").attr("value", txtvalue);
            var infor_city = $(this).attr("name");
            $(".infor_city").attr("data-city", infor_city);
            $(".tab_select_v2 li").removeClass('sign');
            $(this).parent('li').addClass('sign');
        });
        $(".breviary_list li").hover(function() {
            var index = $(".breviary_list li").index(this);
            $(this).addClass("cur").siblings("li").removeClass("cur");
            $(".region_cont").eq(index).addClass("region_show").siblings(".region_cont").removeClass("region_show");
        });
    });
    //上下居中
    $(".layer_order_v2").each(function() {
        var layer_height = $(this).outerHeight(true);
        $(this).css("margin-top", -layer_height / 2);
    });
    //免责申明
    // $(".rem_box").live("click",function () {
    //   var $obj = $(this);
    //   $obj.toggleClass("memCheck");
    //   if ($obj.hasClass("memCheck")) {
    //     $obj.children(".rem_check").attr("checked", true);
    //   } else {
    //     $obj.children(".rem_check").attr("checked", false);
    //   }
    // });
    $(".input-text-v2").focus(function() {
        $(this).siblings(".placeholder").hide();
    }).blur(function() {
        if (this.value == "") $(this).siblings(".placeholder").show();
    });
    $(".layer_content_v2 .rank_li").each(function() {
        $(this).find('.input-text-v2').focus(function() {
            $(this).parent().css('border-color', '#f26122');
        });
        $(this).find('.input-text-v2').blur(function() {
            $(this).parent().css('border-color', '#ddd');
        });
    });
    //弹出关闭
    $(".layer_setwin").click(function() {
        var close_tag = $(this).attr("close_tag");
        $(".layer_order_v2").hide();
        $(".layer_succeed_v2").hide();
        $(".layer_shade").hide();
        if (close_tag == 'success') {
            if ("" != "close") window.open("/shanghai/");

        }
    });

    // 弹出popUp
    function popUp($obj) {
        $obj.show();
        var layer_height = $obj.outerHeight();
        $obj.css("margin-top", -layer_height / 2);
        $(".layer_shade").show();
    }
    //关闭弹窗
    function closePop() {
        $('#apply_form input[name=user_name],#apply_form input[name=mobile]').val('').blur();
        $(".layer_shade").hide();
        $(".layer_order_v2").hide();
    }

    function newchange($obj) {
        $obj.attr("src", "/zx/shanghai/apply/mobile_code/" + new Date().getTime() + "/");
    }

    //报名
    function apply_order($obj) {
        var $form = $obj.closest("form"),
        user_name = $.trim($form.find("input[name=user_name]").val()),
        village = $.trim($form.find("input[name=village]").val()),
        mobile = $.trim($form.find("input[name=mobile]").val()),
        note = $.trim($form.find("input[name=note]").val()),
        house_areaflag = $.trim($form.find("input[name=house_areaflag]").val()),
        select_city = $.trim($form.find("input[name=areaflag_name]").val()),
        verify_code = $.trim($form.find("input[name=verify_code]").val()),
        shop_id = $.trim($form.find("input[name=shop_id]").val()),
        type = $.trim($form.find("input[name=type]").val()),
        source = $.trim($form.find("input[name=source]").val()),
        isChecked = $form.find("[name=iagree]:checked").length,
        tjjj = $("input[name='tjjj']").val(),
        tjjj_name = $("input[name='tjjj_name']").val(),
        yanzheng = $form.find(".float_order"),
        sumit_text = '立即预约';
        if (village) {
            sumit_text = '提交';
        }
        if (verify_order($form) == false) {
            return false;
        }
        //小能客服
        if (!$("#xnkf_id").val() == '') {
            var xnkf_id = $("#xnkf_id").val();
        } else {
            var xnkf_id = '';
        }
        $obj.html("正在提交");
        $obj.removeClass("apply_submit");

            var $data = {
                name: user_name,
                mobile: mobile,
                note: tjjj_name,
                //house_areaflag: house_areaflag,
				select_city: select_city,
                shop_id: shop_id,
                type: type
            };


		    $data.position = $("#position").val();
		    $data.position_name = $("#position_name").val();
		    $data.info_id = $("#info_id").val();
		    $data._csrf = $("#_csrf").val();
            $.ajax({
                type: 'POST',
                data: $data,
                url: window.signupUrl,// + '/jz-signup.html',
                dataType: "json",
                success:function(data){
                    if(data.status == 200){
                        var redirectUrl = window.BASE_URL + '/bm-result.html';
                        window.location.href = redirectUrl;
                    }else if ( data.status == 400 ) {
                        alert(data.message);
                        $obj.addClass("apply_submit");
                        $obj.html(sumit_text);
                    } else {
                        alert('报名失败');
                        $obj.addClass("apply_submit");
                        $obj.html(sumit_text);
                    }
                }//end success

            })// end ajax

        /*$.ajax({
            url: "/zx/shanghai/apply/main",
            type: "POST",
            data: {
                user_name: user_name,
                mobile: mobile,
                note: note,
                house_areaflag: house_areaflag,
                shop_id: shop_id,
                type: type,
                source: source,
                isChecked: isChecked,
                xnkf_id: xnkf_id,
                tjjj: tjjj,
                tjjj_name: tjjj_name,
                village: village

            },
            dataType: "JSON",
            success: function(data) {

                if (data.code == 200) {
                    apply_id = data.apply_id;
                    task_id = data.task_id;
                    check_code = data.check_code;
                    if ($("#yusuan-btn").val() != 1) {
                        closePop();
                        if ($("input[name=apply_success_tag]").length > 0) {
                            $("input[name=apply_success_tag]").val("1");
                        }
                        if (tjjj == 'click_pc_top_left_bjbtn') {
                            popUp($("#sucess"));
                        } else {
                            if (village.length > 0) {
                                $("input[name=house_address]").siblings(".placeholder").hide();
                                $("input[name=house_address]").val(village);
                            }
                            popUp($("#buquan_form"));
                        }

                    } else {
                        closePop();
                    }
                    $("#yusuan-btn").val('');
                    $obj.addClass("apply_submit");
                    $obj.html(sumit_text);
                } else {
                    alert(data.msg);
                    $obj.addClass("apply_submit");
                    $obj.html(sumit_text);
                    if (data.send_code == "must") {
                        newchange($('.verification'));
                        newchange($('.passport'));
                        validate = true;
                        $(".validateCode").show();
                        yanzheng.addClass("besides_order");
                    }
                }
            }
        })*/

    }

    //报名验证
    function verify_order(obj) {
        var _this = obj;
        var input_class = '.rank_li';
        var re = /^1[3|4|5|7|8]\d{9}$/;
        if (_this.find('.seet_submit').length > 0) {
            input_class = '.row_item';
        }

        if (_this.find('.seet_submit').length > 0) {
            _this.find('.input_focus').css('border', 'none');
            if (_this.find('input[name=village]').val() == '') {
                _this.find('input[name=village]').css('border', 'solid #f26122 1px');
                return false;
            }
            if (_this.find('input[name=mobile]').val() == '') {
                _this.find('input[name=mobile]').css('border', 'solid #f26122 1px');
                return false;
            }
            if (!re.test(_this.find('input[name=mobile]').val())) {
                _this.find('input[name=mobile]').css('border', 'solid #f26122 1px');
                return false;
            }
        } else {
            _this.find(input_class).find('input').keyup(function() {
                _this.find('.verify_tips').css('display', 'none');
                _this.find(input_class).css('border-color', '');
            });
            var arr = ['请输入姓名', '请输入手机号码', '请输入正确的手机号码', '请填写验证码', '请勾选已阅读并且同意<?= Yii::$app->params['siteNameBase']; ?>网的用户协议'];

            _this.find('.verify_tips').css('display', 'none');
            _this.find(input_class).css('border-color', '');
            if (_this.find('input[name=user_name]').val() == '' || _this.find('input[name=user_name]').val() == '姓名') {
                tip_err(arr[0], _this);
                _this.find('input[name=user_name]').parent(input_class).next('.verify_tips').css('display', 'block');
                _this.find('input[name=user_name]').parent(input_class).css('border-color', '#f26122');
                return false;
            }

            if (_this.find('input[name=mobile]').val() == '' || _this.find('input[name=mobile]').val() == '手机') {
                tip_err(arr[1], _this);
                _this.find('input[name=mobile]').parent(input_class).next('.verify_tips').css('display', 'block');
                _this.find('input[name=mobile]').parent(input_class).css('border-color', '#f26122');
                return false;
            }
            if (!re.test(_this.find('input[name=mobile]').val())) {
                tip_err(arr[2], _this);
                _this.find('input[name=mobile]').parent(input_class).next('.verify_tips').css('display', 'block');
                _this.find('input[name=mobile]').parent(input_class).css('border-color', '#f26122');
                return false;
            }

            if (_this.find('input[name=iagree]').val() == 1) {
                tip_err(arr[4], _this);
                _this.find('input[name=iagree]').parent(input_class).next('.verify_tips').css('display', 'block');
                _this.find('input[name=iagree]').parent(input_class).css('border-color', '#f26122');
                return false;
            }
            if (validate) {
                if (_this.find('input[name=verify_code]').val() == '' || _this.find('input[name=verify_code]').val() == '图片验证码') {
                    tip_err(arr[3], _this);
                    _this.find('input[name=verify_code]').parent(input_class).next('.verify_tips').css('display', 'block');
                    _this.find('input[name=verify_code]').parent(input_class).parent('.graph_yz').next('.verify_tips').css('display', 'block');
                    _this.find('input[name=verify_code]').parent(input_class).css('border-color', '#f26122');
                    return false;
                }

                if (_this.find('input[name=note]').val() == '' || _this.find('input[name=note]').val() == '手机验证码') {
                    tip_err(arr[3], _this);
                    _this.find('input[name=note]').parent(input_class).next('.verify_tips').css('display', 'block');
                    _this.find('input[name=note]').parent(input_class).css('border-color', '#f26122');
                    return false;
                }
            }
        }

    }

    //补全页
    $(document).click(function() {
        $(".rank_li ul.house_list").slideUp("fast");
    });
    $(".house_type").click(function() {
        $(".house_list").stop().slideUp("fast");
        if ($(this).find(".house_list").is(":hidden")) {
            $(this).find(".house_list").slideDown("fast");
            return false;
        } else {
            $(this).find(".house_list").slideUp("fast");
        }
    });
    $('.house_list li').live('click',
    function() {
        var house_list = $(this).text();
        $(this).parent().siblings('.placeholder').hide();
        $(this).parent().siblings('input').attr("value", house_list);
        // $(this).parent().siblings('input').attr("name",valid);
    });
    /**
 * 提交补全信息页
 */
    var fangXingList = ['一房', '二房', '三房', '四房', '复式', '别墅'];
    var yuSuanList = ['3万以下', '3-5万', '5-8万', '8-10万', '10-12万', '12-15万', '15-18万', '18-25万', '25-30万', '30万以上'];
    var dakuanLsit = ['0', '1-5万', '6-10万', '11-15万', '16万以上', ];
    function submit_apply_add(obj) {
        var form = obj.closest("form"),
        fangxing = $.trim(form.find("input[name=fangxing]").val()),
        house_space = $.trim(form.find("input[name=house_space]").val()),
        yusuan = $.trim(form.find("input[name=yusuan]").val()),
        house_address = $.trim(form.find("input[name=house_address]").val()),
        lftime = $.trim(form.find("input[name=lftime]").val()),
        daikuan_money = $.trim($("input[name='daikuan_money']").val()) ? $.trim($("input[name='daikuan_money']").val()) : '否';
        form.find('.verify_tips').css('display', 'none');
        // decorate_time = $.trim($("input[name='decorate_time']").val());
        if (fangXingList.indexOf(fangxing) == -1) {
            tip_err("请选择房型", form);
            form.find('input[name=fangxing]').parent('.rank_li').next('.verify_tips').css('display', 'block');
            return false;
        }
        if (house_space == "") {
            tip_err("请填写房屋面积", form);
            form.find('input[name=house_space]').parent('.rank_li').next('.verify_tips').css('display', 'block');
            return false;
        }
        if (isNaN(house_space)) {
            tip_err("请填写正确的房屋面积", form);
            form.find('input[name=house_space]').parent('.rank_li').next('.verify_tips').css('display', 'block');
            return false;
        }
        if (yuSuanList.indexOf(yusuan) == -1) {
            tip_err("请选择预算", form);
            form.find('input[name=yusuan]').parent('.rank_li').next('.verify_tips').css('display', 'block');
            return false;
        }
        if (house_address == "" || house_address == "您的小区 如：佳嘉佳苑") {
            tip_err("请填写小区地址", form);
            form.find('input[name=house_address]').parent('.rank_li').next('.verify_tips').css('display', 'block');
            return false;
        }
        /* if (lftime == "" || lftime == "您的量房时间") {
 alert("请选择量房时间");
 return false;
 } */
        // if(decorate_time == "" || decorate_time =="请选择装修时间"){
        // 	alert("请选择装修时间");
        // 	return false;
        // }
        // if(dakuanLsit.indexOf(daikuan_money) == -1 || daikuan_money =="您期待的装修贷款金额"){
        // alert("请选择装修贷款金额");
        // return false;
        // }
        obj.removeAttr("onclick");
        $.ajax({
            url: "/zx/shanghai/apply/apply_add",
            data: {
                fangxing: fangxing,
                house_space: house_space,
                yusuan: yusuan,
                house_address: house_address,
                // lftime       :lftime,
                // decorate_time:decorate_time,
                daikuan_money: daikuan_money
            },
            type: "post",
            dataType: "json",
            success: function(data) {
                var areaflag = 'shanghai';
                if (data.code == 200) {
                    closePop();
                    popUp($("#sucess"));
                } else {
                    alert(data.msg)
                }
                obj.attr("onclick", 'submit_apply_add($(this))');
            }
        })
    }
    //操作提示
    function tip_err(str, obj) {
        obj.find('.verify_tips').html('<i></i><span>' + str + '</span>');
    }

    $(".apply_submit").live("click",
    function() {
        apply_order($(this));

    });
    if (!String.prototype.trim) {
        String.prototype.trim = function() {
            return this.replace(/^\s*(\S*(?:\s \S )*)\s*$/, '$1');
        }
    }
    if (!Array.prototype.indexOf) {
        Array.prototype.indexOf = function(val) {
            var value = this;
            for (var i = 0; i < value.length; i++) {
                if (value[i] == val) return i;
            }
            return - 1;
        };
    }</script>
