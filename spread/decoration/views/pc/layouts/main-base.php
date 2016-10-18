<?php
use yii\helpers\Url;
use yii\helpers\Html;

$cssFiles = isset($this->params['cssFiles']) ? $this->params['cssFiles'] : [];
$jsFiles = isset($this->params['jsFiles']) ? $this->params['jsFiles'] : [];

$tdkInfos = isset(Yii::$app->params['tdkInfos']) ? Yii::$app->params['tdkInfos'] : [];
$seoTitle = isset($tdkInfos['title']) ? $tdkInfos['title'] : Yii::$app->params['seoTitle'];
$seoTitle = isset($this->params['titlePrefix']) ? $this->params['titlePrefix'] . $seoTitle : $seoTitle;
$seoKeyword = isset($tdkInfos['keyword']) ? $tdkInfos['keyword'] : Yii::$app->params['seoKeyword'];
$seoDescription = isset($tdkInfos['description']) ? $tdkInfos['description'] : Yii::$app->params['seoDescription'];
$formPosition = isset($this->params['formPosition']) ? $this->params['formPosition'] : '';
$formPositionName = isset($this->params['formPositionName']) ? $this->params['formPositionName'] : '';
?>
<!doctype html>
<!--[if IE 6]>
<html lang="zh-cn" class="ielt7  ielt8  ielt9 ielt10 ">
<![endif]-->
<!--[if IE 7]>
<html lang="zh-cn" class="ie7  ielt8  ielt9 ielt10">
<![endif]-->
<!--[if IE 8 ]>
<html lang="zh-cn" class="ie8 ielt9 ielt10">
<![endif]-->
<!--[if IE 9 ]>
<html lang="zh-cn" class="ie9 ielt10">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]>
<!-->
<html lang="zh-cn">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="applicable-device" content="pc" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="Cache-Control" content="no-transform" />
<link rel="alternate" media="only screen and (max-width:750px)" href="" />
<title><?= $seoTitle; ?></title>
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/favicon.ico" />
<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/spread') . '/house/' . $cssFile . '.css'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/spread') . '/house/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>

<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@gallerycmsurl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.signupUrl = '<?= Yii::getAlias('@spreadurl') . '/jz-signup.html'; ?>';
window.SPREAD_URL = '<?= Yii::getAlias('@web'); ?>';
</script>
<?= $this->render('@spread/decoration/views/_stat', []); // 顶部 ?>
</head>
<body>
<?= $content; ?>
<input type="hidden" id="info_id" value="1" />
<input type="hidden" id="position" value="<?= $formPosition; ?>" />
<input type="hidden" id="position_name" value="<?= $formPositionName; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<div style="position:absolute; width:0px; height:0px; z-index:1; display:none">
<?php $statUrl = str_replace(Yii::getAlias('@spreadurl'), '', Yii::$app->params['statUrl']); echo $statUrl; ?>
</div>
</body>
</html>
