<?php
use yii\helpers\Html;

$tableName = 'owner_house';
?>
        <tr>
            <td><input type="text" name="address" value="<?= $model->address; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'address', this.value)"/></td>
            <td><input type="text" name="house_area" value="<?= $model->house_area; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'house_area', this.value)"/></td>
            <td><input type="text" name="renovation_budget" value="<?= $model->renovation_budget; ?>" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'renovation_budget', this.value)"/></td>
            <td>
            <?= Html::dropDownList(
                'house_type', 
                $model->house_type, 
                $model->houseTypeInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'house_type', this.value)",
                ]
            ); ?>
            </td>
            <td>
            <?= Html::dropDownList(
                'house_sort', 
                $model->house_sort, 
                $model->houseSortInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForUser('{$tableName}', {$model->id}, 'house_sort', this.value)",
                ]
            ); ?>
            </td>
			<td><a href="javascript: void(0);" onclick="$('#house_id').val(<?= $model->id; ?>); $('#house_show').html('<?= $model->address; ?>'); $('#sendto_merchant').show();">派单</a></td>
        </tr>
