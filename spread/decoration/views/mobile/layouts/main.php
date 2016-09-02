<?php
use yii\helpers\Url;
use yii\helpers\Html;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
$formPosition = isset($this->params['formPosition']) ? $this->params['formPosition'] : '';
$formPositionName = isset($this->params['formPositionName']) ? $this->params['formPositionName'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="canonical" href="<?= Yii::getAlias('@gallerycmsurl'); ?>" />
<meta name="applicable-device" content="mobile" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/favicon.ico" />
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<meta content="false" name="twcClient" id="twcClient" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<?php if (isset($this->params['inSpread'])) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/spread') . '/house/' . $cssFile . '.css?v=151020'; ?>" />
<?php } else { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<?php if (isset($this->params['inSpread'])) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/spread') . '/house/' . $jsFile . '.js'; ?>"></script>
<?php } else { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/gallerycms') . '/house-m/js/' . $jsFile . '.js'; ?>"></script>
<?php } } } ?>

<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@m.gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
window.signupUrl = '<?= Yii::getAlias('@spreadurl') . '/jz-signup-cms.html'; ?>';
</script>
</head>
<body class="<?php if (isset($this->params['bodyClass'])) { echo $this->params['bodyClass']; } ?>">
<?= $content; ?>
<?php if (isset($this->params['inSpread'])) { ?>
<?php } else { ?>
<?php echo $this->render('../common/_footer', []); ?>
<?php echo $this->render('../common/_custom_service', []); ?>
<?php } ?>
<input type="hidden" id="position" value="<?= $formPosition; ?>" />
<input type="hidden" id="position_name" value="<?= $formPositionName; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
</div>
</body>
</html>
