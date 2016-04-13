<?php
$flowInfos = [
	[
		'name' => '活动介绍', 
		'description' => '',
		'picture' => 'flow_1',
	],
	/*[
		'name' => '活动攻略', 
		'description' => '玩转全攻略',
		'picture' => 'flow_2',
	],*/
	[
		'name' => '活动细则', 
		'description' => '玩转全攻略',
		'picture' => 'flow_3',
	],
	[
		'name' => '活动承诺', 
		'description' => '玩转全攻略',
		'picture' => 'flow_4',
	],
];
?>
<div id="item1" class="item_box">
    <div class="J_tg_item_con">
        <ul>
			<?php $i = 0; foreach ($flowInfos as $info) { ?>
            <li>
			    <div class="time_point_box <?php if ($i == 0) { echo "time_cur"; } ?>">
                    <div class="ballon_box">
                        <span></span>
						<p class="proc_name"><?= $info['name']; ?></p>
						<!--<p class="description"><?= $info['description']; ?></p>-->
                    </div>
					<div class="proc_name_ini"><?= $info['name']; ?></div>
                    <b class="time_point"></b>
                </div>
                <em></em>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="ban_btm_mask"></div>
    <div class="J_tg_scroll_ban">
        <ul>
            <?php foreach ($flowInfos as $info) { ?>
            <li>
                <a href="javascript:;" tjjj="dzbm">
				    <img src="<?= Yii::getAlias('@asseturl') . "/spread/groupon/images/{$info['picture']}.jpg"; ?>" alt="" />
                </a>
            </li>
            <?php } ?>
        </ul>
        <ol></ol>
        <a href="javascript:;" class="J_tg_prev">前一张</a>
        <a href="javascript:;" class="J_tg_next">后一张</a>
    </div>
</div>
