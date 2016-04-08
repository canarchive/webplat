<?php
use yii\helpers\Html;

$tableName = 'owner_house';
?>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('address'); ?></th>
            <th><?= $modelNew->getAttributeLabel('house_area'); ?></th>
            <th><?= $modelNew->getAttributeLabel('house_type'); ?></th>
            <th><?= $modelNew->getAttributeLabel('house_sort'); ?></th>
            <th><?= $modelNew->getAttributeLabel('buy_furniture'); ?></th>
            <th><?= $modelNew->getAttributeLabel('buy_building'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="address" id="address" value=""/></td>
            <td><input type="text" name="house_area" id="house_area" value=""/></td>
            <td>
            <?= Html::dropDownList(
                'house_type', 
                '', 
                $modelNew->houseTypeInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'id' => 'house_type',
                ]
            ); ?>
            </td>
            <td>
            <?= Html::dropDownList(
                'house_sort', 
                '', 
                $modelNew->houseSortInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'id' => 'house_sort',
                ]
            ); ?>
            </td>
            <td><?= Html::radioList('buy_furniture', 0, $modelNew->buyFurnitureInfos, ['id' => 'buy_furniture']); ?></td>
            <td><?= Html::radioList('buy_building', 0, $modelNew->buyBuildingInfos, ['id' => 'buy_building']); ?></td>
        </tr>
    </tbody>
</table>
<table class="table table-striped table-bordered responsive">
    <thead>
        <tr>
            <th><?= $modelNew->getAttributeLabel('renovation_at'); ?></th>
            <th><?= $modelNew->getAttributeLabel('renovation_step'); ?></th>
            <th><?= $modelNew->getAttributeLabel('renovation_budget'); ?></th>
            <th><?= $modelNew->getAttributeLabel('renovation_company'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="renovation_at" id="renovation_at" value=""/></td>
            <td>
            <?= Html::dropDownList(
                'renovation_step', 
                '', 
                $modelNew->renovationStepInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'id' => 'renovation_step',
                ]
            ); ?>
            </td>
            <td>
            <?= Html::dropDownList(
                'renovation_budget', 
                '', 
                $modelNew->renovationBudgetInfos, 
                [
                    'prompt' => '全部', 
                    'class' => 'form-control',
                    'id' => 'renovation_budget',
                ]
            ); ?>
            </td>
            <td><?= Html::radioList('renovation_company', 0, $modelNew->renovationCompanyInfos, ['id' => 'renovation_company']); ?></td>
        </tr>
    </tbody>
</table>
<?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addHouseInfo();"]) ?>
