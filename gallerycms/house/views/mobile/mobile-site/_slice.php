<?php
use yii\helpers\Url;
?>
<div class="swiper-container banner">
    <div class="swiper-wrapper">
        <div class="swiper-slide tg-img-item">
            <a href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/m_lunbo_yfz.jpg" width="100%" alt="一分钟找到靠谱装修公司" />
            </a>
        </div>
        <div class="swiper-slide tg-img-item">
            <a href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'jianli', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/m-lunbo-jzj0617.jpg" width="100%" alt="家装设计沙龙" />
            </a>
        </div>
        <div class="swiper-slide tg-img-item">
            <a href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'yanfang', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/m_banner_jy.jpg" width="100%" alt="装修经验" />
            </a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
