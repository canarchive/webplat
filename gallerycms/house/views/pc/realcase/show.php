<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-casedetail',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-casedetail',
];
$this->params['currentNav'] = 'realcase';
$this->params['friendLink'] = true;

$this->params['showPage'] = true;
$this->params['formPosition'] = 'realcase-show';
$this->params['formPositionName'] = $info['id'] . '_' . $info['name'];
$merchantInfo = $info->merchantInfo;
$this->context->mobileMappingUrl = Url::to(['/house/mobile-realcase/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<!-- <?= Yii::$app->params['siteNameBase']; ?>主页导航栏 -->
<?php echo $this->render('../common/_nav_mini', []); // 内容页顶部 ?>
<div class="pd-header">
    <!-- <?= Yii::$app->params['siteNameBase']; ?>主页导航栏 -->
    <!-- <div class="pd-for-nav"></div> -->
    <!-- 面包屑导航主页样式 -->
    <div class="crumbs">
	    <a href="/"><?= Yii::$app->params['siteNameBase']; ?></a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修公司</a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $merchantInfo['id'], 'action' => 'sj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>"><?= $merchantInfo['name']; ?></a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $merchantInfo['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">实景案例</a><span class="sep">&gt;</span>
		<a ><span class="btn-crumbs"><?= $info['name']; ?><i class="i-del"></i></span></a>
    </div>
</div>
<div class="pd-main">
    <div class="pd-case-content">
	    <p class="pd-c-title"><?= $info['community_name'] . '·' . $info['house_type'] . '·' . $info['style'] . '·' . $info['decoration_type'] . $info['decoration_price'] . '万'; ?></p>
        <figure class="pd-c-layout">
		    <img src="<?= $info['picture_design']; ?>" alt="用户设计图">
            <figcaption>
			    <span class="pd-quota left">“</span><?= $info['pictureDesignInfo']['description']; ?><span class="pd-quota right">”</span>
            </figcaption>
        </figure>
        <?php foreach ($info['design_sketch'] as $sketchKey => $sketchInfo) { ?>
        <figure class="pd-c-item">
		    <img src="<?= $sketchInfo['url']; ?>" alt="<?= $sketchInfo['description']; ?>">
            <figcaption>
			    <span class="pd-page-number"><?= $sketchKey + 1; ?></span>
				<p class="pd-img-desc"><?= $sketchInfo['description']; ?></p>
            </figcaption>
        </figure>
        <?php } ?>
        <!-- <div class="pd-c-page">
        <p class="pd-btn"><span class="pd-icon-prev"></span>上一篇:<a class="pd-prev" href=""></a></p>
        <p class="pd-btn"><span class="pd-icon-next"></span>下一篇:<a class="pd-next" href=""></a></p></div>-->
    </div>
    <div class="pd-right-bar">
        <!--<div class="pd-keeper">
            <img class="user-head" src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="装修管家">
            <p class="pd-keeper-name">装修管家
                <a role="name">小南</a></p>
            <img class="keeper-dimcode" src="http://pic.tugou.com/crm_admin_avator/1451700077_1848445.jpeg" alt="装修二维码">
            <p>扫我立即获取装修清单</p>
        </div>-->
        <div class="pd-applyfix">
            <div class="aside-apply">
                <h3>免费获取设计方案</h3>
                <p class="title sm pd-apply-title">免费获取3套设计方案，省40%装修款</p>
                <div class="apply_form">
                    <input name="apply_type" type="hidden" value="realcase-show" />
                    <input name="name" type="text" placeholder="您的姓名" />
                    <input name="phone" type="text" placeholder="手机号码" />
                    <div class="select-group clearfix js-region-select-group">
                        <select class="js-province" name="province" id="province">
							<option value="">省/市</option>
                        </select>
                        <select class="js-city" name="city" id="city">
							<option value="">市/地区</option>
                        </select>
                    </div>
					<input name="apply" type="button" value="立即获取" />
                </div>
            </div>
        </div>
    </div>
</div>
