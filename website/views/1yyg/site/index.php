<?php
$cssFiles = ['header', 'index'];
$jsFiles = ['index'];

?>
<?php echo $this->render('@website/views/1yyg/common/header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<body id="loadingPicBlock" class="home" rf="1" >
<div class="wrapper">
  <?php echo $this->render('@website/views/1yyg/common/top'); ?>
  <?php echo $this->render('@website/views/1yyg/common/header'); ?>
  <!--导航-->
  <?php echo $this->render('@website/views/1yyg/common/nav'); ?>

  <?php //echo $this->render('@website/views/1yyg/common/content_g'); ?>

  <?php //echo $this->render('@website/views/1yyg/common/content'); ?>

  <!--底部-->
  <?php //echo $this->render('@website/views/1yyg/common/footer'); ?>
  
  <!--通栏购物车-->
  <?php //echo $this->render('@website/views/1yyg/common/cart_full'); ?>
  
  <!--无购物车页面版-->
  <?php //echo $this->render('@website/views/1yyg/common/cart_no'); ?>

  <?php //echo $this->render('@website/views/1yyg/common/foot_js'); ?>
  <?php //echo $this->render('@website/views/1yyg/common/foot_page'); ?>
</div>
</body>
</html>
