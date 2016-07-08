<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/list',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total',
];
//'【三室一厅装修效果图】三室一厅设计图_三室一厅图片-兔狗装修效果图';
//'三室一厅装修效果图,三室一厅设计图,三室一厅图片';
//'兔狗三室一厅装修效果图专区,提供最新性价比最高的三室一厅装修效果图,两厅,三厅,效果图,三室一厅设计图,三室一厅图片,82后白领最爱的三室一厅装修效果图大全';
?>
<script>
$(document).ready(function() {
    var $tab_li = $('.list_nav ul li');
    $tab_li.click(function() {
        $(this).toggleClass('list_add').siblings('.list_nav ul li').removeClass('list_add');
        $(this).toggleClass('list_add_one').siblings('.list_nav ul li').removeClass('list_add_one');
        var index = $tab_li.index(this);
        $('div.list_table > div').slideToggle(10);
        $('div.list_table > div').eq(index).show().siblings().hide();
    });

    //点击子级，父级内容变化
    $("#table_01 li a").click(function() {
        $("#nav_01 a span").html($(this).html());
    });
    $("#table_02 li a").click(function() {
        $("#nav_02 a span").html($(this).html());
    });
    $("#table_03 li a").click(function() {
        $("#nav_03 a span").html($(this).html());
    });
    $("#table_04 li a").click(function() {
        $("#nav_04 a span").html($(this).html());
    });
})

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
        // //光标自动定位到输入框
        // document.getElementById("name").focus(); 
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
<h1 class="list_head box total-top">
	<a href="javascript:history.go(-1);"></a>装修案例
</h1>
<div class="list_nav">
    <ul>
        <li id="nav_01">
            <a href="javascript:;">
                <span>三居</span>
                <b class="currentDt"></b>
            </a>
        </li>
        <li id="nav_02">
            <a href="javascript:;">
                <span>面积</span>
                <b>
                </b>
            </a>
        </li>
        <li id="nav_03">
            <a href="javascript:;">
                <span>风格</span>
                <b>
                </b>
            </a>
        </li>
        <li id="nav_04">
            <a href="javascript:;">
                <span>色系</span>
                <b>
                </b>
            </a>
        </li>
    </ul>
</div>
<div class="list_table">
    <div class="table_one">
        <ul class="list_table_l" id="table_01">
            <li>
                <a href="http://m.tugou.com/meitu/case/">不限</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a55/">小户型</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a56/">一居</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a57/">二居</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58/">三居</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a59/">四居</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a60/">复式</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a61/">别墅</a></li>
            <!-- --></ul>
    </div>
    <div class="table_one">
        <ul class="list_table_l" id="table_02">
            <li>
                <a href="http://m.tugou.com/meitu/case-a58/">不限</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b62/">30㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b63/">40㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b64/">50㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b65/">60㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b91/">70㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b92/">80㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b93/">90㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b94/">100㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b95/">110㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b96/">120㎡</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58b97/">130㎡以上</a></li>
            <!-- --></ul>
    </div>
    <div class="table_one">
        <ul class="list_table_l" id="table_03">
            <li>
                <a href="http://m.tugou.com/meitu/case-a58/">不限</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c66/">简约</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c67/">现代</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c68/">欧式</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c69/">中式</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c70/">田园</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c71/">地中海</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c72/">美式</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c73/">混搭</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c74/">宜家</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c75/">简欧</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c76/">新古典</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c77/">东南亚</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c112/">北欧</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c113/">新中式</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58c114/">日式</a></li>
            <!-- --></ul>
    </div>
    <div class="table_one">
        <ul class="list_table_l" id="table_04">
            <li>
                <a href="http://m.tugou.com/meitu/case-a58/">不限</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d78/">白色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d79/">米色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d80/">黄色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d81/">橙色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d82/">红色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d83/">粉色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d84/">绿色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d85/">蓝色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d86/">紫色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d87/">黑色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d88/">灰色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d89/">原木色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d90/">彩色</a></li>
            <!-- -->
            <li>
                <a href="http://m.tugou.com/meitu/case-a58d115/">褐色</a></li>
            <!-- --></ul>
    </div>
</div>
<!-- -->
<div class="list_con box">
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2081.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160616181209_4401.jpeg@218h_288w_1e_1c" alt="都市典雅简欧风格三居室装...">
                <p>8张</p>
            </span>
            <h2>都市典雅简欧风格三居室装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2077.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160615172107_752.jpeg@218h_288w_1e_1c" alt="美式田园乡村风格三居室浪...">
                <p>8张</p>
            </span>
            <h2>美式田园乡村风格三居室浪...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2071.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160527182932_2007.jpeg@218h_288w_1e_1c" alt="现代雅致时尚风格三居室装...">
                <p>7张</p>
            </span>
            <h2>现代雅致时尚风格三居室装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2070.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160520175925_2749.jpeg@218h_288w_1e_1c" alt="时尚现代质感180平三居装修...">
                <p>7张</p>
            </span>
            <h2>时尚现代质感180平三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2068.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160518153657_9245.jpeg@218h_288w_1e_1c" alt="淡雅简约现代风格136平三居...">
                <p>7张</p>
            </span>
            <h2>淡雅简约现代风格136平三居...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2060.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160515174201_1964.jpeg@218h_288w_1e_1c" alt="休闲雅致简欧135平三居装修...">
                <p>8张</p>
            </span>
            <h2>休闲雅致简欧135平三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2054.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160512181156_9153.jpeg@218h_288w_1e_1c" alt="时尚质感现代132平三居装修...">
                <p>8张</p>
            </span>
            <h2>时尚质感现代132平三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2047.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160507102348_6894.jpeg@218h_288w_1e_1c" alt="典雅三居现代风格装潢案例...">
                <p>8张</p>
            </span>
            <h2>典雅三居现代风格装潢案例...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2046.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160507095815_9302.jpeg@218h_288w_1e_1c" alt="时尚简约风格三居装修案例...">
                <p>7张</p>
            </span>
            <h2>时尚简约风格三居装修案例...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2045.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160507094813_135.jpeg@218h_288w_1e_1c" alt="艺术时尚简欧风格三居装潢...">
                <p>7张</p>
            </span>
            <h2>艺术时尚简欧风格三居装潢...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2035.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160428155528_7949.jpeg@218h_288w_1e_1c" alt="2016雅致混搭风格三居装修...">
                <p>7张</p>
            </span>
            <h2>2016雅致混搭风格三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2029.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160426185042_4106.jpeg@218h_288w_1e_1c" alt="艺术时尚新古典风格三居装...">
                <p>7张</p>
            </span>
            <h2>艺术时尚新古典风格三居装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2028.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160426181849_5513.jpeg@218h_288w_1e_1c" alt="温馨雅致美式106平三居装修...">
                <p>7张</p>
            </span>
            <h2>温馨雅致美式106平三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2027.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160426181043_9452.jpeg@218h_288w_1e_1c" alt="豪华美式风格150平三居室装...">
                <p>7张</p>
            </span>
            <h2>豪华美式风格150平三居室装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2023.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160424154400_3531.jpeg@218h_288w_1e_1c" alt="古典混搭风格三居装修设计...">
                <p>7张</p>
            </span>
            <h2>古典混搭风格三居装修设计...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2022.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160423173811_2011.jpeg@218h_288w_1e_1c" alt="典雅中式风格160平三居室装...">
                <p>8张</p>
            </span>
            <h2>典雅中式风格160平三居室装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2021.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160423171252_8473.jpeg@218h_288w_1e_1c" alt="华丽时尚大气欧式三居装修...">
                <p>7张</p>
            </span>
            <h2>华丽时尚大气欧式三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2016.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160421134902_3944.jpeg@218h_288w_1e_1c" alt="雅致混搭风格106平三居装修...">
                <p>7张</p>
            </span>
            <h2>雅致混搭风格106平三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2010.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160419173445_218.jpeg@218h_288w_1e_1c" alt="简约美式自然清爽三居装潢...">
                <p>7张</p>
            </span>
            <h2>简约美式自然清爽三居装潢...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2008.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160418173231_4543.jpeg@218h_288w_1e_1c" alt="质感现代风格150平三居装修...">
                <p>7张</p>
            </span>
            <h2>质感现代风格150平三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2005.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160418093109_7165.jpeg@218h_288w_1e_1c" alt="轻盈欧式华丽时尚三居装潢...">
                <p>8张</p>
            </span>
            <h2>轻盈欧式华丽时尚三居装潢...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s2001.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160415085913_3875.jpeg@218h_288w_1e_1c" alt="简约清爽精致简欧风格三居...">
                <p>8张</p>
            </span>
            <h2>简约清爽精致简欧风格三居...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1997.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160412151519_4692.jpeg@218h_288w_1e_1c" alt="典雅三居现代风格装潢案例...">
                <p>8张</p>
            </span>
            <h2>典雅三居现代风格装潢案例...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1996.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160412140603_4411.jpeg@218h_288w_1e_1c" alt="时尚简约风格三居装修案例">
                <p>7张</p>
            </span>
            <h2>时尚简约风格三居装修案例</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1994.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160409175829_1513.jpeg@218h_288w_1e_1c" alt="中式古色雅致三居装修案例">
                <p>7张</p>
            </span>
            <h2>中式古色雅致三居装修案例</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1985.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160406160144_2149.jpeg@218h_288w_1e_1c" alt="工业森林现代多彩创意三居...">
                <p>13张</p>
            </span>
            <h2>工业森林现代多彩创意三居...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1983.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160406113435_829.jpeg@218h_288w_1e_1c" alt="童话乐园时尚混搭风格三居...">
                <p>19张</p>
            </span>
            <h2>童话乐园时尚混搭风格三居...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1982.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160406111627_5164.jpeg@218h_288w_1e_1c" alt="清爽极致简约三居户型装潢...">
                <p>13张</p>
            </span>
            <h2>清爽极致简约三居户型装潢...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1980.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160405180839_2875.jpeg@218h_288w_1e_1c" alt="童年欢乐简约淡雅清新三居...">
                <p>13张</p>
            </span>
            <h2>童年欢乐简约淡雅清新三居...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1974.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160405154941_5158.jpeg@218h_288w_1e_1c" alt="质朴清爽欧式三居室浪漫装...">
                <p>14张</p>
            </span>
            <h2>质朴清爽欧式三居室浪漫装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1973.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160404174539_6723.jpeg@218h_288w_1e_1c" alt="明亮宽敞新古典风格三居室...">
                <p>8张</p>
            </span>
            <h2>明亮宽敞新古典风格三居室...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1972.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160402114008_8226.jpeg@218h_288w_1e_1c" alt="精致创意现代风格温馨大气...">
                <p>8张</p>
            </span>
            <h2>精致创意现代风格温馨大气...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1971.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160401164527_8357.jpeg@218h_288w_1e_1c" alt="简单清爽大气简欧风格三居...">
                <p>14张</p>
            </span>
            <h2>简单清爽大气简欧风格三居...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1970.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160401152419_4339.jpeg@218h_288w_1e_1c" alt="摩登现代风格三居时尚装潢...">
                <p>10张</p>
            </span>
            <h2>摩登现代风格三居时尚装潢...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1969.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160401151535_4791.jpeg@218h_288w_1e_1c" alt="清新自然田园风三居唯美装...">
                <p>13张</p>
            </span>
            <h2>清新自然田园风三居唯美装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1968.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160401135923_1927.jpeg@218h_288w_1e_1c" alt="裸色系现代风格三居室装潢...">
                <p>8张</p>
            </span>
            <h2>裸色系现代风格三居室装潢...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1959.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160331163034_2740.jpeg@218h_288w_1e_1c" alt="清新淡雅欧式94平三居装修...">
                <p>16张</p>
            </span>
            <h2>清新淡雅欧式94平三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1958.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160331161312_7392.jpeg@218h_288w_1e_1c" alt="简洁雅致中式风格三居室装...">
                <p>13张</p>
            </span>
            <h2>简洁雅致中式风格三居室装...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1957.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160331160428_3038.jpeg@218h_288w_1e_1c" alt="简单低调现代风格三居装修...">
                <p>12张</p>
            </span>
            <h2>简单低调现代风格三居装修...</h2></a>
    </div>
    <!-- -->
    <div class="list_con_01">
        <a href="http://m.tugou.com/meitu/s1954.html">
            <span>
                <img src="http://pic.tugou.com/meitu/20160331150520_5488.jpeg@218h_288w_1e_1c" alt="混搭童趣三居装修布置欣赏">
                <p>14张</p>
            </span>
            <h2>混搭童趣三居装修布置欣赏</h2></a>
    </div>
    <!-- --></div>
<!-- -->
<div id="list_top" class="list_top">
    <b>
    </b>
    <a>置顶</a>
</div>
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
<script type="text/javascript">
$(function() {
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
            <input type="hidden" id="remark" value="移动套图列表">
            <input type="button" class="win_sub" id="apply_button" value="立即申请" />
            <span class="note">
                <em>注：</em>每户业主可同时获取3份设计比较，挑选合适方案后个性化修改。</span></form>
        <div class="close">
            <a href="javascript:;"></a>
        </div>
    </div>
</div>
<div class="alert" style="display:none">请输入姓名</div>
<script type="text/javascript" src="http://static.tugou.com/js/mobile/m_mobile.js"></script>
<script>
$(function() {
    var num = 2;
    function loadMeinv() {
        $.post("/meitu/SuitAjax/?t=" + Math.random(), {
            page: num
        },
        function(data) {
            if (data) {
                //每次加载时模拟加载图片
                for (var i = 0; i < 20; i++) {
                    html = "<div class='list_con_01'><a href='" + "http://m.tugou.com/meitu/s" + data[i].suit_id + ".html'><span><img src =http://pic.tugou.com/" + data[i].Coverimg + '@218h_288w_1e_1c ><p class="description">' + data[i].pic_num + '张</p></span><h2>' + data[i].title + '</h2></a></div>';
                    $minUl = getMinUl();
                    $minUl.append(html);
                }
            }
        },
        "json");
        num = num + 1;
    }
    //loadMeinv();
    $(window).on("scroll",
    function() {
        $minUl = getMinUl();
        if ($minUl.height() <= $(window).scrollTop() + $(window).height()) {

            loadMeinv();
        }
		});
		function getMinUl() {
        var $arrUl = $(".list_con");
        var $minUl = $arrUl.eq(0);
        $arrUl.each(function(index, elem) {
            if ($(elem).height() < $minUl.height()) {
                $minUl = $(elem);
            }
        });
        return $minUl;
    }
})
</script>
