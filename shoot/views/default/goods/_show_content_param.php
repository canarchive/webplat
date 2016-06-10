<div class="product-detail-tab y-tab-frame tab-item-active" id="product-detail-params">
<section>
    <?php $i = 0; foreach ($sampleInfos as $picture) { ?>
    <p style="text-align:center;">
        <picture>
            <!--[if IE 9]>
            <video style="display: none;">
            <![endif]-->
				<source media='(min-width: 990px)' srcset='<?= $picture['url']; ?>'>
				<source media='(min-width: 300px)' srcset='<?= $picture['url']; ?>'>
			<!--[if IE 9]>
            </video>
            <![endif]-->
			<img src='<?= $picture['url']; ?>' srcset='<?= $picture['url']; ?>' alt=''>
        </picture>
    </p>
    <?php } ?>
</section>
</div>
