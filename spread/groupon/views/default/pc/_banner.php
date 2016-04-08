<div class="J_tg_banner_wrap">
    <div class="J_tg_banner_con">
        <!--过期开始-->
        <!--过期结束-->
        <div class="banner_con_wrap">
            <a href="javascript:;">
			    <img src="<?= $info['picture']; ?>" width=1190 height=400>
            </a>
            <div class="tg_apply_form">
                <div class="tg_form_wrap">
                    <div class="form_title">
					    <div class="num_wrap clearfix totals_signup"><?= $info['signupNumberFormat']; ?></div>
                        <span>户业主已报名</span>
                    </div>
                    <form action="" class="banner_form" autocomplete="off">
                        <div class="apply_info">
                            <label>
                                <span>您的姓名:</span>
                                <input type="text" name="realname1" id="realname">
                                <i>请输入您的姓名</i>
                            </label>
                            <label>
                                <span>您的电话:</span>
                                <input type="text" name="mobile1" id="mobile">
                                <i>请输入您的手机号码</i>
                            </label>
                            <label>
                                <span>验证码:</span>
                                <input type="text" name="verify1" id="verify" class="sb_rand_code">
                                <div class="tg_2015_check">
                                    <img src="http://tg.jia.com/index.php/ajax/verifycode?w=80&h=38" class="verify_img" width="80" height="38">
                                    <a href="javascript:;" onclick="$('.verify_img').attr('src','http://tg.jia.com/index.php/ajax/verifycode?w=80&h=38&d='+Math.random());" class="tg_2015_change">换一张</a>
                                </div>
                            </label>
                        </div>
                        <!--<p class="user2know">
                            <input type="hidden" name="agreement1" value="1">
                            <i class="userCheck on" _val="1"></i>
                            我已阅读并且同意团家汇网的
                            <a href="http://www.yaolezan.com/help/0051.html" target="_blank">用户协议</a>
                        </p>-->
                        <a href="javascript:;" name="signup" from="top" val="1" onclick="">免费报名</a>
                    </form>
					<p style="PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px"><img src="http://tgi1.jia.com/113/091/13091330.gif" alt="" style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">1、现场特惠商品抢不停，全市底价</p>
					<p style="PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px"><img src="http://tgi1.jia.com/113/091/13091330.gif" alt="" style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">2、签到好礼送不停，100%有奖</p>
                </div>
            </div>
            <div class="banner_bottom_copy"></div>
            <div class="banner_bottom">
                <p><span>[活动日期]</span><?= $info['holding_at']; ?></p>
				<p><span>[活动地点]</span><?= $info['address']; ?></p>
                <a href="javascript:;" class="msg_to_mob" tjjj="dzbm">发送地址到手机</a>
            </div>
        </div>
    </div>
</div>
