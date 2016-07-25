<?php 
use yii\helpers\Url;
?>
<div class="redecorate-img line-bg">
    <h3>装修效果图</h3>
    <p>看海量装修美图，为新家找灵感！</p>
    <div class="items padTop15">
        <?php $i = 0; foreach ($infos as $info) { ?>
		<a <?php if ($i == 3) { echo 'class="last"'; } ?> href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>" target="_blank">
		    <img src="<?= $info['thumb']; ?>">
			<div class="transparent-mask"><?= $info['name']; ?></div>
        </a>
        <?php $i++; } ?>
    </div>
</div>
