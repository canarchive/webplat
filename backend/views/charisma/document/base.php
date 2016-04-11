<?php
$baseDomain = 'alyee.com';
$domains = [
	'yii2.website' => '商城',
	'yii2.passport' => '用户中心',
	'yii2.paytrade' => '充值和交易',
	'yii2.admin' => '后台',
	'yii2.app' => 'APP',
	'asset' => '静态资源域名',
	'upload' => '附件域名',
];

$domainContent = $domainContentTest = '';
foreach ($domains as $k => $v) {
	$domainContent .= "<tr><td>{$v}</td><td>{$k}</td><td><a href='http://{$k}.{$baseDomain}' target='_blank'>http://{$k}.{$baseDomain}</a></td><td>test.{$k}</td><td><a href='http://test.{$k}.{$baseDomain}' target='_blank'>http://test.{$k}.{$baseDomain}</a></td></tr>";
}

$contents[1] = <<<C_END
	<p>平台概述：</p>
	<ul>
		<li><span>打造一个建材、家居电商平台</span></li>
		<li><span>平台上的商品来源于跟平台合作的商家</span></li>
		<li><span>平台为线下团购会提供线上业务支持</span></li>
	</ul>
C_END;

$contents[2] = <<<C_END
	<p>域名及域名对应的url：</p>
    <table class="xwtable">
        <thead>
        <tr><td>描述</td><td>域名</td><td>URL</td><td>测试域名</td><td>测试URL</td></tr>
        </thead>
        <tbody>{$domainContent}</tbody>
    </table>
	<p>测试域名的使用：</p>
	<p class="subp">
		<b>1</b> ： 整个平台在线上部署成两套系统。一个是线上的正式系统，另一个跟线上几乎保持同步的测试系统。两者的数据会定期同步。<br>
		<b>2</b> ： 后台管理员账号，线上和测试的保持同步，即同样的账号密码可以登录测试系统和线上系统，但修改密码只对当前系统有效，如在测试系统上修改了密码，则这个新密码不适用与线上系统。<br>
		<b>3</b> ： 测试系统和线上系统完全隔离，两者之间不会互相影响，操作和页面也只在当前环境下生效。<br>
	</p>
	<p>测试系统的使用场景：</p>
	<p class="subp">
		<b>1</b> ： 新功能正式发布之前，会部署到测试系统，此时应在测试系统下测试通过之后，新功能才会部署到线上环境。<br>
		<b>2</b> ： 当对后台某个操作还不明确时，应现在测试系统下研究一下该操作，操作熟练之后再在线上系统操作。<br>
	</p>


C_END;

$datas = [
	1 => [
		'title' => '概述',
		'content' => $contents[1],
	],
	2 => [
		'title' => '域名和基本的URL',
		'content' => $contents[2],
	],
];
$style = <<<STYLE
<style type="text/css">
<!--
/************ Table ************/
.xwtable {width: 100%;border-collapse: collapse;border: 1px solid #ccc;}                
.xwtable thead td {font-size: 12px;color: #333333;text-align: center;background:  repeat-x top center;border: 1px solid #ccc; font-weight:bold;}
.xwtable tbody tr {background: #fff;font-size: 12px;color: #666666;}           
.xwtable tbody tr.alt-row {background: #f2f7fc;}               
.xwtable td{line-height:20px;text-align: left;padding:4px 10px 3px 10px;height: 18px;border: 1px solid #ccc;}
-->
</style>
STYLE;
echo $this->render('_show', ['datas'  => $datas, 'style' => $style]);
?>
