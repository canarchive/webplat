<?php
$fullSuffix = '';
if ($showFull) {
	$fullSuffix = '?';
	foreach ($model->attributeParams as $aInfo) { 
		$fullSuffix .= "&{$aInfo['param']}={$aInfo['default']}";
	}
}
$fullSuffix = str_replace('?&', '?', $fullSuffix);
?>
<?= $this->render('_search', array_merge(['cInfos' => $cInfos, 'hostKeys' => $hostKeys], ['model' => $model])); ?>

<div id="w1" class="grid-view">
    <div class="summary">推广参数列表</div>
    <table class="table table-striped table-bordered">
        <tbody>
			<?php $i= 0; foreach ($model->attributeParams as $field => $paramInfo) { ?>
            <?php if ($i / 3 == 0) { echo '<tr data-key="">'; } ?>
			    <td><?= $paramInfo['param'] . '--' . $paramInfo['default']; ?></td>
            <?php if ($i % 3 == 2) { echo '</tr>'; } ?>
            <?php $i++;} ?>
            <?php if ($i-- % 3 != 2) { echo '</tr>'; } ?>
        </tbody>
    </table>
</div>
<div id="w1" class="grid-view">
    <div class="summary"><?= $cityName . '-推广URL汇总'; ?></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>推广页类型</th>
                <th>PC-URL</th>
                <th>MOBILE-URL</th>
            </tr>
        </thead>
        <tbody>
			<?php foreach ($urlTypes as $type => $info) { $pcUrl = "{$pcDomain}/bm-{$type}-{$cityCode}.html"; $mobileUrl = "{$mobileDomain}/bm-{$type}-{$cityCode}.html"; ?>
            <tr data-key="">
			    <td><?= $info['name']; ?></td>
				<td><?php if ($info['pc']) { echo "<a href='{$pcUrl}' target='_blank'>{$pcUrl}{$fullSuffix}</a>"; } ?></td>
				<td><?php if ($info['mobile']) { echo "<a href='{$mobileUrl}' target='_blank'>{$mobileUrl}{$fullSuffix}</a>"; } ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
