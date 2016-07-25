<?php
use yii\helpers\Url;
?>
<!-- 实景作品 -->
<div class="case " id="content-realcase">
    <?php foreach ($infos as $info) { ?>
    <div class="list">
        <a href="<?= Url::to(['/house/realcase/show', 'id' => $info['id']]); ?>">
            <div class="list01">
                <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                <div class="listbg"></div>
                <p><?= $info['house_type']; ?>&nbsp;&nbsp;<?= $info['style']; ?>&nbsp;&nbsp;<?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</p>
                <b class="site01"><span></span><?= $info['community_name']; ?></b>
            </div>
            <div class="list02">
                <a class="left">
                    <b><img src="http://pic.tugou.com/crm_admin_avator/1456819470_1498409.jpeg" alt="小西"></b>
					<span>小西</span>装修管家
                </a>
				<i class="casei">免费为我做设计</i>
            </div>
        </a>
    </div>
    <?php } ?>
</div>
