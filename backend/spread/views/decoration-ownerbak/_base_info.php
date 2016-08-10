<?php
use yii\helpers\Html;

$tableName = 'decoration_owner';
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->getAttributeLabel('mobile'); ?></th>
					    <th><?= $model->getAttributeLabel('name'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_at'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_city'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_channel'); ?></th>
					    <th><?= $model->getAttributeLabel('signin_at'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $model->mobile; ?></td>
						<td><input type="text" name="name" value="<?= $model->name; ?>" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'name', this.value);"/></td>
					    <td><?= date('Y-m-d H:i:s', $model->signup_at); ?></td>
					    <td><?= $model->signup_city; ?></td>
					    <td><?= $model->signup_channel; ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->signin_at); ?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
						<th><?= $model->getAttributeLabel('valid_status'); ?></th>
					    <th><?= $model->getAttributeLabel('callback_at'); ?></th>
					    <th><?= $model->getAttributeLabel('callback_again'); ?></th>
					    <th><?= $model->getAttributeLabel('keyword'); ?></th>
					    <th><?= $model->getAttributeLabel('note'); ?></th>
					    <th><?= $model->getAttributeLabel('message'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>
						其他原因：<input type="text" name="valid_status" value="" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'valid_status', this.value);"/>
    					<?= Html::dropDownList(
    						"valid_status", 
    						$model->valid_status, 
    						$model->validStatusInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'valid_status', this.value)",
    						]
    					); ?>
                        </td>
					    <td>
                        <?php if ($model->callback_at > 0) { echo Yii::$app->Formatter->asRelativeTime($model->callback_at, $model->signup_at); } else { echo Html::radio('callback_at', false, ['label' => '标识为已回访', 'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'callback_at', this.value)"]); } ?>
					    <td>
    					<?= Html::dropDownList(
    						"callback_again", 
    						$model->callback_again, 
    						$model->callbackAgainInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'callback_again', this.value)",
    						]
    					); ?>
                        </td>
					    <td><?= $model->keyword; ?></td>
					    <td><?= $model->note; ?></td>
					    <td><?= $model->message; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
