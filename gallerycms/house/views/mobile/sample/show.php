<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/content',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total',
];
//'简洁雅致中式风格三居室装修案例-兔狗装修效果图';
//'简洁雅致中式风格三居室装修案例';
//'兔狗装修效果图专区,为您提供国内外专业全面的简洁雅致中式风格三居室装修案例,涵盖最流行的简洁雅致中式风格三居室装修案例大全、案例,找装修图,上兔狗家装。';
?>
<script>
$(function() { //置顶
    showScroll();
    function showScroll() {
        $(window).scroll(function() {
            var scrollValue = $(window).scrollTop();
            scrollValue > 100 ? $('div[class=list_top]').fadeIn() : $('div[class=list_top]').fadeOut();
        });
        $('#list_top').click(function() {
            $("html,body").animate({
                scrollTop: 0
            },
            200);
        });
    };

    $(".footer").click(function() { //弹出申请框
        $(".win_all").show();
    });
    $(".close a").click(function() { //关闭申请框
        $(".win_all").hide();
    });
})
</script>
<!--抽屉总导航-->
<div class="total-bg"></div>
<div class="total">
    <div class="total-con">
        <div class="total-left">
            <div class="total-off"></div>
        </div>
        <div class="total-right">
            <p class="total-logo"></p>
            <ul class="total-menu">
                <li>
                    <a href="http://m.tugou.com/" class="total-one">首页</a></li>
                <li>
                    <a href="http://m.tugou.com/provider/" class="total-two">装修公司</a></li>
                <li>
                    <a href="http://m.tugou.com/meitu/" class="total-three">装修效果图</a></li>
                <li>
                    <a href="http://m.tugou.com/jy/" class="total-four">装修经验</a></li>
                <li>
                    <a href="http://m.tugou.com/baike/" class="total-five">装修百科</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="detail_head_02 box total-top">
    <a href="javascript:history.go(-1);"></a>&nbsp;</div>
<div class="con_pic">
    <img src="http://pic.tugou.com/meitu/20160331161312_7392.jpeg@482h_640w_1e_1c" alt="简洁雅致中式风格三居室装修案例"></div>
<div class="con_con box">
    <h1>简洁雅致中式风格三居室装修案例</h1>
    <h2>中式·三居·125平</h2>
    <p>厌倦了冰冷的墙面，木材和房子总是最佳的拍档！居室里多多少少的温度，灯光一点，梦全亮了。</p>
</div>
<div class="con_list box">
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161249_7431.jpeg" alt="厌倦了冰冷的墙面，木材和房子总是最佳的拍档！居室里多多少少的温度，灯光一点，梦全亮了。">
    <p>厌倦了冰冷的墙面，木材和房子总是最佳的拍档！居室里多多少少的温度，灯光一点，梦全亮了。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161312_7392.jpeg" alt="布艺沙发？可以有。木质橱柜？可以有。大理石面板？可以有。客厅把你能想到的所有材质混合在一个空间。">
    <p>布艺沙发？可以有。木质橱柜？可以有。大理石面板？可以有。客厅把你能想到的所有材质混合在一个空间。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161322_7534.jpeg" alt="镂空移门和落地窗的设计，看起来也是慢慢的B格。">
    <p>镂空移门和落地窗的设计，看起来也是慢慢的B格。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161330_1439.jpeg" alt="顶灯的设计，节省了桌面地面的空间，不同功率的灯光营造了温暖和谐。">
    <p>顶灯的设计，节省了桌面地面的空间，不同功率的灯光营造了温暖和谐。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161339_2589.jpeg" alt="全开放式的空间下，一边负责休闲一边负责居家。餐厅的角落用墙面和餐桌规划出美食的一席之地。">
    <p>全开放式的空间下，一边负责休闲一边负责居家。餐厅的角落用墙面和餐桌规划出美食的一席之地。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161357_7259.jpeg" alt="很多B格都是通过墙面设计体现，你看着现代墙面和古朴茶具的组合，为何如此和谐呢？">
    <p>很多B格都是通过墙面设计体现，你看着现代墙面和古朴茶具的组合，为何如此和谐呢？</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161413_4850.jpeg" alt="厨房后那一大片的镜面，整整将空间扩大了一半！">
    <p>厨房后那一大片的镜面，整整将空间扩大了一半！</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161504_7082.jpeg" alt="在这个房间，没有多余的墙面，所有的隔断几乎只用家具。你看到隐藏在橱柜后面的卧室了吗？">
    <p>在这个房间，没有多余的墙面，所有的隔断几乎只用家具。你看到隐藏在橱柜后面的卧室了吗？</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161517_1742.jpeg" alt="卧室的瓦楞墙面和镂空衣柜，在开放中掺杂了一丝后现代气息。">
    <p>卧室的瓦楞墙面和镂空衣柜，在开放中掺杂了一丝后现代气息。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161532_2675.jpeg" alt="次卧的设计就更中国了，被子上水墨勾勒的兰花与床头的白玫瑰，一个素雅一个高贵。">
    <p>次卧的设计就更中国了，被子上水墨勾勒的兰花与床头的白玫瑰，一个素雅一个高贵。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161544_4655.jpeg" alt="落地飘窗隐约遮住的自然的脸庞，南瓜灯似的吊灯把卧室装点的古朴起来。">
    <p>落地飘窗隐约遮住的自然的脸庞，南瓜灯似的吊灯把卧室装点的古朴起来。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161558_4961.jpeg" alt="木质镂空橱柜加上白色灯光，竟然还有些博物馆即视感。">
    <p>木质镂空橱柜加上白色灯光，竟然还有些博物馆即视感。</p>
    <!-- -->
    <img src="http://pic.tugou.com/meitu/20160331161609_289.jpeg" alt="紧贴着客厅的开放式书房，用全木的家具烘托出古色古香。">
    <p>紧贴着客厅的开放式书房，用全木的家具烘托出古色古香。</p>
    <!-- --></div>
<div id="list_top" class="list_top">
    <b>
    </b>
    <a>置顶</a>
</div>
<div class="m_more">
    <a href="http://m.tugou.com/meitu/s1957.html" title="简单低调现代风格三居装修效果图">点击查看下一组案例 &gt;</a></div>
<div class="list_fo"></div>
<style type="text/css">.icon-consult { display: inline-block; width: 0.8rem; height: 1.25rem; background: url("http://img.tugou.com/consultant/m-consult.png") no-repeat center; background-size: 0.6rem 0.6rem; vertical-align: middle; margin-top: -0.2rem; margin-right: 7px } .list-consult { display: none; } .footer-bar { width: 100%; height: 100%; border-collapse: collapse; border-spacing: 0; } .footer-bar td { text-align: center; vertical-align: middle; } footer { width: 100%; height: 2.2rem; line-height: 2.2rem; position: fixed; bottom: 0; z-index: 99; max-width: 750px; } footer table { margin: 0; padding-top: 0; border-collapse: collapse; border-spacing: 0; } footer td { font-size: 0.88rem; color: #fff; background-size: 18%; height: 2.2rem; line-height: 2.2rem; } footer .qq-btn { font-size: 0.58rem; color: #444444; background-color: #fff; } footer .apply-btn { font-size: 0.68rem; color: #fff; background-color: #00b7b1; }</style>
<footer class="tugou-footer app-hide">
    <table class="footer-bar">
        <tr>
            <td class="qq-btn" style="border-right:none;width: 38.2%" onclick="nTalk.im_openInPageChat();">
                <span class="icon-consult"></span>在线咨询</span>
            </td>
            <td style="width:61.8%" class="apply-btn">免费预约设计</td></tr>
    </table>
</footer>
<script type="text/javascript">$(function() {
        $(".apply-btn").click(function() { //弹出申请框
            $(".win_all").show();
        });
        $(".close a").click(function() { //关闭申请框
            $(".win_all").hide();
        });
    });</script>
<!--弹出层-->
<div class="win_all">
    <div class="window box">
        <h2>申请免费设计</h2>
        <p>免费获取3份设计&nbsp;选取满意设计稿</p>
        <form action="" method="post" class="form" onsubmit="return flase" id="order">
            <div class="win_input">
                <input type="text" name="" id="name" value="" placeholder="您的姓名" /></div>
            <div class="win_input">
                <input type="tel" name="" id="phone" value="" placeholder="手机号码" /></div>
            <div class="win_input js-region-select-group clearfix">
                <select name="province" id="province" class="city_select province js-province">
                    <option value="0">省/市</option></select>
                <select name="city" id="city" class="city_select city js-city">
                    <option value="0">市/地区</option></select>
            </div>
            <input type="hidden" id="type" value="7">
            <input type="hidden" id="remark" value="移动套图详情">
            <input type="button" class="win_sub" id="apply_button" value="立即申请" />
            <span class="note">
                <em>注：</em>每户业主可同时获取3份设计比较，挑选合适方案后个性化修改。</span></form>
        <div class="close">
            <a href="javascript:;"></a>
        </div>
    </div>
</div>
<div class="alert" style="display:none">请输入姓名</div>
