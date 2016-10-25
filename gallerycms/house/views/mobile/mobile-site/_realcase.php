<?php
use yii\helpers\Url;
?>
<div class="case">
    <div class="case-title">装修实景
	    <a href="<?= Url::to(['/house/mobile-realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">更多</a>
    </div>
    <div class="cast-list">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { break; } ?>
		<a class="cast-<?php if ($i % 2 == 1) { echo 'right'; } else { echo 'left'; } ?>" href="<?= Url::to(['/house/mobile-realcase/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
			<img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
            <div class="cast-word">
			    <p><?= $info['ownerInfo']['brief']; ?></p>
				<!--<p><?= $info['ownerInfo']['house_type']; ?> <?= $info['ownerInfo']['style']; ?></p>-->
            </div>
        </a>
        <?php $i++; } ?>
    </div>
</div>
