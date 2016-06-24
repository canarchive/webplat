<?php
use yii\helpers\Html;
?>
<input type="hidden" id="position" value="common" />
<input type="hidden" id="position_name" value="标准页面" />
<input type="hidden" id="info_id" value="<?= $info['id']; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<?php if (strpos($host, '17house') !== false) { ?>
<script>
var _hmt = _hmt || [];
(function() {
	  var hm = document.createElement("script");
	    hm.src = "//hm.baidu.com/hm.js?9d0896838634be97ff86cba827b32079";
	    var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php } ?>
