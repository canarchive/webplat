<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/content',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total',
];
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
	<a href="javascript:history.go(-1);"></a>&nbsp;
</div>
<div class="con_pic">
    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
</div>
<div class="con_con box">
    <h1><?= $info['name']; ?></h1>
	<h2><?= $info['style'] . '·' . $info['house_type'] . '·' . $info['area'] . '平'; ?></h2>
	<p><?= $info['description']; ?></p>
</div>
<div class="con_list box">
    <?php foreach ($info['picture'] as $pictureKey => $pictureInfo) { ?>
	<img src="<?= $pictureInfo['url']; ?>" alt="<?= $pictureInfo['description']; ?>">
	<p><?= $pictureInfo['description']; ?></p>
    <?php } ?>
</div>
<div id="list_top" class="list_top">
    <b></b><a>置顶</a>
</div>
<!--<div class="m_more">
	<a href="" title="">点击查看下一组案例 &gt;</a>
</div>-->
<div class="list_fo"></div>
<?php echo $this->render('../common/_nav', []); ?>
