<?php
use yii\helpers\Url;
?>
<div class="cube">
    <div class="cube-list cubeTop">
        <a href="<?= Url::to(['/house/mobile-decoration-company/index']); ?>" class="cube-left green">
            <span class="company"></span><p>找装修公司</p>
        </a>
        <div class="cube-right">
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'baojia']); ?>">智能报价</a>
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'sheji']); ?>">免费设计</a>
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'yanfang']); ?>">免费验房</a>
            <a class="green" href="<?= Url::to(['/house/mobile-feature/index', 'view' => 'jianli']); ?>">免费监理</a>
        </div>
    </div>
    <!--<div class="cube-list">
        <a href="http://m.tugou.com/tuan/baoming/hangzhou/" class="cube-left orange">
            <span class="tuan"></span>
            <p>团建材家具</p>
        </a>
        <div class="cube-right">
            <a class="orange" href="http://m.tugou.com/tuan/baoming/hangzhou/">建材团购会</a>
            <a class="orange" href="http://m.tugou.com/tuan/baoming/hangzhou/">家具团购</a>
            <a class="orange" href="/hz/principal/">主材包</a>
            <a class="orange" href="http://m.tugou.com/free/jiancai/">查建材底价</a>
        </div>
    </div>-->
    <!--<div class="cube-list" style="margin-bottom: 0">
        <a href="http://m.tugou.com/free/guanjia/" class="cube-left blue">
            <span class="guanjia"></span>
            <p>问装修管家</p>
        </a>
        <div class="cube-right">
            <a class="blue" href="http://m.tugou.com/meitu/">装修效果图</a>
            <a class="blue" href="http://m.tugou.com/jy/">装修经验</a>
            <a class="blue" href="http://m.tugou.com/site/">装修实景</a>
            <a class="blue" href="http://m.tugou.com/baike/">装修百科</a></div>
    </div>-->
</div>
