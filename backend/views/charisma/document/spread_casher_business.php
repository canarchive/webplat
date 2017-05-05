<?php
$asseturl = Yii::getAlias('@backendurl') . '/document/images/';

$contents[1] = <<<C_END
	<p>收银机功能概述：</p>
	<ul>
		<li><span>团购会现场收款引入收银机配合收银</span></li>
		<li><span>团购会现场基于现在的四联单收银流程不变，仅仅是在收银完成之后，把订单信息录入到收银机系统里</span></li>
		<li><span>为了让收银机使用更方便，技术上做了相关的支持操作，技术上的支持主要有一下几点：</span></li>
	</ul>
C_END;

$contents[2] = <<<C_END
	<p>商家四联单：</p>
	<p>功能描述： 每场团购会开始之前，公司会给每个参展商家发放若干四联单号；一张四联单对应一个有效订单。在收银机里，每个四联单号对应一个商品（收银机是针对商品收银的）<br />
    由于每场团购会发放的四联单号数量较多，5月28、29号那次有1千多个四联单，6月9、10号有四千多个四联单，为方便把这些信息导入收银机，技术上开发了“商家四联单号管理功能”；
    </p>
    <p><img src="{$asseturl}spread_business_order_list.png" /></p>
C_END;

$contents[3] = <<<C_END
	<p>手动录入商家四联单号段信息：</p>
	<p>功能描述：临时添加或数量不多的时候，可以手动在后台录入四联单号段信息，除了添加操作之外，还可以对信息进行编辑和删除操作</p>
    <p><img src="{$asseturl}spread_business_order_add.png" /></p>

C_END;

$contents[4] = <<<C_END
	<p>批量导入商家四联单号段信息：</p>
	<p>功能描述：批量导入事先准备好的商家四联单号段信息导入，需要说明的是，导入的文件需要时excel文件，另外文件里面的内容格式是固定的，excel文件的内容格式参照下面的模板文件，之前出现过号段信息错误的手误，所以导入前要做好信息准确性的检查，<a href="{$asseturl}business_order.xlsx">excel商家四联单号段模板文件</a></p>
    <p><img src="{$asseturl}spread_business_order_import.png" /></p>

C_END;

$contents[5] = <<<C_END
	<p>导出单个商家四联单号段信息：</p>
	<p>功能描述：针对只需导出单个或少数几个的商家四联单信息的，可以通过导出单个号段信息的操作了实现，如下图就只把“檀香山”商家分配的四联单信息给导出来</p>
    <p><img src="{$asseturl}spread_business_order_export_single.png" /></p>

	<p>批量导出商家四联单号段信息：</p>
	<p>功能描述：批量导出，必须指定团购会，批量导出会把指定的团购会的所有四联单信息给导出来，如下图所示，将会把6月9、10号的团购会所有分配到的四联单信息给导出来，导出的四联单文件是一个excel文件，文件内容可以参考<a href="{$asseturl}business_order_export.xls">导出的商家四联单信息样本文件</a>。导出的文件是为了收银机录入商品使用的，收银机里的各个操作这里不做介绍，请咨询产品相关人员</p>
    <p><img src="{$asseturl}spread_business_order_export.png" /></p>
C_END;

$datas = [
	1 => [
		'title' => '概述',
		'content' => $contents[1],
	],
	2 => [
		'title' => '商家订单四联单的管理',
		'content' => $contents[2],
	],
	3 => [
		'title' => '添加四联单',
		'content' => $contents[3],
	],
	4 => [
		'title' => '导入',
		'content' => $contents[4],
	],
	5 => [
		'title' => '导出四联单',
		'content' => $contents[5],
	],
];
$style = '';
echo $this->render('_show', ['datas'  => $datas, 'style' => $style]);
?>
