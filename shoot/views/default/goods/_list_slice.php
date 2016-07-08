<!-- PC端featured图 -->
<div class="main-flagship">
    <div class="wrapper">
        <div class="pull-left">
            <?php $i = 0; foreach ($infos['list_left'] as $info) { if ($i > 2) { break; } $mark = $i == 0 ? 'up' : 'down'; ?>
			<a class="left-<?= $mark; ?> hover-box oppo-tj" href="<?= $info['url']; ?>" target="_blank">
				<img src="<?= $info['picture']; ?>" class="left-<?= $mark; ?>-img hover-animation">
            </a>
            <?php $i++; } ?>
        </div>
        <div class="pull-right">
			<?php $info = isset($infos['list_right'][0]) ? $infos['list_right'][0] : []; if (!empty($info)) { ?>
			<a class="whole-right hover-box oppo-tj" href="<?= $info['url']; ?>" target="_blank">
			    <img src="<?= $info['picture']; ?>" class="whole-right-img hover-animation">
            </a>
            <?php } ?>
        </div>
    </div>
</div>
<!-- 移动端featured图 -->
<?php $info = isset($infos['list_mobile'][0]) ? $infos['list_mobile'][0] : []; if (!empty($info)) { ?>
<div class="flagship-mobile">
	<a class="oppo-tj" href="<?= $info['url']; ?>" target="_blank">
	    <img src="<?= $info['picture']; ?>" >
    </a>
</div>
<?php } ?>
