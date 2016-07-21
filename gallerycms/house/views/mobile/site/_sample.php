<?php
use yii\helpers\Url;
?>
<div class="case">
    <div class="case-title">装修案例
	    <a href="<?= Url::to(['/house/sample/index']); ?>">更多</a>
    </div>
    <div class="cast-list">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { break; } ?>
		<a class="cast-<?php if ($i % 2 == 1) { echo 'right'; } else { echo 'left'; } ?>" href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>">
			<img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
            <div class="cast-word">
			    <p><?= $info['name']; ?></p>
				<!--<p><?= $info['name']; ?> <?= $info['style']; ?></p>-->
            </div>
        </a>
        <?php $i++; } ?>
    </div>
</div>
