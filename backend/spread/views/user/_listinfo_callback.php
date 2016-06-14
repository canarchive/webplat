<?php
$modelNew = new \spread\models\Callback();
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
                    <?php foreach ($callbackInfos as $model) { ?>
						<tr>
							<td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
							<td><?= date('Y-m-d H:i:s', $model->updated_at); ?></td>
							<td><?= $model->content; ?></td>
							<td><?= $model->note; ?></td>
						</tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
