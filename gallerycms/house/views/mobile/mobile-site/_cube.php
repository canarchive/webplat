<?php
use yii\helpers\Url;
?>
<div class="cube">
    <div class="cube-list cubeTop">
        <a href="<?= Url::to(['/house/mobile-decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="cube-left green">
            <span class="company"></span><p>找装修公司</p>
        </a>
        <div class="cube-right">
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">靠谱装修</a>
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'baojia', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">智能报价</a>
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">免费设计</a>
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'jianli', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">免费监理</a>
        </div>
    </div>
    <!--<div class="cube-list">
        <a href="/tuan/baoming/hangzhou/" class="cube-left orange">
            <span class="tuan"></span>
            <p>团建材家具</p>
        </a>
        <div class="cube-right">
            <a class="orange" href="/tuan/baoming/hangzhou/">建材团购会</a>
            <a class="orange" href="/tuan/baoming/hangzhou/">家具团购</a>
            <a class="orange" href="/hz/principal/">主材包</a>
            <a class="orange" href="/free/jiancai/">查建材底价</a>
        </div>
    </div>-->
    <!--<div class="cube-list" style="margin-bottom: 0">
        <a href="/free/guanjia/" class="cube-left blue">
            <span class="guanjia"></span>
            <p>问装修管家</p>
        </a>
        <div class="cube-right">
            <a class="blue" href="/meitu/">装修效果图</a>
            <a class="blue" href="/jy/">装修经验</a>
            <a class="blue" href="/site/">装修实景</a>
            <a class="blue" href="/baike/">装修百科</a></div>
    </div>-->
</div>
