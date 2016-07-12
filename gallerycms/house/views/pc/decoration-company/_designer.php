<div class="pd-designer active" id="content-designer">
    <div class="pd-ds-container">
        <?php foreach ($infos as $info) { ?>
        <div class="pd-ds-case">
            <div class="designer-info">
			    <img alt="<?= $info['name']; ?>" src="<?= $info['photo']; ?>" class="designer-header">
                <div class="designer-basic">
                    <p>
                        <span>设&nbsp;计&nbsp;师:</span>
						<a role="name"><?= $info['name']; ?></a>
                    </p>
                    <p>
                        <span>从业年限:</span>
						<a role="experience"><?= $info['aptitude']; ?></a>
                    </p>
                    <p>
                        <span>擅长风格:</span>
						<a role="favor"><?= $info['record']; ?></a>
                    </p>
                </div>
            </div>
            <div class="design-work"></div>
            <p class="free-design"><a class="pd-btn free-order-pop">免费为我做设计</a></p>
        </div>
        <?php } ?>
    </div>
</div>
