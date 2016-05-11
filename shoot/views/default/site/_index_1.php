    <section class='full-carousel slick-dot-circle'>
        <?php foreach ($infos as $info) { ?>
        <div class='hero slick-slide'>
            <div class='hero-image center'>
			    <a href='<?= $info['url']; ?>' target='_blank' title='<?= $info['name']; ?>'>
                    <picture>
                        <!--[if IE 9]>
                            <video style="display: none;">
                            <![endif]-->
							<source media='(min-width: 990px)' srcset='<?= $info['picture']; ?>' />
							<source media='(min-width: 750px)' srcset='<?= $info['picture_ext']; ?>' />
							<source media='(min-width: 300px)' srcset='<?= $info['picture_mobile']; ?>' />
                            <!--[if IE 9]>
                            </video>
                        <![endif]-->
						<img alt='<?= $info['name']; ?>' title='<?= $info['name']; ?>' src='<?= $info['picture_mobile']; ?>' srcset='<?= $info['picture']; ?>'>
                    </picture>
                </a>
            </div>
        </div>
        <?php } ?>
    </section>
