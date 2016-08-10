<?php
use yii\helpers\Html;

$tableName = 'owner';
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $modelOwner->getAttributeLabel('sort'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('name'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('gender'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('birthday'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('telphone'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('email'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('qq'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>
    					<?= Html::dropDownList(
    						"sort", 
    						$modelOwner->sort, 
    						$modelOwner->sortInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
								'onchange' => "updateElemForOwner('{$tableName}', {$modelOwner->id}, 'sort', this.value)",
    						]
    					); ?>
						<td><input type="text" value="<?= $modelOwner->name; ?>" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $modelOwner->id; ?>, 'name', this.value);"/></td>
						<td>
                        <?= Html::radioList('gender', $modelOwner->gender, $modelOwner->genderInfos, ['onchange' => "updateElemForOwner('{$tableName}', {$modelOwner->id}, 'gender', $('input[name=\"gender\"]:checked').val())"]); ?>
						</td>
						<td><input type="text" value="<?= $modelOwner->birthday; ?>" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $modelOwner->id; ?>, 'birthday', this.value);"/></td>
						<td><input type="text" value="<?= $modelOwner->telphone; ?>" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $modelOwner->id; ?>, 'telphone', this.value);"/></td>
						<td><input type="text" value="<?= $modelOwner->email; ?>" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $modelOwner->id; ?>, 'email', this.value);"/></td>
						<td><input type="text" value="<?= $modelOwner->qq; ?>" onblur="updateElemForOwner('<?= $tableName; ?>', <?= $modelOwner->id; ?>, 'qq', this.value);"/></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $modelOwner->getAttributeLabel('service_id'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('signup_num'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('signin_num'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('order_num'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('created_at'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('updated_at'); ?></th>
					    <th><?= $modelOwner->getAttributeLabel('description'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $modelOwner->service_id; ?></td>
					    <td><?= $modelOwner->signup_num; ?></td>
					    <td><?= $modelOwner->signin_num; ?></td>
					    <td><?= $modelOwner->order_num; ?></td>
					    <td><?= date('Y-m-d H:i:s', $modelOwner->created_at); ?></td>
					    <td><?= date('Y-m-d H:i:s', $modelOwner->updated_at); ?></td>
					    <td><?= $modelOwner->description; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
