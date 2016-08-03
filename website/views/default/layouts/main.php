<?php
use yii\helpers\Url;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta property="qc:admins" content="156232777761146375" />
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />

<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/website/default/images/favicon.ico" />
<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/website') . '/default/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website') . '/default/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>

<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@websiteurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
</script>
</head>
<body>
<?php echo $this->render('../common/_topbar', []); ?>
<?php echo $this->render('../common/_header', []); ?>
<?php echo $this->render('../common/_nav', []); ?>
<?= $content; ?>
<?php echo $this->render('../common/_footer', []); ?>
<?php echo $this->render('../common/_nav_right', []); ?>
<div class="hide">
    <script src="https://s95.cnzz.com/z_stat.php?id=1259893258&web_id=1259893258" type="text/javascript" language="JavaScript"></script>
</div>
</body>
</html>
