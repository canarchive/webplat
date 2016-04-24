<?php
$cssFiles = ['styles'];
$jsFiles = [];
?>
<?php echo $this->render('@shoot/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<?php echo $this->render('@shoot/views/default/common/_header'); ?>
<main class="main-content">
    <?php echo $this->render('_index_1'); ?>
    <?php echo $this->render('_index_2'); ?>
    <?php //echo $this->render('_index_3'); ?>
    <?php echo $this->render('_index_5'); ?>
    <?php echo $this->render('_index_4'); ?>
</main>
<?php echo $this->render('@shoot/views/default/common/_footer'); ?>
<?php echo $this->render('@shoot/views/default/common/_nav_right'); ?>

<?php echo $this->render('@shoot/views/default/common/_footer_javascript'); ?>
<?php echo $this->render('@shoot/views/default/common/_footer_base'); ?>
