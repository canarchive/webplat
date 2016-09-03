<?php
use yii\helpers\Html;

$modelNew = new \spread\decoration\models\OwnerHouse();
$tableName = 'owner_house';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('address'); ?></th>
            <th><?= $modelNew->getAttributeLabel('house_area'); ?></th>
            <th><?= $modelNew->getAttributeLabel('renovation_budget'); ?></th>
            <th><?= $modelNew->getAttributeLabel('house_type'); ?></th>
            <th><?= $modelNew->getAttributeLabel('house_sort'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ownerHouseInfos as $model) { ?>
        <tr>
            <td><input type="text" name="address" value="<?= $model->address; ?>" onchange="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'address', this.value)"/></td>
            <td><input type="text" name="house_area" value="<?= $model->house_area; ?>" onchange="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'house_area', this.value)"/>平米</td>
            <td><input type="text" name="renovation_budget" value="<?= $model->renovation_budget; ?>" onchange="updateElemForOwner('<?= $tableName; ?>', <?= $model->id; ?>, 'renovation_budget', this.value)"/>万元</td>
            <td>
            <?= Html::dropDownList(
                'house_type', 
                $model->house_type, 
                $model->houseTypeInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'house_type', this.value)",
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
                    'onchange' => "updateElemForOwner('{$tableName}', {$model->id}, 'house_sort', this.value)",
                ]
            ); ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
