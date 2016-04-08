<?php
use yii\helpers\Url;

$cssFiles = ['style', 'tugao'];
$jsFiles = [
	'jquery-1.7.2.min', 'tugao', 
	'transport', 'utils', 'json2', 'common'
];
?>
<?php echo $this->render('@website/views/tmall/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<body>
<?php echo $this->render('@website/views/tmall/common/_header'); ?>
<div class="list_banner">
    <div style="background:url(http://www.tugao.com/data/brandlogo/1434588768399169357.jpg) no-repeat center;">
        <div class="list_banner_center">
            <a href="#" target="_blank">
                <img src="http://www.tugao.com/data/brandlogo/1434588768592435909.jpg" border="0">
                <img src="http://www.tugao.com/data/brandlogo/1434588768764459346.jpg" border="0">
                <img src="http://www.tugao.com/data/brandlogo/1434588768282494146.jpg" border="0">
            </a>
        </div>
    </div>
</div>
<div class="tg_center">
    <div class="tg_list_title">	中捷集团旗下专业水槽、花洒、龙头、五金产品供应商！</div>
    <div class="tg_list_content">
        <ul>
            <?php foreach ($infos as $info) { ?>
            <li>
                <div>
				    <a href="<?= Url::to(['goods/show', 'id' => $info['id']]); ?>" target="_blank">
					    <span><?= $info['name']; ?><!--<br/><i>双槽顶配套餐CD1017</i>--></span>
						<img src="<?= $info['main_photo']; ?>" border="0" width="380" height="280" />
                    </a>
                </div>
				<span class="list_price">RMB:&nbsp;<i><?= $info['price']; ?></i></span>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php echo $this->render('@website/views/tmall/common/_side_bar'); ?>
<?php echo $this->render('@website/views/tmall/common/_footer'); ?>
</body>
</html>
