<?php
$navInfos = [
	'design' => [
		'icon' => '618',
	    'name' => '免费设计',
		'url' => $city == '' ? 'design.html' : "design-{$type}-{$city}.html",
	],
	'measure' => [
		'icon' => '698',
	    'name' => '免费量房',
		'url' => $city == '' ? 'measure.html' : "measure-{$type}-{$city}.html",
	],
	'price' => [
		'icon' => '67a',
	    'name' => '免费报价',
		'url' => $city == '' ? 'price.html' : "price-{$type}-{$city}.html",
	],
];
?>
<!--tab 切换 start-->
<ul class="tab-switch cGray clearfix">
    <?php foreach ($navInfos as $navKey => $navInfo) { ?>
	<?php if ($navKey == $view) { ?>
		<li class="active"><a href="javascript:void(0);"><span class="icon"><i class="iconfont icone<?= $navInfo['icon']; ?>"></i></span><?= $navInfo['name']; ?></a></li>
    <?php } else { ?>
		<li><a href="<?= $navInfo['url']; ?>"><span class="icon"><i class="iconfont icone<?= $navInfo['icon']; ?>"></i></span><?= $navInfo['name']; ?></a></li>
    <?php } ?>
    <?php } ?>
</ul>
<!--tab 切换 end-->
