<?php
$levelInfos = $this->context->articleCategoryLevelInfos;
?>
<div class="ladytop">
    <div class="nav">
        <div class="left">
		    <a href="<?= Yii::getAlias('@gallerycmsurl'); ?>">
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/default/images/hunshang.png" alt="wed114婚尚">
            </a>
        </div>
        <div class="right">
            <div class="box">
            	<?php for ($i = 0; $i < 6; $i++) { foreach ($levelInfos[0] as $catId => $info) { ?>
            	    <a href='<?= $info['url']; ?>' rel='dropmenu<?= $catId; ?>'><?= $info['name']; ?></a>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>
<div class="hotmenu">
    <div class="con">
        相关栏目：
        <?php foreach ($levelInfos[1] as $catId => $info) { ?>
		<a href='<?= $info['url']; ?>'><?= $info['name']; ?></a>
        <?php } ?>
    </div>
</div>
<!--顶部通栏-->
<div class="position">
    <a href='<?= Yii::getAlias('@gallerycmsurl'); ?>'>主页</a> >
    <a href='/jiehun/meirong/'>美容</a> >
</div>
