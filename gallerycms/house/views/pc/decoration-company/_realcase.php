<?php
use yii\helpers\Url;
?>
<div class="pd-realcase active" id="content-realcase">
    <div class="pd-rc-case">
        <div class="pd-showcase">
            <?php foreach ($infos as $info) { ?>
            <div class="case-item">
                <figure>
				    <a data-url="<?= Url::to(['/house/realcase/show', 'id' => $info['id']]); ?>">
						<img alt="<?= $info['name']; ?>" src="<?= $info['thumb']; ?>">
                    </a>
					<p class="desc"><?= $info['community_name']; ?></p>
                </figure>
                <p class="case-info">
                    <img alt="装修管家" src="http://pic.tugou.com/weixin/userheader.png" class="designer-head">
					<a role="construction"><?= $info['house_type']; ?></a>
					<a role="style"><?= $info['style']; ?></a>
					<a role="detail"><?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</a>
                </p>
            </div>
            <?php } ?>
        </div>
        <div class="page">
            <p></p>
        </div>
    </div>
</div>
