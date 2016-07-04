<?php
use yii\helpers\Url;

$modelNew = new \spread\shoot\models\ActivityUser();
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
					<thead>
						<tr>
                            <th><?= $modelNew->getAttributeLabel('name'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('mobile'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('signup_at'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('signup_channel'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('signup_city'); ?></th>
                            <th><?= $modelNew->getAttributeLabel('keyword'); ?></th>
                            <th>详情</th>
                        </tr>
                    </thead>
					<tbody id="activity_user_infos">
                    <?php foreach ($activityUserInfos as $model) { ?>
						<tr>
							<td><?= $model->name; ?></td>
							<td><?= $model->mobile; ?></td>
							<td><?= date('Y-m-d H:i:s', $model->signup_at); ?></td>
							<td><?= $model->signup_channel; ?></td>
							<td><?= $model->signup_city; ?></td>
							<td><?= $model->keyword; ?></td>
							<td><?php $viewUrl = Url::to(['activity-user/view', 'id' => $model->id]); echo "<a href='{$viewUrl}' target='_blank'>详情</a>"; ?></td>
						</tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
