<?php
$this->params['cssFiles'] = ['styles'];
?>
<main class="main-content">
    <?php echo $this->render('_index_1', ['infos' => $datas['index_slice']]); ?>
    <?php //echo $this->render('_index_3'); ?>
    <?php echo $this->render('_index_5', ['infos' => $datas['index_sample']]); ?>
    <?php echo $this->render('_index_2', ['infos' => $datas['index_goods']]); ?>
    <?php echo $this->render('_index_4'); ?>
</main>
