<section class="brick-m slab-light">
    <div class='list-access-icon'>
        <div class='wrapper g'>
            <?php foreach ($infos as $info) { ?>
            <div class='access-icon gi lap-one-quarter one-half'>
				    <a href='<?= $info['url']; ?>' target="_blank">
					    <img alt='<?= $info['name']; ?>' title='<?= $info['name']; ?>' src='<?= $info['picture']; ?>'>
                    <div class='content'>
                        <!--<h3 class='heading'></h3>-->
                        <div class='badge-icon xl'>
							<?= $info['name']; ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
