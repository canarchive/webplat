<?php
$controller = $this->context;
$currentMenuUrl = $controller->menuInfos['currentMenu']['url'];
$types = ['total' => '汇总', 'day' => '每日统计', 'groupon' => '团购会统计', 'day_groupon' => '团购会每日统计'];
?>
<div>
    <ul class="breadcrumb">
        <?php foreach ($types as $type => $typeName) { ?>
		<li><a href='<?= $currentMenuUrl . '?type=' . $type; ?>' <?php if ($type == $currentType) { echo 'style="color:#009900;"'; } ?>><?= $typeName; ?></a></li>
        <?php } ?>
    </ul>
</div>
<div class="row">
    <?php if (!empty($datas['record'])) { ?>
    <div class="box col-md-6">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>访问记录统计</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
						<?php foreach ($fields as $field) { ?>
						<th><?= $field; ?></th>
                        <?php } ?>
                    </tr>
                    </thead>
                    <tbody id="recordContent">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if (!empty($datas['success'])) { ?>
    <div class="box col-md-6">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2>报名信息统计</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
						<?php foreach ($fields as $field) { ?>
						<th><?= $field; ?></th>
                        <?php } ?>
                    </tr>
                    </thead>
                    <tbody id="successContent">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<script>
var recordJson = <?= json_encode($datas['record']); ?>;
var successJson = <?= json_encode($datas['success']); ?>;
function showInfo(type, page)
{
    if (type == 'record') {
	    infos = recordJson;
	} else {
	    infos = successJson;
	}	
	//console.log(infos);
	var htmlContent = '';
	var i = 0;
	$.each(infos, function(n, value) {
	    if ((i >= (page - 1) * 100) && (i < (page * 100))) {
		    htmlContent += infoContent(value);
		}
		i++;
	});
	//alert(htmlContent);

	$('#' + type + 'Content').html(htmlContent);
}

var fieldsJson = <?= json_encode($fields); ?>;
function infoContent(value)
{
    var content = '<tr>';
	$.each(fieldsJson, function(n, field) {
		//alert(eval("value." + field));
		content += '<td>' + eval("value." + field) + '</td>';
	});
	content += '</tr>';
    return content;
}

<?php if (!empty($datas['record'])) { ?>
showInfo('record', 1);
<?php } ?>
<?php if (!empty($datas['success'])) { ?>
showInfo('success', 1);
<?php } ?>

</script>
