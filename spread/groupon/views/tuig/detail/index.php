<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php echo $this->render('_header', ['info' => $info, 'urlFull' => $urlFull]); ?>
<!-- 主体 start -->
<div class="main">
    <!-- 导航 start -->
    <?php echo $this->render('_index_nav', ['info' => $info]); ?>
	
	<!-- 第二模块 start -->
    <?php echo $this->render('_index_two', ['info' => $info]); ?>

	<!-- 第三模块 start -->
    <?php //echo $this->render('_index_product', ['info' => $info, 'productInfos' => $productInfos, 'cateId' => $cateId]); ?>

	<!-- 第六模块 start -->
    <?php //echo $this->render('_index_business', ['info' => $info, 'businessInfos' => $businessInfos, 'cateId' => $cateId]); ?>

    <?php echo $this->render('_index_eight_nine', ['info' => $info]); ?>
    <?php echo $this->render('_index_ten', ['info' => $info]); ?>

</div>
<!-- 主体 end -->

<?php echo $this->render('_index_right_nav', ['info' => $info]); ?>
<?php echo $this->render('_index_pop', ['info' => $info, 'grouponNext' => $grouponNext]); ?>

<!-- 底部报名浮层 start -->
<div class="main_bottom">
    <!--<a href="http://p.qiao.baidu.com//im/index?siteid=3211743&ucid=5857434" target="_blank"><img src="<?= Yii::getAlias('@asseturlold'); ?>/grouponDetail/images/hf_37.png" class="online_consults" width="92" alt=""></a>-->
    <img src="<?= Yii::getAlias('@asseturlold'); ?>/grouponDetail/images/hf_29.png" class="save_money" height="103" width="158" alt="">
    <div class="floatingLayerBg bus_line">
        <div class="floatingLayer clear">
            <div class="left">
			    <h3><?= $info['name']; ?></h3>
				<p>地点：<?= $info['address']; ?></p>
				<a target="_blank" href="<?= $info['map']; ?>">乘车路线</a>
                <a class="bottonMap" href="javascript:;">查看地图</a>
            </div>
            <div class="center">
			    <p>已有<em class="grouponRegNumber"><?= $info['signup_number']; ?></em>人报名</p>
                <input type="text" class="user_name" value="您的称呼">
                <input type="text" class="user_phone" value="您的电话">
                <button id="signup-bottome">免费领券</button>
            </div>
            <div class="right">
				<img src="<?php if (!empty($info['companyInfo']['company_wx_qrcode'])) { echo $info['companyInfo']['company_wx_qrcode']; } else { echo Yii::getAlias('@asseturlold') . '/grouponDetail/images/hf_31.jpg'; } ?>" alt="二维码" width="72" height="72">
                <img src="<?= Yii::getAlias('@asseturlold'); ?>/grouponDetail/images/hf_42.png" alt="扫码有礼" width="127" height="47" >
                <!-- <span>关注有礼</span> -->
            </div>
            <span class="close"></span>
        </div>
    </div>
</div>
<!-- 底部报名浮层 end -->
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<input type="hidden" id="gettimestr" value="" />
<input type="hidden" id="position" value="" />
<input type="hidden" id="grouponId" value="<?= $info['id']; ?>" />
<input type="hidden" id="business_id" value="" />
<input type="hidden" id="product_id" value="" />
<input type="hidden" id="voucher_id" value="" />
<input id="template_code" name="template_code" value="tuig" type="hidden" />
<input id="sem_params" name="sem_params" value="<?= $semParams; ?>" type="hidden" />
<input id="message" name="message" value="" type="hidden" />

<?php if (!empty($gourponInfo['isOver'])) { ?>
<script>
homeFair.activeEnd();
</script>
<?php } ?>

<?php echo $this->render('_footer', ['info' => $info]); ?>    
