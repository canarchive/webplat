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
<?php echo $this->render('../common/_nav', []); ?>
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
<div class="list_con box">
    <?php for ($i = 1; $i < 5; $i++) { foreach ($infos as $info) { ?>
    <div class="list_con_01">
	    <a href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>">
            <span>
			    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                <p>8张</p>
            </span>
			<h2><?= $info['name']; ?></h2>
        </a>
    </div>
    <?php } } ?>
</div>
<div id="list_top" class="list_top">
    <b></b><a>置顶</a>
</div>
<div class="list_fo"></div>
<?php echo $this->render('../common/_nav', []); ?>
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
