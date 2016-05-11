<div class="oppo-feature">
    <div class="wrapper">
        <div class="desk-title">精美样片</div>
        <div class="feature-item">
            <?php $i = 0; foreach ($infos as $info) { $classElem = $i % 2 == 0 ? 'left' : 'right';?>
	        <div class="pull-<?= $classElem; ?>">
			    <a href="<?= $info['url']; ?>" target="_blank" class="oppo-tj">
				    <img src="<?= $info['picture']; ?>">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
