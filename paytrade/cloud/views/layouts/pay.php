<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<?php echo $this->render('@website/views/basey/common/_header_base', []); ?>
<link href="http://static.biyao.com/pc/buy/css/newBuy.css?v=biyao_bd48ea6" rel="stylesheet"/>

<script type="text/javascript" src="biyao.com/pc/common/js/common.js?v=biyao_9e5cb44"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/common.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/dialog.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/select.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/loadmask.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/buy/commonre.js?v="></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/jquery/jquery.cookie.js?v="></script>
<body>

<!-- 新版首页 -->
<?php echo $this->render('@website/views/basey/common/_nav_top', []); ?>
<div class="bd_bottom_ea">
      <div class="wrap pub_logo_box clearfix">
          <div class="pub_logo"><a href="http://www.biyao.com/home/index.html"><img alt="" src="http://static.biyao.com/pc/common/img/logo.png?v=biyao_3251680"></a></div>
      </div>
</div>
<div class="wrap relative">
    <div class="shopStepBox">
        <div class="publicStepsbox">
            <div class="car_step_icon car_step1"></div>
            <ul class="clearfix car_step_txt">
                <li class="checked">查看购物车</li>
                <li>确认订单信息</li>
                <li>在线付款</li>
                <li>收货并评价</li>
            </ul>
        </div>
    </div>
</div>
<?= $content; ?>

<?php echo $this->render('@website/views/basey/common/_footer', []); ?>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/common_2.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/track.js?v="></script>
<?php echo $this->render('@website/views/basey/common/_footer_base', []); ?>
