<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>title</title>
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<meta property="qc:admins" content="35713343766211176375747716" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/website'); ?>/basey/favicon.ico" type="image/x-icon" />
<link rel="icon" href="<?= Yii::getAlias('@asseturl/website'); ?>/basey/favicon.ico" rel="icon" type="image/x-icon" />

<script type="text/javascript">
window.ApiSite = "http://api.biyao.com";    
window.passportUrl = "<?= Yii::getAlias('@passporturl'); ?>";
window.websiteUrl = "<?= Yii::getAlias('@websiteurl'); ?>";
window.ControllerSite="";
window.loginUserId=0;
window.__pageType="other";
window.WebIMSite="http://webim.idstaff.com";
</script>

<link href="<?= Yii::getAlias('@asseturl/website'); ?>/basey/css/common.css?v=" rel="stylesheet" />
<link href="<?= Yii::getAlias('@asseturl/website'); ?>/basey/css/style.css?v=" rel="stylesheet" />

<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/jquery/jquery-1.8.3.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/jquery/jquery.extention.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/lazyload.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/jquery/jquery.cookie.js?v="></script>
<script type="text/javascript">
function GetRequest() {
    var url = location.search; // 获取url中"?"符后的字串
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        strs = str.split("&");
        for (var i = 0; i < strs.length; i++) {
            theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
        }
    }
    return theRequest;
}
var Request = new Object();
Request = GetRequest();
if (!$.cookie("source")) {
	$.cookie('source', Request['source'], {domain:"<?= Yii::$app->params['baseDomain']; ?>", path: "/"});
}
</script>
</head>
