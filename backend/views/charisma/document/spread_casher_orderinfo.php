<?php
$asseturl = Yii::getAlias('@backendurl') . '/document/images/';

$contents[1] = <<<C_END
	<p>配合收银机的订单功能：</p>
	<p>收银机自身的报表功能不能满足业务需求，所以需要技术对收银机的订单进行处理，这里提供的技术支持主要包括，订单录入、订单管理、生成统计报表</p>
C_END;

$contents[2] = <<<C_END
	<p>导入订单：</p>
	<p>每天活动结束后，要把收银机里的流水信息导出成excel文件，导出流程如下</p>
    <p><img src="{$asseturl}casher_pos_2.png" /></p>
	<p>要导出两个报表，一个是"汇总流水"信息，一个是"商品流水"信息</p>
    <p>导出的两个excel文件样本如下所示：<a href="{$asseturl}pos_all_0529.xls">汇总流水文件</a>,商家流水文件：<a href="{$asseturl}pos_business_0529.xls">商家流水文件</a></p>
    <p>将从收银机导出的excel文件导入到系统后台，需要注意的是，两个excel文件导入的顺序不能搞错，另外收银机系统导出的excel文件内容有问题，需要修复一下之后才可以导入到系统后台，或者把导出的excel文件内容复制到一个新建的excel文件</p>
    <p><img src="{$asseturl}spread_orderinfo_import.png" /></p>
C_END;

$contents[3] = <<<C_END
	<p>导出订单信息</p>
	<p>可以在系统后台，把指定的团购会的信息给导出成excel文件，导出的excel文件样本：<a href="{$asseturl}orderinfo_export.xlsx">导出的订单信息文件</a></p>
    <p><img src="{$asseturl}spread_orderinfo_export.png" /></p>

C_END;

$contents[4] = <<<C_END
	<p>订单信息汇总</p>
	<p>后台系统可以对录入的订单信息进行统计分析，生成统计报表，如果需要把报表生成excel文件，可以直接在页面上把信息复制到新建的excel文件即可。</p>
    <p><img src="{$asseturl}spread_orderinfo_statisticlist.png" /></p>
    <p><img src="{$asseturl}spread_orderinfo_statisticshow.png" /></p>
    <p><img src="{$asseturl}spread_orderinfo_statisticshow1.png" /></p>

C_END;


$datas = [
	1 => [
		'title' => '系统后台订单功能模块',
		'content' => $contents[1],
	],
	2 => [
		'title' => '从收银机导入订单',
		'content' => $contents[2],
	],
	3 => [
		'title' => '导出订单信息',
		'content' => $contents[3],
	],
	4 => [
		'title' => '订单统计报表',
		'content' => $contents[4],
	],
];
$style = '';
echo $this->render('_show', ['datas'  => $datas, 'style' => $style]);
?>
