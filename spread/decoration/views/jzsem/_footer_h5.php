<?php echo $this->render('_common', ['info' => $info, 'host' => $host]); ?>

<script src="http://s4.17house.com/common_h5/js/plugin/zepto.min.js?v=13"></script>
<!-- 公共common.js -->
<script src="http://s4.17house.com/common_h5/js/common.js?v=13"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/js/zztc.js?v2016053101"></script>
<!--页面主体 end-->

<?php echo $this->render('../_statistic', ['info' => $info, 'host' => $host]); ?>
</body>
</html>
