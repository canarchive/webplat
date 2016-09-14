<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'mobile/m_country',
];
$this->params['jsFiles'] = [
    'jquery', 'common', 'm_country', 'city',
];
?>
<div class="container">
    <!--顶部-->
    <div class="top toptitle">
        <a href="javascript:history.go(-1);" class="return"></a>
        <p class="title">城市列表</p>
    </div>
    <div class="position-city">您当前所在的城市是：
        <a href="javascript:;"><span class="position-select"><?= Yii::$app->params['currentCompany']['name']; ?></span></a>
    </div>
    <div class="city-container">
        <!-- A-E -->
        <div class="city">
            <div class="city-title">A-E</div>
            <ul class="cities">
                <?php foreach (Yii::$app->params['companyInfos'] as $info) { ?>
                    <li><a href="<?= Url::to(['/house/mobile-site/index', 'city_code' => $info['code_short']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>站</a></li>
                <?php } ?>
                <!--<li class="line"></li>-->
            </ul>
        </div>
    </div>
    <input type="hidden" id="no_city" value="" />
    <p class="tel">
        <a href="tel:<?= Yii::$app->params['siteHotline']; ?>">预约热线：<?= Yii::$app->params['siteHotline']; ?></a>
    </p>
    <!--弹出框-->
    <div class="box" style="display:none">
        <div class="box-con">
            <a href="javascript:void(0);" class="close-box"></a>
            <p class="sorry">Sorry!</p>
            <p class="soon">您所在的城市即将开通！</p>
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg" alt="" class="QR-code" />
            <p class="wechat">添加微信号：<span>tuanjiahui</span></br>关注<?= Yii::$app->params['siteNameBase']; ?></p>
            <p class="telphone">全国统一热线：<?= Yii::$app->params['siteHotline']; ?></p>
        </div>
    </div>
    <!--回到顶部-->
    <a href="javascript:void(0);" class="back"></a>
</div>
