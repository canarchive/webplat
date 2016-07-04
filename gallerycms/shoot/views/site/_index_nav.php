<?php
use yii\helpers\Url;

$levelInfos = $this->context->articleCategoryLevelInfos;

$this->params['levelInfos'] = $levelInfos;
?>
<div id="nav">
    <div class="logo">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/default/images/hunslogo.png">
    </div>
	<ul>
	<?php for ($i = 0; $i < 8; $i++) { foreach ($levelInfos[0] as $catId => $info) { ?>
	    <li class='w1'><a href='<?= $info['url']; ?>' rel='dropmenu<?= $catId; ?>'><?= $info['name']; ?></a></li>
    <?php } } ?>
    </ul> 
    <ul>
        <div style="clear:both;"></div>
        <?php foreach ($levelInfos as $parentId => $infos) { ?>
		<ul id="dropmenu<?= $parentId; ?>" class="dropMenu" style="background: #fff">
            <?php foreach ($infos as $catId => $info) { ?>
			    <li><a href='<?= $info['url']; ?>'><?= $info['name']; ?></a></li>
            <?php } ?>
        </ul>
        <?php } ?>
    </ul>
</div>
<script>
    var timer = 0;
    var $ = window.jQuery;
    $('.w1 a').hover(function() {
        var self = $(this),
        target = self.attr('rel');
        $('.dropMenu').hide();
        $('.w1').removeClass('cur');
        $(this).parent().addClass('cur');
        $('#' + target).stop().slideDown('slow');
        clearTimeout(timer);
    },
    function() {
        var self = $(this);
        timer = setTimeout(function() {
            var target = self.attr('rel');
            $('.dropMenu').hide();
            $('#' + target).stop().slideUp();
            self.parent().removeClass('cur');
        },
        500);
    });
    $('.dropMenu').hover(function() {
        clearTimeout(timer);
    },
    function() {
        $(this).stop().slideUp();
        $('.w1 a[rel=' + $(this).attr('id') + ']').parent().removeClass('cur');
    });
</script>
