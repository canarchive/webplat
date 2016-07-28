<?php
use yii\helpers\Url;
?>
<div class="case">
    <div class="case-title">装修实景
	    <a href="<?= Url::to(['/house/mobile-realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">更多</a>
    </div>
    <div class="cast-list">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { break; } ?>
		<a class="cast-<?php if ($i % 2 == 1) { echo 'right'; } else { echo 'left'; } ?>" href="<?= Url::to(['/house/mobile-realcase/show', 'id' => $info['id']]); ?>">
			<img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
            <div class="cast-word">
			    <p><?= $info['community_name']; ?></p>
				<p><?= $info['house_type']; ?> <?= $info['style']; ?></p>
            </div>
        </a>
        <?php $i++; } ?>
    </div>
</div>
<!--<div class="case">
    <div class="type-list">
        <a href="http://m.tugou.com/meitu/case-a56/">一居室</a>
        <a href="http://m.tugou.com/meitu/case-a57/">二居室</a>
        <a href="http://m.tugou.com/meitu/case-a58/">三居室</a>
        <a href="http://m.tugou.com/meitu/case-a60/">复式</a>
        <a href="http://m.tugou.com/meitu/case-c66/">简约</a>
        <a href="http://m.tugou.com/meitu/case-c73/">混搭</a>
        <a href="http://m.tugou.com/meitu/case-c69/">中式</a>
		<a href="http://m.tugou.com/meitu/case-c72/">美式</a>
    </div>
</div>-->
