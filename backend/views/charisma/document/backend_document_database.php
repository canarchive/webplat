<?php
$asseturl = Yii::getAlias('@asseturl') . '/backend/document/';
$contents[1] = <<<C_END
	<p>操作记录</p>
    <p>后台会把所有添加、编辑和删除等操作写入日志，可以通过该操作，查看所有后台增删改的操作日志</>
	<p>操作记录的列表页面如下图所示:</p>
    <img src="{$asseturl}backend_manager_log_list.png" /></p>
	<p>点击每条操作记录后面的查看图标，可以查看操作的详情，如下图所示:</p>
    <img src="{$asseturl}backend_manager_log_view.png" /></p>
    
C_END;

$contents[2] = <<<C_END
	<p>这里列出系统所有数据库、每个数据下的所有数据表，每张数据表的字段和字段介绍</p>
	<p>表结构列表页面如下图所示:</p>
    <img src="{$asseturl}backend_database.png" /></p>
	<p>点击数据表列表里的查看按钮，便可以查看数据表的字段和字段注释信息，如下图所示:</p>
    <img src="{$asseturl}backend_database_view.png" /></p>

C_END;

$datas = [
	1 => [
		'title' => '操作日志',
		'content' => $contents[1],
	],
	2 => [
		'title' => '表结构',
		'content' => $contents[2],
	],
];
echo $this->render('_show', ['datas'  => $datas]);
?>
