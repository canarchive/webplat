<?php
use yii\helpers\Url;
?>
<div class="filter">
    <?php foreach ($houseSortInfos as $sortKey => $sortInfo) { ?>
    <dl class="filterlist filterlist-first clearfix">
		<dt><?= $sortInfo['name']; ?>：</dt>
        <dd>
            <div class="uwbox">
				<?php foreach ($sortInfo['values'] as $key => $value) { $tag = $model->createTag($tagInfos, [$sortKey => $key]); ?>
                <span class="uw">
					<a href="<?= Url::to(['/house/sample/index', 'page' => 1, 'tag' => $tag]); ?>" data-<?= str_replace('_', '', $sortKey); ?>="<?= $key; ?>" <?php if ($key == $tagInfos[$sortKey]) { echo 'class="on"'; } ?>><?= $value; ?></a>
                </span>
				<?php } ?>
            </div>
        </dd>
    </dl>
    <?php } ?>
</div>
