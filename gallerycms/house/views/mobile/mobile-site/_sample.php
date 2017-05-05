<?php
use yii\helpers\Url;
?>
<div class="case">
    <div class="case-title">装修案例
	    <a href="<?= Url::to(['/house/mobile-sample/index', 'page' => 1, 'tag' => '']); ?>">更多</a>
    </div>
    <div class="cast-list">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { break; } ?>
		<a class="cast-<?php if ($i % 2 == 1) { echo 'right'; } else { echo 'left'; } ?>" href="<?= Url::to(['/house/mobile-sample/show', 'id' => $info['id']]); ?>">
			<img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
            <div class="cast-word">
			    <p><?= $info['name']; ?></p>
				<!--<p><?= $info['name']; ?> <?= $info['style']; ?></p>-->
            </div>
        </a>
        <?php $i++; } ?>
    </div>
</div>
<!--<div class="case">
    <div class="type-list">
        <a href="/meitu/case-a56/">一居室</a>
        <a href="/meitu/case-a57/">二居室</a>
        <a href="/meitu/case-a58/">三居室</a>
        <a href="/meitu/case-a60/">复式</a>
        <a href="/meitu/case-c66/">简约</a>
        <a href="/meitu/case-c73/">混搭</a>
        <a href="/meitu/case-c69/">中式</a>
		<a href="/meitu/case-c72/">美式</a>
    </div>
</div>-->
