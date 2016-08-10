<?php
use yii\helpers\Html;

$tableName = 'owner_house';
$modelNew = new \spread\groupon\models\OwnerHouse();

?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content" id="owner_house_infos">
                <?php foreach ($ownerHouseInfos as $model) { 
                    echo $this->render('_owner_house', ['model' => $model]);
                } ?>
            </div>
            <div class="box-content">
				<?php echo $this->render('_owner_house_add', ['modelNew' => $modelNew]); ?>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<script>
function addHouseInfo()
{
	var fields = ['address', 'house_area', 'house_sort', 'house_type', 'buy_furniture', 'buy_building', 'renovation_at', 'renovation_step', 'renovation_budget', 'renovation_company'];
	var dataValues = [];
	for (var i = 0; i < fields.length; i++) {
	//for (var field in fields) {
		dataValues[fields[i]] = $("#" + fields[i]).val();
	}
	var data = {
	    'operation': 'add',
		'table': '<?= $tableName; ?>',
	    'mobile': '<?= $modelOwner->mobile; ?>',
		'decoration_id': '<?= empty($modelDecorationOwner) ? 0 : $modelDecorationOwner->decoration_id; ?>'
	};
	for (var field in dataValues) {
		data[field] = dataValues[field];
	}
	console.log(data);
	/*if (!content) {
		alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
		return false;
    }*/

	addElemForOwner(data);
}
</script>
