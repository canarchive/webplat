<?php
$citys = [
	'bj',
];
?>
<?php foreach ($cInfos as $cityCode => $cInfo) { if (!in_array($cityCode, $citys)) { continue; } ?>
<div id="w1" class="grid-view">
    <div class="summary"><?= $cInfo . '推广URL汇总'; ?></div>
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
				<td><?php if ($info['pc']) { echo "<a href='{$pcUrl}' target='_blank'>{$pcUrl}</a>"; } ?></td>
				<td><?php if ($info['mobile']) { echo "<a href='{$mobileUrl}' target='_blank'>{$mobileUrl}</a>"; } ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php } ?>
