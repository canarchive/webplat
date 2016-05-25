<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://s1.17house.com/common_h5/css/common.css?v=2016051818">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/css/icon_font.css?v=1">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/css/free_design.css?v=1">

<script>
var isMobile = '<?= intval(Yii::$app->params['isMobile']); ?>';
if (isMobile == 0) {
	window.location.href = "<?= Yii::getAlias('@spreadurl') . Url::to(['/decoration/detail/index', 'id' => 1]); ?>";
}
window.signupUrl = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>
