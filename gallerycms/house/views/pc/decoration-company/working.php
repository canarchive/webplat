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
?>
<?php echo $this->render('_intro', ['info' => $info]); ?>
<section class="pd-main">
    <div class="pd-main-body">
        <?php echo $this->render('_nav', ['info' => $info, 'currentNav' => $action]); ?>
        <!-- 直播工地 -->
        <div class="pd-buildfield active">
            <?php foreach ($workingInfos as $info) { ?>
            <div class="pd-bd-case">
                <div class="pd-bd-userinfo">
                    <div class="user-header">
        			    <a href="<?= Url::to(['/house/decoration-company/show-working', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
        					<img alt="用户头像" src="/company/face03.png" class="pd-bd-user">
                        </a>
        				<p class="pd-bd-status"><span></span><?= $info['status']; ?></p>
                    </div>
                    <div class="user-profile">
                        <p>
        					<a href="<?= Url::to(['/house/working/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="pd-btn" role="user-name"><?= $info['owner_name']; ?></a>
                        </p>
                        <p>
        				    <a role="building"><?= $info['community_name']; ?></a>
        					<a role="area"><?= $info['area']; ?>m²</a>
        					<a role="detail"><?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</a>
        					<a role="style"><?= $info['style']; ?></a>
                        </p>
                        <a class="pd-btn pd-bd-booking free-order-pop">免费预约看工地</a></div>
                </div>
                <div class="pd-bd-userimg">
                    <div>
        				<a href="<?= Url::to(['/house/decoration-company/show-working', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
        				    <img alt="直播工地" src="<?= $info['thumb']; ?>">
                        </a>
                    </div>
                    <p>严格按照设计图纸进行制作，吊顶高度适中，基层清洁和底子灰结合牢固，无空鼓。</p>
                </div>
            </div>
            <?php } ?>
            <div class="page"><p></p></div>
        </div>
    </div>
    <div id="pd-fault-footer"></div>
</section>
<div class="pop_mask hide">
    <div class="pop_box">
        <a class="pop_close">&times;</a>
        <div class="title_box">
            <p class="title">免费为我做设计</p>
            <p class="subtitle">免费获取3份设计选取满意设计稿</p></div>
        <div class="apply_form">
            <input name="apply_type" type="hidden" value="6">
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
