<?php
use yii\helpers\Url;
?>
<div class="list_table">
    <div class="table_one">
        <ul class="list_table_l" id="table_01">
		    <?php foreach ($houseTypes as $houseType => $houseTypeName) { ?>
            <li>
				<a href="<?= Url::to(['/house/mobile-sample/filter', 'house_type' => $houseType, 'style' => $currentStyle]); ?>"><?= $houseTypeName; ?></a>
            </li>
			<?php } ?>
        </ul>
    </div>
    <div class="table_one">
        <ul class="list_table_l" id="table_02">
            <li>
                <a href="http://m.tugou.com/meitu/case-a58/">不限</a></li>
            </li>
		    <?php foreach ($styles as $style => $styleName) { ?>
            <li>
				<a href="<?= Url::to(['/house/mobile-sample/filter', 'house_type' => $currentHouseType, 'style' => $style]); ?>"><?= $styleName; ?></a>
            </li>
			<?php } ?>
        </ul>
    </div>
    <!--<div class="table_one">
        <ul class="list_table_l" id="table_03">
            <li>
                <a href="http://m.tugou.com/meitu/case-a58/">不限</a></li>
            </li>
		    <?php foreach ($houseTypes as $houseType => $houseTypeName) { ?>
            <li>
				<a href="<?= Url::to(['/house/mobile-sample/filter', 'house_type' => $houseType, 'style' => $currentStyle]); ?>"><?= $houseTypeName; ?></a>
            </li>
			<?php } ?>
        </ul>
    </div>-->
    <!--<div class="table_one">
        <ul class="list_table_l" id="table_04">
            <li>
                <a href="http://m.tugou.com/meitu/case-a58/">不限</a></li>
            </li>
		    <?php foreach ($houseTypes as $houseType => $houseTypeName) { ?>
            <li>
				<a href="<?= Url::to(['/house/mobile-sample/filter', 'house_type' => $houseType, 'style' => $currentStyle]); ?>"><?= $houseTypeName; ?></a>
            </li>
			<?php } ?>
        </ul>
    </div>-->
</div>
