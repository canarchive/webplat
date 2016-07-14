<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'mobile/m_country',
];
$this->params['jsFiles'] = [
    'jquery', 'common', 'mobile/m_country', 'mobile/city',
];
//<title>兔狗家装-好装修，找兔狗</title>
//<meta name="keywords" content="装修公司，装修，装修网，装修论坛，家装" />
//<meta name="description" content="好装修，找兔狗，兔狗家装是全国领先互联网家装平台。好设计，好材料，好施工，好服务，装修管家全程一对一专业指导。" />
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
                    <li><a href="<?= Url::to(['/house/site/index', 'company_code' => $info['code']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>站</a></li>
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
            <img src="http://img.tugou.com/mb/images/m_index/QR-code.jpg" alt="" class="QR-code" />
            <p class="wechat">添加微信号：<span>togojiazhuang</span></br>关注兔狗家装资讯</p>
            <p class="telphone">全国统一热线：<?= Yii::$app->params['siteHotline']; ?></p>
        </div>
    </div>
    <!--回到顶部-->
    <a href="javascript:void(0);" class="back"></a>
</div>
