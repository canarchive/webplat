<?php
$navInfos = [
	'design' => [
		'icon' => '618',
	    'name' => '免费设计',
		'url' => $info['city'] == 'beijing' ? 'design.html' : "design-{$info['type']}-{$info['city']}.html",
	],
	'measure' => [
		'icon' => '698',
	    'name' => '免费量房',
		'url' => $info['city'] == 'beijing' ? 'measure.html' : "measure-{$info['type']}-{$info['city']}.html",
	],
	'price' => [
		'icon' => '67a',
	    'name' => '免费报价',
		'url' => $info['city'] == 'beijing' ? 'price.html' : "price-{$info['type']}-{$info['city']}.html",
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
