<?php
use yii\helpers\Url;
?>
<!doctype html public "-//w3c//dtd html 4.01 transitional//en" "http://www.w3c.org/tr/1999/rec-html401-19991224/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>title</title>
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/gallerycms'); ?>/favicon.ico" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/gallerycms') . '/default/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/gallerycms') . '/default/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
<script type="text/javascript">
window.passportUrl = "<?= Yii::getAlias('@passporturl'); ?>";
window.asseturl = "<?= Yii::getAlias('@asseturl'); ?>";
window.signinUrl = "<?= Yii::getAlias('@passporturl') . Url::to(['site/signin']); ?>";
window.signupUrl = "<?= Yii::getAlias('@passporturl') . Url::to(['site/signup']); ?>";
window.logoutUrl = "<?= Yii::getAlias('@passporturl') . Url::to(['site/logout']); ?>";

</script>
</head>
<body>
