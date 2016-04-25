<?php
$cssFiles = ['styles'];
$jsFiles = [];
?>
<?php echo $this->render('@shoot/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<?php echo $this->render('@shoot/views/default/common/_header'); ?>
<?= $content; ?>

<?php echo $this->render('@shoot/views/default/common/_footer'); ?>
<?php echo $this->render('@shoot/views/default/common/_nav_right'); ?>

<?php echo $this->render('@shoot/views/default/common/_footer_javascript'); ?>
<?php echo $this->render('@shoot/views/default/common/_footer_base'); ?>
