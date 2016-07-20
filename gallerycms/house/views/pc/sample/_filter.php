<?php
use yii\helpers\Url;
?>
<div class="filter">
    <dl class="filterlist filterlist-first clearfix">
        <dt>户型：</dt>
        <dd>
            <div class="uwbox">
				<?php foreach ($houseTypes as $houseType => $houseTypeName) { ?>
                <span class="uw">
					<a href="<?= Url::to(['/house/sample/filter', 'house_type' => $houseType, 'style' => $currentStyle]); ?>" data-housetype="<?= $houseType; ?>" <?php if ($houseType == $currentHouseType) { echo 'class="on"'; } ?>><?= $houseTypeName; ?></a>
                </span>
				<?php } ?>
            </div>
        </dd>
    </dl>
    <dl class="filterlist clearfix">
        <dt>面积：</dt>
        <dd>
            <div class="uwbox">
				<?php foreach ($styles as $style => $styleName) { ?>
                <span class="uw">
					<a href="<?= Url::to(['/house/sample/filter', 'house_type' => $currentHouseType, 'style' => $style]); ?>" data-style="<?= $houseType; ?>" <?php if ($style == $currentStyle) { echo 'class="on"'; } ?>><?= $styleName; ?></a>
                </span>
				<?php } ?>
            </div>
        </dd>
    </dl>
</div>
