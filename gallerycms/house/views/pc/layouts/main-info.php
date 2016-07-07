<?php
use yii\helpers\Url;

$seoTitle = Yii::$app->params['seoTitle'];
$seoKeyword = Yii::$app->params['seoKeyword'];
$seoDescription = Yii::$app->params['seoDescription'];
?>
<!doctype html>
<!--[if IE 6]><html lang="zh-cn" class="ielt7  ielt8  ielt9 ielt10 "><![endif]-->
<!--[if IE 7]><html lang="zh-cn" class="ie7  ielt8  ielt9 ielt10"><![endif]-->
<!--[if IE 8 ]><html lang="zh-cn" class="ie8 ielt9 ielt10"><![endif]-->
<!--[if IE 9 ]><html lang="zh-cn" class="ie9 ielt10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="zh-cn"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit">
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-info/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-info/css/group.css">
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-info/css/group_header.css">
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/js/lib/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-info/js/group.js"></script>
</head>
<body>
<div class="group-header">
    <div class="header">
        <div class="logo">
			<a href="<?= Yii::getAlias('@gallerycmsurl'); ?>">
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/citytogo_logo.png" alt="兔狗科技">
            </a>
        </div>
        <ul class="nav">
            <!--<li class="nav-sub">
                <a href="javascript:;">关</a>
                    <div class="subnav">
                    <div class="subnav-body">
                        <ul class="menu">
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                </div>
            </li>-->
			<li class="nav-2"><a href="<?= Url::to(['/house/info/aboutus']); ?>">关于我们</a></li>
			<li class="nav-2"><a href="<?= Url::to(['/house/info/joinus']); ?>">加入我们</a></li>
			<li class="nav-4"><a href="<?= Url::to(['/house/info/statement']); ?>">声明</a></li>
        </ul>
    </div>
</div>
<?= $content; ?>
<div class="links-footer">
    <div class="footer">
        <div class="links-left">
		    <p><?= Yii::$app->params['siteCopyRightInfo']; ?></p>
			<p><?= Yii::$app->params['siteIcpInfo']; ?></p>
        </div>
        <div class="links-right">
            <a></a>
            <a href="https://credit.szfw.org/CX20151215012655370386.html" target='_blank' rel=”nofollow”></a>
        </div>
    </div>
</div>
</body>
</html>
