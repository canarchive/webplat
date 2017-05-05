<?php
$days = $grouponInfo['days'];
$days = count($days) > 1 ? array_merge($days, [count($days) . '天汇总']) : $days;
$daysCount = count($days) == 1 ? 1 : count($days) + 1;
$infos = [];
foreach ($datas as $data) {
	$bigSort = $data['business_sort_big'];
	$name = $data['business_name'];
	$info = isset($infos[$bigSort][$name]) ? $infos[$bigSort][$name] : [
		'business_big_sort' => $bigSort, 
		'business_sort' => $data['business_sort'], 
		'business_name' => $name, 
		'totalCount' => $data['totalCount'], 
		'totalMoney' => $data['totalMoney'],
	];
	$day = $data['created_day'];
	$info[$day . 'Count'] = $data['count'];
	$info[$day . 'Money'] = $data['money'];

	$infos[$bigSort][$name] = $info;
}
$bgColors = [
	1 => '#8db4e2',
	2 => '#d8e4bc',
	3 => '#FF6600',
	4 => '#d8e4bc',
	5 => '#FF6600',
];
//print_r($infos);exit();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style type="text/css">
*{ -webkit-tap-highlight-color: rgba(0,0,0,0);-webkit-tap-highlight-color: transparent; /* For some Androids */ }
body {
	background:#f7f7f7
}
.break-word {
	white-space:normal;
	word-wrap:break-word;
	word-break:break-all
}
ol, ul, li {
	list-style: none;
}
.nowrap {
	white-space:nowrap
}
.normal {
	white-space:normal
}

.db_tongji { width:95%; margin:0 auto; padding-bottom:80px;}
.db_tongji table {border-top:#CCC solid 1px; border-right:#CCC solid 1px;}
.db_tongji table td { border-bottom:#CCC solid 1px; border-left:#CCC solid 1px; padding:8px 5px; text-align:center; font-size:12px;}
.db_tongji h1 { font-size:14px; text-align:center}


</style>
<body>
<?php $sumInfosAll = []; $k = 1; foreach ($infos as $bigSort => $values) { ?>
<div class="db_tongji">
<h1><?= $grouponInfo['groupon_name'] . '-' . $bigSort . '-'; ?>订单收款统计表</h1>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" bgcolor="#ffff00"><strong><?= $bigSort; ?></strong></td>
    <?php $i = 1; foreach ($days as $currentDay) { ?>
	<td colspan="2" bgcolor="<?= $bgColors[$i]; ?>"><strong><?= $currentDay; ?></strong></td>
	<?php $i++; } ?>
  </tr>
  <tr>
    <td width="30" bgcolor="#ffff00"><strong>序号</strong></td>
    <td bgcolor="#ffff00"><strong>项目</strong></td>
    <td bgcolor="#ffff00"><strong>品类</strong></td>
    <td bgcolor="#ffff00"><strong>商家名称</strong></td>
    <?php $i = 1; foreach ($days as $currentDay) { ?>
	<td bgcolor="<?= $bgColors[$i]; ?>"><strong>签单数</strong></td>
	<td bgcolor="<?= $bgColors[$i]; ?>"><strong>实际收到订金</strong></td>
	<?php $i++; } ?>
  </tr>
  <?php $j = 1; $sumInfos = []; foreach ($values as $value) { ?>
  <tr>
    <td width="30"><?= $j; ?></td>
	<td><?= $bigSort; ?></td>
	<td><?= $value['business_sort']; ?></td>
	<td><?= $value['business_name']; ?></td>
    <?php $i = 1; foreach ($days as $currentDay) { $key = strpos($currentDay, '汇总') !== false ? 'total' : str_replace('-', '', $currentDay);?>
	<td><?php $countValue = isset($value[$key . 'Count']) ? $value[$key . 'Count'] : 0; echo $countValue; $sumInfos[$key . 'CountSum'] = isset($sumInfos[$key . 'CountSum']) ? $sumInfos[$key . 'CountSum'] + $countValue : $countValue; $sumInfosAll[$key . 'CountSum'] = isset($sumInfosAll[$key . 'CountSum']) ? $sumInfosAll[$key . 'CountSum'] + $countValue : $countValue; ?></td>
	<td><?php $moneyValue = isset($value[$key . 'Money']) ? $value[$key . 'Money'] : 0; echo $moneyValue; $sumInfos[$key . 'MoneySum'] = isset($sumInfos[$key . 'MoneySum']) ? $sumInfos[$key . 'MoneySum'] + $moneyValue : $moneyValue; $sumInfosAll[$key . 'MoneySum'] = isset($sumInfosAll[$key . 'MoneySum']) ? $sumInfosAll[$key . 'MoneySum'] + $moneyValue : $moneyValue; ?></td>
    <?php } ?>
  </tr>
  <?php $j++; } ?>
  <tr>
    <td bgcolor="#ffff00"><strong><?= $j; ?></strong></td>
    <td bgcolor="#ffff00"><strong>合计</strong></td>
    <td bgcolor="#ffff00">&nbsp;</td>
    <td bgcolor="#ffff00">&nbsp;</td>
    <?php $i = 1; foreach ($days as $currentDay) { $key = strpos($currentDay, '汇总') !== false ? 'total' : str_replace('-', '', $currentDay);?>
	<td bgcolor="#ffff00"><strong><?= $sumInfos[$key . 'CountSum']; ?></strong></td>
	<td bgcolor="#8fff00"><strong><?= $sumInfos[$key . 'MoneySum']; ?></strong></td>
    <?php } ?>
    </tr>
  <?php if ($k == count($infos)) { ?>
  <tr>
    <td bgcolor="#8db4e2"><strong><?= ++$j; ?></strong></td>
    <td bgcolor="#8db4e2"><strong>累计</strong></td>
    <td bgcolor="#8db4e2">&nbsp;</td>
    <td bgcolor="#8db4e2">&nbsp;</td>
    <?php $i = 1; foreach ($days as $currentDay) { $key = strpos($currentDay, '汇总') !== false ? 'total' : str_replace('-', '', $currentDay);?>
	<td bgcolor="#8db4e2"><strong><?= $sumInfosAll[$key . 'CountSum']; ?></strong></td>
	<td bgcolor="#3db4e2"><strong><?= $sumInfosAll[$key . 'MoneySum']; ?></strong></td>
    <?php } ?>
  </tr>
  <?php } ?>
	
</table>
</div>
<?php $k++; } ?>

</body>
</html>
