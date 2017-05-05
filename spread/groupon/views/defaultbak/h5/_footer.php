<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/lazyload.js?v=20150417" type="text/javascript"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/iscrollCity.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/fastclick.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/grouponh5/js/detail_new.js?v=20160120" type="text/javascript"></script>
<script>
$(document).ready(function() {
    if (urlHrefObject.appVersion != undefined) {
        var appVersion = Number((urlHrefObject.appVersion + "000").replace(/\./g, "").substring(0, 3));
        if (appVersion > 264) {
            $(".show_im").show();
        }
    }
})
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/groupon/js/tjj.js?v=" type="text/javascript">
</script>
</body>
</html>
