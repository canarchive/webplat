<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>title</title>
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/website'); ?>/favicon.ico" />
<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/website') . '/1yyg/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } ?>

<!--[if IE 6]>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/1yyg/js/iepng.js"></script> 
<script type="text/javascript">
EvPNG.fix('.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab a.u-menus s,.u-mui-tab li.f-cart a.u-menus i,.u-mui-tab li.f-both-top a.u-menus,.u-mui-tab li.f-both-bottom a.u-menus,.i-ctrl a s,.g-list li cite,.f-list-sorts li.m-value s,.nav-main li.f-nav-thanks span,.u-float-list a i,.cartEmpty i,.transparent-png');
</script>
<![endif]-->

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" id="<?= $jsFile; ?>" data="<?= Yii::getAlias('@asseturl/website') . '/1yyg/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
</head>
