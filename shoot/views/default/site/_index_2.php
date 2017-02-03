    <section class="brick">
        <div class="wrapper">
            <div class="g g-wrapper-l">
                <?php foreach ($infos as $info) { ?>
                <div class="gi lap-one-half">
                    <div class='feature-product'>
					    <a href='<?= $info['url']; ?>' target='_blank'>
						    <img alt='<?= $info['name']; ?>' title="<?= $info['name']; ?>" class='feature-product-image' src='<?= $info['picture']; ?>'>
                            <!--<div class='feature-product-content'>
							    <h2 class='feature-product-heading'><?= $info['name']; ?></h2>
                                <p class='feature-product-description'>
								    <strong><?= $info['name_ext']; ?></strong>
                                </p>
                            </div>-->
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
