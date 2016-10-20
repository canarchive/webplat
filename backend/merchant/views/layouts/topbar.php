<?php
use yii\helpers\Url;

$menus = $this->context->menuInfos['menus'];
$menuCode = 'merchant_merchant_manager';
$cityUrl = '';
if (isset($menus[$menuCode])) {
    $cityUrl .= "<a href='{$menus[$menuCode]['url']}?city_code='>{$menus[$menuCode]['name']}</a>&nbsp;&nbsp;";
}
$menuCode = 'merchant_merchant_self_manager';
if (isset($menus[$menuCode])) {
    $cityUrl .= "<a href='{$menus[$menuCode]['url']}?city_code='>{$menus[$menuCode]['name']}</a>";
}
?>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
		<a class="navbar-brand" href="/"> 
            <img alt="Charisma Logo" src="<?= Yii::getAlias('@asseturl/backend/'); ?>img/logo20.png" class="hidden-xs"/>
			<span>Charisma</span>
        </a>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><?= Yii::$app->params['managerInfo']['username'] . '-' . Yii::$app->params['managerInfo']['roles']; ?></span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li class="divider"></li>
				<li><a href="<?= Yii::getAlias('@backendurl') . Url::to(['site/logout']); ?>">退出</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->

        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container ">
            <?= $cityUrl; ?>
        </div>
        <!-- theme selector ends -->

        <ul class="collapse navbar-collapse nav navbar-nav top-menu" id="baseMenu">
            <li class="active"><a href="javascript: void(0);">分站商家信息管理</a></li>
        </ul>
    </div>
</div>
<!-- topbar ends -->
