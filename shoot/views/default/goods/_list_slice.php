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
<div class="flagship-mobile">
    <a href="http://www.oppo.com/cn/product/p/r9/index.html" class="oppo-tj"
    data-tj="www|link|product|mobile">
        <img src="http://static.oppo.com/archives/201603/20160317030315lhZXCbKFwR4Uja9w.jpg"
        alt="">
    </a>
</div>
