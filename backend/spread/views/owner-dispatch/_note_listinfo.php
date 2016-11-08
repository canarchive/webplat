<?php
use yii\helpers\Html;

$modelNew = new \merchant\house\models\MerchantNote();
$tableName = 'merchant_note';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('merchant_id'); ?></th>
            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('reply'); ?></th>
            <th><?= $modelNew->getAttributeLabel('reply_at'); ?></th>
        </tr>
    </thead>
    <tbody id="merchant_note_infos">
        <?php foreach ($noteInfos as $model) { ?>
        <tr>
			<td><?php $merchantName = isset($model->merchantInfo['name']) ? $model->merchantInfo['name'] : ''; echo $merchantName; ?></td>
            <td><?= $model->content . $model->owner_merchant_id; ?></td>
            <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
            <td><?= Html::textarea('reply', $model->reply, ['rows' => 2, 'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'reply', this.value)"]); ?></td>
            <td><?php if ($model->reply_at > 0) { echo date('Y-m-d H:i:s', $model->reply_at); } ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
