<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="mobile-agent" content="format=html5;url=http://beijing.17zhuangxiu.com/zhengzhuang/" />
    <meta charset="UTF-8">
    <title>【北京整体家装】_整装装修_2016装修套餐大全_一起装修网</title>
    <meta name="keywords" content="北京整体家装,北京整装装修,北京整装装修报价,北京装修套餐" />
    <meta name="description" content="一起装修网【北京整体家装】频道为您提供：整体家装,整装装修,整装装修报价,装修套餐，轻松解决装修预算苦恼，让您获取更合理的装修报价。" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-itunes-app" content="app-id=949320942,app-argument=http://17house.com/profile/?1">
    <meta name="applicable-device" content="mobile">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="shortcut icon" href="http://www.17house.com/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="http://s4.17house.com/common_h5/css/common.css?v=58">
    <!-- <link rel="stylesheet" href="http://s4.17house.com/jiazhuangtong/zxtc_h5/css/ask.css?v=58"> -->
    <link rel="stylesheet" type="text/css" href="http://s4.17house.com/jiazhuangtong/zxtc_h5/css/loaders.css?v=58" />
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/css/zzv3_677.css?v=2016051002">
<script>
window.signupUrl = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>
<body>
<div class="cont" id="wrap" data-page="zhengzhuang-v3">
    <header class="cWhite cMdGray">
        <div class="top clearfix">
            <div class="left">
                <a href="http://m.17house.com">
                    <img src="http://s4.17house.com/jiazhuangtong/zxtc_h5/images/beijing/i377/logo.png" alt="一起装修网">
                </a>
                <span class="cMdGray city f14">从设计到入住 全程托管</span>
            </div>
        </div>
    </header><!--cWhite end-->

<?php echo $this->render('_index_1_4', ['info' => $info]); ?>
<?php echo $this->render('_index_5_lottery', ['info' => $info]); ?>
<?php echo $this->render('_index_6_bonus', ['info' => $info, 'bonusInfos' => $bonusInfos]); ?>
<?php echo $this->render('_index_7_gift', ['info' => $info, 'giftBagInfos' => $giftBagInfos]); ?>
<?php echo $this->render('_index_8', ['info' => $info]); ?>
<?php echo $this->render('_index_9', ['info' => $info, 'brandInfos' => $brandInfos]); ?>
<?php echo $this->render('_index_10_12', ['info' => $info]); ?>
<?php echo $this->render('_index_13_professor', ['info' => $info, 'professorInfos' => $professorInfos]); ?>
<?php echo $this->render('_index_14_17', ['info' => $info, 'faqInfos' => $faqInfos]); ?>

<div class="bg-red zzv3-copyright">Copyright © 2009-2016 17house.com,All rights reserved.</div>
</div>

<!-- 弹窗 start -->
<div class="pop-layer pop-activity">
    <span class="close"><i class="iconfont f30 cWhite"></i></span>
    <div class="pop-content subscribe">
        <h2 class="text-center fN f20">品质装修 极致优惠</h2>


	<form class="zzv3-form"
			data-js=""
			data-bonus_id=""
			data-gift_bag_id=""
			data-info_id="<?= $info['id']; ?>"
			data-lottery_id=""
			data-position=""
			data-position_name=""
			data-professor_id=""
		><!-- 页面点了哪个.jz-signup按钮，就把该按钮自带的值赋值给弹窗的表单，用于提交 -->
        <ul>
            <li class="mt5">
                <input type="text" name="name" class="input cMdGray fB f14" placeholder="请输入您的姓名" maxlength="10">
            </li>
            <li class="mt5">
                <input type="text" name="mobile" class="input cMdGray fB f14" placeholder="请输入您的手机号" maxlength="11">
            </li>
            <li><input type="submit" class="btn btn-block btn-orange" value="立即预约"></li>
        </ul>
	</form>

    </div>
</div>
<div class="mask-layer"></div>
<!-- 弹窗 end -->

<!-- <script src="http://s4.17house.com/common_h5/js/plugin/zepto.min.js?v=58"></script> 幸运大抽奖js，zepto用不了 -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/js/jquery-1.11.3.min.js?v=20160510"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/js/jquery.lazyload.min.js"></script><!-- 懒加载 -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/js/awardRotate.js"></script><!-- 幸运大抽奖的旋转插件js -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5/js/zzv3_677.js?v=20160510"></script><!-- 本页js -->

</body>
</html>
