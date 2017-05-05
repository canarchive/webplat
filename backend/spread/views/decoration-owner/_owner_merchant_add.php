<?php
use yii\helpers\Html;

$tableName = 'owner_house';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('house_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td ><span id="house_show"><span></td>
            <td>
            <?= Html::dropDownList(
                'merchant_id', 
                '', 
                $modelNew->merchantInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'id' => 'merchant_id',
                ]
            ); ?>
            </td>
			<td><?= Html::textarea('note', '', ['id' => 'note', 'rows' => '2', 'cols' => '80']); ?></td>
        </tr>
    </tbody>
</table>
<input type="hidden" name="house_id" id="house_id" />
<?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addMerchantInfo();"]) ?>
