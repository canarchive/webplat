<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/list', 'apply640',
	'lib/total',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total', 'slideApply',
];
$this->context->pcMappingUrl = Url::to(['/house/sample/index', 'page' => $page, 'tag' => $tag]);
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
<?php echo $this->render('../common/_nav', []); ?>
<h1 class="list_head box total-top">
	<a href="javascript:history.go(-1);"></a>装修案例
</h1>
<div class="list_nav">
    <ul>
        <?php $i = 1; foreach ($houseSortInfos as $sortKey => $sortInfo) { ?>
		<li id="nav_0<?= $i; ?>">
            <a href="javascript:;">
                <?php if (!empty($tagInfos[$sortKey])) { ?>
				<span><?= $sortInfo['values'][$tagInfos[$sortKey]]; ?></span>
                <b class="currentDt"></b>
                <?php } else { ?>
				<span><?= $sortInfo['name']; ?></span>
                <b></b>
                <?php } ?>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php echo $this->render('_filter', ['houseSortInfos' => $houseSortInfos, 'tagInfos' => $tagInfos, 'model' => $model]); ?>
<div class="list_con box">
    <?php foreach ($infos as $info) { ?>
    <div class="list_con_01">
	    <a href="<?= Url::to(['/house/mobile-sample/show', 'id' => $info['id']]); ?>">
            <span>
			    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                <!--<p>8张</p>-->
            </span>
			<h2><?= StringHelper::truncate($info['name'], 12, '...')?></h2>
        </a>
    </div>
    <?php } ?>
</div>
<div id="list_top" class="list_top">
    <b></b><a>置顶</a>
</div>
<div class="list_fo"></div>
<?php echo $this->render('../common/_footer_button', []); ?>
<div class="apply-container">
    <form class="pop-apply">
        <div class="form-title">申请免费设计</div>
        <p class="form-subtitle">免费获取3份设计&nbsp;选取满意设计稿</p>
        <div class="form-body">
            <input type="hidden" id="type" value="sample-index">
            <input type="hidden" id="remark" value="移动套图详情">
            <div class="form-line input-box first">
                <input type="text" id="name" placeholder="您的姓名" /></div>
            <div class="form-line input-box">
                <input type="tel" id="phone" placeholder="手机号码" /></div>
            <div class="form-line form-line-pure">
                <ul class="city-select-list js-region-select-group">
                    <li class="form-inline">
                        <select class="select-province js-province" name="province" id="province">
                            <option value="0" selected="selected">省/市</option></select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                    <li class="form-inline">
                        <select class="select-city js-city" name="city" id="city">
                            <option value="0" selected="selected">市/地区</option></select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                </ul>
            </div>
            <div class="form-btn-group">
                <input type="button" value="免费申请" class="submit-btn win_sub" id="apply_button" /></div>
            <div class="form-notice">
                <span class="font-mark">注：</span>找装修公司，团家汇比其他渠道便宜20%</div></div>
        <span class="form-close"></span>
    </form>
</div>
<div class="alert" style="display:none">请输入姓名</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_mobile.js"></script>
<script type="text/javascript">
var myApply = new applyForm($(".apply-container"));
    $(".apply-btn").click(function() {
        myApply.show();
	});
</script>
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
                        html = "<div class='list_con_01'><a href='" + "/meitu/s" + data[i].suit_id + ".html'><span><img src =http://pic.tugou.com/" + data[i].Coverimg + '@218h_288w_1e_1c ><p class="description">' + data[i].pic_num + '张</p></span><h2>' + data[i].title + '</h2></a></div>';
                        $minUl = getMinUl();
                        $minUl.append(html);
                    }
                }
            },
            "json");
            num = num + 1;
        }
        //loadMeinv();
        /*$(window).on("scroll",
        function() {
            $minUl = getMinUl();
            if ($minUl.height() <= $(window).scrollTop() + $(window).height()) {

                loadMeinv();
            }
        });*/
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
    })</script>
