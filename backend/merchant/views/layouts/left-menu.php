<?php
use yii\helpers\Url;

$menus = $this->context->menuInfos['menus'];
$menuCodes = [
	'merchant_merchant-owner_listinfo',
	'merchant_merchant-designer_listinfo',
	'merchant_merchant-working_listinfo',
	'merchant_merchant-realcase_listinfo',
	//'merchant_merchant_listinfo',
];
$currentMenu = Yii::$app->params['currentMenu'];
$currentController = $currentMenu['controller'];
$companyInfo = Yii::$app->params['companyInfo'];
$is_joined = Yii::$app->params['is_joined'];
?>
<div class="col-sm-2 col-lg-2">
    <div class="sidebar-nav">
        <div class="nav-canvas">
            <div class="nav-sm nav nav-stacked"></div>
            <ul class="nav nav-pills nav-stacked main-menu" id="leftMenu">
                <li class="nav-header hidden-tablet">基本信息</li>
				<li class="<?php if ($currentController == 'merchant' && $currentMenu['method'] == 'listinfo') { echo 'active'; } ?>" id="">
				    <a class="ajax-link" href="<?= $menus['merchant_merchant_listinfo']['url'] . '?city_code=' . $companyInfo['code_short'] . '&is_joined=' . $is_joined; ?>">
                        <i class="icon-align-justify"></i>
						<span class="hidden-tablet"><?= $menus['merchant_merchant_listinfo']['name']; ?></span>
                    </a>
                </li>
				<li class="<?php if ($currentController == 'merchant' && $currentMenu['method'] == 'add') { echo 'active'; } ?>" id="">
				    <a class="ajax-link" href="<?= $menus['merchant_merchant_add']['url'] . '?city_code=' . $companyInfo['code_short'] . '&is_joined=' . $is_joined; ?>">
                        <i class="icon-align-justify"></i>
						<span class="hidden-tablet"><?= $menus['merchant_merchant_add']['name']; ?></span>
                    </a>
                </li>

                <li class="nav-header hidden-tablet">商家内容管理</li>
				<?php foreach ($menuCodes as $menuCode) { if (!isset($menus[$menuCode])) { continue; } $menu = $menus[$menuCode];?>
                <li class="<?php if ($currentController == $menu['controller']) { echo 'active'; } ?>" id="left_menu_merchant_merchant_manager">
				    <a class="ajax-link" href="<?= $menu['url'] . '?city_code=' . $companyInfo['code_short'] . '&is_joined=' . $is_joined; ?>">
                        <i class="icon-align-justify"></i>
						<span class="hidden-tablet"><?= $menu['name']; ?></span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
