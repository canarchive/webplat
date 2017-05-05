<?php
use yii\helpers\Html;

$tableName = 'owner_house';
<<<<<<< HEAD
$modelNew = new \spread\groupon\models\OwnerHouse();

=======
$modelNew = new \spread\decoration\models\OwnerHouse();

$tableNameMerchant = 'owner_merchant';
$modelOwnerMerchantNew = new \merchant\house\models\OwnerMerchant();
>>>>>>> web-house
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
<<<<<<< HEAD
            <div class="box-content" id="owner_house_infos">
                <?php foreach ($ownerHouseInfos as $model) { 
                    echo $this->render('_owner_house', ['model' => $model]);
                } ?>
            </div>
            <div class="box-content">
				<?php echo $this->render('_owner_house_add', ['modelNew' => $modelNew]); ?>
=======
		    <div data-original-title="" class="box-header well">
                <h2>添加房屋信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div> 
            <div class="box-content" id="ownerHouseAdd" style="display: none;">
				<?php echo $this->render('_owner_house_add', ['modelNew' => $modelNew]); ?>
            </div>
        </div>
        <div class="box-inner">
		    <div data-original-title="" class="box-header well">
                <h2>房屋信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
            <div class="box-content">
                <?php echo $this->render('_owner_house', ['ownerHouseInfos' => $ownerHouseInfos]); ?>
            </div>
        </div>
        <div class="box-inner" id="sendto_merchant" style="display: none;">
		    <div data-original-title="" class="box-header well">
                <h2>派单</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div> 
            <div class="box-content" id="ownerHouseAdd">
				<?php echo $this->render('_owner_merchant_add', ['modelNew' => $modelOwnerMerchantNew]); ?>
            </div>
        </div>
        <div class="box-inner">
		    <div data-original-title="" class="box-header well">
                <h2>派单信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
            <div class="box-content" id="owner_house_infos">
                <?php echo $this->render('_owner_merchant', ['ownerHouseInfos' => $ownerMerchantInfos]); ?>
>>>>>>> web-house
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<script>
function addHouseInfo()
{
<<<<<<< HEAD
	var fields = ['address', 'house_area', 'house_sort', 'house_type', 'buy_furniture', 'buy_building', 'renovation_at', 'renovation_step', 'renovation_budget', 'renovation_company'];
=======
	var fields = ['address', 'house_area', 'house_sort', 'house_type', 'renovation_at', 'renovation_budget'];
>>>>>>> web-house
	var dataValues = [];
	for (var i = 0; i < fields.length; i++) {
	//for (var field in fields) {
		dataValues[fields[i]] = $("#" + fields[i]).val();
	}
	var data = {
	    'operation': 'add',
		'table': '<?= $tableName; ?>',
	    'mobile': '<?= $modelOwner->mobile; ?>',
<<<<<<< HEAD
		'decoration_id': '<?= empty($modelDecorationOwner) ? 0 : $modelDecorationOwner->decoration_id; ?>'
=======
		'service_id': <?= $modelOwner->service_id; ?>
	};
	for (var field in dataValues) {
		data[field] = dataValues[field];
	}
	console.log(data);
	/*if (!content) {
		alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
		return false;
    }*/

	addElemForUser(data);
}

function addMerchantInfo()
{
	var fields = ['house_id', 'note', 'merchant_id'];
	var dataValues = [];
	for (var i = 0; i < fields.length; i++) {
	//for (var field in fields) {
		dataValues[fields[i]] = $("#" + fields[i]).val();
	}
	var data = {
	    'operation': 'add',
		'table': '<?= $tableNameMerchant; ?>',
		'service_id': <?= $modelOwner->service_id; ?>,
		'city_code': '<?= $modelOwner->city_code; ?>',
	    'mobile': '<?= $modelOwner->mobile; ?>'
>>>>>>> web-house
	};
	for (var field in dataValues) {
		data[field] = dataValues[field];
	}
	console.log(data);
	/*if (!content) {
		alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
		return false;
    }*/

<<<<<<< HEAD
	addElemForOwner(data);
=======
	addElemForUser(data);
>>>>>>> web-house
}
</script>
