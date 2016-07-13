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
<?php echo $this->render('../common/_nav', []); ?>
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
<?php echo $this->render('../common/_nav', []); ?>
