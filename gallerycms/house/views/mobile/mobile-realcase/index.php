<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'case/new-case', 'company/company', 'mobile/slick', 't-footer',
	'lib/total',
];
$this->params['jsFiles'] = [
	'jquery-1.11.3.min', 'common', 'lib/total',
];
//'实景作品频道';
?>
<style>
.case .list01 .channel{ font-size: 0.5rem;margin-top: 1.5rem; }
</style>
<script>
$(function() {
    $(".footer").click(function() { //弹出申请框
        $(".win_all").show();
    });
    $(".close a").click(function() { //关闭申请框
        $(".win_all").hide();
    });
})
</script>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
    <a href="/" class="return"></a>装修实景
</div>
<div class="center">
    <!-- 装修实景 -->
    <div class="case ">
        <?php foreach ($infos as $info) { ?>
        <div class="list">
		    <a href="<?= Url::to(['/house/mobile-realcase/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
                <div class="list01">
				    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                    <div class="listbg"></div>
					<p><?= $info['community_name']; ?></p>
					<p class="channel"><?= $info['house_type']; ?>&nbsp;&nbsp;<?= $info['style']; ?>&nbsp;&nbsp;<?= $info['decoration_type'] . '' . $info['decoration_price']; ?></p>
                </div>
                <!--<div class="list02">
                    <a class="left">
                        <b><img alt=""></b>
						<span></span>装修管家
                    </a>
					<i class="new-case01">已有<span>367</span>人浏览</i>
                </div>-->
            </a>
        </div>
        <?php } ?>
    </div>
</div>
<div id="list_top" class="list_top"></div>
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
        <p>3家优质装修公司免费帮您出方案</p>
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
            <input type="hidden" id="remark" value="移动美图列表">
            <input type="button" class="win_sub" id="apply_button" value="立即申请" /></form>
        <div class="close">
            <a href="javascript:;"></a>
        </div>
    </div>
</div>
<script src="http://static.tugou.com/js/slick.min.js"></script>
<script src="http://static.tugou.com/m/js/company/new-case.js"></script>
<script src=" http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js "></script>
