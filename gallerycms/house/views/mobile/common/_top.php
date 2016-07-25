<?php
use yii\helpers\Url;
?>
<div class="top toptitle">
    <a href="javascript:history.go(-1);" class="return"></a><?= $title; ?>
    <a href="<?= Url::to(['/site/select-city']); ?>">
	    <div class="position"><?= Yii::$app->params['currentCompany']['name']; ?></div>
    </a>
</div>
