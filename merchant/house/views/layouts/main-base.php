<?php
use yii\helpers\Url;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : ['website'];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : ['modernizr'];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/merchant/lview/images/favicon.ico" />
<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl/merchant') . '/lview/css/' . $cssFile . '.css'; ?>" />
<?php } } ?>
<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/merchant') . '/lview/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@merchanturl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@spreadurl') . '/jz-signup-cms.html'; ?>';
</script>
</head>
<body class="<?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>">
<?= $content; ?>
<?php //echo $this->render('../common/_footer_base', []); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
</div>
<?php 
$jsFooterFiles = ['jquery-2.1.0', 'foundation.min', 'app'];
$jsFooterFiles = isset($this->params['jsFooterFiles']) ? $this->params['jsFooterFiles'] : $jsFooterFiles;
foreach ($jsFooterFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/merchant') . '/lview/js/' . $jsFile . '.js'; ?>"></script>
<?php } ?>
<?php if (isset($this->params['jsFooterString'])) { echo $this->params['jsFooterString']; } ?>
<script src="//captcha.luosimao.com/static/dist/api.js"></script>
</body>
</html>
