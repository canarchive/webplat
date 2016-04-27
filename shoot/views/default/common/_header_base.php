<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9">
<![endif]-->
<html class='no-js'>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EDGE" />
<meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
<title>title</title>
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<meta property="qc:admins" content="1257363774670076375" />

<?php if (isset($cssFiles)) { foreach ($cssFiles as $cssFile) { ?>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl/shoot') . '/default/css/' . $cssFile . '.css?v=151020'; ?>" />
<?php } } ?>

<?php if (isset($jsFiles)) { foreach ($jsFiles as $jsFile) { ?>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/shoot') . '/default/js/' . $jsFile . '.js'; ?>"></script>
<?php } } ?>

<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@shooturl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.PASSPORT_URL = '<?= Yii::getAlias('@passporturl'); ?>';

function checkBrowser() {
    var browser = {};
    var div = document.createElement("div");
    div.innerHTML = "<link/><table></table><a href='/a'>a</a><input type='checkbox'/>";
    var a = div.getElementsByTagName("a")[0];
    style = a && a.style;
    if (!style) {
        return;
    }
    style.cssText = "float:left;opacity:.5";
    // Support: IE<9
    // Make sure that element opacity exists (as opposed to filter)
    browser.opacity = style.opacity === "0.5";

    // Verify style float existence
    // (IE uses styleFloat instead of cssFloat)
    browser.cssFloat = !!style.cssFloat;
    if (browser.opacity && browser.cssFloat) {
        return true;
    } else {
        //IE 8测试
        var userAgent = navigator.userAgent.toLocaleUpperCase();
        var msie = /MSIE [\d\.]+/;
        var version = msie.exec(userAgent);
        if (version < "MSIE 8") return false;
        else return true;
    }
}
var v = checkBrowser();
if (!v) {
    window.location.href = "http://www.oppo.com/cn/ltie9_message.html";
}
</script>

<!--[if lt IE 9]>
<script src="<?= Yii::getAlias('@asseturl/shoot'); ?>/default/js/ltie/html5shiv.js"></script>
<script src="<?= Yii::getAlias('@asseturl/shoot'); ?>/default/js/ltie/respond.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl/shoot'); ?>/default/js/ltie/selectivizr-min.js"></script>
<link media="all" type="text/css" rel="stylesheet" href="<?= Yii::getAlias('@asseturl/shoot'); ?>/default/css/ie.css">
<![endif]-->
<style type="text/css">
    .snow-container { position: fixed; top: 0; left: 0; width: 100%; height:
    100%; pointer-events: none; z-index: 100001; }
</style>
</head>
<body>
