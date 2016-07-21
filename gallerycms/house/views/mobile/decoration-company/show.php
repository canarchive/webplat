<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 'mobile/slick', 'common-footer', 'apply640',
];
$this->params['jsFiles'] = [
	'jquery-1.11.3.min', 'common', 'slideApply', 'lib/total',
];
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="<?= Url::to(['/house/decoration-company/index']); ?>" class="return"></a><?= $info['name']; ?>
</div>
<div class="top">
    <span class="face">
	    <a><img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>"></a>
    </span>
    <ul>
	    <li>已服务业主<span><?= $info['num_owner']; ?></span></li>
		<li>实景作品<span><?= $info['num_realcase']; ?></span></li>
		<li>直播工地<span><?= $info['num_working']; ?></span></li>
    </ul>
    <b class="top01"></b>
    <b class="top02"></b>
</div>
<div class="tittle">
    <ul>
        <li class="add" id="show-realcase">
            <a href="javascript: tabChange('realcase');">实景作品</a>
        </li>
        <li id="show-working">
            <a href="javascript: tabChange('working');">直播工地</a>
        </li>
        <li id="show-designer">
            <a href="javascript: tabChange('designer');">设计师</a>
        </li>
        <li id="show-baseinfo">
            <a href="javascript: tabChange('baseinfo');">品牌简介</a>
        </li>
    </ul>
</div>
<div class="center">
    <?php echo $this->render('_realcase', ['infos' => $realcaseInfos]); ?>
    <?php echo $this->render('_working', ['infos' => $workingInfos]); ?>
    <?php echo $this->render('_designer', ['infos' => $designerInfos]); ?>
    <?php echo $this->render('_baseinfo', ['info' => $info]); ?>
</div>
<!-- <div id="list_top" class="list_top"></div> -->
<!--免费为我做设计-->
<div class="win_all win_case">
    <div class="window box">
        <h2>免费为我做设计</h2>
        <p>免费获取3份设计&nbsp;选取最满意设计稿</p>
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
            <input type="hidden" name="apply_type" value="53">
            <input type="hidden" id="remark" value="移动美图列表">
            <input type="button" class="win_sub" id="apply_button" value="免费申请" />
            <span class="note">
                <em>注：</em>每户业主可同时获取3份设计比较，挑选合适方案后个性化修改。</span></form>
        <div class="close">
            <a href="javascript:;"></a>
        </div>
    </div>
</div>
<div class="apply-container">
    <form class="pop-apply">
        <div class="form-title">
            免费为我做设计
        </div>
        <p class="form-subtitle">
            免费获取3份设计&nbsp;选取适合的设计稿
        </p>
        <div class="form-body">
			<input type="hidden" id="type" value="52">
            <input type="hidden" id="remark" value="装修公司">
            <div class="form-line input-box first">
                <input type="text" id="name" placeholder="您的姓名" />
            </div>
            <div class="form-line input-box">
                <input type="tel" id="phone" placeholder="手机号码" />
            </div>
            <div class="form-line form-line-pure">
                <ul class="city-select-list js-region-select-group">
                    <li class="form-inline">
                        <select class="select-province js-province" name="province" id="province">
                            <option value="0" selected="selected">省/市</option>
                        </select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                    <li class="form-inline">
                        <select class="select-city js-city" name="city" id="city">
                            <option value="0" selected="selected">市/地区</option>
                        </select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                </ul>
            </div>
            <div class="form-btn-group">
                <input type="button" value="免费申请" class="submit-btn win_sub" id="apply_button"/>
            </div>
            <div class="form-notice">
                <span class="font-mark">注：</span>同一小区同批验房达到5户，可安排免费上门验房服务
            </div>
        </div>
        <span class="form-close"></span>
    </form>
</div>
<div class="alert" style="display: none;">请输入姓名</div>
<script src="http://static.tugou.com/js/slick.min.js"></script>
<script src="http://static.tugou.com/m/js/company/company.js"></script>
<script src=" http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js "></script>
<script>
function tabChange(elem)
{
	$('.tittle>ul>li').removeClass('add');
	$('#show-' + elem).addClass('add');

	var elems = ['index', 'realcase', 'working', 'designer', 'baseinfo'];
	elems.forEach(function(e) {  
		$('#content-' + e).hide();
	});
	$('#content-' + elem).show();
}
tabChange('realcase');
</script>
