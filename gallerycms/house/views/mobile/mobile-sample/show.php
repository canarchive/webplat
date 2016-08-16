<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/content', 'apply640', 
    'lib/total',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total',
];
?>
<script type="text/javascript" src="http://static.tugou.com/m/js/slideApply.js"></script>
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
<!--<div class="recommend-panel">
    <p class="rp-title">相关推荐</p>
    <ul class="rp-list">
        <li class="rp-item">
            <div class="img-box">
                <a href="http://m.tugou.com/meitu/s2129.html">
                    <img src="http://pic.tugou.com/meitu/20160715175012_7215.jpeg@280w" alt="温馨混搭风格小户型单身公寓装潢案例" /></a>
                <p class="img-count">7张</p></div>
            <p class="rp-description">温馨混搭风格小户型单…</p></li>
    </ul>
</div>-->
<!-- <div class="m_more"><a href="http://m.tugou.com/meitu/s2122.html" title="创意混搭复古雅致一居室装潢案例">点击查看下一组案例 &gt;</a></div> -->
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
<script type="text/javascript">< !--2016 - 05 - 19在线客服系统-->$(function() {
        $(".apply-btn").click(function() { //弹出申请框
            $(".win_all").show();
        });
        $(".close a").click(function() { //关闭申请框
            $(".win_all").hide();
        });
    });</script>
<div class="apply-container">
    <form class="pop-apply">
        <div class="form-title">申请免费设计</div>
        <p class="form-subtitle">免费获取3份设计&nbsp;选取满意设计稿</p>
        <div class="form-body">
            <input type="hidden" id="type" value="7">
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
                <span class="font-mark">注：</span>同一小区同批验房达到5户，可安排免费上门验房服务</div></div>
        <span class="form-close"></span>
    </form>
</div>
<div class="alert" style="display:none">请输入姓名</div>
<script type="text/javascript">var myApply = new applyForm($(".apply-container"));
    $(".apply-btn").click(function() {
        myApply.show();
    });</script>
<script type="text/javascript" src="http://static.tugou.com/js/mobile/m_mobile.js"></script>
