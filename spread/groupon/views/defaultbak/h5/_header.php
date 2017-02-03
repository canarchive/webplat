<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html>
<head lang="zh-CN">
<title><?= $info['name']; ?></title>
<meta charset="UTF-8" />
<meta name="keywords" content="<?= $info['name']; ?>" />
<meta name="description" content="<?= $info['description']; ?>" />
<meta name="viewport" content="width=device-width,initial-scale= 1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" />
<meta name="location" content="province=shanghai;city=shanghai">
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/website/basey/favicon.ico" />
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/css/style.css?v=20150417" type="text/css" rel="stylesheet">

<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/zepto.min.js?v=20150417"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/loading.js?v=20150417"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/wapCommon.js"></script>

<script type="text/javascript">
var TJJ = {};
TJJ.UserCookieName = "JIA_user_name";
TJJ.AreaCookieName = "city_id";
TJJ.t1 = (new Date).getTime();
TJJ.action = function() {};
TJJ.track = function() {};
TJJ.signupUrl = "<?= Url::to(['groupon/signup']); ?>";
console.log(TJJ);
</script>
<style>
.popup-main.tg_popup-main { 
    position: absolute; width: 80%; height: .93rem;
	left: 50%; top: 50%; margin-left: -44%; margin-top: -.46rem;
}
</style>
</head>
<body>
<div class="popmask"></div>
<nav class="main_nav" name='other_main'>
    <ul class="indexlist clearfix">
        <li>
            <a href="/beijing/" title="" name="head_main" tjjj="wap.top.menu.home">
                <strong class="n_img nl1"></strong><p class="n_txt">首页</p>
            </a>
        </li>
        <li>
            <a href='/tg/beijing/' title="" name="head_main" tjjj="wap.top.menu.tg">
                <strong class="n_img nl2"></strong><p class="n_txt">现场活动</p>
            </a>
        </li>
        <li>
            <a href='/zx/' title="" name="head_main" tjjj="wap.top.menu.zaozx">
                <strong class="n_img nl3"></strong><p class="n_txt">找装修</p>
            </a>
        </li>
        <li>
            <a href="/mall/hd/category/" title="" name="head_main" tjjj="wap.top.menu.brand">
                <strong class="n_img nl4"></strong><p class="n_txt">商城特卖</p>
            </a>
        </li>
    </ul>
</nav>
<link href="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/css/groupon.css?v=20151228" type="text/css" rel="stylesheet">
<input type="hidden" id="hiddendata" data-starting-time="1456534800" data-ends-time="1456653600" data-current-time="1455687466" data-wap-location="116.328721,39.905106" data-areaflag="beijing" info_id="31477" />
<div class="popmask"></div>
<header class="newHeader ##fix_header##">
    <a href="javascript:history.back(-1);" class="backtohis pl">返回</a>
	<h2 class="header_title"><span><?= $info['name']; ?></span></h2>
    <!--<a href="javascript:void(0);" class="new_menu pr"></a>-->
</header>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/commonNav.js"></script>
