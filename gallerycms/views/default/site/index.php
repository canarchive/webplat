<?php
$cssFiles = ['style'];
$jsFiles = [
	'jquery.min', 'ismobile', 'simple', 'lrtk',
];
?>
<?php echo $this->render('@gallerycms/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<!-- 导航 -->
<?php echo $this->render('_index_nav'); ?>
<div class=box>
    <!-- 幻灯 -->
    <?php echo $this->render('_index_slide'); ?>
    <?php echo $this->render('_index_hot'); ?>
    <?php echo $this->render('_index_1'); ?>
    <?php echo $this->render('_index_2'); ?>
    <?php echo $this->render('_index_3'); ?>
    <?php echo $this->render('_index_4'); ?>
    <?php echo $this->render('_index_5'); ?>
    <?php echo $this->render('_index_6'); ?>
    <?php echo $this->render('_index_7'); ?>
</div>
<?php echo $this->render('@gallerycms/views/default/common/_footer'); ?>
