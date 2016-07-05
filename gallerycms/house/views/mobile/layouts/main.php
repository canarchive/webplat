<?php
use yii\helpers\Url;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];
$seoTitle = Yii::$app->params['seoTitle'];
$seoKeyword = Yii::$app->params['seoKeyword'];
$seoDescription = Yii::$app->params['seoDescription'];
?>
<!DOCTYPE html>
<html>
<head>
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="canonical" href="<?= Yii::getAlias('@gallerycmsurl'); ?>" />
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="false" name="twcClient" id="twcClient" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
</head>
<body>
<?= $content; ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
    <!--PC/移动端加百度统计代码：-->
    <script>var _hmt = _hmt || []; (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?dc5a135b405f74dc32ec7a6e5e1f5716";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();</script>
    <!-- 站长统计 -->
    <script src="http://s4.cnzz.com/z_stat.php?id=1255110144&web_id=1255110144" language="JavaScript"></script>
</div>
</body>
</html>
