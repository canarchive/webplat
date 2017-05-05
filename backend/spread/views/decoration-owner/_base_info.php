<?php
use yii\helpers\Html;

<<<<<<< HEAD
$tableName = 'decoration_owner';
=======
$model->callback_again = $model->callback_again > 0 ? $model->callback_again : time();
$tableName = 'activity_user';
>>>>>>> web-house
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
<<<<<<< HEAD
=======
		    <div data-original-title="" class="box-header well">
                <h2>业主报名信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
>>>>>>> web-house
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->getAttributeLabel('mobile'); ?></th>
					    <th><?= $model->getAttributeLabel('name'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_at'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_city'); ?></th>
<<<<<<< HEAD
					    <th><?= $model->getAttributeLabel('signup_channel'); ?></th>
					    <th><?= $model->getAttributeLabel('signin_at'); ?></th>
=======
					    <th><?= $model->getAttributeLabel('channel'); ?></th>
					    <th><?= $model->getAttributeLabel('signup_num'); ?></th>
>>>>>>> web-house
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $model->mobile; ?></td>
<<<<<<< HEAD
						<td><input type="text" name="name" value="<?= $model->name; ?>" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'name', this.value);"/></td>
					    <td><?= date('Y-m-d H:i:s', $model->signup_at); ?></td>
					    <td><?= $model->signup_city; ?></td>
					    <td><?= $model->signup_channel; ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->signin_at); ?></td>
=======
						<td><input type="text" name="name" value="<?= $model->name; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'name', this.value);"/></td>
					    <td><?= date('Y-m-d H:i:s', $model->signup_at); ?></td>
					    <td><?= $model->signup_city; ?></td>
					    <td><?= $model->channel; ?></td>
					    <td><?= $model->signup_num; ?></td>
>>>>>>> web-house
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
<<<<<<< HEAD
						<th><?= $model->getAttributeLabel('valid_status'); ?></th>
					    <th><?= $model->getAttributeLabel('callback_at'); ?></th>
					    <th><?= $model->getAttributeLabel('callback_again'); ?></th>
					    <th><?= $model->getAttributeLabel('keyword'); ?></th>
=======
						<th><?= $model->getAttributeLabel('invalid_status'); ?></th>
					    <th><?= $model->getAttributeLabel('status'); ?></th>
					    <th><?= $model->getAttributeLabel('callback_again'); ?></th>
					    <th><?= $model->getAttributeLabel('keyword'); ?></th>
					    <th><?= $model->getAttributeLabel('keyword_search'); ?></th>
>>>>>>> web-house
					    <th><?= $model->getAttributeLabel('note'); ?></th>
					    <th><?= $model->getAttributeLabel('message'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>
<<<<<<< HEAD
						其他原因：<input type="text" name="valid_status" value="" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'valid_status', this.value);"/>
    					<?= Html::dropDownList(
    						"valid_status", 
    						$model->valid_status, 
    						$model->validStatusInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'valid_status', this.value)",
=======
    					<?= Html::dropDownList(
    						"invalid_status", 
    						$model->invalid_status, 
    						$model->invalidStatusInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'invalid_status', this.value)",
>>>>>>> web-house
    						]
    					); ?>
                        </td>
					    <td>
<<<<<<< HEAD
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
=======
    					<?= Html::dropDownList(
    						"status", 
    						$model->status, 
    						$model->statusInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'status', this.value)",
    						]
    					); ?>
                        </td>
					    <td>
                        <input type="hidden" id="callback_again_old" value="<?= date('Y-m-d H:i:s', $model->callback_again); ?>" />
						<input class="form-control" type="text" id="callback_again" onblur="changeDate('<?= $tableName; ?>', <?= $model->id; ?>, 'callback_again', this.value)" value="<?= date('Y-m-d H:i:s', $model->callback_again); ?>">
                    <script type="text/javascript">
                        $(function () {
                            $('#callback_again').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
							//$('#callback_again').onchange = function () { alert('ss'); }
                        });
                    </script>
                        </td>
					    <td><?= $model->keyword; ?></td>
					    <td><?= $model->keyword_search; ?></td>
>>>>>>> web-house
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
