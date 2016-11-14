<?php
use yii\helpers\Html;

$tableNote = 'merchant_note';
$modelNote = new \merchant\house\models\MerchantNote();
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		    <div data-original-title="" class="box-header well">
                <h2>派单信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
            <div class="box-content" id="owner_house_infos">
                <?php echo $this->render('_dispatch_listinfo', ['ownerMerchantInfos' => $ownerMerchantInfos]); ?>
            </div>
        </div>
        <div class="box-inner" id="add_note" style="display: none;">
		    <div data-original-title="" class="box-header well">
                <h2>添加备注</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div> 
            <div class="box-content" id="ownerHouseAdd">
				<?php echo $this->render('_note_add', ['modelNew' => $modelNote]); ?>
            </div>
        </div>
        <div class="box-inner">
		    <div data-original-title="" class="box-header well">
                <h2>备注信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
            <div class="box-content" >
                <?php echo $this->render('_note_listinfo', ['noteInfos' => $noteInfos]); ?>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<script>
function addNote()
{
	var fields = ['owner_merchant_id', 'reply'];
	var dataValues = [];
	for (var i = 0; i < fields.length; i++) {
		dataValues[fields[i]] = $("#" + fields[i]).val();
	}
	var data = {
	    'operation': 'add',
		'table': '<?= $tableNote; ?>',
        'merchantName': $('#note_merchant_name').text()
	};
	for (var field in dataValues) {
		data[field] = dataValues[field];
	}

	addElemForUser(data);
}
</script>
