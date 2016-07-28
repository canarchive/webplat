<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/mainz', 'mobile/top',
];
$this->params['jsFiles'] = [
	'm_resize', 'jquery', 'common', 'lib/total',
];
//<title>杭州装修公司_杭州装修公司大全|排名 -兔狗杭州装修网</title>
//<meta name="keywords" content="杭州装修公司,杭州装修公司大全,杭州装修公司排名" />
//<meta name="description" content="兔狗杭州装修网是一家致力于为广大杭州业主提供家装、家居、建材等装修服务的家装平台,专业正规杭州装修公司推荐,帮助杭州业主轻松搞定装修!" />
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="top total-top">装修公司
    <a href="/index/CitySelection"></a>
    <a href="/" class="return"></a>
</div>
<div class="list">
    <?php foreach ($infos as $info) { ?>
	<div class="listItem" provider="<?= $info['id']; ?>">
	    <a href="<?= Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id']]); ?>" style="display: inline-block;">
            <div class="listImg">
				<img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" />
            </div>
            <div class="listContent">
                <div class="nameAndimg">
				    <span class="companyName"><?= $info['name']; ?></span>
					<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/bao.png" alt="" class="companyIcon" />
					<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/zheng.png" alt="" class="companyIcon" />
					<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/huan.png" alt="" class="companyIcon" />
                </div>
                <div class="floatOver"></div>
				<div class="designer">实景作品：<i><?= $info['num_realcase']; ?></i></div>
				<div class="workers">直播工地：<i><?= $info['num_working']; ?></i></div>
            </div>
        </a>
        <div class="listIfo">
            <span class="listSorce"><i>4.9</i>分</span>
            <div class="floatOver"></div>
			<a class="apply">免费设计</a>
        </div>
        <div class="floatOver"></div>
    </div>
    <?php } ?>
</div>
<div class="bottom"></div>
<p class="telspace"></p>
<div id="box" style="display: none;">
    <div class="box-con">
        <a href="javascript:void(0);" id="close-box"></a>
        <p class="box-title">预约成功</p>
        <p class="box-text">请保持手机畅通哦</br>装修管家会在24小时内联系您哦！</p>
		<p class="box-time"><span>3</span>秒后自动关闭</p>
    </div>
</div>
<div id="alert" style="display:none">请输入姓名</div>
<div id="yuyue">
    <form action="" class="apointmentForm" method="post">
        <div class="afCtrl">
            <i id="close_form">&times;</i>
            <h2>申请免费设计</h2>
            <p>免费获取3份设计&nbsp;选取满意设计稿</p>
        </div>
        <input type="hidden" value="52" name="apply_type">
        <input type="hidden" name="provider" id="provider" value="" />
        <input type="text" id="name" placeholder="您的姓名" />
        <input type="tel" id="phoneNum" placeholder="手机号码" />
        <div class="select-group js-region-select-group">
            <select name="province" id="province" class="city_select province js-province">
				<option value="0">省/市</option>
            </select>
            <select name="city" id="city" class="city_select city js-city">
				<option value="0">市/地区</option>
            </select>
        </div>
        <input type="button" id="entirety" value="免费申请" />
		<span class="note"><em>注：</em>每户业主可同时获取3份设计比较，挑选合适方案后个性化修改。</span>
    </form>
</div>
<div id="alert" style="display:none">请输入姓名</div>
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
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/main.js"></script>
