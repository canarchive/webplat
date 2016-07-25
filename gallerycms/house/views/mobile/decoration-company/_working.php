<?php
use yii\helpers\Url;
?>
<!-- 在建工地 -->
<div class="site " id="content-working">
    <?php foreach ($infos as $info) { ?>
    <div class="list">
        <a href="<?= Url::to(['/house/decoration-company/show-working', 'id' => $info['id']]); ?>">
            <div class="list01">
                <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                <div class="listbg"></div>
                <div class="site-face">
                    <i><img src="http://img.tugou.com/company/face03.png"></i>
                </div>
                <h3><?= $info['owner_name']; ?>的家</h3>
                <b class="site01"><span></span><?= $info['community_name']; ?></b>
            </div>
        </a>
        <div class="list03">
            <div class="listleft left">
                <p><?= $info['status']; ?></p>
                <ul>
                    <li><?= $info['area']; ?>㎡&nbsp;&nbsp;<?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万&nbsp;&nbsp;</li>
                </ul>
            </div>
            <i class="sitei">免费预约看工地</i>
        </div>
    </div>
    <?php } ?>
</div>
