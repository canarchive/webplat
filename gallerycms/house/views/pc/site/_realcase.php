<?php
use yii\helpers\Url;
?>
<div class="scene line-bg">
    <h3>实景作品 所见即所得</h3>
    <p>精选成功案例，快来看看兔狗装出的家！</p>
    <div class="items padTop15">
        <?php foreach ($infos as $info) { ?>
		<a href="<?= Url::to(['/house/realcase/show', 'id' => $info['id']]); ?>" target="_blank">
		    <img src="<?= $info['thumb']; ?>" width="277px" height="279px">
            <div class="recommend clearfix">
                <div class="word fn-left">
				    <p><?= $info['community_name']; ?></p>
					<p><?= $info['house_type']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?= $info['style']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</p>
                </div>
            </div>
        </a>
        <?php } ?>
    </div>
</div>
