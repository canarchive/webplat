<div class="float_apply">
    <div class="float_bg_opa"></div>
    <div class="float_con_wrap">
        <div class="animal_pic">
            <img src="http://tg.jia.com/include/tg_home/images/version2015/gift.png" width="215" height="143">
            <span class="message1">报名签到送好礼咯~</span>
        </div>
        <form action="">
            <label>
                <span>姓名</span>
                <div class="input_name">
                    <input type="text" name="realname4">
                    <b class="title_msg">请输入姓名</b>
                </div>
            </label>
            <label>
                <span>手机号</span>
                <div class="input_mobile">
                    <input type="text" name="mobile4">
                    <b class="title_msg">输入您的号码</b>
                </div>
            </label>
            <label>
                <span>验证码</span>
                <div class="input_code" style="width: 169px;">
                    <input type="text" name="verify4" class="sb_rand_code">
                    <a href="javascript:;">
                        <img src="http://tg.jia.com/index.php/ajax/verifycode?w=80&h=38" height="36" width="88" alt="验证码,看不清楚?请点击刷新验证码" onclick="this.src=this.src+'&d='+Math.random();">
                    </a>
                </div>
            </label>
            <!--<p class="user2know">
                <input type="hidden" name="agreement4" value="1">
                <i class="userCheck on"></i>
                我已阅读并且同意团家汇网的
                <a href="http://www.yaolezan.com/help/0051.html" target="_blank">用户协议</a>
            </p>-->
            <a href="javascript:;" name="signup" val="4" from="bottom">免费报名</a>
            <p>
			    已有<span class="sign_num"><?= $info['signupNumberFormat']; ?></span>用户报名！
            </p>
        </form>
        <a href="javascript:;" class="close_float">关闭</a>
    </div>
</div>
<div class="tg_mask">
    <div class="opa_layer"></div>
    <div class="msg_address_wrap">
        <div class="msg_title">
            <p>发送活动详情</p>
            <a href="javascript:;">关闭</a>
        </div>
        <form action="" class="banner_form">
            <div class="apply_info">
                <label>
                    <span>您的姓名:</span>
                    <input type="text" name="realname3">
                </label>
                <label>
                    <span>您的电话:</span>
                    <input type="text" name="mobile3">
                </label>
                <label>
                    <span>验证码:</span>
                    <input type="text" name="verify3" class="sb_rand_code">
                    <div class="tg_2015_check">
                        <img src="http://tg.jia.com/index.php/ajax/verifycode?w=80&h=38" class="verify_img" width="80" height="38">
                        <a href="javascript:;" onclick="$('.verify_img').attr('src','http://tg.jia.com/index.php/ajax/verifycode?w=80&h=38&d='+Math.random());" class="tg_2015_change">
                            换一张
                        </a>
                    </div>
                </label>
            </div>
            <!-- 用户协议 -->
            <!--<p class="user2know">
                <input type="hidden" name="agreement3" value="1">
                <i class="userCheck on" _val="3"></i>
                我已阅读并且同意团家汇网的
                <a href="http://www.yaolezan.com/help/0051.html" target="_blank">用户协议</a>
            </p>-->
            <a href="javascript:;" name="signup" val="3" onclick="" from="picture">确定</a>
        </form>
        <div class="hot_line">
		    或咨询客服热线:<p><span></span><?= $info['companyInfo']['hotline']; ?></p>
        </div>
    </div>
</div>
<div class="main_bran_opa" style="display:none"></div>
<div class="main_bran_tk" style="display:none">
    <a href="javascript:;" class="m_b_close">关闭</a>
    <div class="m_b_inner clearfix">
        <div class="fl m_b_l clearfix">
            <div class="booth_l fl"></div>
            <div class="booth_r fr">
                <span class="booth_r_t">详细信息:</span>
                <p class="m_b_booth_info"></p>
            </div>
        </div>
        <div class="fr m_b_r">
            <h2>团家汇免费报名预约</h2>
            <div class="m_b_sign_info">
                <label>
                    <span>您的姓名:</span>
                    <input type="text" name="realname">
                </label>
                <label>
                    <span>您的电话:</span>
                    <input type="text" name="mobile">
                </label>
                <label>
                    <span>验证码:</span>
                    <input type="text" name="verifys" class="sb_rand_code" />
                    <div class="tg_2015_check">
                        <img src="http://tg.jia.com/index.php/ajax/verifycode?w=80&h=30" class="verify_img" width="80" height="38">
                        <a href="javascript:;" onclick="$('.verify_img').attr('src','http://tg.jia.com/index.php/ajax/verifycode?w=80&h=38&d='+Math.random());" class="tg_2015_change">换一张</a>
                    </div>
                </label>
                <input type="hidden" name="shop_id" value="" id="shop_id">
            </div>
            <!--<p><strong>3413</strong>人已预定</p>-->
            <!--<p class="user2know">
                <input type="hidden" name="agreements" value="1" />
                <i class="userCheck on" _val="s"></i>
                我已阅读并且同意团家汇网的
                <a href="http://www.yaolezan.com/help/0051.html" target="_blank">用户s协议</a>
            </p>-->
            <a href="javascript:;" id="btn_act_signup" class="m_b_sub">免费报名</a>
            <div class="m_b_hotline">
			    或电话免费预约:<i></i><b><?= $info['companyInfo']['hotline']; ?></b>
            </div>
        </div>
    </div>
</div>
