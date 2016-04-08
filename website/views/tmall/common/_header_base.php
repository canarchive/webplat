<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>title</title>
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/website'); ?>/favicon.ico" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/website') . '/tmall/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website') . '/tmall/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>
<script type="text/javascript">
window.passportUrl = "<?= Yii::getAlias('@passporturl'); ?>";
window.asseturl = "<?= Yii::getAlias('@asseturl'); ?>";
window.signinUrl = "<?= Yii::getAlias('@passporturl') . Url::to(['site/signin']); ?>";
window.signupUrl = "<?= Yii::getAlias('@passporturl') . Url::to(['site/signup']); ?>";
window.logoutUrl = "<?= Yii::getAlias('@passporturl') . Url::to(['site/logout']); ?>";

$(function() {
    window.__Object_toJSONString = Object.prototype.toJSONString;
    delete Object.prototype.toJSONString;
});

function killerrors() {
    return true;
}
window.onerror = killerrors;

var process_request = "正在处理您的请求...";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
</head>
