<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我的账户_1元云购</title>
    <link rel="stylesheet" type="text/css" href="http://skin.1yyg.com/css/header.css?v=151020" />
 <!--[if IE 6]>
   <script type="text/javascript" src="http://skin.1yyg.com/js/iepng.js"></script> 
   <script type="text/javascript">
     EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
   </script>
 <![endif]-->
    <link href="http://skin.1yyg.com/Member/css/base.css?date=20150731" rel="stylesheet" type="text/css" />
    <link href="http://skin.1yyg.com/Member/css/accounts.css?date=20150731" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="http://skin.1yyg.com/JS/JQuery132.js"></script>
    <script id="pageJS" language="javascript" type="text/javascript" data="http://skin.1yyg.com/Member/JS/UserBalance.js"></script>
</head>
<body id="loadingPicBlock">
    <input name="hidAmount" type="hidden" id="hidAmount" value="8.00" />
    <input name="hidIsOpenPwd" type="hidden" id="hidIsOpenPwd" value="0" />
    <input name="hidIsBindMobile" type="hidden" id="hidIsBindMobile" value="1" />
     <input name="hidForbid" type="hidden" id="hidForbid" value="0" />
    <div class="wrapper">
        <!--顶部-->
        <!--顶部-->
      <div class="g-toolbar clrfix">
          <div class="w1190">
              <ul class="fl">
                  <li class="f-collect">
                      <div class="u-menu-hd">
                          <a id="btnTFavorite" href="javascript:;" title="收藏">收藏</a>
                      </div>
                  </li>
                  <li class="f-gap"><s></s></li>
                  <li id="liMobile" class="u-arr">
                      <div class="u-menu-hd transparent-png">
                          <a href="http://info.1yyg.com/app/mobile.html" target="_blank" title="手机云购">手机云购</a>
                          <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                      </div>
                      <div class="u-select">
                          <p>
                              <a href="http://info.1yyg.com/app/mobile.html" target="_blank">
                                  <img src="http://skin.1yyg.com/images/andriod.jpg?v=150123" />
                                  下载客户端
                              </a>
                          </p>
                      </div>
                  </li>
                  <li class="f-gap" style="display:none;"><s></s></li>
                  <li id="liCCTV" style="display:none;">
                      <a href="http://www.1yyg.com/url.html?t=8" target="_blank" class="cctv-icon" title="央视网">
                          <img src="http://skin.1yyg.com/images/cctv-icon.jpg" alt="央视网" width="80" height="35" class="cctv-icon-img">
                          <span class="cctv-icon-txt">广告合作伙伴</span>
                      </a>
                  </li>
              </ul>
              <ul id="ulTopRight" class="fr">
                  <li id="liMember" class="u-arr-1yyg" style="display: none;">
                      <div class="u-menu-hd">
                          <a href="http://member.1yyg.com/" title="我的1元云购">我的1元云购</a>
                          <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                      </div>
                      <div class="u-select">
                          <span><a href="http://member.1yyg.com/UserBuyList.do" title="云购记录">云购记录</a></span>
                          <span><a href="http://member.1yyg.com/OrderList.do" title="获得的商品">获得的商品</a></span>
                          <span><a href="http://member.1yyg.com/MemberModify.do" title="个人设置">个人设置</a></span>
                      </div>
                  </li>
                  <li class="f-gap" style="display: none;"><s></s></li>
                  <li id="liHome" style="display: none;">
                      <div class="u-menu-hd">
                          <a href="http://member.1yyg.com/" title="我的1元云购">我的1元云购</a>
                      </div>
                  </li>
                  <li class="f-gap" style="display: none;"><s></s></li>
                  <li id="liTopUMsg" class="u-arr-news" style="display: none;">
                      <div class="u-menu-hd">
                          <a href="http://member.1yyg.com/userMessage.do" title="消息">消息</a>
                          <h3 style="display: none;"></h3>
                          <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                      </div>
                      <div class="u-select">
                          <span><a href="http://member.1yyg.com/UserMessage.do" title="系统消息">系统消息</a></span>
                          <span><a href="http://member.1yyg.com/FriendsApply.do" title="好友请求">好友请求</a></span>
                          <span><a href="http://member.1yyg.com/ReplyCommentsMsg.do" title="好友请求">评论回复</a></span>
                          <span><a href="http://member.1yyg.com/UserPrivMsg.do" title="私信" class="f-msg">私信</a></span>
                      </div>
                  </li>
                  <li class="f-gap" style="display: none;"><s></s></li>
                  <li>
                      <div class="u-menu-hd">
                          <a href="http://member.1yyg.com/UserRecharge.do" title="充值">充值</a>
                      </div>
                  </li>
                  <li class="f-gap"><s></s></li>
                  <li>
                      <div class="u-menu-hd">
                          <a href="http://help.1yyg.com/" title="帮助">帮助</a>
                      </div>
                  </li>
                  <li class="f-gap"><s></s></li>
                  <li>
                      <div class="u-menu-hd">
                          <a href="http://help.1yyg.com/htm-contactus.html" title="投诉">投诉</a>
                      </div>
                  </li>
                  <li class="f-gap" style="display: none;"><s></s></li>
                  <li id="lizxkf" class="f-zxkf" style="display: none;">
                      <div class="u-menu-hd">
                          <a id="btnTopQQ" href="javascript:;" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
                      </div>
                  </li>
                  <li class="f-zxkf" style="display: none;">
                     <div class="u-menu-hd">
                         <a href="http://www.1yyg.com/" title="1元云购首页" class="orange">1元云购首页</a>
                     </div>
                 </li>
              </ul>
          </div>
      </div>
        <!--头部-->
        
	<!--导航-->
    <div class="p-center-nav clrfix">
        <div class="banner-middle clrfix">
			<div class="nav-new">
				<ul>
					<li class="curr"><a href="http://member.1yyg.com/Index.do" title="我的1元云购">我的1元云购</a><em class="z-my-1yyg u-personal"></em></li>
                    <li><a href="http://member.1yyg.com/MemberModify.do" title="账号设置">账号设置</a><em class="z-account-settings u-personal"></em></li>
                    <li><a target="_blank" href="http://u.1yyg.com/1010719341" title="个人主页">个人主页</a><em class="z-home-page u-personal"></em></li>
                </ul>
            </div>
            <div class="nav-return">
				<a href="http://www.1yyg.com" class="transparent-png"></a>
            </div>
        </div>
		<div class="banner-right"></div>
    </div>
   <!--右侧工具栏-->
   <div id="divMemberRTool" class="g-narrow-con member-narrow" style="display:block">
        <div class="m-narrow-list" style="height:232px;">
			<ul>
                <li class="f-customer-service" id="li_customer_service"><!--客服-->
                    <div class="u-float-list">
                        <a href="javascript:;" class="z-customer-off"><s></s><em class="orange">离<br>线<br>留<br>言</em></a><!-- z-customer-off 客服不在线时 -->
                    </div>
                </li>
                <li class="f-member-cart"><!--购物车-->
                    <div class="u-float-list">
                        <a href="http://cart.1yyg.com/CartList.do" target="_blank">
                            <em style="display:none;"></em>
                            <s class="u-personal"></s>
                            <cite style="display:none;">购<br>物<br>车</cite>
                        </a>
                    </div>
                </li>
                <li class="f-feedback"><!--意见反馈-->
                    <div class="u-float-list">
                        <a href="http://help.1yyg.com/htm-suggestion.html" target="_blank"><i></i><cite>意见反馈</cite></a>
                    </div>
                </li>
                <li class="f-back-to" style="display:none;"><!--Top-->
                    <div class="u-float-list">
                        <a href="javascript:;"><i></i><cite>置顶</cite></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<script>
    var _MemberUpdateCartNum = function () { };
	    function GetJPData(domain, action, para, callfun) {
			        $.getJSON(domain + "/JPData?action=" + action + (para != "" ? "&" : "") + para + "&fun=?", callfun);
					    }
	    $(document).ready(function () {
			        var _MemberRTool = $("#divMemberRTool");
					        var _DivObj = _MemberRTool.children("div.m-narrow-list");
					        var _UlObj=_MemberRTool.find("ul");
							        var _LiObj=_UlObj.children("li");
							        var _CustomerObj = _LiObj.eq(0);
									        var _CartObj = _LiObj.eq(1);
									        var _FeedBackObj = _LiObj.eq(2);
											        var _BackTopObj = _LiObj.eq(3);
											        var _ServiceObj = $("#a_service");
													        /*------在线客服------*/
													        var _NowTime = new Date();
													        var _Hours = _NowTime.getHours();
															        var _Minute = _NowTime.getMinutes();
															        if ((_Hours == 8 && _Minute > 30) || (_Hours > 8 && _Hours < 21)) {
																		            //上班时间
																		            _CustomerObj.find("a").attr('class', 'z-customer-on').find("em").html("在<br>线<br>客<br>服");
																					            _ServiceObj.removeClass('z-gray-msg').html("<b class=\"u-personal\"></b>在线客服");
																					        } else {
																								            _CustomerObj.find("a").attr('class', 'z-customer-off').find("em").html("离<br>线<br>留<br>言");
																											            _ServiceObj.addClass('z-gray-msg').html("<b class=\"u-personal\"></b>离线留言");
																											        }
																	        //var isInitQQEvent = false;
																	        var initQQEvent = function () {
																				            //if (isInitQQEvent)
																				            //    return false;
																				            //isInitQQEvent = true;
																				            Base.getScript("http://wpa.b.qq.com/cgi/wpa.php", function () {
																								                BizQQWPA.addCustom([{
																												                    aty: "0",
																																		                    nameAccount: "4006859800",
																																							                    selector: "li_customer_service"
																																												                }, {
																																																                    aty: "0",
																																																						                    nameAccount: "4006859800",
																																																											                    selector: "a_service"
																																																																                }]);
																												            });
																							        }
																	        initQQEvent();
																	        /*------购物车------*/
																	        _CartObj.hover(function () {
																				            $(this).addClass("cart-hover");
																							            if ($(this).hasClass("f-member-cart2")) {
																											                $(this).find("em").attr("style", "display:none;");
																															            }
																							            $(this).find("cite").attr("style", "display:block;");
																							        }, function () {
																										            $(this).removeClass("cart-hover");
																													            if ($(this).hasClass("f-member-cart2")) {
																																	                $(this).find("em").attr("style", "display:block;");
																																					            }
																													            $(this).find("cite").attr("style", "display:none;");
																													        });
																			        //获取用户购物车中的数量
																			        var getCartNumFun = function () {
																						            GetJPData("http://cart.1yyg.com", "cartnum", "", function (result) {
																										                var _TotalCount = 0;
																														                if (result.code == 0) {
																																			                    _TotalCount = result.num;
																																								                } else if (result.code == -1) {
																																													                    _TotalCount = 0;
																																																		                }
																														                if (_TotalCount > 0) {
																																			                    var _Count = _TotalCount > 99 ? '...' : _TotalCount;
																																								                    _CartObj.addClass("f-member-cart2").find("em").html(_Count).show();
																																								                } else {
																																													                    _CartObj.removeClass("f-member-cart2").find("em").html('').hide();
																																																		                }
																														            });
																									        }
																			        getCartNumFun();
																			        _MemberUpdateCartNum = function () { getCartNumFun(); }
																					        /*------意见反馈------*/
																					        _FeedBackObj.hover(function () { $(this).addClass("cart-hover"); }, function () { $(this).removeClass("cart-hover"); });
																					        /*------回到顶部------*/
																					        _BackTopObj.hover(function () { $(this).addClass("cart-hover"); }, function () { $(this).removeClass("cart-hover"); });
																							        _BackTopObj.click(function () {
																										            $('body,html').animate({
																													                scrollTop: 0
																																		            }, 0);
																													        });
																							        var scrollFun = function () {
																										            if ($(window).scrollTop() > 50) { //我的云购记录
																														                //_MemberRTool.height("289px");
																														                _DivObj.removeAttr("style");
																																		                _BackTopObj.show();
																																		            } else {
																																						                //_MemberRTool.height("232px");
																																						                _DivObj.attr("style", "height:232px;");
																																										                _BackTopObj.hide();
																																										            }
																													        }
																							        $(window).scroll(function () {
																										            scrollFun();
																													        });
																							        if ($(window).scrollTop() > 0) {
																										            scrollFun();
																													        }
																							    });
	</script>
        <div class="p-center-main clrfix">
            <!--左边导航-->
            
	<div class="sidebar_l clrfix fl">
			<ul>
                
                <li><a href="/Index.do" title="首页">首页</a><b></b></li>
                <li><a href="/UserBuyList.do" title="云购记录">云购记录</a><b></b></li>
                <li><a href="/OrderList.do" title="获得的商品">获得的商品</a><b></b></li>
                <li><a href="/PostSingleList.do" title="晒单管理">晒单管理</a><b></b></li>
                <li><a href="/CollectList.do" title="我的关注">我的关注</a><b></b></li>
                <li class="curr"><a href="/UserBalance.do" title="我的账户">我的账户</a><b></b></li>
                <li><a href="/MyFriends.do" title="我的好友">我的好友</a><b></b></li>
                <li><a href="/JoinGroup.do" title="云购圈">云购圈</a><b></b></li>
                <li><a href="/InvitedList.do" title="邀请管理">邀请管理</a><b></b></li>
                <li><a href="/MemberPoints.do" title="我的福分">我的福分</a><b></b></li>
                <li><a href="/UserMessage.do" title="消息管理">消息管理</a><b></b></li>
                
               </ul>
		</div>
            <div class="sidebar_main clrfix fr">
                <div class="g-purchase-title">
					<span class="gray3">我的账户</span>
                </div>
                <div class="g-account-balance">
                    <dl>
                        <dt>
                            <span class="gray6">账户余额：<em class="orange">￥8.00</em></span>
                            <a href="/UserRecharge.do" class="z-orange-btn">充值</a>
                            <a id="a_transfer" href="javascript:;" class="z-blue-btn">转账</a>
                        </dt>
                        <dd>充值总额：￥10.00
                            <i>消费总额：￥2.00</i>
                            <i>转入总额：￥0.00</i>
                            <i>转出总额：￥0.00</i>
                        </dd>
                    </dl>
                </div>
                <div class="g-screen-state clrfix">
                    <ul id="ul_state" class="a-screen">
                        <li><a state="0" href="javascript:;" class="z-checked">全部</a></li>
                        <li><a state="1" href="javascript:;">充值记录</a></li>
                        <li><a state="2" href="javascript:;">消费记录</a></li>
                        <li><a state="3" href="javascript:;">转账记录</a></li>
                    </ul>
                </div>
                <div class="g-screen-date clrfix">
                    <ul id="ul_region" class="a-screen fl">
                        <li><a region="3" href="javascript:;">最近1个月</a></li>
                        <li><a region="4" href="javascript:;" class="z-checked">最近3个月</a></li>
                    </ul>
                    <ul class="m-select fl">
                        <li class="gray9">
                            <label>日期</label></li>
                        <li>
                            <input type="text" id="txtBeginTime" maxlength="10" /><b class="u-personal"></b>
                        </li>
                        <li><em>-</em></li>
                        <li>
                            <input type="text" id="txtEndTime" maxlength="10" /><b class="u-personal"></b>
                        </li>
                        <li><a id="a_serach" href="javascript:;">确定</a></li>
                    </ul>
                </div>
                <div class="g-purchase-records my-account-con">
                    <dl id="dl_userbalance">
                        <dt>
                            <span class="u-commodity-pic">时间</span>
                            <span id="span_selectop" class="u-select-con" >
                                <a href="javascript:;" class="gray6">全部类型<s class="u-personal"></s>
                                </a>
                                <div class="select-state">
                                    <a state="1" href="javascript:;">充值记录</a>
                                    <a state="2" href="javascript:;">消费记录</a>
                                    <a state="3" href="javascript:;">转账记录</a>
                                </div>
                            </span>
                            <span class="u-commodity-name">金额</span>
                            <span class="u-operation">备注</span>
                        </dt>

                    </dl>
                </div>

            </div>

        </div>
		    <!--版权-->
  <div class="g-copyrightCon">
      <div class="w1190">
          <div class="g-links">
              <a href="http://www.1yyg.com/" target="_blank" title="首页">首页</a><s></s>
              <a href="http://help.1yyg.com/htm-about.html" target="_blank" title="关于云购">关于云购</a><s></s>
              <a href="http://help.1yyg.com/htm-privacy.html" target="_blank" title="隐私声明">隐私声明</a><s></s>
              <a href="http://help.1yyg.com/info/htm-business.html" target="_blank" title="合作专区">合作专区</a><s></s>
              <a href="http://www.1yyg.com/link.html" target="_blank" title="友情链接">友情链接</a><s></s>
              <a href="http://help.1yyg.com/htm-jobs.html" target="_blank" title="加入云购">加入云购</a><s></s>
              <a href="http://help.1yyg.com/htm-contactus.html" target="_blank" title="联系我们">联系我们</a>
          </div>
          <div class="g-copyright">Copyright &copy; 2011 - 2015, 版权所有 1yyg.com 粤ICP备09213115号-1</div>
          <div class="g-authentication">
              <a href="http://www.1yyg.com/url.html?t=7" target="_blank" class="fi_ectrustchina"></a>
              <a href="http://www.1yyg.com/url.html?t=1" target="_blank" class="fi_315online"></a>
              <a href="http://www.1yyg.com/url.html?t=2" target="_blank" class="fi_qh"></a>
              <a href="http://www.1yyg.com/url.html?t=3" target="_blank" class="fi_cnnic"></a>
              <a href="http://www.1yyg.com/url.html?t=6" target="_blank" class="fi_anxibao"></a>
              <a href="http://www.1yyg.com/url.html?t=4" target="_blank" class="fi_pingan"></a>
              <a href="http://www.1yyg.com/url.html?t=8" target="_blank" class="fi_yangshi"></a>
          </div>
      </div>
  </div>
  
  <!--通栏购物车-->
  <div id="rightTool" class="g-outer">
      <div class="g-status-standard">
          <div class="m-banner-list">
              <div class="u-sentence"><span></span></div>
              <!--工具项-->
              <div class="u-shortcut">
                  <ul id="ulRToolList">
                      <li class="f-shopping-cart">
                          <!--购物车-->
                          <div class="u-float-list">
                              <a href="http://cart.1yyg.com/CartList.do" target="_blank">
                                  <i></i>
                                  <em style="display: none;">0</em>
                                  <span>购物车</span>
                              </a>
                              <b class="curr-arrow"></b>
                          </div>
                      </li>
                      <li class="f-attention">
                          <!--关注-->
                          <div class="u-float-list">
                              <a href="http://member.1yyg.com/CollectList.do" target="_blank">
                                  <i></i>
                                  <cite>我的关注</cite>
                              </a>
                              <b class="curr-arrow" style="display: none;"></b>
                          </div>
                      </li>
                      <li class="f-customer-service">
                          <!--客服-->
                          <div class="u-float-list">
                              <a id="btnRigQQ" href="javascript:;" class="z-customer-off"><i></i><cite>在线客服</cite></a>
                          </div>
                      </li>
                      <li class="f-client">
                          <!--客户端-->
                          <div class="u-float-list">
                              <a href="javascript:;"><i></i><cite>手机APP</cite></a>
                              <b class="curr-arrow"></b>
                          </div>
                          <div class="u-activate">
                              <a href="http://info.1yyg.com/app/mobile.html" target="_blank">
                                  <img src="http://skin.1yyg.com/images/andriod.jpg?v=140105">
                                  下载客户端
                              </a>
                          </div>
                      </li>
                      <li class="f-weixin">
                          <!--微信-->
                          <div class="u-float-list">
                              <a href="javascript:;"><i></i><cite>官方微信</cite></a>
                              <b class="curr-arrow"></b>
                          </div>
                          <div class="u-activate">
                              <a href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                                  <img src="http://skin.1yyg.com/images/1yyg-wx.png?v=140105">
                                  关注官方微信
                              </a>
                          </div>
                      </li>
                      <li class="f-feedback">
                          <!--意见反馈-->
                          <div class="u-float-list">
                              <a href="http://help.1yyg.com/htm-suggestion.html" target="_blank"><i></i><cite>意见反馈</cite></a>
                          </div>
                      </li>
                      <li class="f-back-to">
                          <!--Top-->
                          <div class="u-float-list">
                              <a href="javascript:;"><i></i><cite>置顶</cite></a>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
          <!--购物车列表-->
          <div id="divRTCartMain" class="m-unfold-cart clrfix">
              <!--头部-->
              <div class="f-unfold-title">
                  <span class="fl">购物车</span>
                  <cite class="fr"><a href="http://cart.1yyg.com/CartList.do" target="_blank" title="全屏查看">全屏查看</a></cite>
              </div>
              <!--列表-->
              <div id="cart_container" class="f-unfold-con clrfix">
                  <div id="cart_box" class="scrollcontent">
                      <div id="cart_shower" class="unfold-list"></div>
                  </div>
              </div>
              <!--加载-->
              <div class="loading-2015 clrfix"><em></em></div>
              <!--购物车为空-->
              <div class="cartEmpty clrfix"><i></i>您的购物车为空 !</div>
              <!--支付-->
              <div class="f-unfold-pay clrfix"></div>
          </div>
          <!--登录-->
          <div id="divRTLogin" class="m-cart-login clrfix"></div>
          <!--关注-->
          <div id="divRTColect" class="m-unfold-cart clrfix" style="display: none; bottom: 0;">
              <!--头部-->
              <div class="f-unfold-title" style="display: block;">
                  <span class="fl">我的关注</span>
                  <cite class="fr"><a href="http://member.1yyg.com/CollectList.do" target="_blank" title="全屏查看">全屏查看</a></cite>
              </div>
              <!--列表-->
              <div id="colect_container" class="f-unfold-con clrfix">
                  <div id="colect_box" class="scrollcontent" style="display: block;">
                      <div id="colect_shower" class="attentionCon"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!--无购物车页面版-->
  <div id="divRTool" class="g-narrow-con" style="display: none;">
      <div class="m-narrow-list">
          <ul>
              <li class="f-attention">
                  <!--关注-->
                  <div class="u-float-list">
                      <a href="http://member.1yyg.com/CollectList.do" target="_blank">
                          <i></i>
                          <cite>我的关注</cite>
                      </a>
                  </div>
              </li>
              <li class="f-customer-service">
                  <!--客服-->
                  <div class="u-float-list">
                      <a id="btnRigQQ2" href="javascript:;" class="z-customer-on"><i></i><cite>在线客服</cite></a><!-- z-customer-off 客服不在线时 -->
                  </div>
              </li>
              <li class="f-client">
                  <!--客户端-->
                  <div class="u-float-list">
                      <a href="http://info.1yyg.com/app/mobile.html" target="_blank"><i></i><cite>手机APP</cite></a>
                      <b class="curr-arrow"><s></s></b>
                  </div>
                  <div class="activateCon">
                      <div class="u-activate">
                          <a href="http://info.1yyg.com/app/mobile.html" target="_blank">
                              <img src="http://skin.1yyg.com/images/andriod.jpg?v=20141105">
                              下载客户端
                          </a>
                      </div>
                  </div>
              </li>
              <li class="f-weixin">
                  <!--微信-->
                  <div class="u-float-list">
                      <a href="http://info.1yyg.com/app/microchannel.html" target="_blank"><i></i><cite>官方微信</cite></a>
                      <b class="curr-arrow"><s></s></b>
                  </div>
                  <div class="activateCon">
                      <div class="u-activate">
                          <a href="http://info.1yyg.com/app/microchannel.html" target="_blank">
                              <img src="http://skin.1yyg.com/images/1yyg-wx.png?v=20141105">
                              关注官方微信
                          </a>
                      </div>
                  </div>
              </li>
              <li class="f-feedback">
                  <!--意见反馈-->
                  <div class="u-float-list">
                      <a href="http://help.1yyg.com/htm-suggestion.html" target="_blank"><i></i><cite>意见反馈</cite></a>
                  </div>
              </li>
              <li class="f-back-to">
                  <!--Top-->
                  <div class="u-float-list">
                      <a href="javascript:;"><i></i><cite>置顶</cite></a>
                  </div>
              </li>
          </ul>
      </div>
  </div>
  
  <script language="javascript" type="text/javascript">
      var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
      function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
      Base.getScript('http://skin.1yyg.com/JS/Bottom.js?v=' + GetVerNum());
  </script>
  <div style="display: none;">
      <script type="text/javascript" language="JavaScript" src=" http://s22.cnzz.com/stat.php?id=3362429&web_id=3362429"></script>
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

