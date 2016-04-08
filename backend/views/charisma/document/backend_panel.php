<?php
$asseturl = Yii::getAlias('@asseturl') . '/backend/document/';
$contents[1] = <<<C_END
	<ul>
		<li><span>必须为管理员才能登陆后台，查看信息</span></li>
		<li><span>管理员需要在后台添加生成</span></li>
		<li><span>登陆后台后的界面如下图所示：另外需要说明的是，管理员所能看到的后台菜单跟管理员所属的角色有个，不同的角色拥有不同的操作权限</span></li>
        <img src="{$asseturl}backend_index.png" /></p>
	</ul>
    <ul>
		<li><span>后台操作分三级，登陆后台后，顶部显示的为一级操作菜单，如上图的“我的面板”，“管理设置”等为一级菜单</span></li>
		<li><span>左侧显示的非A标签的菜单为二级操作菜单，如上图的“管理员信息”，“系统文档”等为二级菜单</span></li>
        <li><span>一级菜单和二级菜单是为了组织后台操作而设置的，本身不会执行任何实际操作</span></li>
		<li><span>左侧显示的A标签的菜单为三级级操作菜单，如上图的“修改个人信息”，“文档列表”等为三级菜单</span></li>
		<li><span>三级菜单通常为查看列表操作，如下图的“管理员管理”操作和对应的操作页面</span></li>
        <img src="{$asseturl}backend_manager_listinfo.png" /></p>
		<li><span>四级操作如上图的“添加管理员”操作和每条记录后面对应的三个操作，“小垃圾桶”代表的删除操作，“笔”代表的编辑操作，“眼睛”代码的查看操作</span></li>
    </ul>
C_END;

$contents[2] = <<<C_END
	<p>修改个人信息，是每个管理员的基本操作之一</p>
    <p>可以通过该操作编辑管理员的基本信息</p>
	<p>修改个人信息的操作界面如下图所示:</p>
    <img src="{$asseturl}backend_manager_edit_info.png" /></p>
C_END;

$contents[3] = <<<C_END
	<p>修改个人密码，是每个管理员的基本操作之一</p>
	<p>管理员的原始密码是由拥有添加和编辑管理员权限的管理员在后台设置的，管理员使用原始密码登陆后，必须至少更改一次密码才可以做其他操作。</p>
	<p>修改个人密码的操作界面如下图所示:（修改密码需要输入正确的旧密码，并且新密码不能跟旧密码相同）</p>
    <img src="{$asseturl}backend_manager_edit_password.png" /></p>
C_END;

$contents[4] = <<<C_END
	<p>操作记录，是每个管理员的基本操作之一</p>
    <p>后台会把所有添加、编辑和删除等操作写入日志，管理员可以通过该操作查看自己所有的操作日志</>
	<p>操作记录的列表页面如下图所示:</p>
    <img src="{$asseturl}backend_manager_loglist.png" /></p>
	<p>点击每条操作记录后面的查看图标，可以查看操作的详情，如下图所示:</p>
    <img src="{$asseturl}backend_manager_logview.png" /></p>
    
C_END;

$contents[5] = <<<C_END
	<p>文档列表，是每个管理员的基本操作之一</p>
	<p>文档列表是后台各个操作的详细说明。强烈建议执行操作前，先看一下这里的文档，另外非常期望提供对文档的改进意见和优化建议。</p>
	<p>文档列表页面如下图所示:</p>
    <img src="{$asseturl}backend_document_list.png" /></p>
	<p>点击列表里的具体文档标签后，便可以查看文档的详情，如下图所示:</p>
    <img src="{$asseturl}backend_document_view.png" /></p>

C_END;

$datas = [
	1 => [
		'title' => '后台概述',
		'content' => $contents[1],
	],
	2 => [
		'title' => '修改个人信息',
		'content' => $contents[2],
	],
	3 => [
		'title' => '修改个人密码',
		'content' => $contents[3],
	],
	4 => [
		'title' => '操作记录',
		'content' => $contents[4],
	],
	5 => [
		'title' => '文档列表',
		'content' => $contents[5],
	],
];
echo $this->render('_show', ['datas'  => $datas]);
?>
