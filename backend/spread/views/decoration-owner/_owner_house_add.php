<?php
use yii\helpers\Html;

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
        <tr>
            <td><input type="text" name="address" id="address" value=""/></td>
            <td><input type="text" name="house_area" id="house_area" value=""/>平米</td>
            <td><input type="text" name="renovation_budget" id="renovation_budget" value=""/>万元</td>
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
        </tr>
    </tbody>
</table>
<?= Html::submitButton(Yii::t('admin-common', 'Create'), ['class' => 'btn btn-success', 'onclick' => "addHouseInfo();"]) ?>
