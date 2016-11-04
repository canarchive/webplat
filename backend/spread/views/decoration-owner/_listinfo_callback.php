<?php
use yii\helpers\Html;

$tableName = 'callback';
$modelNew = new \spread\models\Callback();
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
					<thead>
						<tr>
                            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
                        </tr>
                    </thead>
					<tbody>
						<tr>
					        <td><?= Html::textarea('content', '', ['id' => 'callback_content', 'rows' => '5', 'cols' => '150']); ?></td>
						</tr>
                    </tbody>
                </table>
                <?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addCallback();"]) ?>
            </div>
		    <div data-original-title="" class="box-header well">
                <h2>回访日志信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
					<thead>
						<tr>
                            <th><?= $modelNew->getAttributeLabel('content'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('created_at'); ?></th>
                        </tr>
                    </thead>
					<tbody id="callback_infos">
                    <?php foreach ($callbackInfos as $model) { ?>
						<tr>
							<td><?= $model->content; ?></td>
							<td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
						</tr>
                    <?php } ?>
                    </tbody>
                </table>
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
		'service_id': <?= $modelOwner->service_id; ?>,
	    'operation': 'add',
		'table': '<?= $tableName; ?>',
	    'content': content,
		'note': $("#callback_note").val()
	};

	addElemForUser(data);
}
</script>
