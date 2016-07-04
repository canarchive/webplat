<!--页脚 start-->
<section class="zx-footer tc cWhite">Copyright © 2009-2016 17house.com,All rights reserved.
	<!--<a href="http://www.17zhuangxiu.com/signups/link.php" class="ml10" target="_blank">关于我们</a>-->
</section>
<!--页脚 end-->
<!--<script src="http://s4.17house.com/common/js/common.js?v=13"></script>-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/pc/js/common.js?v=5"></script>
<script src="http://s4.17house.com/common/js/plugin/jquery.slides.min.js?v13"></script>
<script src="http://s4.17house.com/common/js/plugin/jquery.flipster.js?v13"></script>
<script src="http://s4.17house.com/common/js/poplayer.js?v13"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/pc/js/zztc.js?v6"></script>

<?php echo $this->render('_common', ['info' => $info, 'host' => $host]); ?>
<?php echo $this->render('../_statistic', ['info' => $info, 'host' => $host]); ?>
</body>
</html>
