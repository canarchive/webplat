<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/list',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total',
];
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
        <!--<li id="nav_03">
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
        </li>-->
    </ul>
</div>
<?php echo $this->render('_filter', $filterInfos); ?>
<div class="list_con box">
    <?php foreach ($infos as $info) { ?>
    <div class="list_con_01">
	    <a href="<?= Url::to(['/house/mobile-sample/show', 'id' => $info['id']]); ?>">
            <span>
			    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                <p>8张</p>
            </span>
			<h2><?= $info['name']; ?></h2>
        </a>
    </div>
    <?php } ?>
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
