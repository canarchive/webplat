<?php
use yii\helpers\Url;
?>
<div class="list_table">
    <?php $i = 1; foreach ($houseSortInfos as $sortKey => $sortInfo) { ?>
    <div class="table_one">
		<ul class="list_table_l" id="table_0<?= $i; ?>">
            <li>
			    <a href="<?= Url::to(['/house/mobile-sample/index', 'page' => 1, 'tag' => $model->createTag($tagInfos, [$sortKey => ''])]); ?>">不限</a></li>
            </li>
			<?php foreach ($sortInfo['values'] as $key => $value) { $tag = $model->createTag($tagInfos, [$sortKey => $key]); ?>
            <li>
				<a href="<?= Url::to(['/house/mobile-sample/index', 'page' => 1, 'tag' => $tag]); ?>"><?= $value; ?></a>
            </li>
			<?php } ?>
        </ul>
    </div>
    <?php $i++; } ?>
</div>
