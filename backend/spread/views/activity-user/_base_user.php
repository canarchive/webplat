<?php
use yii\helpers\Html;

$tableName = 'user';
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $modelUser->getAttributeLabel('sort'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('name'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('gender'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('birthday'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('telphone'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('email'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('qq'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>
    					<?= Html::dropDownList(
    						"sort", 
    						$modelUser->sort, 
    						$modelUser->sortInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForUser('{$tableName}', {$modelUser->id}, 'sort', this.value)",
    						]
    					); ?>
						<td><input type="text" value="<?= $modelUser->name; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $modelUser->id; ?>, 'name', this.value);"/></td>
						<td>
                        <?= Html::radioList('gender', $modelUser->gender, $modelUser->genderInfos, ['onchange' => "updateElemForUser('{$tableName}', {$modelUser->id}, 'gender', $('input[name=\"gender\"]:checked').val())"]); ?>
						</td>
						<td><input type="text" value="<?= $modelUser->birthday; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $modelUser->id; ?>, 'birthday', this.value);"/></td>
						<td><input type="text" value="<?= $modelUser->telphone; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $modelUser->id; ?>, 'telphone', this.value);"/></td>
						<td><input type="text" value="<?= $modelUser->email; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $modelUser->id; ?>, 'email', this.value);"/></td>
						<td><input type="text" value="<?= $modelUser->qq; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $modelUser->id; ?>, 'qq', this.value);"/></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $modelUser->getAttributeLabel('service_id'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('signup_num'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('signin_num'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('order_num'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('created_at'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('updated_at'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('description'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $modelUser->service_id; ?></td>
					    <td><?= $modelUser->signup_num; ?></td>
					    <td><?= $modelUser->signin_num; ?></td>
					    <td><?= $modelUser->order_num; ?></td>
					    <td><?= date('Y-m-d H:i:s', $modelUser->created_at); ?></td>
					    <td><?= date('Y-m-d H:i:s', $modelUser->updated_at); ?></td>
					    <td><?= $modelUser->description; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
