<?php
use yii\helpers\Html;

$tableName = 'callback';
$modelNew = new \spread\groupon\models\CallbackLog();
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
					<thead>
						<tr>
                            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('updated_at'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
                        </tr>
                    </thead>
					<tbody id="callback_infos">
                    <?php foreach ($callbackLogInfos as $model) { ?>
						<tr>
							<td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
							<td><?= date('Y-m-d H:i:s', $model->updated_at); ?></td>
							<td><?= $model->content; ?></td>
                            <td><?= Html::textarea('note', $model->note, ['row' => 2, 'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'note', this.value)"]); ?></td>
						</tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
					<thead>
						<tr>
                            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('note'); ?></th>
                        </tr>
                    </thead>
					<tbody>
						<tr>
					        <td><?= Html::textarea('content', '', ['id' => 'callback_content', 'row' => 2]); ?></td>
					        <td><?= Html::textarea('note', '', ['id' => 'callback_note', 'row' => 2]); ?></td>
						</tr>
                    </tbody>
                </table>
                <?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addCallback();"]) ?>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<script>
function addCallback()
{
	var content = $("#callback_content").val();
	if (!content) {
		alert('<?= $modelNew->getAttributeLabel('content'); ?>内容不能为空');
		return false;
	}
	var data = {
	    'mobile': '<?= $modelOwner->mobile; ?>',
	    'operation': 'add',
		'table': '<?= $tableName; ?>',
	    'content': content,
		'note': $("#callback_note").val()
	};

	addElemForOwner(data);
}
</script>
