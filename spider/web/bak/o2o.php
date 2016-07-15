<?php
$infos = [
    'lvyike' => [
            'name' => '旅忆客',
            'url' => 'http://www.lvyike.cn/',
    ],
    'paikedaojia' => [
            'name' => '拍客到家',
            'url' => 'http://www.paikedaojia.com/',
    ],
    'baiyinghui' => [
            'name' => '百影汇',
            'url' => 'http://www.baiyinghui.com/',
    ],
	'qupaia' => [
		'name' => '去拍啊',
		'url' => 'http://www.qupaia.com/',
	],
	'iepai' => [
		'name' => '爱易拍',
		'url' => 'http://www.iepai.com/',
	],
	'yuepaila' => [
		'name' => '约拍啦',
		'url' => 'http://beijing.yuepaila.com/',
	],
	'onlylover' => [
		'name' => 'onlylover',
		'url' => '',
	],
	'suiship' => [
		'name' => '随食拍',
		'url' => 'http://suiship.com/',
	],
	'qunapai' => [
		'name' => '去哪拍',
		'url' => 'http://www.qunapai.com.cn/',
	],
	'jiapai' => [
		'name' => '嫁拍',
		'url' => 'http://www.jiapai.cn/',
	],
	'mooninbox' => [
		'name' => '月亮盒子',
		'url' => 'http://www.mooninbox.com/',
	],
	'nhweb' => [
		'name' => '诺恒',
		'url' => 'http://www.nhwed.com',
	],
	'yueus' => [
		'name' => '约约',
		'url' => 'http://www.yueus.com/',
	],
	'hunban' => [
		'name' => '婚伴-阿里',
		'url' => 'http://hunban.taobao.com/',
	],
	'hunqu' => [
		'name' => '婚趣',
		'url' => 'http://www.hunqu.com',
	],
	'taopaipai' => [
		'name' => '淘拍拍',
		'url' => 'http://www.taopaipai.com',
	],
	'tyyj' => [
		'name' => '童颜有迹',
		'url' => '',
	],
	'xiaoyuanyuepai' => [
		'name' => '校园约拍',
		'url' => 'http://www.xiaoyuanyuepai.com',
	],
	'meike365' => [
		'name' => '美时美刻',
		'url' => 'http://www.meike365.cn/',
	],
];
$str = '';
$i = 1;
foreach ($infos as $info) {
	$str .= "<h3><a href='{$info['url']}' target='_blank'>{$i}-{$info['name']}</a></h3>";
	$i++;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
<h2><a href="http://www.iyiou.com/p/17439" target="_blank">盘点国内十三家摄影O2O企业</a></h2>
<?= $str; ?>
