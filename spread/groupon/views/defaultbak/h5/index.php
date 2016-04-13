<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php echo $this->render('_header', ['info' => $info]); ?>

<div id="content">
    <!--活动基本信息-->
    <?php echo $this->render('_base', ['info' => $info]); ?>

    <!--活动亮点-->
    <?php echo $this->render('_index_groupon', ['info' => $info]); ?>

    <!--特惠预约-->
    <?php echo $this->render('_index_book', ['info' => $info, 'productInfos' => $productInfos]); ?>

    <!--热门品牌-->
    <?php echo $this->render('_index_brand', ['info' => $info, 'brandInfos' => $brandInfos]); ?>

    <?php //echo $this->render('_service', ['info' => $info]); ?>
</div>

<!--弹窗-->
<?php echo $this->render('_pop', ['info' => $info]); ?>

<?php echo $this->render('../../_common_input', ['info' => $info]); ?>

<?php echo $this->render('_footer', ['info' => $info]); ?>
