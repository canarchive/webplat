<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['currentNav'] = 'company';
$this->params['friendLink'] = true;

$this->params['showPage'] = true;
$this->context->mobileMappingUrl = Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id'], 'action' => 'sjdp', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/css/provider/pd-comment.css">
<?php echo $this->render('_intro', ['info' => $info]); ?>
<section class="pd-main">
    <div class="pd-main-body">
        <?php echo $this->render('_nav', ['info' => $info, 'currentNav' => $action]); ?>
        <ul id="comment-list">
            <?php foreach ($commentInfos as $info) { ?>
            <li>
                <div class="comment-user">
                    <img class="avatar" src="http://pic.tugou.com/app/headicon.png">
					<h1 class="nickname"><?= $info['ownerInfo']['name']; ?></h1>
                </div>
                <div class="comment-content">
                    <h3 class="score">评分:&nbsp;&nbsp;&nbsp;<span class="stg" v-text="parseFloat(item.score).toFixed(1)"></span></h3>
                    <?php for ($i = 0; $i < $info['totalScore']; $i++) { ?>
                    <img class="star" src="http://static.tugou.com/home/provider/img/star-picked.png">
                    <?php } ?>
					<p class="content" readonly="readonly"><?= $info['content']; ?></p>
					<p class="detail"><?= $info['ownerInfo']['community_name']; ?>-<?= $info['ownerInfo']['area']; ?>m<sup>2</sup>-<?= $info['ownerInfo']['style']; ?></p>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div id="pd-fault-footer"></div>
</section>
<div class="pop_mask hide">
    <div class="pop_box">
        <a class="pop_close">&times</a>
        <div class="title_box">
            <p class="title">免费为我做设计</p>
            <p class="subtitle">免费获取3份设计选取满意设计稿</p></div>
        <div class="apply_form">
            <input name="apply_type" type="hidden" value="14">
            <input name="apply_provider" type="hidden" value="81">
            <input name="name" type="text" placeholder="您的姓名">
            <input name="phone" type="text" placeholder="手机号码">
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input name="apply" type="button" value="立即预约">
            <p class="sm">全国服务热线<?= Yii::$app->params['siteHotline']; ?>
                <br>为了方便我们联系，请留下您的联系方式，我们将严格保密</p></div>
    </div>
</div>
