<?php 
use yii\helpers\Url;
?>
<div class="redecorate-img line-bg">
    <h3>装修效果图</h3>
    <p>海量装修美图，寻找装修灵感</p>
    <div class="items padTop15">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 7) { break; }?>
		<a <?php if ($i % 4 == 3) { echo 'class="last"'; } ?> href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>" target="_blank">
		    <img src="<?= $info['thumb']; ?>" width="280px" height="211px">
			<div class="transparent-mask"><?= $info['name']; ?></div>
        </a>
        <?php $i++; } ?>
    </div>
</div>
