<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

	'currentTime' => time(),
	'baseTitle' => 'website',
	'smsSignName' => '【团购会】',
	'bankInfos' => require(__DIR__ . '/bank.php'),
	'genderInfos' => ['0' => '保密', '1' => '男', '2' => '女'],
<<<<<<< HEAD
	'siteInfos' => require(__DIR__ . '/site-infos.php'),

	'seoTitle' => '摄影就上摄到家',
	'seoKeyword' => '摄影o2o,摄影,人像,静物,产品,婚纱',
	'seoDescription' => '摄到家是一个提供上门摄影的全新摄影平台，简单、快捷、方便',
	'siteCopyRightInfo' => '© 2005 - 2016 北京市诚聚互联科技有限公司 版权所有',
	'siteIcpInfo' => '网站备案号 京ICP备15002642号-3',
	'siteHotline' => '400-6218-718',

	'seoTitle' => '团家汇装修网_免费提供新房装修设计_二手房装修报价改造-老房婚房量房等装修服务',
	'seoKeyword' => '装修设计，免费量房，装修报价，新房装修，二手房装修装修，老房装修，婚房装修',
	'seoDescription' => '【团家汇装修网】中国家装首选平台，并免费提供三家装修公司供装修业主提供专业上门量房，免费设计，免费报价服务，主营：新房装修，二手房装修装修，老房装修，婚房装修等装修设计一站式服务。',
	'siteCopyRightInfo' => '© 2016 - 2020 北京市诚聚互联科技有限公司 版权所有',
	'siteIcpInfo' => '网站备案号 京ICP备15002642号-3',
	'siteHotline' => '400-6218-718',	
	'siteJoinusTel' => '400-6218-719',	
	'siteName' => '团家汇',
	'siteNameBase' => '团家汇',

	// 使用了收银机的团购会
	'grouponInfos' => [
		'2474' => [
			'groupon_id' => '2474',
			'groupon_name' => '北京-5.28-2.29团购会',
			'days' => [1 => '2016-05-28', 2 => '2016-05-29'],
		],
		'2487' => [
			'groupon_id' => '2487',
		    'groupon_name' => '北京-6.9-6.10端午节超大型装修建材家具博览会',
			'days' => [1 => '2016-06-09', 2 => '2016-06-10'],
		],
		'2493' => [
			'groupon_id' => '2493',
		    'groupon_name' => '北京-7-03装修建材家具精品团购',
			'days' => [1 => '2016-07-03'],
		],
	],
=======

	'seoTitle' => '免费提供新房装修设计_二手房装修报价改造_老房婚房量房等装修服务-【55jia装修网】',
	'seoKeyword' => '装修设计，免费量房，装修报价，新房装修，二手房装修装修，老房装修，婚房装修',
	'seoDescription' => '【55jia装修网】中国家装首选平台，并免费提供三家装修公司供装修业主提供专业上门量房，免费设计，免费报价服务，主营：新房装修，二手房装修装修，老房装修，婚房装修等装修设计一站式服务。',
	'siteCopyRightInfo' => '© 2016 - 2020 北京市诚创互联科技有限公司 版权所有',
	//'siteIcpInfo' => '网站备案号 京ICP备15002642号-3',
	'siteIcpInfo' => '网站备案号 京ICP备16042989号-1',
	'siteHotline' => '400-6218-718',	
	'siteAddressInfo' => '北京市昌平区科星西路106号2号楼407室',	
	'siteJoinusTel' => '18601626776',	
	'siteCustomServiceQQ' => '1561915324',	
	'siteName' => '55jia装修网',
	'siteNameBase' => '55jia',
>>>>>>> web-house
];
