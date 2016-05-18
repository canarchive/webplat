<?php
use yii\helpers\Url;

$categoryInfos = $this->context->articleCategoryInfos;
$navStr = '';
$navSub = $navTops = [];
foreach ($categoryInfos as $catId => $info) {
	$urlCategory = url::to(['/site/list', 'code' => $info['catdir']]);
	if ($info['parent_id'] == 0) {
	    $navStr .= "<li class='w1'><a href='{$urlCategory}' rel='dropmenu{$catId}'>{$info['name']}</a></li>";
		$navTops[] = $catId;
	} else {
	    $navStrSub = "<li><a href='{$urlCategory}'>{$info['name']}</a></li>";
		if (isset($navSub[$info['parent_id']])) {
			$navSub[$info['parent_id']] .= $navStrSub;
		} else {
			$navSub[$info['parent_id']] = $navStrSub;
		}
	}
}

$this->params['categoryInfos'] = $categoryInfos;
?>
<div id="nav">
    <div class="logo">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/default/images/hunslogo.png">
    </div>
	<ul><?php for ($i = 0; $i < 8; $i++) { echo $navStr;} ?></ul> 
    <ul>
        <div style="clear:both;"></div>
        <?php foreach ($navTops as $navTop) { ?>
		<ul id="dropmenu<?= $navTop; ?>" class="dropMenu" style="background: #fff">
            <?= $navSub[$navTop]; ?>
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
