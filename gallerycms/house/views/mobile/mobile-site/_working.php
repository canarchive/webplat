<?php
use yii\helpers\Url;
?>
<div class="case">
    <div class="case-title">装修工地</div>
    <div class="cast-list">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { break; } ?>
		<a class="cast-<?php if ($i % 2 == 1) { echo 'right'; } else { echo 'left'; } ?>" href="<?= Url::to(['/house/mobile-decoration-company/show-working', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
			<img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
            <div class="cast-word">
			    <p><?= $info['owner_name']; ?></p>
				<p><?= $info['community_name']; ?> <?= $info['style']; ?></p>
            </div>
        </a>
        <?php $i++; } ?>
    </div>
</div>
