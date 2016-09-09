<?php
use yii\helpers\Html;

$modelNew = new \merchant\models\OwnerMerchant();
$tableName = 'owner_merchant';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('status'); ?></th>
            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
        </tr>
    </thead>
    <tbody id="owner_merchant_infos">
        <?php foreach ($ownerHouseInfos as $model) { ?>
        <tr>
			<td><?php $merchantName = isset($model->merchantInfos[$model->merchant_id]) ? $model->merchantInfos[$model->merchant_id] : ''; echo $merchantName; ?></td>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td>
            <?php if ($model->status == 0 && time() - $model->created_at < 600) { echo Html::dropDownList(
                'status', 
                $model->status, 
                $model->statusInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'house_type', this.value)",
                ]
            ); } else { echo $model->statusInfos[$model->status]; } ?>
            </td>
            <td><?= Html::textarea('note', $model->note, ['rows' => 5, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'note', this.value)"]); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
