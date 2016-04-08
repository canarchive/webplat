<?php
$asseturl = Yii::getAlias('@asseturl') . '/backend/document/';
$contents[1] = <<<C_END
	<p>除了登录和退出，所有的后台操作均记录在后台菜单数据表中</p>
	<p>后台菜单以树状的结构呈现，菜单列表如下图所示:</p>
    <p><img src="{$asseturl}backend_menu_list.png" /></p>
	<p>树状结构的菜单中，规定一级菜单和二级菜单不对应实际的后台操作，只作为菜单分类，三级菜单对应具体的后台操作，如查看管理员列表，增删改管理员等。</p>
	<p>增加和编辑菜单操作如下图所示:</p>
    <p><img src="{$asseturl}backend_menu_add.png" /></p>
	<p>菜单各个属性	<p>图中的数字是菜单的级别</p>
	<p class="subp">
		<b>名称</b> ：菜单名称<br>
		<b>代码</b> ：唯一标示一个菜单，不能重复，菜单的层次关系基于菜单代码来定义<br>
		<b>父菜单</b> ：菜单的父级菜单，后台各个菜单将基于菜单的层次关系来展示各个菜单<br>
		<b>模块</b> ：整个系统按应用划分为不同的应用模块，后台也将按应用来部署代码，后台各个模块的概念在“简介”里已经做了简单的介绍<br>
		<b>控制器</b> ：操作对应的控制器文件，如管理员列表对应的控制器是manager，意味着这个操作的代码在对应的ManagerController控制器里。<br>
		<b>方法</b> ：操作具体由哪个函数来执行，如管理员列表的方法是listinfo，意味着这个操作由ManagerController控制器的actionListinfo方法来具体执行；<br>
        <b>排序</b>：后台操作，首先基于树状结构组织排序，然后各个操作按菜单排序值的倒序从左到右，从上到下排列<br/>
        <b>显示位置</b>：标示菜单在后台的那个位置显示<br/>
        <b>附加参数</b>：备用，暂时没有使用该字段<br/>
    </p>
C_END;

$contents[2] = <<<C_END
	<ul>
		<li><span>管理员的权限是基于角色分配的</span></li>
		<li><span>角色列表如下图所示：</span></li>
        <p><img src="{$asseturl}backend_role_list.png" /></p>
		<li><span>添加和编辑角色如下图所示：</span></li>
        <p><img src="{$asseturl}backend_role_add.png" /></p>
        <li><span>角色的规则属性暂时不适用，可以忽略该字段</span></li>
		<li><span>角色的增删改查较为简单，这个不做过多的介绍</span></li>
	</ul>
    <ul>
		<li><span>角色重要的操作是授权可以执行的菜单，角色的授权操作如下图所示：</span></li>
        <p><img src="{$asseturl}backend_role_auth.png" /></p>
		<li><span>授权是针对后台的菜单操作来说的，可以为指定角色分配部分或全部的后台菜单操作。分配到的操作，拥有该角色的管理员将可以执行对应的后台操作，否则，无法执行对应的后台操作</span></li>
		<li><span>如，对角色“超级管理员”只分配了修改密码的操作，则拥有“超级管理员”角色的管理员将只能执行“修改密码”这个操作，而无法执行其他操作。</span></li>
    </ul>
C_END;

$contents[3] = <<<C_END
	<p>管理员是重要的后台操作之一</p>
	<p>所有管理员必须在后台，由拥有管理权限的管理员统一添加</p>
	<p>后台管理员列表如下图所示:</p>
    <p><img src="{$asseturl}backend_manager_listinfo.png" /></p>
	<p>管理员添加和编辑如下图所示:</p>
    <p><img src="{$asseturl}backend_manager_add.png" /></p>
	<p>管理员的主要字段介绍</p>
	<p class="subp">
		<b>角色</b> ：每个管理员可以分配一个或多个前面角色列表中的角色，没有分配角色的管理员将不能执行任何后台操作（登录和退出除外），分配了角色的管理员，可以执行所有角色分配到的后台操作。<br>
        <b>密码</b>：第一次添加的管理员的密码为原始密码，必须执行至少一次修改密码操作后，才可以执行其他后台操作。管理员密码可以在后台编辑</br />
        <b>状态</b>：目前，管理员有三种状态，未激活状态，第一次添加后的管理员状态默认为“未激活”，未激活的管理员登陆后，必须执行一次修改密码的操作，才可以执行其他分配到的后台操作；“正常”状态，管理员可以正常登陆，正常执行分配到的后台操作；“锁定”：锁定的管理员无法执行任何后台操作</br />
    </p>
C_END;

$contents[4] = <<<C_END
	<p>规则管理，该功能并没有在现有系统中正式使用，暂时保留该功能，根据后续需要，再考虑是否引入该功能</p>
	<p>针对管理员分配到的权限做更细致的权限分配，如管理员分配到了编辑管理员的操作，但某些管理员，只能编辑自己的信息，而不能编辑其他管理员的信息，这个时候，可以用规则来做更细粒度的权限管理</p>
	<p>后台规则管理列表如下图所示:</p>
    <img src="{$asseturl}backend_rule_list.png" /></p>
	<p>后台规则添加和编辑如下图所示:</p>
    <img src="{$asseturl}backend_rule_add.png" /></p>
C_END;

$datas = [
	1 => [
		'title' => '菜单管理',
		'content' => $contents[1],
	],
	2 => [
		'title' => '角色管理',
		'content' => $contents[2],
	],
	3 => [
		'title' => '管理员管理',
		'content' => $contents[3],
	],
	4 => [
		'title' => '规则管理',
		'content' => $contents[4],
	],
];
echo $this->render('_show', ['datas'  => $datas]);
?>
