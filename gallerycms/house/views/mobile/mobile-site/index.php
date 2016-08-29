<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'index_new', 'swiper.min',
];
$this->params['jsFiles'] = [
	'jquery', 'rem50',
];
?>
<div class="toptitle">
    <a href="<?= Url::to(['/house/mobile-site/select-city']); ?>">
	    <div class="position"><?= Yii::$app->params['currentCompany']['name']; ?></div>
    </a>
</div>
<div class="content" style="position:relative;">
    <?php echo $this->render('_slice', []); ?>
    <!-- 豆腐块 -->
    <?php echo $this->render('_cube', []); ?>
    <!-- 活动 -->
    <?php //echo $this->render('_activity', []); ?>
    <!-- 装修案例 -->
    <?php echo $this->render('_sample', ['infos' => $sampleInfos]); ?>
    <!-- 装修实景 -->
    <?php echo $this->render('_realcase', ['infos' => $realcaseInfos]); ?>
    <!-- 装修工地 -->
    <?php echo $this->render('_working', ['infos' => $workingInfos]); ?>
    <!-- 装修经验 -->
    <?php //echo $this->render('_experience', []); ?>
    <!-- 为什么选择<?= Yii::$app->params['siteNameBase']; ?>靠谱装修 -->
    <div class="why">
        <h1>为什么选择<?= Yii::$app->params['siteNameBase']; ?></h1>
		<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/index-why.png" alt="为什么选择<?= Yii::$app->params['siteNameBase']; ?>靠谱装修">
    </div>
    <div class="app-weixin">
	    <a href="tel:<?= Yii::$app->params['siteHotline']; ?>" class="tugou-app">
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/index-dh.png" alt="<?= Yii::$app->params['siteNameBase']; ?>家装app">
        </a>
        <a href="<?= Url::to(['/house/mobile-info/wechat']); ?>" class="tugou-weixin">
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/index-weixin.png" alt="<?= Yii::$app->params['siteNameBase']; ?>家装微信公众号">
        </a>
		<p class="app-p"><a href="tel:<?= Yii::$app->params['siteHotline']; ?>"><?= Yii::$app->params['siteHotline']; ?></a></p>
		<p class="weixin-p">微信公众号</p>
    </div>
    <!-- null -->
    <p class="bespoke">
        <span onclick="nTalk.im_openInPageChat();"></span>
		<a href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>"></a>
    </p>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/swiper.min.js"></script>
<script type="text/javascript">
$(function() {
    var mySwiper = new Swiper('.banner', {
        direction: 'horizontal',
        loop: true,
        autoplay: 3000,
        autoplayDisableOnInteraction: false,
        pagination: '.swiper-pagination',
        paginationClickable: true,
    });
    var mySwiper3 = new Swiper('.jy-list', {
        slidesPerView: "auto",
        slidesPerGroup: 1,
        freeMode: true,
        freeModeMomentumBounceRatio: 4,
		});
	   	var ua = navigator.userAgent.toLowerCase();
    if (/android/.test(ua)) {
        $('.position').addClass('Android');
        $('.case-title a').addClass('case-android');
    }
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        var Top = $(".cubeTop").offset().top;
        if (scrollTop >= Top) {
            $(".bespoke").show();
        } else {
            $(".bespoke").hide();
        }
    });
});
</script>
</div>
