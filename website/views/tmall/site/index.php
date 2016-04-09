<?php
$cssFiles = ['banner', 'tugao'];
$jsFiles = [
	'jquery-1.7.2.min', 'index', 'tugao', 
	'banner', 'transport', 'utils', 'json2', 'common'
];
?>
<?php echo $this->render('@website/views/tmall/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>
<body>
<?php echo $this->render('@website/views/tmall/common/_header'); ?>
<div class="tg_wrapper">
    <div class="tg_center">
        <div class="tg_center_left">
            <i class="SelectBrand"></i>
            <ul class="SelectBrand_list">
                <?php foreach ($infos as $subInfo) { foreach ($subInfo['infos'] as $info) { ?>
				<li li-id="<?= $subInfo['code']; ?>">
				    <a href="<?= $info['name']; ?>" target="_blank">
                        <dl>
                            <dd class="SelectBrand_left">
                                <div class="SelectBrand_left_top">
								    <img src="<?= $info['thumb']; ?>" border="0" />
									<p><?= $info['description']; ?></p>
									<i><b><?= $info['price']; ?></b>元</i>
									<s>市场价：<?= $info['market_price']; ?>元</s>
                                </div>
								<div class="SelectBrand_left_bottom"><?= $info['name']; ?></div>
                            </dd>
                            <dd class="SelectBrand_right">
							    <img src="<?= $info['picture']; ?>" border="0" data-pinit="registered" />
                                <div class="SelectBrand_right_bottom">
                                    累计售出<span style="color:#555">1598</span>件
                                </div>
                                <em>
								    <i class="enter_circle"><?= $subInfo['name']; ?></i>
                                </em>
                            </dd>
                        </dl>
                    </a>
                </li>
                <?php } } ?>
            </ul>
        </div>
        <?php echo $this->render('_index_right'); ?>
    </div>
</div>
<div class="tg_sidebar_left">
    <ul>
        <?php foreach ($infos as $info) { ?>
		<li side-id="<?= $info['code']; ?>">
		    <p><?= $info['name']; ?></p>
        </li>
        <?php } ?>
    </ul>
</div>
<?php echo $this->render('@website/views/tmall/common/_side_bar'); ?>
<?php echo $this->render('@website/views/tmall/common/_footer'); ?>
</body>
</html>
